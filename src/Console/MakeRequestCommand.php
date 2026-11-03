<?php

declare(strict_types=1);

namespace Tavaan\Engine\Scaffold\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * make:request command.
 */
final class MakeRequestCommand implements CommandInterface
{
    public function name(): string
    {
        return 'make:request';
    }

    public function description(): string
    {
        return 'Run make:request (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
