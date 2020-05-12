<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Relation One to Many
    public function quotes() 
    {
        return $this->hasMany('App\Models\Quote');
    }

    // Relation One to Many
    public function abouts() 
    {
        return $this->hasMany('App\Models\About');
    }

    // Relation One to Many
    public function artikels() 
    {
        return $this->hasMany('App\Models\Artikel');
    }
}
