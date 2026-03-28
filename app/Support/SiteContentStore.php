<?php

namespace App\Support;

use App\Models\SiteContent;
use Illuminate\Support\Facades\Cache;

class SiteContentStore
{
    private const CACHE_KEY = 'site_content_all_v1';

    public static function get(string $key, ?string $default = null): ?string
    {
        $all = self::all();
        return array_key_exists($key, $all) ? $all[$key] : $default;
    }

    public static function set(string $key, ?string $value, ?string $label = null): void
    {
        SiteContent::query()->updateOrCreate(
            ['key' => $key],
            ['value' => $value, 'label' => $label]
        );

        Cache::forget(self::CACHE_KEY);
    }

    public static function forget(string $key): void
    {
        SiteContent::query()->where('key', $key)->delete();
        Cache::forget(self::CACHE_KEY);
    }

    public static function all(): array
    {
        try {
            return Cache::rememberForever(self::CACHE_KEY, function () {
                return SiteContent::query()
                    ->pluck('value', 'key')
                    ->all();
            });
        } catch (\Throwable) {
            return [];
        }
    }
}
