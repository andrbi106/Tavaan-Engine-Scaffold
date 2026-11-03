<?php
declare(strict_types=1);
namespace Tavaan\Engine\Scaffold;

final class ScaffoldBuilder
{
    private array $templates = [];

    public function __construct(private readonly array $config = [])
    {
        $this->templates = $config['templates'] ?? [
            'model' => '<?php

declare(strict_types=1);

namespace App\\Models;

final class {{Class}} 
{
    protected string $table = '{{table}}';
}
',
            'controller' => '<?php

declare(strict_types=1);

namespace App\\Http\\Controllers;

final class {{Class}} 
{
    public function index()
    {
        return response()->json(['data' => []]);
    }
}
',
            'migration' => '<?php

declare(strict_types=1);

use Tavaan\\Engine\\Database\\Migration\\Migration;

return new class extends Migration 
{
    public string $version = '1.0.0';
    public string $description = 'Create {{table}} table';

    public function up(): void
    {
        // Schema::create('{{table}}', ...);
    }
};
',
            'test' => '<?php

declare(strict_types=1);

namespace App\\Tests\\Unit;

use PHPUnit\\Framework\\TestCase;

final class {{Class}}Test extends TestCase
{
    public function testBasic(): void
    {
        $this->assertTrue(true);
    }
}
',
        ];
    }

    public function generate(string $type, string $name, array $params = []): string
    {
        $template = $this->templates[$type] ?? '';
        $replacements = array_merge(['{{Class}}' => $name, '{{table}}' => strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $name))], $params);
        $content = str_replace(array_keys($replacements), array_values($replacements), $template);
        return str_replace('\
', "
", $content);
    }

    public function save(string $type, string $name, string $directory, array $params = []): string
    {
        $content = $this->generate($type, $name, $params);
        $ext = match($type) { 'migration' => '.php', 'test' => 'Test.php', default => '.php' };
        $filename = match($type) {
            'migration' => date('Y_m_d_His') . '_create_' . strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $name)) . '_table.php',
            'test' => $name . 'Test.php',
            default => $name . '.php',
        };
        $path = rtrim($directory, '/') . '/' . $filename;
        if (!is_dir(dirname($path))) mkdir(dirname($path), 0777, true);
        file_put_contents($path, $content);
        return $path;
    }

    public function scaffold(string $name, string $directory, array $params = []): array
    {
        $files = [];
        $files[] = $this->save('model', $name, $directory . '/Models', $params);
        $files[] = $this->save('controller', $name . 'Controller', $directory . '/Http/Controllers', $params);
        $files[] = $this->save('migration', $name, $directory . '/migrations', $params);
        $files[] = $this->save('test', $name, $directory . '/Tests/Unit', $params);
        return $files;
    }

    public function getTemplate(string $type): string { return $this->templates[$type] ?? ''; }
    public function setTemplate(string $type, string $template): void { $this->templates[$type] = $template; }
    public function getTemplateTypes(): array { return array_keys($this->templates); }
}

final class ScaffoldServiceProvider
{
    private ?ScaffoldBuilder $builder = null;
    public function __construct(private readonly array $config = []) {}
    public function register(): void { $this->builder = new ScaffoldBuilder($this->config); }
    public function boot(): void {}
    public function provides(): array { return [ScaffoldBuilder::class]; }
    public function getBuilder(): ScaffoldBuilder { if ($this->builder === null) $this->register(); return $this->builder; }
}
