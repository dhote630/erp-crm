<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
class JwtController extends Controller
{
    private $jwtToken;
    private $secret;
    public function createToken($data){
     $this->secret = env("JWTSECRET");
     $this->jwtToken = JWT::encode($data, $this->secret, 'HS256');
     return $this->jwtToken;
    }
}
