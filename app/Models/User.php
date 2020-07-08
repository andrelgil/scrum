<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $fillable = [
        'group_id',
        'name',
        'cpf',
        'rg',
        'username',
        'email',
        'password',
        'hash',
        'admin'
    ];

    public function users_contacts()
    {
        return $this->hasOne(UserContact::class);
    }
}
