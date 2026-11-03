<?php

declare(strict_types=1);

namespace Tavaan\Engine\Scaffold\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * make:controller command.
 */
final class MakeControllerCommand implements CommandInterface
{
    public function name(): string
    {
        return 'make:controller';
    }

    public function description(): string
    {
        return 'Run make:controller (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
