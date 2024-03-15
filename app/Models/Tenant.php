<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tenant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'domain', 'status',
    ];

    protected $casts = [

    ];

    public function userJozes(): HasMany
    {
        return $this->hasMany(UserJoze::class);
    }

    public function usedJozes(): HasMany
    {
        return $this->hasMany(UsedJoze::class);
    }

    public function khatms(): HasMany
    {
        return $this->hasMany(Khatm::class);
    }

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
