<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;


class Group extends Model
{
    use HasFactory;

    protected $table = 'tb_group_menu';

    protected $fillable = [
        'nama',
        'cache_group'
    ];
}
