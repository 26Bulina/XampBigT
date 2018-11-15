<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Glass
 * @package App\Models
 * @version October 24, 2018, 6:06 pm UTC
 *
 * @property string name
 */
class Glass extends Model
{
    use SoftDeletes;

    public $table = 'glasses';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name','tip','nr','lala'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string'
        ,'tip' => 'string'
        ,'nr' => 'string'
        ,'lala' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
