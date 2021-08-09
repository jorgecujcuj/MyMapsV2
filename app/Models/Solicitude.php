<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Solicitude
 *
 * @property $id
 * @property $idunidad
 * @property $idfinca
 * @property $idpiloto
 * @property $telefono
 * @property $observacion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Solicitude extends Model
{
    
    static $rules = [
		'idunidad' => 'required',
		'idfinca' => 'required',
		'idpiloto' => 'required',
		'telefono' => 'required',
		'observacion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idunidad','idfinca','idpiloto','telefono','observacion'];



}
