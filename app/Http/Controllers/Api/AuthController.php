<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest\SignUpRequest;

class AuthController extends Controller
{
    public function signUp(SignUpRequest $request)
    {
        dd($request);
    }

    public function login()
    {
        echo 'come login';
    }

    public function logout()
    {
        echo 'come logout';
    }

    public function test()
    {
        echo 'test';
    }
}
