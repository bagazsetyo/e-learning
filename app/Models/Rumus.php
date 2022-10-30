<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rumus extends Model
{
    use HasFactory;

    protected $table = 'tb_rumus';

    protected $fillable = [
        'id_mapel', 
        'judul', 
        'input', 
        'rumus', 
        'contoh',
    ];

    public function mapel()
    {
        return $this->belongsTo(Mapel::class, 'id_mapel');
    }
}
