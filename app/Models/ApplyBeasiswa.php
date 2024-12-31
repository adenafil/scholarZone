<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ApplyBeasiswa extends Model
{
    protected $table = 'apply_beasiswas';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $incrementing = true;
    public $timestamps = true;

    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'user_id', 'id');
    }

    public function beasiswa(): HasMany
    {
        return $this->hasMany(Beasiswa::class, 'id', 'beasiswa_id');
    }

}
