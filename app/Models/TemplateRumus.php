<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TemplateRumus extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $table = 'tb_tamplate_rumus';
    
    protected $fillable = [
        'judul', 
        'tipe', 
        'kode', 
        'status'
    ];
}
