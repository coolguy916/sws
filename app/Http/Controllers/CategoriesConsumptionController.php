<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoriesConsumption;
use App\Models\Module;
use Illuminate\Support\Facades\Auth;

class CategoriesConsumptionController extends Controller
{
    public function consumption_data(){

    $userId = Auth::id();
    $datas = CategoriesConsumption::where('id_user', $userId)->first();
    $modules = Module::where('user_id', $userId)->get();

    return response()->json([
        'categoriesData' => $datas,
        'modules' => $modules,
    ]);
    }
}
