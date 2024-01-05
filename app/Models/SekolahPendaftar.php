<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SekolahPendaftar extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function pendaftar(): BelongsTo
    {
        return $this->belongsTo(Pendaftar::class, 'id_pendaftar');
    }
}
