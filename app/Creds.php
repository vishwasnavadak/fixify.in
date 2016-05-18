<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Creds extends Model {
    protected $table = "creds";
    protected $fillable = ['userId', 'passwd'];
}
