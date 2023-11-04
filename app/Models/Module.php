<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $dates = ['created_at'];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');

    }

    public function esp_control(){
        return $this->hasMany(EspControl::class);
    }
}
