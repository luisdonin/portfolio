<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class GitHubService
{
    protected string $username;
    protected ?string $token;
    protected string $apiBase = 'https://api.github.com';

    public function __construct()
    {
        $this->username = config('github.username', 'luisdonin');
        $this->token = config('github.token');
    }

    public function getRepositories(): array
    {
        $cacheKey = "github_repos_{$this->username}";

        return Cache::remember($cacheKey, 3600, function () {
            return $this->fetchRepositories();
        });
    }

    protected function fetchRepositories(): array
    {
        try {
            $request = Http::withUserAgent('Laravel-Portfolio-App')
                ->accept('application/vnd.github.v3+json');

            if ($this->token) {
                $request = $request->withToken($this->token);
            }

            $response = $request->get("{$this->apiBase}/users/{$this->username}/repos", [
                'per_page' => 100,
                'sort' => 'updated',
                'direction' => 'desc',
                'type' => 'public',
            ]);

            if ($response->successful()) {
                $repos = $response->json();
                return $this->transformRepositories($repos);
            }

            return [];
        } catch (\Exception $e) {
            report($e);
            return [];
        }
    }

    protected function transformRepositories(array $repos): array
    {
        return collect($repos)
            ->filter(fn ($repo) => !$repo['fork'])
            ->sortByDesc('stargazers_count')
            ->map(fn ($repo) => [
                'name' => $repo['name'],
                'description' => $repo['description'] ?? '',
                'language' => $repo['language'] ?? null,
                'stars' => $repo['stargazers_count'],
                'forks' => $repo['forks_count'],
                'updated_at' => $repo['updated_at'],
                'url' => $repo['html_url'],
                'topics' => $repo['topics'] ?? [],
            ])
            ->values()
            ->toArray();
    }
}
