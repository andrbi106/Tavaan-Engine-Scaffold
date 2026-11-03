# Tavaan Engine — Scaffold

> **تولید کد (make:*)** — موتور Scaffold در فریمورک تَوان

## مشخصات

| فیلد | مقدار |
|---|---|
| شناسه | `tavaan.engine.scaffold` |
| نام | `Scaffold` |
| عنوان فارسی | تولید کد (make:*) |
| نسخه | `0.1.0` |
| namespace | `Tavaan\Engine\Scaffold` |
| نوع | `engine` |

## توضیحات

M8/TVN-0077: Stub engine خودنوشته ({{var}}/{{#if}}/{{#unless}}/{{#each}})، ۱۷ Generator، idempotent با --force + backup .bak، sandbox مسیر (path traversal → رد).

## کلاس‌های اصلی

- `src/Console/Commands/MakeCommandCommand.php`
- `src/Console/Commands/MakeControllerCommand.php`
- `src/Console/Commands/MakeEngineCommand.php`
- `src/Console/Commands/MakeEventCommand.php`
- `src/Console/Commands/MakeFactoryCommand.php`
- `src/Console/Commands/MakeJobCommand.php`
- `src/Console/Commands/MakeListenerCommand.php`
- `src/Console/Commands/MakeMiddlewareCommand.php`
- `src/Console/Commands/MakeMigrationCommand.php`
- `src/Console/Commands/MakeModelCommand.php`
- `src/Console/Commands/MakeModuleCommand.php`
- `src/Console/Commands/MakePolicyCommand.php`
- `src/Console/Commands/MakeRequestCommand.php`
- `src/Console/Commands/MakeResourceCommand.php`
- `src/Console/Commands/MakeSeederCommand.php`
- `src/Console/Commands/MakeTestCommand.php`
- `src/Console/Commands/MakeWidgetCommand.php`
- `src/GenerateCommand.php`
- `src/Generator.php`
- `src/GeneratorManager.php`
- ... و 20 فایل دیگر

## Service Providerها

- `Tavaan\Engine\Scaffold\GeneratorManagerServiceProvider`

## وابستگی‌ها

**موتورهای مورد‌نیاز:**

- `console`
- `filesystem`

## دستورات CLI

- `make:module`
- `make:controller`
- `make:model`
- `make:migration`
- `make:request`
- `make:policy`
- `make:command`
- `make:job`
- `make:event`
- `make:listener`
- `make:seeder`
- `make:factory`
- `make:test`
- `make:widget`
- `make:resource`
- `make:engine`
- `make:middleware`

## نصب

```bash
git clone https://github.com/andrbi106/Tavaan-Engine-Scaffold.git
```

این موتور بخشی از فریمورک تَوان است و معمولاً به‌صورت مستقیم نصب نمی‌شود،
بلکه توسط [Tavaan-Core](https://github.com/andrbi106/Tavaan-Core) مدیریت می‌شود.

## روابط با سایر مخازن

| مخزن | نقش |
|---|---|
| **`andrbi106/Tavaan-Engine-Scaffold`** (این مخزن) | موتور Scaffold |
| `andrbi106/Tavaan-Engine-Core` | ساختار پایه + درگاه ارتباط موتورها |
| `andrbi106/Tavaan-Core` | اسکلت اپلیکیشن + همهٔ موتورها |
| `Derogaramin/Tavaan-Framework` | فریمورک مادر (monorepo) |

## مجوز

MIT — هم‌راستا با فریمورک مادر تَوان.
