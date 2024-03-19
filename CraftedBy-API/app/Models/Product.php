<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory, HasUuids;

    public function business(): BelongsTo
    {
        return $this->belongsTo(Business::class);
    }

    public function color(): BelongsTo
    {
        return $this->belongsTo(Color::class);
    }

    public function style(): BelongsTo
    {
        return $this->belongsTo(Style::class);
    }

    protected $fillable = [
        // 'business_id',
        'name',
        'description',
        'price',
        // 'size_id',
        // 'category_id',
        // 'material_id',
        // 'style_id',
        // 'color_id',
        'stock_quantity',
        'image',
        'active',
    ];
}
