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
      return redirect()->back()->withErrors(['field'=>'e']);
    if(!Hash::check($passwd, $user->passwd))
      return redirect()->back()->withErrors(['field'=>'p']);
    $req->session()->put('user', $user);
    return redirect()->back();
  }
  public function register() {

  }
  public function socialRedirect($provider) {
    $providerKey = \Config::get('services.' . $provider);
    if(empty($providerKey))
        \App::abort(404);
    return Socialite::driver($provider)->redirect();
  }
  public function socialHandle($provider) {
    $user = Socialite::driver($provider)->user();
    $socialUser = null;
    $sameSocialId = SocialLogins::where('socialId', '=', $user->id)->where('provider', '=', $provider)->first();
    if(empty($sameSocialId)) {
        $newSocialUser = new Users;
        $newSocialUser->email = $user->email;
        $name = explode(' ', $user->name);
        $newSocialUser->fName = $name[0];
        $newSocialUser->lName = $name[1];
        $newSocialUser->save();

        $socialData = new SocialLogins;
        $socialData->socialId = $user->id;
        $socialData->provider= $provider;
        $newSocialUser->social()->save($socialData);

        $socialUser = $newSocialUser;
    }
    else
        $socialUser = $sameSocialId->getUser;
    Session::put('user', $socialUser->fName);
    return redirect()->route('profile');
  }
}
