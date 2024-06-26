<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ShoppingCartDetail extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function item(): BelongsTo
    {
        return $this->belongsTo(Item::class)->withTrashed();
    }
    public function shoppingCart(): BelongsTo
    {
        return $this->belongsTo(ShoppingCart::class);
    }
}
