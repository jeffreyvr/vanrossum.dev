<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WordPressPlugin extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'wordpress_plugins';
}
