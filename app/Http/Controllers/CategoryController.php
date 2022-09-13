<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\Foundation\Application;

class CategoryController extends Controller
{
    private Collection $categories;
    private array $isActive;

    public function __construct()
    {
        $this->categories = Category::all();
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
        $categories = $this->categories;
        $isActive = $this->isActive;
        return view('Admin.category.index', compact('categories', 'isActive'));

    }

    /**
     * @return Application|Factory|View
     */
    public function create(): Application|Factory|View
    {
        $isActive = $this->isActive;
        return view('Admin.category.create', compact('isActive'));
    }

    /**
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(Request $request): Redirector|RedirectResponse|Application
    {
        Category::create($request->all());
        return redirect(route('category.index'));
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
        $category = Category::find($id);
        return view('Admin.category.edit', compact('isActive', 'category'));

    }

    /**
     * @param Request $request
     * @param $id
     * @return Application|RedirectResponse|Redirector
     */
    public function update(Request $request, $id): Redirector|Application|RedirectResponse
    {
        $category = Category::find($id);
        $category->update($request->all());
        return redirect(route('category.index'));

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
