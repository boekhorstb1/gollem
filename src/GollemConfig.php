<?php

declare(strict_types=1);
/**
 * Gollem configuration class
 *
 * Provides access to the Gollem configuration settings.
 *
 * Old pattern: globals $conf; $somethingDetail = $conf['something']['detail']; *
 * New pattern: $config = $injector->get(GollemConfig::class); $somethingDetail = $config->get('something.detail');
 *
 * Prefer DI over instantiating $config in your code.
 */

namespace Horde\Gollem;

use Horde\Core\Config\State;
use Horde\Injector\Attribute\Factory;

#[Factory(factory: GollemConfigFactory::class, method: 'create')]
class GollemConfig extends State {}
