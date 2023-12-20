<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Penerimaan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'penerimaan';

    public function jenjang(): BelongsTo
    {
        return $this->belongsTo(Jenjang::class, 'id_jenjang');
    }
    public function jalur(): BelongsTo
    {
        return $this->belongsTo(Jalur::class, 'id_jalur');
    }
    public function biayas(): HasMany
    {
        return $this->hasMany(Biaya::class, 'id_penerimaan');
    }
    public function dokumens(): HasMany
    {
        return $this->hasMany(Dokumen::class, 'id_penerimaan');
    }
    public function persyaratans(): HasMany
    {
        return $this->hasMany(Persyaratan::class, 'id_penerimaan');
    }
    public function kegiatans(): HasMany
    {
        return $this->hasMany(Kegiatan::class, 'id_penerimaan');
    }
    public function pendaftars(): HasMany
    {
        return $this->hasMany(Pendaftar::class, 'id_penerimaan');
    }
}
