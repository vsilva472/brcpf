<?php
namespace Vsilva472\BrCpf\Providers;

use Illuminate\Support\ServiceProvider;
class BrCpfServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->loadTranslationsFrom(__DIR__.'/../../lang', 'brcpf');
 
        $this->publishes([
            __DIR__.'/../../lang' => $this->app->langPath('vendor/brcpf'),
        ], 'brcpf');
    }

}