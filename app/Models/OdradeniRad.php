<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OdradeniRad extends Model
{
    use HasFactory;

    public function zaposlenik(){
        return $this->belongsTo(User::class);
    }
}
