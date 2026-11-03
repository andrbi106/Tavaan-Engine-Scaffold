<?php

declare(strict_types=1);

namespace Tavaan\Engine\Scaffold;

use Tavaan\Core\Contracts\Container\ContainerInterface;
use Tavaan\Core\Contracts\Config\RepositoryInterface as ConfigRepository;
use Tavaan\Engine\Scaffold\Contracts\GeneratorManagerInterface;
use Tavaan\Core\Provider\ServiceProvider;

/**
 * GeneratorManagerServiceProvider — ثبت سرویس‌های موتور GeneratorManager.
 */
final class GeneratorManagerServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->singleton(GeneratorManagerInterface::class, function (ContainerInterface $app) {
            /** @var ConfigRepository $config */
            $config = $app->get(ConfigRepository::class);
            return new GeneratorManager($config);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function boot(): void
    {
        // ثبت commandها
        $this->commands[] = \Tavaan\Engine\Scaffold\Console\Make_moduleCommand::class;
        $this->commands[] = \Tavaan\Engine\Scaffold\Console\Make_controllerCommand::class;
        $this->commands[] = \Tavaan\Engine\Scaffold\Console\Make_modelCommand::class;
        $this->commands[] = \Tavaan\Engine\Scaffold\Console\Make_migrationCommand::class;
        $this->commands[] = \Tavaan\Engine\Scaffold\Console\Make_requestCommand::class;
        $this->commands[] = \Tavaan\Engine\Scaffold\Console\Make_policyCommand::class;
        $this->commands[] = \Tavaan\Engine\Scaffold\Console\Make_commandCommand::class;
        $this->commands[] = \Tavaan\Engine\Scaffold\Console\Make_jobCommand::class;
        $this->commands[] = \Tavaan\Engine\Scaffold\Console\Make_eventCommand::class;
        $this->commands[] = \Tavaan\Engine\Scaffold\Console\Make_listenerCommand::class;
        $this->commands[] = \Tavaan\Engine\Scaffold\Console\Make_seederCommand::class;
        $this->commands[] = \Tavaan\Engine\Scaffold\Console\Make_factoryCommand::class;
        $this->commands[] = \Tavaan\Engine\Scaffold\Console\Make_testCommand::class;
        $this->commands[] = \Tavaan\Engine\Scaffold\Console\Make_widgetCommand::class;
        $this->commands[] = \Tavaan\Engine\Scaffold\Console\Make_resourceCommand::class;
        $this->commands[] = \Tavaan\Engine\Scaffold\Console\Make_engineCommand::class;
        $this->commands[] = \Tavaan\Engine\Scaffold\Console\Make_middlewareCommand::class;

    }

    /**
     * {@inheritdoc}
     */
    public function provides(): array
    {
        return [
            GeneratorManagerInterface::class,
        ];
    }
}