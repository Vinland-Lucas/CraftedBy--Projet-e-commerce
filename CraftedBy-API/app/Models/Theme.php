<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Theme extends Model
{
    use HasFactory, HasUuids;

    public function businesses(): HasMany
    {
        return $this->hasMany(Business::class);
    }

    protected $fillable = [
        'name',
        'layer',
        'color_hex_1',
        'color_hex_2',
    ];
}
