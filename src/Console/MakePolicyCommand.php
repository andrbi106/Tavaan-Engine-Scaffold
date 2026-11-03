<?php

declare(strict_types=1);

namespace Tavaan\Engine\Scaffold\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * make:policy command.
 */
final class MakePolicyCommand implements CommandInterface
{
    public function name(): string
    {
        return 'make:policy';
    }

    public function description(): string
    {
        return 'Run make:policy (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
