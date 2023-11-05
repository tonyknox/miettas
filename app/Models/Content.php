<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Content extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['name', 'category', 'title', 'meta', 'body', 'abstract', 'show_hide', 'html_name', 'subject', 'article', 'images'];



}
