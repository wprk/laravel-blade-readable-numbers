<?php

namespace Wprk\ReadableNumbers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class ReadableNumbersServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        Blade::directive('longInt', function ($expression) {
            return sprintf('<?php echo \Wprk\ReadableNumbers\ReadableNumber::format(%s) ; ?>', $expression);
        });
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'skeleton');
    }
}
