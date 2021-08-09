<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Finca
 *
 * @property $idfinca
 * @property $codigo
 * @property $nombre
 * @property $idruta
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Finca extends Model
{
    
    static $rules = [
    
		'codigo' => 'required',
		'nombre' => 'required',
    'idruta' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo','nombre','idruta'];



}
