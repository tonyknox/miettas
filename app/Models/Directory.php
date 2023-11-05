<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Directory extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['name', 'title', 'meta', 'col_1', 'col_2', 'col_3'];



}