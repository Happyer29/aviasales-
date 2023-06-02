<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Airplane extends Model
{
    use HasFactory;

    public function airplaneModel(): BelongsTo
    {
        return $this->belongsTo(AirplaneModel::class, 'id');
    }
}
