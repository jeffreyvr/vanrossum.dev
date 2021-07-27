<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopePublished($query)
    {
        $query->where('status', 'published');

        return $query;
    }

    public function getUrl()
    {
        return route('products.show',['slug' => $this->slug]);
    }

    public function getBuyUrl()
    {
        return $this->buy_url;
    }

    public function getLongDescription()
    {
        return Markdown::convertToHtml($this->long_description);
    }

    public function getFormattedPrice()
    {
        $format = new \NumberFormatter(app()->getLocale(), \NumberFormatter::CURRENCY);

        return $format->formatCurrency($this->price, $this->currency);
    }
}
