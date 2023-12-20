<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Dokumen extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'dokumen';

    public function penerimaan(): BelongsTo
    {
        return $this->belongsTo(Penerimaan::class, 'id_penerimaan');
    }
    public function dokumenPendaftaran(): HasMany
    {
        return $this->hasMany(DokumenPendaftar::class, 'id_dokumen');
    }
}
