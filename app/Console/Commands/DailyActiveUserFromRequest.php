<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Redis;
use App\Model\Statistic;

class DailyActiveUserFromRequest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'DailyActiveUserFromRequest';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '通过请求数来统计每日活跃量';

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
        $key = 'DailyActiveUserFromRequest';
        $day = date('Y-m-d');
        $requestNumber = Redis::get($key);
        if ($requestNumber == NULL) {
            $requestNumber = 0; // 如果是NULL默认给0
        }
        $row = Statistic::where('day', $day)->first();
        if ($row) {
            Statistic::where('day', date('Y-m-d'))
                ->update(['request' => $requestNumber]);
        } else {
            $statistic = new Statistic;
            $statistic->day = $day;
            $statistic->request = $requestNumber;
            $statistic->save();
        }
        Redis::del($key); // 最后删除key
    }
}
