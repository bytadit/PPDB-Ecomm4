<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Jalur extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'jalur';

    public function penerimaans(): HasMany
    {
        return $this->hasMany(Penerimaan::class, 'id_jalur');
    }
}
