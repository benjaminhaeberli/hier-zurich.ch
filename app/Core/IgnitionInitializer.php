<?php

namespace App\Core;

use Spatie\Ignition\Ignition;
use Tempest\Container\Container;
use Tempest\Container\Initializer;

final readonly class IgnitionInitializer implements Initializer
{
    public function initialize(Container $container): Ignition
    {
        return Ignition::make()->register();
    }
}
