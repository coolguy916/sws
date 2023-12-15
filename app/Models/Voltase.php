<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voltase extends Model
{
    use HasFactory;
    protected $table = 'voltases';
    protected $fillable = [
        'id_module',
    ];

    public function module(){
        return $this->belongsto(Module::class,'id');
    }
}
