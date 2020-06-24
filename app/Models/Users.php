<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';
    protected $fillable = [
        'group_id',
        'name',
        'cpf',
        'rg',
        'username',
        'email',
        'password'
    ];

    public function users()
    {
        return $this->hasMany(Group::class);
    }
}
