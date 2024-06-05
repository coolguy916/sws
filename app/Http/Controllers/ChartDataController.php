<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\WattsConsumption;

class ChartDataController extends Controller
{
    public function getChartData()
    {
        $startDate = Carbon::now()->subWeek();
        $endDate = Carbon::now();

        // Fetch data for the past week
        $data = WattsConsumption::whereBetween('date', [$startDate, $endDate])
            ->selectRaw('date, SUM(watts_consumption) as watts_consumption')
            ->groupBy('date')
            ->orderBy('date')
            ->get()
            ->map(function ($item) {
                $item->date = Carbon::parse($item->date)->format('D, d-M-Y');
                return $item;
            });

        return response()->json($data);
    }
}
