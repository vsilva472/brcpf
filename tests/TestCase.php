<?php

namespace Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;
use Vsilva472\BrCpf\Providers\CpfServiceProvider;

class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            CpfServiceProvider::class,
        ];
    }
}