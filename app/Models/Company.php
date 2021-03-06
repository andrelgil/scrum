<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';
    protected $fillable = [
        'group_id',
        'company',
        'name',
        'cnpj',
        'ie'
    ];

    public function groups()
    {
        return $this->belongsTo(Group::class);
    }
}


