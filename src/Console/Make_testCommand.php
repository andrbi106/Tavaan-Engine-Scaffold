<?php

declare(strict_types=1);

namespace Tavaan\Engine\Scaffold\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * make:test command.
 */
final class Make_testCommand implements CommandInterface
{
    public function name(): string
    {
        return 'make:test';
    }

    public function description(): string
    {
        return 'Run make:test (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
