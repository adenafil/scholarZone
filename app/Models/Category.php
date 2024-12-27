<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $primaryKey= 'id';
    protected $keyType = 'int';
    public $incrementing = true;
    public $timestamps = false;

    public function beasiswas(): BelongsToMany {
        return $this->belongsToMany(Beasiswa::class, 'beasiswa_category');
    }

    protected $fillable = [
        'name'
    ];

}
