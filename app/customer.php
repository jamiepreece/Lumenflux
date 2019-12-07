<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $table = 'customers';
    public $primarykey = 'id';
    public $timestamps = true;
}
