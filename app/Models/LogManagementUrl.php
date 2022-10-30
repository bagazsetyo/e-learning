<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogManagementUrl extends Model
{
    use HasFactory;

    protected $table = 'log_management_url';

    protected $fillable = [
        'management_url_id',
        'old_value',
        'new_value',
        'update_by',
    ];

}
