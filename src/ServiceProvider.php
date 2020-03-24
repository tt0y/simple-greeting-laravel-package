<?php


namespace Antonkc\Simple_greeting;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/routes.php');
        $this->loadViewsFrom( __DIR__ . '/../views/', 'greetingView');
    }
}
