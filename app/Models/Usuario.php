<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends Model

{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'nombre',
        'contrasenia'
    ];
    public function usuariolibro()
    {
        return $this->hasMany(UsuarioLibro::class, 'usuario_id');
    }
}
