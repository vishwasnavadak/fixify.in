<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model {
  protected $table = "users";
  protected $fillable = ['fName', 'lName', 'email', 'phone', 'address'];
  public function hasSocial() {
    return $this->hasOne('App\SocialLogins', 'userId');
  }
  public function hasCred() {
    return $this->hasOne('App\Creds', 'userId');
  }
}
