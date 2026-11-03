<?php

declare(strict_types=1);

namespace Tavaan\Engine\Scaffold\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * make:widget command.
 */
final class Make_widgetCommand implements CommandInterface
{
    public function name(): string
    {
        return 'make:widget';
    }

    public function description(): string
    {
        return 'Run make:widget (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
