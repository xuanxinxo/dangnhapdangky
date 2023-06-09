<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_lazadas extends Model
{
    use HasFactory;
    protected $table ="T_lazadas";

    

    // protected $fillable = ['column1', 'column2', 'column3'];
    public function type_product(){
        return $this ->belongsTo('App\type_t_lazadas');
    }
    public function bill_detail(){
        return $this ->hasMany('App\bill_detail');
    }

    public function comment(){
        return $this ->hasMany('App\comments');
    }

}
