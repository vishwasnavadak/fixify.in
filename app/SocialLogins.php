<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class SocialLogins extends Model {
  protected $table = "social_logins";
  protected $fillable = ['userId', 'provider', 'socialId'];
  public function getUser() {
    return $this->belongsTo('User');
  }
}
