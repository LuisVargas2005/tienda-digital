<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Inventory extends Model
{
    protected $primaryKey = 'inventory_id'; // ← Agregado
    public $incrementing = true;            // ← Agregado (porque es autoincremental)
    protected $keyType = 'int';             // ← Agregado (porque es bigint)

    protected $fillable = ["product_id", "current_quantity", "last_updated"];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
