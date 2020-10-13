<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Amount extends Model
{
    use HasFactory;

    const VALUES = [
        '5',
        '10',
        '20',
        '50',
        '100',
        '200',
        '500',
        '1000'
    ];

    // Accessors

    /**
     * @return float|int
     */
    public function getTotalAttribute()
    {
        return (int)$this->value * $this->quantity;
    }

    // Relations

    /**
     * @return BelongsTo
     */
    public function cashbox()
    {
        return $this->belongsTo(Cashbox::class);
    }
}
