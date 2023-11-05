<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Mymethod extends Model
{
    use HasFactory;
    use Searchable;

    protected $primaryKey = 'meth_id';

    protected $fillable = ['name', 'method', 'link_string', 'method_type'];



}
