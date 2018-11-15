<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class user
 * @package App\Models
 * @version November 10, 2018, 9:36 pm UTC
 *
 * @property string name
 * @property string email
 * @property string password
 * @property string remember_token
 */
class user extends Model
{
    use SoftDeletes;

    public $table = 'users';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'email',
        'password',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'email' => 'string',
        'password' => 'string',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required'
    ];

    
}
