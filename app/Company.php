<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $table = 'companies';

    public function properties()
    {
      return $this->hasMany('App\Property');
    }
}
