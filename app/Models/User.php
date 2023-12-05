<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Contracts\Auth\MustVerifyEmail;
=======
// use Illuminate\Contracts\Auth\MustVerifyEmail;
>>>>>>> 6f63f15ae31d3258c4b56862751e4a7ffa5bf0eb
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
<<<<<<< HEAD
        'admin'
=======
>>>>>>> 6f63f15ae31d3258c4b56862751e4a7ffa5bf0eb
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
<<<<<<< HEAD

    ];
    public function duvidas(){
        return $this->hasMany(Duvida::class);
    }
    public function comentarios(){
        return $this->hasMany(Comentario::class);
    }
=======
    ];
>>>>>>> 6f63f15ae31d3258c4b56862751e4a7ffa5bf0eb
}
