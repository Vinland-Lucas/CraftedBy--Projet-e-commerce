<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class City extends Model
{
    use HasFactory, HasUuids;

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function businesses(): HasMany
    {
        return $this->hasMany(Business::class);
    }

    protected $fillable = [
        'name'
    ];
}
