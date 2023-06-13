<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /**
     * Get the customer associated with the order.
     */
    public function customer()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the driver associated with the order.
     */
    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }
}
