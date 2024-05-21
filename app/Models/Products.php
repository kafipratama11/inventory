<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'productID';
    protected $table = 'products';
    protected $fillable = [
        'product_name',
        'product_merk',
        'description',
        'price',
        'qty',
        'categoryID',
        'locationID',
    ];

    public function category()
    {
        return $this->belongsTo(Categories::class, 'categoryID');
    }

    public function location()
    {
        return $this->belongsTo(Location::class, 'locationID');
    }
    public function dtransactions()
    {
        return $this->hasMany(detail_transaction::class, 'productID');
    }
}