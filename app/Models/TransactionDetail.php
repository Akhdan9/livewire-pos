<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TransactionDetail extends Model
{
    use HasFactory;

    /**
     * fillable
     */
    protected $fillable = ['transaction_id', 'product_id', 'quantity', 'price'];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }

    /**
     * relation to products table
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
