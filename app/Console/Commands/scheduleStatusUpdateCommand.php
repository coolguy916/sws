<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\EspControl;
use Carbon\Carbon;
use App\Events\scheduleStatusUpdate;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Console\Command\Command as SymfonyCommand;


class scheduleStatusUpdateCommand extends Command
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

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

        try {
            EspControl::where('schedule', $now)
                ->where('status', 0)
                ->chunk(100, function ($tasks) {
                    foreach ($tasks as $task) {
                        $task->status = 1;
                        $task->save();

                        event(new ScheduleStatusUpdate($task));
                    }
                });

            Log::info('ESP Control statuses updated successfully at ' . $now);
        } catch (\Exception $e) {
            Log::error('Error updating ESP Control statuses: ' . $e->getMessage());
            $this->error('Error: ' . $e->getMessage());
            return SymfonyCommand::FAILURE;
        }
        return SymfonyCommand::SUCCESS;

    }
}
