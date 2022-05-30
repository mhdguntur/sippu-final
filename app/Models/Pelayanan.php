<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelayanan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'pelayanan';
    protected $with = 'pendaftaran';

    public function pendaftaran()
    {
        return $this->hasMany(Pendaftaran::class);
    }
}
