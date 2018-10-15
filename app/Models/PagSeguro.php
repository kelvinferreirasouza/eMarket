<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client as Guzzle;
use Illuminate\Support\Facades\Auth;

class PagSeguro extends Model
{
    use PagSeguroTrait;
    
    protected $reference, $user;
    // protected para que este atributo possa ser acessado na trait
    protected $currency = 'BRL'; 


    public function __construct() 
    {
        $this->reference = uniqid(date('YmdHis'));
        $this->user = Auth::guard('clientes')->user();
    }

    public function getSessionId()
    {
        $params = $this->getConfigs();
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


    public function paymentBillet($sendHash)
    {
        $params = [
            'senderHash' => $sendHash,
            'paymentMode' => 'default',
            'paymentMethod' => 'boleto',
            'currency' => $this->currency,
            'reference' => $this->reference,
        ];
        
        // realiza um merge e adiciona dinamicamente as informacoes da trait no array de params
        $params = array_merge($params, $this->getConfigs());
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
            'success'      => true,
            'payment_link' => (string)$xml->paymentLink,
            'reference'   => $this->reference,
            'code'       => (string)$xml->code,
        ];
    }
    
    public function paymentCredCard($request)
    {
        $params = [
            'email' => config('pagseguro.email'),
            'token' => '92849AD4D32A4560B208A3DEBBE8CFFD',
            'senderHash' => $request->senderHash,
            'paymentMode' => 'default',
            'paymentMethod' => 'creditCard',
            'currency' => 'BRL',
            'itemId1' => '0001',
            'itemDescription1' => 'Produto PagSeguroI',
            'itemAmount1' => '10.00',
            'itemQuantity1' => '1',
            'itemWeight1' => '1000',
            'itemId2' => '0002',
            'itemDescription2' => 'Produto PagSeguroII',
            'itemAmount2' => '10.00',
            'itemQuantity2' => '1',
            'itemWeight2' => '750',
            'reference' => 'REF1234',
            'senderName' => 'Jose Comprador',
            'senderAreaCode' => '99',
            'senderPhone' => '99999999',
            'senderEmail' => 'c39356058805329727941@sandbox.pagseguro.com.br',
            'senderCPF' => '54793120652',
            'shippingType' => '1',
            'shippingAddressStreet' => 'Av. PagSeguro',
            'shippingAddressNumber' => '9999',
            'shippingAddressComplement' => '99o andar',
            'shippingAddressDistrict' => 'Jardim Internet',
            'shippingAddressPostalCode' => '99999999',
            'shippingAddressCity' => 'Cidade Exemplo',
            'shippingAddressState' => 'SP',
            'shippingAddressCountry' => 'ATA',
            'creditCardToken'=>$request->cardToken,
            'installmentQuantity'=>'1',
            'installmentValue'=>'20.00',
            'noInterestInstallmentQuantity'=>'2',
            'creditCardHolderName'=>'Jose Comprador',
            'creditCardHolderCPF'=>'11475714734',
            'creditCardHolderBirthDate'=>'01/01/1900',
            'creditCardHolderAreaCode'=>'99',
            'creditCardHolderPhone'=>'99999999',
            'billingAddressStreet'=>'Av. PagSeguro',
            'billingAddressNumber'=>'9999',
            'billingAddressComplement'=>'99o andar',
            'billingAddressDistrict'=>'Jardim Internet',
            'billingAddressPostalCode'=>'99999999',
            'billingAddressCity'=>'Cidade Exemplo',
            'billingAddressState'=>'SP',
            'billingAddressCountry'=>'ATA',
        ];
        //$params = http_build_query($params);
        
        $guzzle = new Guzzle;
        $response = $guzzle->request('POST', config('pagseguro.url_payment_transparent_sandbox'), [
            'form_params' => $params,
        ]);
        $body = $response->getBody();
        $contents = $body->getContents();
        
        $xml = simplexml_load_string($contents);
        
        return $xml->code;
    }
}