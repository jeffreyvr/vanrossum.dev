<?php

namespace App\Traits;

trait HasTags
{
    use \Spatie\Tags\HasTags;

    public function scopeWithTagSlug($slug, $locale = null)
    {
        $locale = $locale ?? app()->getLocale();

        $this->whereHas('tags', function ($query) use ($slug, $locale) {
            $query->where("tags.slug->{$locale}", $slug);
        });
    }
}