<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'itemppp'; 
    protected $primarykey = 'id';
    public $timestamps = true;
}
