<?php

namespace App;

use App\Interfaces\Sluggable;
use App\Traits\HasSlug;
use App\Traits\HasTags;
use Carbon;
use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Database\Eloquent\Model;

class Post extends Model implements Sluggable
{
    use HasSlug, HasTags;

    protected $guarded = [];

    protected $casts = [
        'publish_date' => 'datetime',
    ];

    protected $appends = [
        'excerpt',
        'localized_date',
    ];

    public function getSluggableValue(): string
    {
        return $this->title;
    }

    public function renderedText()
    {
        return Markdown::convert($this->text);
    }

    public function author()
    {
        return $this->belongsTo('App\User', 'author_id', 'id');
    }

    public function scopePublished($query)
    {
        return $query->where('status', 'publish')->orderby('publish_date', 'desc');
    }

    public function getExcerptAttribute()
    {
        $string = $this->renderedText();
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

    public function webmentions()
    {
        return $this->hasMany(Webmention::class);
    }
}
