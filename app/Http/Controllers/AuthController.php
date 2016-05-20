<?php

namespace App\Http\Controllers;
use App\Users;
use App\SocialLogins;
use Illuminate\Http\Request;
use Socialite;
use Hash;
use App\Http\Requests;

class AuthController extends Controller {
  public function login(Request $req) {
    $email = $req->get('email');
    $passwd = $req->get('passwd');
    $user = Users::where('email', $email)->first();
    if(empty($user))
      return redirect()->back()->withErrors(['field'=>'Email is not registered']);
    $hash = $user->hasCred->passwd;
    if(empty($hash))
      return redirect()->back()->withErrors(['field'=>'Email is not registered']);
    if(!Hash::check($passwd, $hash))
      return redirect()->back()->withErrors(['field'=>'Email/Password combination is wrong.']);
    $req->session()->put('user', $user);
    return redirect()->route('profile');
  }
  public function register(Request $req) {
    $user = new Users;
    $user->fName = $req->get('fName');
    $user->email = $req->get('email');
    if($req->has('lName'))
      $user->lName = $req->get('lName');
    if($req->has('phone'))
      $user->phone = $req->get('phone');
    $user->save();
    $user->hasCred()->create([
      'passwd' => Hash::make($req->get('passwd'))
    ]);
    return redirect('login')->withErrors(['field'=>'Please Login']);
  }
  public function socialRedirect($provider) {
    $providerKey = \Config::get('services.' . $provider);
    if(empty($providerKey))
        \App::abort(404);
    return Socialite::driver($provider)->redirect();
  }
  public function socialHandle($provider) {
    $socialUser = Socialite::driver($provider)->user();
    $user = null;
    $sameUser = SocialLogins::where('socialId', $socialUser->id)->where('provider', $provider)->first();
    if(empty($sameUser)) {
        $name = explode(' ', $socialUser->name);
        $newUser = Users::create([
          'email' => $socialUser->email,
          'fName' => $name[0],
          'lName' => $name[1]
        ]);
        $newUser->hasSocial()->create([
          'provider' => $provider,
          'socialId' => $socialUser->id
        ]);
        $user = $newUser;
    }
    else
        $user = $sameUser->getUser;
    session(['user' => $user]);
    return redirect()->route('profile');
  }
  public function logout(Request $req) {
    $req->session()->forget('user');
    return redirect('login');
  }
}
