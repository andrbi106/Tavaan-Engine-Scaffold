<?php

declare(strict_types=1);

/*|--------------------------------------------------------------------------
 | Scaffold Engine Configuration
 |--------------------------------------------------------------------------
 |
 | پیکربندی موتور scaffold — همهٔ کلیدهای مستندشده در `docs/03-engines/scaffold.md` بخش «پیکربندی».
 |
 |@see https://github.com/Derogaramin/Tavaan-Doc/blob/main/docs/03-engines/scaffold.md
 */

return [
    /*| پیش‌فرض موتور (driver/store یا حالت فعال) */
    'default' => env('SCAFFOLD_DEFAULT', 'default'),

    /*| کلید کش (در صورت استفاده) */
    'prefix' => env('SCAFFOLD_PREFIX', 'scaffold:'),

    /*| تنظیمات لاگ */
    'log' => [
        'channel' => env('SCAFFOLD_LOG_CHANNEL', 'scaffold'),
    ],

    /*| سایر کلیدها (طبق مستندات) */
    'options' => [
        // TODO: کلیدهای اضافی طبق سند §۶ (پیکربندی)
    ],
];