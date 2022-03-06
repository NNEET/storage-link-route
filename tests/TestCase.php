<?php

namespace Prueba\StorageLinkRoute\Tests;

use Orchestra\Testbench\TestCase as OrchestraTestCase;
use Prueba\StorageLinkRoute\StorageLinkRouteServiceProvider;

class TestCase extends OrchestraTestCase
{
    protected function getPackageProvides($app)
    {
        return [StorageLinkRouteServiceProvider::class];
    }
}