<?php

declare(strict_types=1);

namespace Tavaan\Engine\Scaffold\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * make:factory command.
 */
final class Make_factoryCommand implements CommandInterface
{
    public function name(): string
    {
        return 'make:factory';
    }

    public function description(): string
    {
        return 'Run make:factory (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
