<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pendaftar extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'pendaftar';

    public function penerimaan(): BelongsTo
    {
        return $this->belongsTo(Penerimaan::class, 'id_penerimaan');
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    public function pembayarans(): HasMany
    {
        return $this->hasMany(Pembayaran::class, 'id_pendaftar');
    }
    public function seleksis(): HasMany
    {
        return $this->hasMany(Seleksi::class, 'id_pendaftar');
    }

}
