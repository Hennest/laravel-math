<?php

declare(strict_types=1);

namespace Hennest\Math\Tests;

use Hennest\Math\Providers\MathServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app): array
    {
        $app['config']->set('math.scale', 2);

        return [
            MathServiceProvider::class,
        ];
    }
}
