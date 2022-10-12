<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Webmention extends Model
{
    protected $guarded = [];

    public function getTypeActionLabel()
    {
        if ($this->type == 'like-of') {
            return __('Liked');
        } elseif ($this->type == 'in-reply-to') {
            return __('Replied');
        } elseif ($this->type == 'repost-of') {
            return __('Reposted');
        }

        return null;
    }
}
