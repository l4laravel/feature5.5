<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {


        Blade::if('AcStatus', function (){
            $data =  \App\User::find('1')->first();
            echo $data->status;
           // return $data->status;
        });

        Blade::if('AcStatusCheck', function (){
            $data =  \App\User::find('1')->first();
            if ($data->status == 1){
                return true;
            }
        });


    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
