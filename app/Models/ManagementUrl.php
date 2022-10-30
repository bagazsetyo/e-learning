<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ManagementUrl extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'tb_management_url';

    protected $fillable = [
        'url',
        'method',
        'nameController',
        'fullController',
        'status'
    ];
}
