<?php
namespace Vsilva472\BrCpf\Providers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;
use Vsilva472\BrCpf\Rules\Cpf;
use Vsilva472\phpCPF\CPF as CpfValidator;

class CpfServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->bootTranslations();
        $this->bootBindings();
    }

    /**
     * Translations
     */
    protected function bootTranslations(): void {
        $this->loadTranslationsFrom(__DIR__.'/../../lang', 'brcpf');
 
        $this->publishes([
            __DIR__.'/../../lang' => $this->app->langPath('vendor/brcpf'),
        ], 'brcpf');
    }

    /**
     * Binds
     */
    protected function bootBindings(): void {
        $this->app->singleton(Cpf::class, function (Application $app) {
            return new Cpf($app->make(CpfValidator::class));
        });
    }
}