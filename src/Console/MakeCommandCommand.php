<?php

declare(strict_types=1);

namespace Tavaan\Engine\Scaffold\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * make:command command.
 */
final class MakeCommandCommand implements CommandInterface
{
    public function name(): string
    {
        return 'make:command';
    }

    public function description(): string
    {
        return 'Run make:command (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
