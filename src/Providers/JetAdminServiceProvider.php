<?php


use Illuminate\Support\ServiceProvider;

class JetAdminServiceProvider extends ServiceProvider {
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'jetadmin');

        $this->publishes(
            [__DIR__ . '/../../resources/views' => resource_path('views/vendor/livewire-bootstrap-modal')],
            ['livewire-bootstrap-modal', 'livewire-bootstrap-modal:views']
        );

        Livewire::component('modals', Modals::class);
    }
}
