<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Photo extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['photo_name', 'folder3', 'folder2', 'credit','copyright','caption','title','meta-tags','link_hr','link_lr','x_dimension','y_dimension','link_best','ppageid','outer_folder'];
}
