<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class WattsConsumptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $startDate = Carbon::now()->subWeek();
        $endDate = Carbon::now();
        $currentDate = $startDate->copy();

        while ($currentDate->lte($endDate)) {
            DB::table('watts_consumptions')->insert([
                'date' => $currentDate->format('Y-m-d'),
                'watts_consumption' => rand(100, 1000),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $currentDate->addDay();
        }
        
    }
}