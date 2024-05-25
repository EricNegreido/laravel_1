<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    use HasFactory;

    public function person(){
        return $this->hasOne("App\Models\Persons");
    }

    public function persons(){
        return $this->hasMany("App\Models\Persons");
    }

}
