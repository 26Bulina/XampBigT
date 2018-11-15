<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateWaterAPIRequest;
use App\Http\Requests\API\UpdateWaterAPIRequest;
use App\Models\Water;
use App\Repositories\WaterRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class WaterController
 * @package App\Http\Controllers\API
 */

class WaterAPIController extends AppBaseController
{
    /** @var  WaterRepository */
    private $waterRepository;

    public function __construct(WaterRepository $waterRepo)
    {
        $this->waterRepository = $waterRepo;
    }

    /**
     * Display a listing of the Water.
     * GET|HEAD /waters
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->waterRepository->pushCriteria(new RequestCriteria($request));
        $this->waterRepository->pushCriteria(new LimitOffsetCriteria($request));
        $waters = $this->waterRepository->all();

        return $this->sendResponse($waters->toArray(), 'Waters retrieved successfully');
    }

    /**
     * Store a newly created Water in storage.
     * POST /waters
     *
     * @param CreateWaterAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateWaterAPIRequest $request)
    {
        $input = $request->all();

        $waters = $this->waterRepository->create($input);

        return $this->sendResponse($waters->toArray(), 'Water saved successfully');
    }

    /**
     * Display the specified Water.
     * GET|HEAD /waters/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Water $water */
        $water = $this->waterRepository->findWithoutFail($id);

        if (empty($water)) {
            return $this->sendError('Water not found');
        }

        return $this->sendResponse($water->toArray(), 'Water retrieved successfully');
    }

    /**
     * Update the specified Water in storage.
     * PUT/PATCH /waters/{id}
     *
     * @param  int $id
     * @param UpdateWaterAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateWaterAPIRequest $request)
    {
        $input = $request->all();

        /** @var Water $water */
        $water = $this->waterRepository->findWithoutFail($id);

        if (empty($water)) {
            return $this->sendError('Water not found');
        }

        $water = $this->waterRepository->update($input, $id);

        return $this->sendResponse($water->toArray(), 'Water updated successfully');
    }

    /**
     * Remove the specified Water from storage.
     * DELETE /waters/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Water $water */
        $water = $this->waterRepository->findWithoutFail($id);

        if (empty($water)) {
            return $this->sendError('Water not found');
        }

        $water->delete();

        return $this->sendResponse($id, 'Water deleted successfully');
    }
}
