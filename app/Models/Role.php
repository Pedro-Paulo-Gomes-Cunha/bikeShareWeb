<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    public function roles()
    {
       //Aqui enfatiza - se o relacionamento 1 para muitos com hasMany que nesse caso, 1 Role pode pertencer a vários Usuarios 
       return $this->hasMany(User::class, 'id_role', 'id');
    }
}
