<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatisticModule extends Model
{
    use HasFactory;
    protected $table = 'statistic_modules';
    protected $fillable = [
        'watt',
        'volt',
        'kwh',
        'id_module',
        'id_user',
    ];

    public function module() {
        return $this->belongsTo(Module::class, 'id_module', 'id');
    }
    public function user() {
        return $this->belongsTo(User::class,'id');
    }
}
