<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ocupacion extends Model
{
    use HasFactory;
    protected $table = 'ocupacion'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'ID_ocupacion'; // Nombre de la clave primaria

    protected $fillable = [
        'Nombre',
        // Puedes agregar más campos aquí si es necesario
    ];
  
    public function solicitantes()
    {
        return $this->hasMany(Solicitante::class, 'Ocupacion_id', 'ID_ocupacion');
    }
 
}
