<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="empleado",
 *      required={"nombre", "apellido", "cedula", "tipo", "telefono"},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="nombre",
 *          description="nombre",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="apellido",
 *          description="apellido",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="cedula",
 *          description="cedula",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="tipo",
 *          description="tipo",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="telefono",
 *          description="telefono",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="created_at",
 *          description="created_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="updated_at",
 *          description="updated_at",
 *          type="string",
 *          format="date-time"
 *      )
 * )
 */
class empleado extends Model
{
    use SoftDeletes;

    public $table = 'empleados';
    

    protected $dates = ['deleted_at'];


    //hasMany----------------------------------
    public function rutas()
    {
        return $this->hasMany('App\Models\ruta');
    }

    public $fillable = [
        'nombre',
        'apellido',
        'cedula',
        'tipo',
        'telefono'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'apellido' => 'string',
        'cedula' => 'string',
        'tipo' => 'string',
        'telefono' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'apellido' => 'required',
        'cedula' => 'required',
        'tipo' => 'required',
        'telefono' => 'required'
    ];
}
