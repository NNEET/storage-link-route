<?php

namespace Nneet\StorageLinkRoute\Tests;

use Nneet\StorageLinkRoute\StorageLinkRouteServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    protected function getPackageProvides($app)
    {
        return [StorageLinkRouteServiceProvider::class];
    }
}