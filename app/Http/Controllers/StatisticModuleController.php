<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\kwh;
use Carbon\Carbon;

class StatisticModuleController extends Controller
{
    public function index()
    {
        return view('User.esp_control.statisticmodule');
    }

    public function getDynamicChartData()
{
    $modules = Module::all();
    $data = [];

    foreach ($modules as $module) {
        $statisticModules = kwh::where('id_module', $module->id)->get();

        if ($statisticModules->isNotEmpty()) {
            $groupedData = $statisticModules->groupBy(function ($item) {
                return Carbon::parse($item->created_at)->format('D, d-m-Y');
            });

            $dailyData = [
                'moduleId' => $module->id,
                'moduleTitle' => 'Module ' . $module->id,
                'labels' => [],
                'kwhData' => [],
                'wattData' => [],
                'ampeData' => [],
            ];

            foreach ($groupedData as $day => $dayData) {
                $dailyData['labels'][] = $day;
                $dailyData['kwhData'][] = $dayData->sum('kwh');
                $dailyData['wattData'][] = $dayData->sum('power');
                $dailyData['ampeData'][] = $dayData->sum('arus');
            }

            $data[] = $dailyData;
        }
    }

    return response()->json($data);
}
    // private function formatTimestamps($timestamps)
    // {
    //     return collect($timestamps)->map(function ($ts) {
    //         return Carbon::parse($ts)->format('D');
    //     })->toArray();
    // }
}
