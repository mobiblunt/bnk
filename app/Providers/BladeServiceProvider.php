<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
       \Blade::directive('money', function ($money) {
        return "<?php echo number_format($money, 2); ?>";
    });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
