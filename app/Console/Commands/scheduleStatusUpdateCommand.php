<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\EspControl;
use Carbon\Carbon;
use App\Events\scheduleStatusUpdate;

class scheduleStatusUpdateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'espcontrol:update-status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'to update schedule status for the esp';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $now = Carbon::now()->format('H:i');

        $tasks = EspControl::where('schedule', $now)
            ->where('status', 0)
            ->get();

        foreach ($tasks as $task) {
            $task->status = 1;
            $task->save();

            event(new scheduleStatusUpdate($task));
        }

        $this->info('ESP Control statuses updated successfully.');

    }
}
