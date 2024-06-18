<?php

namespace App\Http\Controllers;

use App\Events\ScheduleStatusUpdate;
use App\Models\EspControl;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ScheduleUpdateStatusController extends Controller
{
    public function updateScheduleStatus()
    {
        $now = Carbon::now()->format('H:i'); // Get current time in 'H:i:s' format

        // Fetch tasks with matching schedule and status 0
        $tasks = EspControl::where('schedule', $now)
            ->where('status', 0)
            ->get();

        foreach ($tasks as $task) {
            $task->status = 1; // Update status to 1
            $task->save(); // Save the task

            event(new ScheduleStatusUpdate($task)); // Trigger the event
        }

        // If you want to log information, consider using Laravel's logging functionality
    }
}
