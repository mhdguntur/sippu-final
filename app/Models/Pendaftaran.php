<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;
    protected $table = 'pendaftaran';
    protected $guarded = ['id'];

    public function pelayanan()
    {
        return $this->belongsTo(Pelayanan::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
