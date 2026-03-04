<?php

if (! function_exists('langColor')) {
    /**
     * Return a hex color for a given programming language name.
     */
    function langColor(string $lang): string
    {
        $colors = [
            'PHP' => '#4F5D95',
            'JavaScript' => '#f1e05a',
            'TypeScript' => '#2b7489',
            'Python' => '#3572A5',
            'Java' => '#b07219',
            'Ruby' => '#701516',
            'Go' => '#00ADD8',
            'Rust' => '#dea584',
            'C' => '#555555',
            'C++' => '#f34b7d',
            'C#' => '#178600',
            'Swift' => '#ffac45',
            'Kotlin' => '#F18E33',
            'HTML' => '#e34c26',
            'CSS' => '#563d7c',
            'Shell' => '#89e051',
            'Blade' => '#f7523f',
        ];

        return $colors[$lang] ?? '#6b7280';
    }
}
