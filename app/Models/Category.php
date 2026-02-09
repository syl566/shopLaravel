<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
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
