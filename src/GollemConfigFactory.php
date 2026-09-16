<?php

declare(strict_types=1);
/**
 * Gollem configuration class factory
 *
 * Creates instances of the GollemConfig class.
 *
 * Old pattern: globals $conf; $somethingDetail = $conf['something']['detail']; *
 * New pattern: $config = $injector->get(GollemConfig::class); $somethingDetail = $config->get('something.detail');
 *
 * Prefer DI over instantiating $config in your code.
 */

namespace Horde\Gollem;

use Horde\Core\Config\ConfigLoader;
use Horde\Injector\Injector;

class GollemConfigFactory
{
    public function __construct(private Injector $injector) {}

    public function create(): GollemConfig
    {
        $state = $this->injector->get(ConfigLoader::class)->load('gollem');
        return new GollemConfig($state->toArray());
    }
}
