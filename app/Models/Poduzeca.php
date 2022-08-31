<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poduzeca extends Model
{
    use HasFactory;

    public function Zaposlenici(){
        return $this->hasMany(User::class);
    } 
}
