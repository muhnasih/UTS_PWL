<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenjualanDetailModel extends Model
{
    use HasFactory;

    protected $table = 't_penjualan_detail'; // Nama tabel di database
    protected $primaryKey = 'detail_id'; // Primary key tabel

    protected $fillable = [
        'penjualan_id',
        'barang_id',
        'jumlah',
        'harga'
    ];

    protected $attributes = [
        'harga' => 0
    ];

    public function penjualan()
    {
        return $this->belongsTo(PenjualanModel::class, 'penjualan_id', 'penjualan_id');
    }

    public function barang()
    {
        return $this->belongsTo(BarangModel::class, 'barang_id', 'barang_id');
    }
}
