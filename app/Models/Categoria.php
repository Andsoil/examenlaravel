<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre'
    ];
    public function librocategoria()
    {
        return $this->hasMany(LibroCategoria::class, 'categoria_id');
    }
}
