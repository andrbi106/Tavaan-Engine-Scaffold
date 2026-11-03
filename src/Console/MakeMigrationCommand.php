<?php

declare(strict_types=1);

namespace Tavaan\Engine\Scaffold\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * make:migration command.
 */
final class MakeMigrationCommand implements CommandInterface
{
    public function name(): string
    {
        return 'make:migration';
    }

    public function description(): string
    {
        return 'Run make:migration (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
