<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Transactions extends Model
{
    use HasFactory;

    protected $primaryKey = 'transactionID';

    protected $fillable = [
        'total_payment',
        'transaction_date'
    ];

    public function getFormattedDateAttribute()
    {
        return Carbon::parse($this->attributes['transaction_date'])->format('d/m/Y');
    }

    public function dtransactions()
    {
        return $this->hasMany(detail_transaction::class, 'transactionID');
    }
}