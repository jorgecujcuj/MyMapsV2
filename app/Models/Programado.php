<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Programado
 *
 * @property $id
 * @property $idsolicitud
 * @property $operador
 * @property $estado
 * @property $idfinca
 * @property $idunidad
 * @property $salida
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Programado extends Model
{
    
    static $rules = [
		'idsolicitud' => 'required',
		'operador' => 'required',
		'estado' => 'required',
		'idfinca' => 'required',
		'idunidad' => 'required',
		'salida' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idsolicitud','operador','estado','idfinca','idunidad','salida'];



}
