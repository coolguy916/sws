<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EspControl extends Model
{
    use HasFactory;

    protected $fillable = [
        'schedule',
        'runtime',
        'status',
        'id_user',
    ];

    public function user() {
        return $this->belongsTo(User::class,'id');
    }
}
