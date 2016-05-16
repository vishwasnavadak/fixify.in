<?php

namespace App\Http\Middleware;

use Closure;

class LoginStatus {
  public function handle($request, Closure $next) {
    if($request->session()->has('user'))
      return $next($request);
    else {
      $request->session()->put('url', $request->fullUrl());
      /*$request->session()->put([
        'compSelected' => $request->input('selected'),
        'compItem' => $request->input('item')
      ]);*/
      return redirect('login');
    }

  }
}
