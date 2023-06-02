<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Flight extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'from_timestamp',
        'to_timestamp',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function airplane(): BelongsTo
    {
        return $this->belongsTo(Airplane::class, 'airplane_id');
    }

    public function airCarrier(): BelongsTo
    {
        return $this->belongsTo(AirCarrier::class, 'air_carrier_id');
    }

    public function fromAirport(): BelongsTo
    {
        return $this->belongsTo(Airport::class, 'from_airport_id');
    }

    public function toAirport(): BelongsTo
    {
        return $this->belongsTo(Airport::class, 'to_airport_id');
    }
}
