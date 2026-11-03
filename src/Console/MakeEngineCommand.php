<?php

declare(strict_types=1);

namespace Tavaan\Engine\Scaffold\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * make:engine command.
 */
final class MakeEngineCommand implements CommandInterface
{
    public function name(): string
    {
        return 'make:engine';
    }

    public function description(): string
    {
        return 'Run make:engine (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
