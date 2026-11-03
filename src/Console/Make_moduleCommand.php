<?php

declare(strict_types=1);

namespace Tavaan\Engine\Scaffold\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * make:module command.
 */
final class Make_moduleCommand implements CommandInterface
{
    public function name(): string
    {
        return 'make:module';
    }

    public function description(): string
    {
        return 'Run make:module (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
