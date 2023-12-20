<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Seleksi extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'seleksi';

    public function pendaftar(): BelongsTo
    {
        return $this->belongsTo(Seleksi::class, 'id_pendaftar');
    }
}
