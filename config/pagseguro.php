<?php

$environment                     = env('PAGSEGURO_ENVORINMENT');
//Configs Production
$emailProduction                 = 'kelvinfer4@hotmail.com';
$tokenProduction                 = 'F0C5208C19704E47ACE61C57C5E9B21D';
//Configs SandBox
$emailSandBox                    = 'kelvinfer4@hotmail.com';
$tokenSandBox                    = '92849AD4D32A4560B208A3DEBBE8CFFD';
//URLs de Produção
$urlCheckout                     = 'https://ws.pagseguro.uol.com.br/v2/checkout';
$urlCheckoutAfterRequest         = 'https://ws.pagseguro.uol.com.br/v2/checkout/payment.html?code=';
$urlLightbox                     = 'https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js';
$urlSessionTranparent            = 'https://ws.pagseguro.uol.com.br/v2/sessions';
$urlTransparentJs                = 'https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js';
$urlPaymentTransparent           = 'https://ws.pagseguro.uol.com.br/v2/transactions';

//URLs de SandBox
$urlCheckout_sandbox             = 'https://ws.sandbox.pagseguro.uol.com.br/v2/checkout';
$urlCheckoutAfterRequest_sandbox = 'https://sandbox.pagseguro.uol.com.br/v2/checkout/payment.html?code=';
$urlLightbox_sandbox             = 'https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js';
$urlSessionTranparent_sandbox    = 'https://ws.sandbox.pagseguro.uol.com.br/v2/sessions';
$urlTransparentJs_sandbox        = 'https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js';
$urlPaymentTransparent_sandbox   = 'https://ws.sandbox.pagseguro.uol.com.br/v2/transactions';

return [
    'environment'                        => $environment,
    
    'emailProduction'                    => $emailProduction,
    'tokenProduction'                    => $tokenProduction,
    
    'emailSandBox'                       => $emailSandBox,
    'tokenSandBox'                       => $tokenSandBox,
    
    'url_checkout'                       => $urlCheckout,
    'url_redirect_after_request'         => $urlCheckoutAfterRequest,
    'url_lightbox'                       => $urlLightbox,
    'url_transparent_session'            => $urlSessionTranparent,
    'url_transparent_js'                 => $urlTransparentJs,
    'url_payment_transparent'            => $urlPaymentTransparent,
    
    'url_checkout_sandbox'               => $urlCheckout_sandbox,
    'url_redirect_after_request_sandbox' => $urlCheckoutAfterRequest_sandbox,
    'url_lightbox_sandbox'               => $urlLightbox_sandbox,
    'url_transparent_session_sandbox'    => $urlSessionTranparent_sandbox,
    'url_transparent_js_sandbox'         => $urlTransparentJs_sandbox,
    'url_payment_transparent_sandbox'    => $urlPaymentTransparent_sandbox,
];
