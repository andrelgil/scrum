<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserContact extends Model
{
    protected $table = "users_contacts";
    protected $fillable = [
        'user_id',
        'postalcode',
        'address',
        'number',
        'complement',
        'district',
        'city',
        'state',
        'phone',
        'cell'
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
