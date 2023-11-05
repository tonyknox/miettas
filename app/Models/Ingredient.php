<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Ingredient extends Model
{
    use HasFactory;
    use Searchable;

    protected $primaryKey = 'ing_id';

    protected $fillable = ['ingredient', 'season', 'availability', 'info','alt_name', 'cuisine', 'ing_type', 'synonym', 'substitute'];

    public function recipe(): BelongsToMany
    {
        return $this->belongsToMany(Recipe::class);
    }

    public function toSearchableArray(): array
    {
        return [
            'ingredient' => $this->ingredient,
            'season' => $this->season,
            'info' => $this->info,
            'alt_name' => $this->alt_name,
            'cuisine' => $this->cuisine,
        ];
    }

}
