<?php

namespace App\Traits;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

trait HasSlug
{
    public static function bootHasSlug()
    {
        static::saving(function (Sluggable $model) {
            $model->slug = Str::slug($model->getSluggableValue());
        });
    }

    public function idSlug(): string
    {
        return "{$this->id}-{$this->slug}";
    }

    public static function findByIdSlug(string $idSlug): ?Model
    {
        [$id] = explode('-', $idSlug);

        return static::findOrFail($id);
    }
}