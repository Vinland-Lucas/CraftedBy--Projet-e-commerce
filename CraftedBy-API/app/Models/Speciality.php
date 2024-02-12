<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Speciality extends Model
{
    use HasFactory, HasUuids;

    public function businesses(): BelongsToMany
    {
        return $this->belongsToMany(Business::class);
    }

    protected $fillable = [
        'name',
    ];
}
