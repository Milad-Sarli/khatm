<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UsedJoze extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'tenant_id', 'base_joze_id', 'quantity', 'date',
    ];

    protected $casts = [

    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function tenant(): BelongsTo
    {
        return $this->belongsTo(Tenant::class);
    }

    public function baseJoze(): BelongsTo
    {
        return $this->belongsTo(BaseJoze::class);
    }
}
