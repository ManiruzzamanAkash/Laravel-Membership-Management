<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'custom_id',
        'nid',
        'status',
        'created_by',
        'updated_by',
        'deleted_by'
    ];
}
