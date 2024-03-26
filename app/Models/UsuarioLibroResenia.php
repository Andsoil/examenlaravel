<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioLibroResenia extends Model
{
    use HasFactory;
    protected $fillable = [
        'ususario_libro_id',
        'resenia_id'
    ];
    public function resenia()
    {
        return $this->belongsTo(Resenia::class, 'resenia_id');
    }
    public function usuariolibro()
    {
        return $this->belongsTo(UsuarioLibro::class, 'usuario_libro_id');
    }
}
