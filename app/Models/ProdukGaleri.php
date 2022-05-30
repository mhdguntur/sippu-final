<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukGaleri extends Model
{
    use HasFactory;
    protected $table = 'produk_galeri';
    protected $guarded = ['id'];
    protected $with = 'produk';

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }
}
