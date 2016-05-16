<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AuthController extends Controller {
    public function login(Request $req) {
      $req->session()->put('user', 'Akash');
      return redirect($req->session()->pull('url', '/'));
    }
    public function register() {

    }
}
