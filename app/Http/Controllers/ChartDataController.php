<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\WattsConsumptionDaily;
use Illuminate\Support\Facades\Auth;

class ChartDataController extends Controller
{
    public function getPowerData()
    {
        $userId = Auth::id();

        $datesPower = [];
        for ($i = 0; $i < 7; $i++) {
            $datesPower[] = Carbon::now()->subWeek()->startOfWeek()->addDays($i)->format('D');
        }

        $startDate = Carbon::now()->subWeek()->startOfDay();
        $endDate = Carbon::now()->endOfDay();

        // Fetch data for the past week
        $dataPower = WattsConsumptionDaily::whereBetween('created_at', [$startDate, $endDate])
            ->where('id_user', $userId)
            ->selectRaw('DATE(created_at) as date, SUM(power) as power')
            ->groupBy('date')
            ->orderBy('date')
            ->get()
            ->map(function ($item) {
                $item->date = Carbon::parse($item->date)->format('D');
                return $item;
            });

        // Jika $dataPower kosong, ganti dengan array dummy
        if ($dataPower->isEmpty()) {
            $dataPower = collect(array_fill(0, 7, ['date' => '', 'power' => 0]));
        } else {
            // Lengkapi data dengan elemen untuk setiap hari dalam rentang
            $filledData = [];
            foreach ($datesPower as $date) {
                $found = false;
                foreach ($dataPower as $item) {
                    if ($item->date == $date) {
                        $filledData[] = ['date' => $item->date, 'power' => $item->power];
                        $found = true;
                        break;
                    }
                }
                if (!$found) {
                    $filledData[] = ['date' => $date, 'power' => 0];
                }
            }
            $dataPower = collect($filledData);
        }

        return response()->json($dataPower);
    }

    public function getKwhData()
{
    $userId = Auth::id();

    $datesKwh = [];
    for ($i = 0; $i < 7; $i++) {
        $datesKwh[] = Carbon::now()->subWeek()->startOfWeek()->addDays($i)->format('D');
    }

    $startDate = Carbon::now()->subWeek()->startOfDay();
    $endDate = Carbon::now()->endOfDay();

    // Fetch data for the past week
    $dataKwh = WattsConsumptionDaily::whereBetween('created_at', [$startDate, $endDate])
        ->where('id_user', $userId)
        ->selectRaw('DATE(created_at) as date, SUM(kwh) as kwh')
        ->groupBy('date')
        ->orderBy('date')
        ->get()
        ->map(function ($item) {
            $item->date = Carbon::parse($item->date)->format('D');
            return $item;
        });

    // Jika $dataKwh kosong, ganti dengan array dummy
    if ($dataKwh->isEmpty()) {
        $dataKwh = collect(array_fill(0, 7, ['date' => '', 'kwh' => 0]));
    } else {
        // Lengkapi data dengan elemen untuk setiap hari dalam rentang
        $filledData = [];
        foreach ($datesKwh as $date) {
            $found = false;
            foreach ($dataKwh as $item) {
                if ($item->date == $date) {
                    $filledData[] = ['date' => $item->date, 'kwh' => $item->kwh];
                    $found = true;
                    break;
                }
            }
            if (!$found) {
                $filledData[] = ['date' => $date, 'kwh' => 0];
            }
        }
        $dataKwh = collect($filledData);
    }

    return response()->json($dataKwh);
}

}
