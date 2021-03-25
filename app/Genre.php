<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use SoftDeletes;

    protected $table = "genres";

    protected $fillable = ['genre'];
}
