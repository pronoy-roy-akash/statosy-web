<?php

namespace App\Support;

use App\Models\SiteSetting;
use Illuminate\Support\Facades\Cache;

class SiteSettings
{
    private const CACHE_KEY = 'site_settings_all_v1';

    public static function get(string $key, ?string $default = null): ?string
    {
        $all = self::all();
        return array_key_exists($key, $all) ? $all[$key] : $default;
    }

    public static function getBool(string $key, bool $default = false): bool
    {
        $value = self::get($key);
        if ($value === null) return $default;
        return in_array(strtolower($value), ['1', 'true', 'yes', 'on'], true);
    }

    public static function set(string $key, ?string $value): void
    {
        SiteSetting::query()->updateOrCreate(
            ['key' => $key],
            ['value' => $value]
        );

        Cache::forget(self::CACHE_KEY);
    }

    public static function all(): array
    {
        try {
            return Cache::rememberForever(self::CACHE_KEY, function () {
                return SiteSetting::query()
                    ->pluck('value', 'key')
                    ->all();
            });
        } catch (\Throwable) {
            return [];
        }
    }

    public static function fontOptions(): array
    {
        return [
            'avenir' => [
                'label' => 'Avenir',
                'css' => '"Avenir Next", Avenir, "Avenir Next LT Pro", ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial',
                'google' => null,
            ],
            'poppins' => [
                'label' => 'Poppins',
                'css' => '"Poppins", ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial',
                'google' => 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap',
            ],
            'rubik' => [
                'label' => 'Rubik',
                'css' => '"Rubik", ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial',
                'google' => 'https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700;800&display=swap',
            ],
            'montserrat' => [
                'label' => 'Montserrat',
                'css' => '"Montserrat", ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial',
                'google' => 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap',
            ],
        ];
    }

    public static function fontCssStack(): string
    {
        $key = self::get('font_key', 'avenir') ?? 'avenir';
        $options = self::fontOptions();
        $option = $options[$key] ?? $options['avenir'];
        return $option['css'] . ', "Apple Color Emoji", "Segoe UI Emoji"';
    }

    public static function fontGoogleHref(): ?string
    {
        $key = self::get('font_key', 'avenir') ?? 'avenir';
        $options = self::fontOptions();
        $option = $options[$key] ?? $options['avenir'];
        return $option['google'];
    }
}
