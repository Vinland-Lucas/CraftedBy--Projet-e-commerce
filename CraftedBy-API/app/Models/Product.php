<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory, HasUuids;

    public function business(): BelongsTo
    {
        return $this->belongsTo(Business::class);
    }

    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(Order::class);
    }

    protected $fillable = [
        'business_id',
        'name',
        'description',
        'price',
         'size',
         'category',
         'material',
         'style',
         'color',
        'image',
        'active',
        'stock_quantity',
    ];
}
