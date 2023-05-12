<?php


use Illuminate\Support\ServiceProvider;

class JetAdminServiceProvider extends ServiceProvider {
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/jetadmin.php' => config_path('jetadmin.php'),
        ]);

        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'jetadmin');

    }
}
