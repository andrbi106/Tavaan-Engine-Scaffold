<?php

declare(strict_types=1);

namespace Tavaan\Engine\Scaffold;

use Tavaan\Core\Contracts\Config\RepositoryInterface as Config;

/**
 * GeneratorManager — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Engine\Scaffold\Contracts\GeneratorManagerInterface
 */
final class GeneratorManager implements Contracts\GeneratorManagerInterface
{
    /**
     * @param Config $config پیکربندی موتور
     */
    public function __construct(
        private readonly Config $config,
    ) {
    }

    /**
     * {@inheritdoc}
     */
    public function generate(/* ... */): mixed
    {
        // TODO: پیاده‌سازی generate مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function register(/* ... */): mixed
    {
        // TODO: پیاده‌سازی register مطابق مستندات (سند §3 API).
        return null;
    }
}