<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Repositories\PageRepository;

class FrontendController extends Controller
{
    public function __construct(PageRepository $pageRepository) {
        return $this->repository = $pageRepository;
    }

    //
    public function index() {
        return view('welcome', ['pages' => $this->repository->allPages()]);
        // $pages = Page::where('published', true)->get();
        // return view('welcome', compact('pages'));
    }
    public function page($slug) {
        // $page = Page::where('slug', $slug)->first();
        $page = Page::forSlug($slug)->first();
        return view('page', compact('page'));
    }
}
