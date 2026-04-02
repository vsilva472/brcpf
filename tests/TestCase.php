<?php

namespace Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;
use Vsilva472\BrCpf\Providers\BrCpfServiceProvider;

class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            BrCpfServiceProvider::class,
        ];
    }
}