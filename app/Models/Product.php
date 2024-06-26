<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function merchant()
    {
        return $this->belongsTo(Merchant::class, 'merchant_id');
    }
    protected $fillable = [
        'nama', 
        'gambar',
        'berat',
        'harga',
        'stok',
        'kondisi',
        'deskripsi',
    ];
    public $timestamps = false;
}
