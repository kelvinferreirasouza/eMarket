<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client as Guzzle;
use Illuminate\Support\Facades\Auth;

class PagSeguro extends Model {

    use PagSeguroTrait;

    protected $reference, $user;
    // protected para que este atributo possa ser acessado na trait
    protected $currency = 'BRL';

    public function __construct() {
        $this->reference = uniqid(date('YmdHis'));
        $this->user = Auth::guard('clientes')->user();
    }

    public function getSessionId() {
        $params = [
            'email' => config('pagseguro.emailProduction'),
            'token' => config('pagseguro.tokenProduction'),
        ];
        
        $params = http_build_query($params);

        $guzzle = new Guzzle;
        $response = $guzzle->request('POST', config('pagseguro.url_transparent_session'), [
            'query' => $params,
        ]);
        $body = $response->getBody();
        $contents = $body->getContents();

        $xml = simplexml_load_string($contents);

        return $xml->id;
    }
    
    public function getSessionIdCard() {
        $params = [
            'email' => config('pagseguro.emailSandBox'),
            'token' => config('pagseguro.tokenSandBox'),
        ];
        $params = http_build_query($params);

        $guzzle = new Guzzle;
        $response = $guzzle->request('POST', config('pagseguro.url_transparent_session_sandbox'), [
            'query' => $params,
        ]);
        $body = $response->getBody();
        $contents = $body->getContents();

        $xml = simplexml_load_string($contents);

        return $xml->id;
    }

    public function paymentBillet($sendHash, $idPedido, $valor_frete) {
        $params = [
            'senderHash' => $sendHash,
            'paymentMode' => 'default',
            'paymentMethod' => 'boleto',
            'currency' => $this->currency,
            'reference' => $this->reference,
            'shippingCost' => $valor_frete,
        ];
        // realiza um merge e adiciona dinamicamente as informacoes da trait no array de params
        $params = array_merge($params, $this->getConfigsProduction());
        $params = array_merge($params, $this->getItems());
        $params = array_merge($params, $this->getSender());
        $params = array_merge($params, $this->getShipping());

        $guzzle = new Guzzle;
        $response = $guzzle->request('POST', config('pagseguro.url_payment_transparent'), [
            'form_params' => $params,
        ]);
        $body = $response->getBody();
        $contents = $body->getContents();

        $xml = simplexml_load_string($contents);

        return [
            'success' => true,
            'payment_link' => (string) $xml->paymentLink,
            'reference' => $this->reference,
            'code' => (string) $xml->code,
            'id' => $idPedido,
            'frete' => $valor_frete,
        ];
    }

    public function paymentCredCard($sendHash, $cardToken, $totalCarrinho, $idPedido, $valor_frete) {
        
        $totalPedido = $totalCarrinho + $valor_frete;
        
        $params = [
            'senderHash' => $sendHash,
            'paymentMode' => 'default',
            'paymentMethod' => 'creditCard',
            'currency' => $this->currency,
            'reference' => $this->reference,
            'creditCardToken'               => $cardToken,
            'installmentQuantity'           => '1',
            'installmentValue'              => $totalPedido,
            'noInterestInstallmentQuantity' => '2',
            'shippingCost' => $valor_frete,
        ];

        // realiza um merge e adiciona dinamicamente as informacoes da trait no array de params
        $params = array_merge($params, $this->getConfigsSandBox());
        $params = array_merge($params, $this->getItems());
        $params = array_merge($params, $this->getSender());
        $params = array_merge($params, $this->getShipping());
        $params = array_merge($params, $this->getCreditCardHolder());
        $params = array_merge($params, $this->getBilling());

        $guzzle = new Guzzle;
        $response = $guzzle->request('POST', config('pagseguro.url_payment_transparent_sandbox'), [
            'form_params' => $params,
        ]);
        $body = $response->getBody();
        $contents = $body->getContents();

        $xml = simplexml_load_string($contents);

        return [
            'success' => true,
            'reference' => $this->reference,
            'code' => (string) $xml->code,
            'id' => $idPedido,
            'frete' => $valor_frete,
        ];
    }
    
    public function getStatusTransaction($notificationCode){
        
        $configs = $this->getConfigsSandBox();
        $params = http_build_query($configs);
        
        $guzzle = new Guzzle;
        $response = $guzzle->request('GET', config('pagseguro.url_notification_sandbox')."/{$notificationCode}", [
            'query' => $params,
        ]);
        $body = $response->getBody();
        $contents = $body->getContents();

        $xml = simplexml_load_string($contents);
        
        return [
            'status'    => (string) $xml->status,
            'reference' => (string) $xml->reference,
        ];
        
    }

}
