<?php

declare(strict_types=1);

namespace Tavaan\Engine\Scaffold\Contracts;

/**
 * قرارداد GeneratorManager.
 *
 * @see \Tavaan\Engine\Scaffold\GeneratorManager
 * @api 1.0
 */
interface GeneratorManagerInterface
{
    /**
     * متد generate.
     *
     * @return mixed
     */
    public function generate(/* ... */): mixed;

    /**
     * متد register.
     *
     * @return mixed
     */
    public function register(/* ... */): mixed;
}