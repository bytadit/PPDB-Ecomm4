<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrangTuaPendaftar extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'pekerjaan',
        'penghasilan',
        'status',
        'gender',
        'id_pendaftar'
    ];
    public function pendaftar(): BelongsTo
    {
        return $this->belongsTo(Pendaftar::class, 'id_pendaftar');
    }
}
