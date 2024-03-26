<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Resenia extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'descripcion'
    ];
    public function usuariolibroresenia()
    {
        return $this->hasMany(UsuarioLibroResenia::class, 'resenia_id');
    }
}
