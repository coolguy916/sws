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

        $startDate = Carbon::now()->subDays(7)->startOfDay();
        $endDate = Carbon::now()->endOfDay();


        // Fetch data for the past week
        $dataPower = WattsConsumptionDaily::whereBetween('created_at', [$startDate, $endDate])
        ->where('id_user', $userId)
        ->selectRaw('DATE(created_at) as date, MAX(created_at) as max_created_at, power')
        ->groupBy('date', 'power')
        ->orderBy('max_created_at', 'desc')
        ->get();

        // dd($dataPower);

        $dataPower = $dataPower->map(function ($item) use ($dataPower) {
            $previousDayItem = $dataPower->first(function ($previousItem) use ($item) {
                return Carbon::parse($previousItem->date)->addDay()->format('Y-m-d') === $item->date;
            });

            // dd($previousDayItem->power);
            if ($previousDayItem) {
                $item->power = $item->power - $previousDayItem->power;
            } else {
                $item->power = $item->power;
            }
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
        ->selectRaw('DATE(created_at) as date, MAX(created_at) as max_created_at, kwh')
        ->groupBy('date', 'kwh')
        ->orderBy('max_created_at', 'desc')
        ->get();

    // dd($dataKwh);

    $dataKwh = $dataKwh->map(function ($item, $key) use ($dataKwh) {
        $previousDayItem = $dataKwh->first(function ($previousItem) use ($item) {
            return Carbon::parse($previousItem->date)->addDay()->format('Y-m-d') === $item->date;
        });

        if ($previousDayItem) {
            $item->kwh = $item->kwh - $previousDayItem->kwh;
        } else {
            $item->kwh;
        }
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
