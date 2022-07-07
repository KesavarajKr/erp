<?php

namespace App\Providers;

use Facade\FlareClient\View;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {


        $date = date('Y-m-d');

        $getdate = DB::table('follow_ups')
        ->select('*')
        ->where('notification_date','=',$date)
        ->count();

        view()->share('notificationcount', $getdate);

        $salarydate = DB::table('salary_calulation')
        ->select('*')
        ->groupBy('from_date')
        ->get();

        view()->share('salarydate', $salarydate);
    }
}
