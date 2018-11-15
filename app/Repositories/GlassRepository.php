<?php

namespace App\Repositories;

use App\Models\Glass;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class GlassRepository
 * @package App\Repositories
 * @version October 24, 2018, 6:06 pm UTC
 *
 * @method Glass findWithoutFail($id, $columns = ['*'])
 * @method Glass find($id, $columns = ['*'])
 * @method Glass first($columns = ['*'])
*/
class GlassRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Glass::class;
    }
}
