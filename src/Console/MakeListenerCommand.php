<?php

declare(strict_types=1);

namespace Tavaan\Engine\Scaffold\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * make:listener command.
 */
final class MakeListenerCommand implements CommandInterface
{
    public function name(): string
    {
        return 'make:listener';
    }

    public function description(): string
    {
        return 'Run make:listener (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
