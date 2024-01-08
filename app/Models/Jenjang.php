<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Jenjang extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'jenjang';

    public function penerimaans(): HasMany
    {
        return $this->hasMany(Penerimaan::class, 'id_jenjang');
    }
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'admin_jenjang', 'jenjang_id', 'user_id');
    }
}
