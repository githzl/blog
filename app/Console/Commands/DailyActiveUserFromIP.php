<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Redis;
use App\Model\Statistic;

class DailyActiveUserFromIP extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'DailyActiveUserFromIP';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '通过IP来统计每日活跃量';

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
     * @return mixed
     */
    public function handle()
    {
        $day = date('Y-m-d');
        $key = "DailyActiveUserFromIP:$day"; // DailyActiveUserFromIP:2018-05-23
        $number = Redis::bitcount($key);
        $statisticModel = new Statistic;
        $statisticModel->day = $day;
        $statisticModel->number = $number;
        if($statisticModel->save()){
            Redis::del($key);
        }   
    }
}
