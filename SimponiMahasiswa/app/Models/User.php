<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users';
    
    public function role()
    {
        return $this->hasOne(Role::class, 'id','role_id');
    }

    public function mahasiswa(){
        return $this->belongsTo(Mahasiswa::class, "user_id", "id");
    }

    public function pengumuman(){
        return $this->belongsTo(Pengumuman::class, "user_id", "id");
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    
    public function isAdmin()
    {
        return $this->role_id == 1;
    } 

    public function isMahasiswaBaru()
    {
        return $this->role_id == 3;
    } 
    
    public function isCalonMahasiswa()
    {
        return $this->role_id == 2;
    } 
}
