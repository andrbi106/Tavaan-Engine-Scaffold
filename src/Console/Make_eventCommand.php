<?php

declare(strict_types=1);

namespace Tavaan\Engine\Scaffold\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * make:event command.
 */
final class Make_eventCommand implements CommandInterface
{
    public function name(): string
    {
        return 'make:event';
    }

    public function description(): string
    {
        return 'Run make:event (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
