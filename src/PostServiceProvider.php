<?php
namespace Hussain\Post;
use Illuminate\Support\ServiceProvider;
class PostServiceProvider extends ServiceProvider{

    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views','post');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/post'),
            __DIR__.'/database/migrations' => database_path('migrations'),
            __DIR__.'/Models' => app_path('Models'),
        ]);
    }
    public function register(){

    }
}