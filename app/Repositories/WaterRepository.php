<?php

namespace App\Repositories;

use App\Models\Water;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class WaterRepository
 * @package App\Repositories
 * @version October 24, 2018, 4:38 pm UTC
 *
 * @method Water findWithoutFail($id, $columns = ['*'])
 * @method Water find($id, $columns = ['*'])
 * @method Water first($columns = ['*'])
*/
class WaterRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'quantity',
        'description'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Water::class;
    }
}
