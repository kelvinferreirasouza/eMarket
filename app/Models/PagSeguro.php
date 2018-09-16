<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client as Guzzle;

class PagSeguro extends Model {

    public function generate() {

        $data['token'] = config('pagseguro.token');

        $data['email'] = config('pagseguro.email');

        $data['currency'] = 'BRL';

        $data['itemId1'] = '1';

        $data['itemQuantity1'] = '1';

        $data['itemDescription1'] = 'Curso Laravel-Pagseguro';

        $data['itemAmount1'] = '99999.99';

        $url = config('pagseguro.url_checkout_sandbox');

        $data = http_build_query($data);

        $curl = curl_init($url);

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);

        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);

        curl_setopt($curl, CURLOPT_POST, TRUE);

        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

        curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);

        $xml = curl_exec($curl);

        curl_close($curl);

        $xml = simplexml_load_string($xml);

        return $xml->code;
    }
    
    public function getSessionId() {
        $data['token'] = config('pagseguro.token');

        $data['email'] = config('pagseguro.email');

        $url = config('pagseguro.url_transparente_session_sandbox');

        $data = http_build_query($data);

        $curl = curl_init($url);

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);

        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);

        curl_setopt($curl, CURLOPT_POST, TRUE);

        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

        curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);

        $xml = curl_exec($curl);

        curl_close($curl);

        $xml = simplexml_load_string($xml);
        
        return $xml->id;
    }

}
