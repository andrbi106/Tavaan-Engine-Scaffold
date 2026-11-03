<?php

declare(strict_types=1);

namespace Tavaan\Engine\Scaffold\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * make:resource command.
 */
final class Make_resourceCommand implements CommandInterface
{
    public function name(): string
    {
        return 'make:resource';
    }

    public function description(): string
    {
        return 'Run make:resource (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
