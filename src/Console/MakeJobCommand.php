<?php

declare(strict_types=1);

namespace Tavaan\Engine\Scaffold\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * make:job command.
 */
final class MakeJobCommand implements CommandInterface
{
    public function name(): string
    {
        return 'make:job';
    }

    public function description(): string
    {
        return 'Run make:job (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
