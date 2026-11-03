<?php

declare(strict_types=1);

namespace Tavaan\Engine\Scaffold\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * make:seeder command.
 */
final class Make_seederCommand implements CommandInterface
{
    public function name(): string
    {
        return 'make:seeder';
    }

    public function description(): string
    {
        return 'Run make:seeder (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
