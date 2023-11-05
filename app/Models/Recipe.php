<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Recipe extends Model
{
    use HasFactory;
    use Searchable;

    protected $primaryKey = 'rec_id';

    protected $fillable = ['name', 'method', 'remarks', 'left_overs', 'difficulty', 'recipe_sub_type', 'serves', 'technique', 'preamble', 'prep_time', 'cooktime', 'credit', 'cuisine', 'season', 'cost', 'variations', 'credit_public', 'priv_comments', 'abstract', 'recipe_index', 'recipe_type', 'category', 'body', 'my_ing', 'book'];   
    
    public function ingredient(): BelongsToMany
    {
        return $this->belongsToMany(Ingredient::class);
    }

    public function toSearchableArray(): array
    {
        return [
            'name' => $this->name,
            'preamble' => $this->preamble,
            'remarks' => $this->remarks,
            'credit' => $this->credit,
            'cuisine' => $this->cuisine,
            'body' => $this->body,
            'my_ing' => $this->my_ing,
            'book' => $this->book,
        ];
    }
}
