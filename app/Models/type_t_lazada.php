<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type_t_lazada extends Model
{
    use HasFactory;
    protected $table ="type_t_lazada";
    public function T_lazada(){
        return $this ->hasMany('App\T_lazada');
    }
}
