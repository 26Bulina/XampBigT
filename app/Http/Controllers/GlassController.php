<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGlassRequest;
use App\Http\Requests\UpdateGlassRequest;
use App\Repositories\GlassRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class GlassController extends AppBaseController
{
    /** @var  GlassRepository */
    private $glassRepository;

    public function __construct(GlassRepository $glassRepo)
    {
        $this->glassRepository = $glassRepo;
    }

    /**
     * Display a listing of the Glass.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->glassRepository->pushCriteria(new RequestCriteria($request));
        $glasses = $this->glassRepository->all();

        return view('glasses.index')
            ->with('glasses', $glasses);
    }

    /**
     * Show the form for creating a new Glass.
     *
     * @return Response
     */
    public function create()
    {
        return view('glasses.create');
    }

    /**
     * Store a newly created Glass in storage.
     *
     * @param CreateGlassRequest $request
     *
     * @return Response
     */
    public function store(CreateGlassRequest $request)
    {
        $input = $request->all();

        $glass = $this->glassRepository->create($input);

        Flash::success('Glass saved successfully.');

        return redirect(route('glasses.index'));
    }

    /**
     * Display the specified Glass.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $glass = $this->glassRepository->findWithoutFail($id);

        if (empty($glass)) {
            Flash::error('Glass not found');

            return redirect(route('glasses.index'));
        }

        return view('glasses.show')->with('glass', $glass);
    }

    /**
     * Show the form for editing the specified Glass.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $glass = $this->glassRepository->findWithoutFail($id);

        if (empty($glass)) {
            Flash::error('Glass not found');

            return redirect(route('glasses.index'));
        }

        return view('glasses.edit')->with('glass', $glass);
    }

    /**
     * Update the specified Glass in storage.
     *
     * @param  int              $id
     * @param UpdateGlassRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGlassRequest $request)
    {
        $glass = $this->glassRepository->findWithoutFail($id);

        if (empty($glass)) {
            Flash::error('Glass not found');

            return redirect(route('glasses.index'));
        }

        $glass = $this->glassRepository->update($request->all(), $id);

        Flash::success('Glass updated successfully.');

        return redirect(route('glasses.index'));
    }

    /**
     * Remove the specified Glass from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $glass = $this->glassRepository->findWithoutFail($id);

        if (empty($glass)) {
            Flash::error('Glass not found');

            return redirect(route('glasses.index'));
        }

        $this->glassRepository->delete($id);

        Flash::success('Glass deleted successfully.');

        return redirect(route('glasses.index'));
    }
}
