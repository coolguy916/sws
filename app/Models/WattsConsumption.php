<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WattsConsumption extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'watts_consumption'];
}
