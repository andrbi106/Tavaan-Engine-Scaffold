<?php

declare(strict_types=1);

namespace Tavaan\Engine\Scaffold\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * make:model command.
 */
final class Make_modelCommand implements CommandInterface
{
    public function name(): string
    {
        return 'make:model';
    }

    public function description(): string
    {
        return 'Run make:model (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
