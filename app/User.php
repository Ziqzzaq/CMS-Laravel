<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\ResetPassword as ResetPasswordNotification;
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

    /*
     * Użytkownik jest autorem wielu artykułów
     */
    public function articles()
    {
        return $this->hasMany('App\Article');
    }
    public function sendPasswordResetNotification($token)
    {
        // My own implementation.
        $this->notify(new ResetPasswordNotification($token));
    }
}
