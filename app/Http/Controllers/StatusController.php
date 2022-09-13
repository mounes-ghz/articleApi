<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Foundation\Application;

class StatusController extends Controller
{
    private Collection $statuses;

    public function __construct()
    {
        $this->statuses = Status::all();
        $this->isActive = [
            '0' => 'غیر فعال ',
            '1' => 'فعال'
        ];

    }

    /**
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        $isActive = $this->isActive;
        $statuses = $this->statuses;
        return view('Admin.status.index', compact('statuses', 'isActive'));
    }

    /**
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        $isActive = $this->isActive;
        return view('Admin.status.create', compact('isActive'));
    }

    /**
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(Request $request): Redirector|RedirectResponse|Application
    {
        Status::create($request->all());
        return redirect(route('status.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * @param $id
     * @return Application|Factory|View
     */
    public function edit($id): View|Factory|Application
    {
        $isActive = $this->isActive;
        $status = Status::find($id);
        return view('Admin.status.edit', compact('isActive','status'));

    }

    /**
     * @param Request $request
     * @param $id
     * @return Application|RedirectResponse|Redirector
     */
    public function update(Request $request, $id): Redirector|RedirectResponse|Application
    {
        $status = Status::find($id);
        $status->update($request->all());
        return redirect(route('status.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
