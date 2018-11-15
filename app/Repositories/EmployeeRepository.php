<?php

namespace App\Repositories;

use App\Models\Employee;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EmployeeRepository
 * @package App\Repositories
 * @version November 11, 2018, 12:12 am UTC
 *
 * @method Employee findWithoutFail($id, $columns = ['*'])
 * @method Employee find($id, $columns = ['*'])
 * @method Employee first($columns = ['*'])
*/
class EmployeeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'data_angajare',
        'cnp',
        'user_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Employee::class;
    }
}
