<?php

namespace App\Models;

use GuzzleHttp\Client as Guzzle;
use App\Carrinho;
use Session;

trait PagSeguroTrait {

    public function getConfigs() {
        return [
            'email' => config('pagseguro.email'),
            'token' => config('pagseguro.token'),
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

    public function getSender() {
        $cpf = $this->removeMaskCpf($this->user->cpf);
        $areaCode = $this->getAreaCode($this->user->celular);
        $phone = $this->getPhone($this->user->celular);

        return [
            'senderName' => $this->user->nome,
            'senderAreaCode' => $areaCode,
            'senderPhone' => $phone,
            'senderEmail' => $this->user->email,
            'senderCPF' => $cpf,
        ];
    }

    public function getShipping() {
        $cep = $this->removeMaskCep($this->user->cep);

        return [
            'shippingType' => '1',
            'shippingAddressStreet' => $this->user->logradouro,
            'shippingAddressNumber' => $this->user->numero,
            'shippingAddressComplement' => $this->user->complemento,
            'shippingAddressDistrict' => $this->user->bairro,
            'shippingAddressPostalCode' => $cep,
            'shippingAddressCity' => $this->resolveAcentuacao($this->user->municipio),
            'shippingAddressState' => $this->user->estado,
            'shippingAddressCountry' => 'BRA',
        ];
    }

}
