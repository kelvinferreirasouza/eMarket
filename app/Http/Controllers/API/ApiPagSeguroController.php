<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiPagSeguroController extends Controller
{
    public function request(Request $request)
    {
        return $request->all(); 
    }
}
