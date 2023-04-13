<?php

namespace App\Http\Controllers;

use App\Services\NewsService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NewsController extends Controller
{

    protected NewsService $newsService;

    /**
     * @param NewsService $newsService
     */
    public function __construct(NewsService $newsService)
    {
        $this->newsService = $newsService;
    }

    /**
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        $q = $request->get('q');

        $allNews = ($q) ?
            $this->newsService->getNewsByQuery($q) :
            $this->newsService->getAll();

        return view('home', [
            'allNews' => $allNews,
        ]);
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return view('create');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $data = $request->except('_token');

        $this->newsService->createNews($data);

        return redirect()->route('home');
    }

    /**
     * @param Request $request
     * @return View
     */
    public function show(Request $request): View
    {
        $id = $request->route('newsId');

        return view('show', [
            'news' => $this->newsService->getNewsById($id)
        ]);
    }

}
