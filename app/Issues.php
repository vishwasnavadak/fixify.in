<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issues extends Model {
    protected $table = "issues";
    protected $primaryKey = "id";
    public $timestamps = false;
}
