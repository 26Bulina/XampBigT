<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Employee
 * @package App\Models
 * @version November 11, 2018, 12:12 am UTC
 *
 * @property string name
 * @property date data_angajare
 * @property integer cnp
 * @property integer user_id
 */
class Employee extends Model
{
    use SoftDeletes;

    public $table = 'employees';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'data_angajare',
        'cnp',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'data_angajare' => 'date',
        'cnp' => 'integer',
        'user_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'cnp' => 'required'
    ];

    
}
