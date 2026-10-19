<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
    protected $fillable = ['product_id', 'author_name', 'rating', 'comment', 'is_verified_buyer'];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}