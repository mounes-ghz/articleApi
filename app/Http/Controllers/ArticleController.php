<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Status;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Foundation\Application;

class ArticleController extends Controller
{
    private array $isActive;
    private $statuses;
    private $categories;
    private Collection $articles;
    private $users;

    public function __construct()
    {
        $this->users = User::pluck('name', 'id');
        $this->isActive = [
            '0' => 'غیر فعال ',
            '1' => 'فعال'
        ];
        $this->statuses = Status::isActiveFilter()->pluck('title', 'id');
        $this->categories = Category::isActiveFilter()->pluck('title', 'id');
        $this->articles = Article::with(['categoryRelation', 'statusRelation', 'userRelation'])->orderByDesc('id')->get();

    }

    /**
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        $isActive = $this->isActive;
        $articles = $this->articles;
        return view('Admin.article.index', compact('articles', 'isActive'));

    }

    /**
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        $isActive = $this->isActive;
        $statuses = $this->statuses;
        $categories = $this->categories;
        $users = $this->users;
        return view('Admin.article.create', compact('statuses', 'categories', 'users', 'isActive'));

    }

    /**
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(Request $request): Redirector|RedirectResponse|Application
    {
        Article::create($request->all());
        return redirect(route('article.index'));
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
        $article=Article::find($id);
        $isActive = $this->isActive;
        $statuses = $this->statuses;
        $categories = $this->categories;
        $users = $this->users;
        return view('Admin.article.edit', compact('statuses', 'categories','article', 'users', 'isActive'));

    }

    /**
     * @param Request $request
     * @param $id
     * @return Application|RedirectResponse|Redirector
     */
    public function update(Request $request, $id): Redirector|RedirectResponse|Application
    {
        $article=Article::find($id);
        $article->update($request->all());
        return redirect(route('article.index'));

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
