<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Quantity extends Model
{
    use HasFactory;
    use Searchable;

    protected $primaryKey = 'qid';

    protected $fillable = ['ingredient_id', 'recipe_rid', 'qty', 'unit', 'before_ing', 'description', 'after_ing'];



}
