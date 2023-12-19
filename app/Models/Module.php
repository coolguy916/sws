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
        return $this->belongsTo(User::class);

    }

    public function EspControl()
    {
        return $this->hasMany(EspControl::class);
    }

    public function statistic() {
        return $this->hasOne(StatisticModule::class, 'id_module', 'id');
    }
}
