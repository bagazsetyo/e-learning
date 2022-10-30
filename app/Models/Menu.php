<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'tb_menu';

    protected $fillable = [
        'name',
        'icon',
        'url',
        'parent_id',
        'order',
        'status',
        'created_by',
        'updated_by',
        'deleted_by',
        'deleted_at'
    ];

    public function parent()
    {
        return $this->hasMany(Menu::class, 'parent_id');
    }
}
