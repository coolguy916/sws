<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kwh extends Model
{

    protected $table = "kwh";
    use HasFactory;

    protected $fillable = [
        'kwh',
        'arus',
        'power',
        'id_user',
        'id_module'
    ];

    public function user() {
        return $this->belongsTo(User::class,'id');
    }

    public function module(){
        return $this->belongsto(Module::class,'id');
    }
}
