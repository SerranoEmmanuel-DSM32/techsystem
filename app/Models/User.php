<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    
    protected $table = 'tb_usuarios';
    protected $fillable = [
        'nombre',
        'ap_pat',
        'ap_mat',
        'edad',
        'genero',
        'email',
        'password',
    ];
    protected $hidden = [
        'password',
    ];
}
