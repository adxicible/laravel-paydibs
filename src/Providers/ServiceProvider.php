<?php

namespace Paydibs\Providers;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Publish translation file
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'paydibs');
        
        // Publish view files
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'paydibs');

        // Publish configuration file
        $this->publishes([
            __DIR__ . '/../config/paydibs.php' => config_path('paydibs.php'),
            __DIR__ . '/../resources/lang' => resource_path('lang/paydibs'),
            __DIR__ . '/../resources/views' => resource_path('views/paydibs')
        ]);

        view()->composer('paydibs::components.dropdown-year', function($view) {
            
            $years = array();

            $year = date('Y');
            for($i = $year; $i < $year + 10; $i++)
                array_push($years, $i);

            return $view->with(compact('years'));
        });

        view()->composer('paydibs::components.dropdown-month', function($view) {

            $months = array(
                '01' => 'Jan',
                '02' => 'Feb',
                '03' => 'Mar',
                '04' => 'Apr',
                '05' => 'May',
                '06' => 'Jun',
                '07' => 'Jul',
                '08' => 'Aug',
                '09' => 'Sep',
                '10' => 'Oct',
                '11' => 'Nov',
                '12' => 'Dec',
            );

            return $view->with(compact('months'));
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Publish resources.
     *
     * @return void
     */
    private function publishResources()
    {
        // Publish configuration file
        $this->publishes([
            __DIR__ . '/../config/paydibs.php' => config_path('paydibs.php'),
            __DIR__ . '/../resources/lang' => resource_path('lang/paydibs'),
            __DIR__ . '/../resources/views' => resource_path('views/paydibs')
        ]);


    }
}