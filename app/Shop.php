<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $table = 'shops';

    public function rotas()
    {
        return $this->hasMany('App\Rota');
    }

    public function staff()
    {
        return $this->hasMany('App\Staff');
    }
}
