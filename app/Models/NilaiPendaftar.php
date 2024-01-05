<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class NilaiPendaftar extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function pendaftar(): BelongsTo
    {
        return $this->belongsTo(Pendaftar::class, 'id_pendaftar');
    }
    public function rapor(): BelongsTo
    {
        return $this->belongsTo(Rapor::class, 'id_rapor');
    }
}
