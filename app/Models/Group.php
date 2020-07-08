<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Group extends Model
{
    protected $table = 'groups';
    protected $fillable = [
        'plan_id',
        'name',
        'active'
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function companies()
    {
        return $this->hasMany(Company::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
}
