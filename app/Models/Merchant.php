<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    protected $fillable = [
        'nama', 
        'gambar',
        'berat',
        'harga',
        'stok',
        'kondisi',
        'deskripsi',
    ];
    public function product()
    {
        return $this->hasOne(Product::class);
    }
    public $timestamps = false;
}
