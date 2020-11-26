<?php

namespace Edupham\Api\App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    protected $command_list = [];
    protected $package_name = 'api';
    protected $provider_name = 'edp';

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../../../database/migrations');
        $this->loadRoutesFrom(__DIR__ . '/../../../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../../../resources/views', $this->package_name);
        $this->loadTranslationsFrom(__DIR__ . '/../../../resources/lang', $this->package_name);

        $this->vendorPublish($this->package_name);

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        /* Gộp config nếu có */
        $this->mergeConfigFrom(__DIR__ . '/../../../config/' .$this->provider_name.'.php', $this->provider_name);

        /* Đăng ký lệnh mới từ artisan command */
        $this->commands($this->command_list);

    }

    /**
     * Vendor publish module
     * @param $package_name
     */
    private function vendorPublish($package_name)
    {
        $this->publishes([
            __DIR__ . '/../../../config/' .$this->provider_name.'.php' => config_path($this->provider_name.'.php')
        ], $package_name.'-config');

        $this->publishes([
            __DIR__ . '/../../../database/migrations' => database_path('migrations')
        ], $package_name.'-migrations');

        $this->publishes([
            __DIR__ . '/../../../resources/assets' => public_path('vendor/'.$package_name)
        ], $package_name.'-assets');

        $this->publishes([
            __DIR__ . '/../../../resources/lang' => resource_path('lang/vendor/'.$package_name)
        ], $package_name.'-lang');

        $this->publishes([
            __DIR__ . '/../../../resources/views' => resource_path('views/vendor/'.$package_name)
        ], $package_name.'-views');
    }
}
