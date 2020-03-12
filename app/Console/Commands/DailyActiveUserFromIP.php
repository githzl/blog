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

        $key = "DailyActiveUserFromIP"; // DailyActiveUserFromIP
        $day = date('Y-m-d');
        $ipNumber = Redis::scard($key);
        // 查询今日统计数据是否存在数据库中，存在则更新，不存在则插入。
        $row = Statistic::where('day', $day)->first();
        if ($row) {
            Statistic::where('day', date('Y-m-d'))
                ->update(['ip' => $ipNumber]);
        } else {
            $statistic = new Statistic;
            $statistic->day = $day;
            $statistic->ip = $ipNumber;
            $statistic->save();
        }
        Redis::del($key); // 最后删除key
    }
}
