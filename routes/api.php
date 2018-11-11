<?php

// Rotas da API de Notifications do PagSeguro
Route::post('/pagseguro/notificacao', 'API\ApiPagSeguroController@request')->name('requestNotificationPagSeguro');
