<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    protected $primaryKey = 'payment_id';

    protected $fillable = [
        'user_id',
        'method',
        'amount',
        'status',
        'payment_date',
        // Puedes agregar 'created_at' y 'updated_at' si los estás seteando manualmente
    ];
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
