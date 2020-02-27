<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'item'; 
    protected $primarykey = 'id';

    ### 預計created_at和updated_at列存在於您的表上
    // public $timestamps = true;
    public $timestamps = false;
}
