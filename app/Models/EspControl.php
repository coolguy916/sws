<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EspControl extends Model
{
    use HasFactory;
    protected $table = 'esp_controls';
    protected $fillable = [
        'schedule',
        'runtime',
        'id_user',
        'id_module',
        'status'
    ];

    public function user() {
        return $this->belongsTo(User::class,'id');
    }

    public function module(){
        return $this->belongsTo(Module::class,'id');
    }
}
