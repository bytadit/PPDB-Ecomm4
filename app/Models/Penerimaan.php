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
        return $this->hasMany(Biaya::class, 'id_biaya');
    }
}
