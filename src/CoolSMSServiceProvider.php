<?php
/**
 * Created by PhpStorm.
 * User: duhui
 * Date: 2018. 9. 12.
 * Time: PM 9:04
 */

namespace AcidF0x\LaraCool;

use Illuminate\Support\ServiceProvider;

class CoolSMSServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/coolsms.php' => config_path('coolsms.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(CoolSMS::class, function () {
            return new CoolSMS();
        });
        $this->app->alias(CoolSMS::class, 'CoolSMS');
    }
}