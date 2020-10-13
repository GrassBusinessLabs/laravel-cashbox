<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cashbox extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'model',
        'city',
        'number'
    ];

    protected $appends = [
        // 'balance'
        // 'full_model'
    ];

    // Accessors

    public function getFullModelAttribute()
    {
        return "$this->model $this->number";
    }

    /**
     * @return int|mixed
     */
    public function getBalanceAttribute()
    {
        // return $this->amounts->sum('total');
        return $this->amounts()->sum(DB::raw('value * quantity'));
    }


    // Relations

    /**
     * @return HasMany
     */
    public function amounts()
    {
        return $this->hasMany(Amount::class);
    }
}
