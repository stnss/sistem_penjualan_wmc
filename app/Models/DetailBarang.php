<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailBarang extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['barang_id', 'satuan', 'stock', 'harga'];

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
}
