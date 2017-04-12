<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public function getGeneroAttribute()
    {
        if($this->gender == 'm') return 'masculino';
        else return 'femenino';
    }

    public function getMayorAttribute()
    {
        if ($this->age > 18) return 'mayor de edad';
        else return 'menor de edad';
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'id');
    }
}
