<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    protected $fillable = [
        'customer_name',
        'customer_phone',
        'whatsapp_link',
        'status'
    ];

    public function items()
    {
        return $this->hasMany(TransactionItems::class);
    }
}
