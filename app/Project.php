<?php

namespace App;

use App\Traits\HasSlug;
use App\Interfaces\Sluggable;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model implements Sluggable
{
    use HasFactory, HasSlug, HasTranslations;

    protected $guarded = [];

    public $translatable = ['title', 'text'];

    protected $casts = [
        'publish_date' => 'datetime'
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
}
