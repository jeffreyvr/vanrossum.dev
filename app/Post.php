<?php

namespace App;

use Carbon;
use App\Webmention;
use App\Traits\HasSlug;
use App\Interfaces\Sluggable;
use Illuminate\Database\Eloquent\Model;
use GrahamCampbell\Markdown\Facades\Markdown;

class Post extends Model implements Sluggable
{
    use HasSlug;

    protected $appends = ['excerpt', 'localized_date'];

    public function getSluggableValue(): string
    {
        return $this->title;
    }

    public function renderedText()
    {
        return Markdown::convertToHtml($this->text);
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
        $string = strip_tags($this->text);
        if (strlen($string) > 50) {
            $stringCut = substr($string, 0, 140);
            $string = substr($stringCut, 0, strrpos($stringCut, ' ')) . '...';
        }
        return $string;
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
