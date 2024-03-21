<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Size extends Model
{
    use HasFactory, HasUuids;

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    protected $fillable = [
        'height',
        'width',
        'depth',
        'capacity',
    ];
}
