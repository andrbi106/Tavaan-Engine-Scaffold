<?php

declare(strict_types=1);

namespace Tavaan\Engine\Scaffold\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * make:middleware command.
 */
final class MakeMiddlewareCommand implements CommandInterface
{
    public function name(): string
    {
        return 'make:middleware';
    }

    public function description(): string
    {
        return 'Run make:middleware (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
