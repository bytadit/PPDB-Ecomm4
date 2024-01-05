<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Rapor extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function penerimaan(): BelongsTo
    {
        return $this->belongsTo(Penerimaan::class, 'id_penerimaan');
    }
    public function nilaiPendaftar(): HasMany
    {
        return $this->hasMany(NilaiPendaftar::class, 'id_rapor');
    }
}
