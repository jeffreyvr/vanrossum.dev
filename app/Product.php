<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Tags\HasSlug;
use Spatie\Tags\HasTags;
use Spatie\Translatable\HasTranslations;

class Product extends Model implements HasMedia
{
    use HasFactory, HasSlug, HasTags, HasTranslations, InteractsWithMedia;

    public array $translatable = ['name', 'title', 'summary', 'text'];

    protected $guarded = [];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug')
            ->usingLanguage('en');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('product-download')
            ->useDisk('product_downloads');
    }

    public function registerMediaConversions(?Media $media = null): void
    {
        $this
            ->addMediaConversion('preview')
            ->fit(Manipulations::FIT_CROP, 300, 300)
            ->nonQueued();
    }

    public function getImageAttribute()
    {
        return $this->getFirstMediaUrl('product-image');
    }

    public function getDownloadAttribute()
    {
        return $this->getFirstMediaUrl('product-download');
    }

    public function getDownloadMedia()
    {
        return $this->getFirstMedia('product-download');
    }

    public function scopePublished($query)
    {
        return $query->where('status', 'publish')->orderby('created_at', 'desc');
    }

    public function getTextNavigation()
    {
        $markdown = app(\Spatie\LaravelMarkdown\MarkdownRenderer::class)
            ->toHtml($this->text);

        $dom = new \DOMDocument();

        $dom->loadHTML($markdown, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $xpath = new \DomXPath($dom);

        $headings = $xpath->query('//h1|//h2|//h3|//h4|//h5|//h6');

        foreach ($headings as $heading) {
            $links[] = '<a href="#'.$heading->getAttribute('id').'">'.$heading->textContent.'</a>';
        }

        return collect($links);
    }
}
