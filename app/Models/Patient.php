<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Patient extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'dob',
        'email',
        'phone',
        'gender',
        'weight',
        'height'
    ];

    /**
     * Get all of the observations for the Patient
     *
     * @return HasMany
     */
    public function observations(): HasMany
    {
        return $this->hasMany(Observation::class);
    }
}
