<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelBook extends Model
{
    use HasFactory;

    protected $table='book';

    protected $fillable=['title','id_user','pages','price']; //medida de segurança do laravel para deixar somente estes campos editaveis.

    public function relUsers(){

        return $this->hasOne('App\User','id','id_user');
    
    }
}
