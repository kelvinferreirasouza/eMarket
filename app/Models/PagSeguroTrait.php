<?php

namespace App\Models;

use GuzzleHttp\Client as Guzzle;
use App\Carrinho;
use Session;

trait PagSeguroTrait {

    public function getConfigsProduction() {
        return [
            'email' => config('pagseguro.emailProduction'),
            'token' => config('pagseguro.tokenProduction'),
        ];
    }
    
    public function getConfigsSandBox() {
        return [
            'email' => config('pagseguro.emailSandBox'),
            'token' => config('pagseguro.tokenSandBox'),
        ];
    }

    public function setCurrency($currency) {
        $this->currency = $currency;
    }

    public function getItems() {
        $items = [];
        $carrinho = Session::get('carrinho');
        $itemsCarrinho = $carrinho->getItems();
        $posicao = 1;

        foreach ($itemsCarrinho as $produto) {
            $items["itemId{$posicao}"] = $produto['item']->id;
            $items["itemDescription{$posicao}"] = $produto['item']->produtoNome;
            $items["itemAmount{$posicao}"] = $produto['item']->precoVenda;
            $items["itemQuantity{$posicao}"] = $produto['qtd'];

            $posicao++;
        }

        return $items;
    }
    
    public function getSender() {
        $cpf = $this->removeMaskCpf($this->user->cpf);
        $areaCode = $this->getAreaCode($this->user->celular);
        $phone = $this->getPhone($this->user->celular);

        return [
            'senderName'     => $this->user->nome,
            'senderAreaCode' => $areaCode,
            'senderPhone'    => $phone,
            'senderEmail'    => 'c39356058805329727941@sandbox.pagseguro.com.br',
            'senderCPF'      => $cpf,
        ];
    }

    public function getShipping() {
        $cep = $this->removeMaskCep($this->user->cep);

        return [
            'shippingType'              => '1',
            'shippingAddressStreet'     => $this->user->logradouro,
            'shippingAddressNumber'     => $this->user->numero,
            'shippingAddressComplement' => $this->user->complemento,
            'shippingAddressDistrict'   => $this->user->bairro,
            'shippingAddressPostalCode' => $cep,
            'shippingAddressCity'       => $this->resolveAcentuacao($this->user->municipio),
            'shippingAddressState'      => $this->user->estado,
            'shippingAddressCountry'    => 'BRA',
        ];
    }
    
    public function getCreditCardHolder() {
        $cpf = $this->removeMaskCpf($this->user->cpf);
        $areaCode = $this->getAreaCode($this->user->celular);
        $phone = $this->getPhone($this->user->celular);
        
        return [
            'creditCardHolderName'          => $this->user->nome,
            'creditCardHolderCPF'           => $cpf,
            'creditCardHolderBirthDate'     => '01/01/1997',
            'creditCardHolderAreaCode'      => $areaCode,
            'creditCardHolderPhone'         => $phone,
        ];
    }
    
    public function getBilling() {
        $cep = $this->removeMaskCep($this->user->cep);

        return [
            'billingAddressStreet'      => $this->user->logradouro,
            'billingAddressNumber'      => $this->user->numero,
            'billingAddressComplement'  => $this->user->complemento,
            'billingAddressDistrict'    => $this->user->bairro,
            'billingAddressPostalCode'  => $cep,
            'billingAddressCity'        => $this->resolveAcentuacao($this->user->municipio),
            'billingAddressState'       => $this->user->estado,
            'billingAddressCountry'     => 'BRA',
        ];
    }

    public function removeMaskCpf($cpf) {
        // deixa apenas os numeros do cpf
        $cpf = trim($cpf);
        $cpf = str_replace(".", "", $cpf);
        $cpf = str_replace("-", "", $cpf);

        return $cpf;
    }

    public function removeMaskCep($cep) {
        $cep = trim($cep);
        $cep = str_replace("-", "", $cep);

        return $cep;
    }

    public function getPhone($celular) {
        $arrayCelular = explode(')', $celular);

        $phone = $arrayCelular[1];
        $phone = trim($phone);
        $phone = str_replace("-", "", $phone);

        return $phone;
    }

    public function getAreaCode($celular) {
        $arrayCelular = explode(')', $celular);

        $areaCode = $arrayCelular[0];
        $areaCode = trim($areaCode);
        $areaCode = str_replace("(", "", $areaCode);

        return $areaCode;
    }

    function resolveAcentuacao($campo) {
        $arrumar = mb_convert_encoding($campo, 'UTF-8', 'ISO-8859-1');
        return $arrumar;
    }

}
