<?php

namespace App;

use App\Interfaces\Sluggable;
use App\Traits\HasSlug;
use App\Traits\HasTags;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

class Post extends Model implements Sluggable
{
    use HasSlug, HasTags;

    protected $guarded = [];

    protected $casts = [
        'publish_date' => 'datetime',
        'updated_at' => 'datetime'
    ];

    protected $appends = [
        'excerpt',
        'localized_date'
    ];

    public function getSluggableValue(): string
    {
        return $this->title;
    }

    public function renderedText()
    {
        return app(\Spatie\LaravelMarkdown\MarkdownRenderer::class)
            ->toHtml($this->text);
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(\App\User::class, 'author_id', 'id');
    }

    public function scopePublished($query)
    {
        return $query->where('status', 'publish')->orderby('publish_date', 'desc');
    }

    public function getExcerptAttribute()
    {
        $string = app(\Spatie\LaravelMarkdown\MarkdownRenderer::class)
            ->disableHighlighting()
            ->toHtml($this->text);

        if (strlen($string) > 50) {
            $stringCut = substr($string, 0, 240);
            $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';
        }

        return strip_tags($string);
    }

    public function getLocalizedDateAttribute()
    {
        return Carbon::parse($this->publish_date)->locale(app()->getLocale())->translatedFormat('j F Y');
    }

    public function getLocalizedUpdatedAtDateAttribute()
    {
        return $this->updated_at->locale(app()->getLocale())->translatedFormat('j F Y');
    }

    public function webmentions(): HasMany
    {
        return $this->hasMany(Webmention::class);
    }
}
