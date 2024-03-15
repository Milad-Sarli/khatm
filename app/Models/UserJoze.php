<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserJoze extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'tenant_id', 'quantity', 'base_joze_id',
    ];

    protected $casts = [

    ];

    public function tenant(): BelongsTo
    {
        return $this->belongsTo(Tenant::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function baseJoze(): BelongsTo
    {
        return $this->belongsTo(BaseJoze::class);
    }
}
