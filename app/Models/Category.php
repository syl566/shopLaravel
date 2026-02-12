<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    /**
     * Une catégorie a plusieurs produits
     */
    public function products(): HasMany
    {
        return $this->hasMany(Products::class);
    }
    //toutes les colonnes de ta table seront assignées en masse
    protected $table = 'categories';
    protected $fillable = ['name', 'slug'];
    protected $casts = [
        'price' => 'decimal:2',
        'active' => 'boolean',
    ];
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];
}
