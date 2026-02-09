<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = ['id','name', 'slug'];
    protected $casts = [
        'price' => 'decimal:2',
        'active' => 'boolean',
    ];
    protected $guarded = [
        'created_at',
        'updated_at',
    ];
    //
    public static function find(string $id)
    {
        return self::where('id', $id)->first();
    }
}
