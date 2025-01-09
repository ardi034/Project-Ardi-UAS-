<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if (Schema::connection('sqlite')->getConnection()->getDriverName() === 'sqlite') {
            Schema::enableForeignKeyConstraints();
        }
    }

    // ...
}