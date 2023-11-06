<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitante extends Model
{
    use HasFactory;
    protected $table = 'solicitantes'; // Nombre de la tabla en la base de datos

    protected $primaryKey = 'ID_solicitante'; // Nombre de la clave primaria

    /**
     * Los atributos que son asignables.
     *
     * @var array
     */
    protected $fillable = [
        'Nombre',
        'Cedula',
        'Telefono',
        'Correo',
        'Direccion',
        'Ocupacion_id',
        
        // Puedes agregar más campos aquí si es necesario
    ];
    public function contrato()
    {
        return $this->belongsTo(Contrato::class, 'Contrato_id', 'ID_contrato');
    }
    
  
    public function ocupacion()
{
    return $this->belongsTo(Ocupacion::class, 'Ocupacion_id', 'ID_ocupacion');
}
   

    public function Solicitud()
    {
        return $this->hasMany(Solicitud::class, 'ID_solicitante', 'ID_solicitante');
    }

 
}
