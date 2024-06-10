<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WattsConsumptionRealtime extends Model
{
    use HasFactory;

    protected $table = 'watts_consumptions_realtime';

    protected $fillable = ['kwh', 'power', 'voltage', 'ampere', 'id_user', 'id_module'];

    // Defining the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user'); // 'id_user' is the foreign key in this table
    }

    // Defining the relationship with the Module model
    public function module()
    {
        return $this->belongsTo(Module::class, 'id_module'); // 'id_module' is the foreign key in this table
    }
}
