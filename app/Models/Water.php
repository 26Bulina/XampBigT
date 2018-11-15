<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Water
 * @package App\Models
 * @version October 24, 2018, 4:38 pm UTC
 *
 * @property string quantity
 * @property string description
 */
class Water extends Model
{
    use SoftDeletes;

    public $table = 'waters';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'quantity',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'quantity' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'quantity' => 'required'
    ];

    
}
