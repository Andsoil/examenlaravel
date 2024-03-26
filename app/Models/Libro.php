<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'precio',
        'autor_id'
    ];
    public function librocategoria()
    {
        return $this->hasMany(LibroCategoria::class, 'libro_id');
    }
    public function autor()
    {
        return $this->belongsTo(Autor::class, 'autor_id');
    }
    public function usuariolibro()
    {
        return $this->hasMany   (UsuarioLibro::class, 'libro_id');
    }
}
