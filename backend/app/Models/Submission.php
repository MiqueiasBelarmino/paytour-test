<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'desired_role',
        'schooling',
        'observations',
        'file_path',
        'file_name',
        'file_size',
        'ip_address',
        'sent_at',
    ];

    protected $casts = [
        'sent_at' => 'datetime',
    ];
}
