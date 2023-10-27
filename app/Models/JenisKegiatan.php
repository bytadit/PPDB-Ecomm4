<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JenisKegiatan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'jenis_kegiatan';
    public function kegiatans(): HasMany
    {
        return $this->hasMany(Kegiatan::class, 'id_jenis_kegiatan');
    }
}
