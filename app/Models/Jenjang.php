<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Jenjang extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'jenjang';

    public function penerimaans(): HasMany
    {
        return $this->hasMany(Penerimaan::class, 'id_jenjang');
    }

}
