<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\StatisticModule;
use Carbon\Carbon;

class StatisticModuleController extends Controller
{
    public function index(){
        return view('User.esp_control.statisticmodule');
    }

    public function getDynamicChartData()
{
    $modules = Module::all();
    $data = [];

    foreach ($modules as $module) {
        // Retrieve the statisticModules for each module
        $statisticModules = StatisticModule::where('id_module', $module->id)
            ->where('id_user', $module->user_id)
            ->get();

        if ($statisticModules->isNotEmpty()) {
            $kwhValues = $statisticModules->pluck('kwh')->toArray();
            $timestamps = $this->formatTimestamps($statisticModules->pluck('created_at')->toArray());

            $data[] = [
                'moduleId' => $module->id,
                'moduleTitle' => 'Module ' . $module->id,
                'labels' => $timestamps,
                'data' => $kwhValues,
            ];
        }
    }

    return response()->json($data);
}

private function formatTimestamps($timestamps)
{
    $formattedTimestamps = [];

    // Check if $timestamps is an array before trying to loop over it
    if (is_array($timestamps)) {
        foreach ($timestamps as $ts) {
            $formattedTimestamps[] = Carbon::parse($ts)->format('h:i A');
        }
    }

    return $formattedTimestamps;
}

}
