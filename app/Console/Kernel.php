<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        Commands\Inspire::class,
        Commands\DailyActiveUserFromIP::class,
        Commands\DailyActiveUserFromRequest::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // 每晚23:59分统计今日IP日活
        $schedule->command('DailyActiveUserFromIP')
                 ->cron('59 23 * * * *');

        // 每晚23:59分统计今日请求数
        $schedule->command('DailyActiveUserFromRequest')
            ->cron('59 23 * * * *');
    }
}
