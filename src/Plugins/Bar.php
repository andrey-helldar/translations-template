<?php

declare(strict_types=1);

namespace YourNamespace\Translations\Plugins;

use Helldar\LaravelLangPublisher\Plugins\BasePlugin;

class Bar extends BasePlugin
{
    public function vendor(): string
    {
        return '<your_namespace>';
    }

    public function files(): array
    {
        return [
            'packages/bar.json' => 'custom/{locale}.json',
        ];
    }
}