<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id)
    {
        $nameVariable = "Donald Trump";
        $ageVariable = "75";

        $data = [
            'id' => $id,
            'name' => $nameVariable,
            'age' => $ageVariable,
        ];

        $name = 'access_token';
        $value = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        $cookie = cookie(
            $name,           
            $value,          
            $minutes,        
            $path,           
            $domain,         
            $secure,        
            $httpOnly        
        );

            return response()
            ->json($data, 200)
            ->withCookie($cookie);
    }
}
