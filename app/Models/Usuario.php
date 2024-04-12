<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

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
