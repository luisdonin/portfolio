<?php

namespace App\Http\Controllers;

use App\Services\GitHubService;
use Illuminate\View\View;

class PortfolioController extends Controller
{
    public function __construct(protected GitHubService $gitHubService)
    {
    }

    public function index(): View
    {
        $repositories = $this->gitHubService->getRepositories();

        $languages = collect($repositories)
            ->pluck('language')
            ->filter()
            ->unique()
            ->sort()
            ->values()
            ->toArray();

        return view('portfolio', compact('repositories', 'languages'));
    }
}
