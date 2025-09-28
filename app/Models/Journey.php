<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Journey extends Model
{
    /** @use HasFactory<\Database\Factories\JourneyFactory> */
    use HasFactory;

    public function records(): HasMany
    {
        return $this->hasMany(Record::class);
    }
}
