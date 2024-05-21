<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_transaction extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'DtransactionID';
    protected $table = 'detail_transactions';

    protected $fillable = [
        'transactionID',
        'productID',
        'amount',
        'price',
        // tambahkan field lain yang sesuai
    ];


    public function transaction()
    {
        return $this->belongsTo(Transactions::class, 'transactionID');
    }

    public function product()
    {
        return $this->belongsTo(Products::class, 'productID');
    }
}