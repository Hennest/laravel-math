<?php

declare(strict_types=1);

namespace Hennest\Math\Providers;

use Hennest\Math\Contracts\MathServiceInterface;
use Hennest\Math\MathService;
use Illuminate\Support\ServiceProvider;

final class MathServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/math.php',
            'math'
        );

        $this->app->singleton(
            abstract: MathServiceInterface::class,
            concrete: MathService::class
        );

        $this->app->when(MathService::class)
            ->needs('$scale')
            ->giveConfig('math.scale');
    }
}
