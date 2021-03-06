<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    const ADMIN_ROLE_ID = '1';
    const CUSTOMER_ROLE_ID = '2';

    protected $hidden = [
        'description',
        'created_at',
        'updated_at'
    ];

}
