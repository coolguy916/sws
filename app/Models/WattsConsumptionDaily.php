<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WattsConsumptionDaily extends Model
{
    protected $table = 'watts_consumptions_daily';
    use HasFactory;

    protected $fillable = [
        'kwh',
        'power',
        'id_user',
        'id_module'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function module()
    {
        return $this->belongsto(Module::class, 'id_module');
    }
}
