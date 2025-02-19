<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'full_name',
        'phone_number',
        'address',
        'city',
        'education_level',
        'major',
        'year_of_entry',
        'email',
        'password',
        'picture_url',
        'nik',
        'gender',
        'guardian_name',
        'parent_occupation',
        'school_name',
        'year_of_graduation',
        'latest_gpa',
        'student_id_card',
        'kartu_keluarga',
        'transkrip_nilai_terakhir',
        'ijazah_terakhir',
        'portofolio',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
