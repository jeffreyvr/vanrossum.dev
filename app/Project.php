<?php

namespace App;

use App\Interfaces\Sluggable;
use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Project extends Model implements Sluggable
{
    use HasFactory, HasSlug, HasTranslations;

    protected $guarded = [];

    public $translatable = ['title', 'text'];

    protected $casts = [
        'publish_date' => 'datetime',
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

    public function author()
    {
        return $this->belongsTo('App\User', 'author_id', 'id');
    }

    public function scopePublished($query)
    {
        return $query->where('status', 'publish')->orderby('publish_date', 'desc');
    }
}
