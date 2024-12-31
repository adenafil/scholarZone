<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Beasiswa extends Model
{
    protected $table = 'beasiswas';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $incrementing = true;
    public $timestamps = false;

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'beasiswa_category');
    }

    protected $fillable = [
        'title',
        'description',
        'image_url',
        'information_link',
        'enroll_link',
        'end_scholarship_date',
        'country',
        'image_header'
    ];

    public function getShortTitleAttribute()
    {
        return Str::limit($this->title, 70);
    }
    public function getShortDescriptionAttribute()
    {
        return Str::limit($this->description, 200);
    }



}
