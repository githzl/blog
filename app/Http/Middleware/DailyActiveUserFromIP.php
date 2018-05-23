<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Redis;

class DailyActiveUserFromIP
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next($request);
    }

    public function terminate($request)
    {
        // 统计每日多少个IP来访问
        $clientIP = $request->ip();
        $numberIP = sprintf('%u',ip2long($clientIP)); // 解决在32位操作系统下出现负数
        $day = date('Y-m-d');
        $key = "DailyActiveUserFromIP:$day";
        Redis::sadd($key,$numberIP);
    }
}
