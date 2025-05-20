<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    protected $fillable = ["name", "description", "price", "image_url", "category_id", "minimum_stock", "state"];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
