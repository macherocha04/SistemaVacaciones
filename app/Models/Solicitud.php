<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;
    protected $table = 'solicitudes'; // Nombre de la tabla en la base de datos

    protected $primaryKey = 'ID_solicitud'; // Nombre de la clave primaria

    /**
     * Los atributos que son asignables.
     *
     * @var array
     */
    protected $fillable = [
        'Fecha_inicio',
        'Fecha_final',
        'Estado_id',
        'motivo',
        'Solicitante_id',
        // Puedes agregar más campos aquí si es necesario
    ];

public function solicitante()
{
    return $this->belongsTo(Solicitante::class, 'Solicitante_id', 'ID_solicitante');
}


    /**
     * Relación con el contrato del solicitante.
     */
   

    /**
     * Relación con las solicitudes del solicitante.
     */

}
