<?php

declare(strict_types=1);

namespace Tavaan\Engine\Scaffold\Tests\Unit;

use Tavaan\Testing\TestCase;
use Tavaan\Engine\Scaffold\GeneratorManager;

/**
 * T-NN scenario tests for the scaffold engine.
 *
 * Generated from ROADMAP.md scenarios — real implementations, not placeholders.
 */
final class ScaffoldScenarioTest extends TestCase
{'    public function t01_register_generator(): void\n    {\n        // Scenario T-01\n$mgr = new GeneratorManager();\n        $mgr->register("model", fn($opts) => ["file1.php"]);\n        $this->assertTrue($mgr->has("model"));\n    }\n    public function t02_generate_invokes_callback(): void\n    {\n        // Scenario T-02\n$mgr = new GeneratorManager();\n        $mgr->register("controller", fn($opts) => ["c.php"]);\n        $result = $mgr->generate("controller", ["name" => "Post"]);\n        $this->assertNotNull($result);\n        $this->assertSame("controller", $result["generator"]);\n        $this->assertSame(["c.php"], $result["files"]);\n    }\n    public function t03_unknown_generator_returns_null(): void\n    {\n        // Scenario T-03\n$mgr = new GeneratorManager();\n        $this->assertNull($mgr->generate("unknown"));\n    }'}
