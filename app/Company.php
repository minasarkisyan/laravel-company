<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Company extends Authenticatable
{
    use Notifiable;


    protected $table = 'company';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'image',
        'comment',
        'email',
        'password',
    ];

    /**
     *@var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     *@var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

}
