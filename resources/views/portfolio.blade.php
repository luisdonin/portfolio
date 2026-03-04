@extends('layouts.app')

@section('content')

<!-- Header / Hero -->
<header class="bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-500 dark:from-indigo-800 dark:via-purple-800 dark:to-pink-700 text-white">
    <div class="max-w-6xl mx-auto px-4 py-16 sm:py-24">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-6">
            <div>
                <h1 class="text-4xl sm:text-5xl font-bold tracking-tight">José Luis B. Donin</h1>
                <p class="mt-3 text-lg sm:text-xl text-indigo-100">Computer Engineering Student at UTFPR – Toledo</p>
                <p class="mt-2 text-indigo-200 max-w-xl">
                    Passionate about building software. Here are my open-source projects on GitHub.
                </p>
                <div class="mt-6 flex gap-4">
                    <a href="https://github.com/luisdonin"
                       target="_blank" rel="noopener noreferrer"
                       class="inline-flex items-center gap-2 bg-white/20 hover:bg-white/30 transition rounded-lg px-4 py-2 text-sm font-medium">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 .5C5.65.5.5 5.65.5 12c0 5.1 3.3 9.43 7.88 10.96.58.1.79-.25.79-.56v-2.16c-3.2.7-3.87-1.39-3.87-1.39-.52-1.33-1.28-1.68-1.28-1.68-1.04-.72.08-.7.08-.7 1.15.08 1.76 1.18 1.76 1.18 1.02 1.75 2.68 1.24 3.33.95.1-.74.4-1.24.72-1.53-2.55-.29-5.24-1.28-5.24-5.68 0-1.25.45-2.28 1.18-3.08-.12-.29-.51-1.46.11-3.04 0 0 .97-.31 3.17 1.18a11.05 11.05 0 0 1 5.78 0c2.2-1.49 3.16-1.18 3.16-1.18.63 1.58.24 2.75.12 3.04.74.8 1.18 1.83 1.18 3.08 0 4.41-2.69 5.38-5.26 5.67.41.35.78 1.05.78 2.12v3.14c0 .31.21.67.8.56A10.51 10.51 0 0 0 23.5 12C23.5 5.65 18.35.5 12 .5z"/></svg>
                        GitHub
                    </a>
                    <a href="https://www.linkedin.com/in/jos%C3%A9-luis-b-donin-a78b10196/"
                       target="_blank" rel="noopener noreferrer"
                       class="inline-flex items-center gap-2 bg-white/20 hover:bg-white/30 transition rounded-lg px-4 py-2 text-sm font-medium">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0H5C2.24 0 0 2.24 0 5v14c0 2.76 2.24 5 5 5h14c2.76 0 5-2.24 5-5V5c0-2.76-2.24-5-5-5zM8 19H5V8h3v11zm-1.5-12.27c-.97 0-1.75-.79-1.75-1.76S5.53 3.21 6.5 3.21c.96 0 1.75.79 1.75 1.76s-.79 1.76-1.75 1.76zM20 19h-3v-5.6c0-1.34-.03-3.07-1.87-3.07-1.87 0-2.16 1.46-2.16 2.97V19h-3V8h2.88v1.5h.04c.4-.76 1.38-1.56 2.84-1.56 3.04 0 3.6 2 3.6 4.59V19z"/></svg>
                        LinkedIn
                    </a>
                    <a href="https://stackoverflow.com/users/16545442/donin"
                       target="_blank" rel="noopener noreferrer"
                       class="inline-flex items-center gap-2 bg-white/20 hover:bg-white/30 transition rounded-lg px-4 py-2 text-sm font-medium">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M18.986 21.865v-6.404h2.134V24H1.844v-8.539h2.134v6.404h15.008zM6.111 19.731H17.78v-2.134H6.111v2.134zm.259-4.714 11.32 2.377.44-2.09-11.32-2.375-.44 2.088zm1.321-4.987 10.483 4.874.9-1.931-10.484-4.876-.9 1.933zm2.646-4.699 8.548 7.264 1.38-1.627-8.548-7.264-1.38 1.627zm5.465-4.813-1.748 1.275 6.536 8.948 1.748-1.275-6.536-8.948z"/></svg>
                        Stack Overflow
                    </a>
                </div>
            </div>
            <!-- Dark mode toggle -->
            <button onclick="toggleDarkMode()"
                    class="self-start sm:self-center bg-white/20 hover:bg-white/30 transition rounded-full p-2"
                    title="Toggle dark mode">
                <svg class="w-6 h-6 block dark:hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/>
                </svg>
                <svg class="w-6 h-6 hidden dark:block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m8.66-9h-1M4.34 12h-1m15.07-6.07-.71.71M5.64 18.36l-.71.71M18.36 18.36l.71.71M5.64 5.64l-.71-.71M12 7a5 5 0 100 10A5 5 0 0012 7z"/>
                </svg>
            </button>
        </div>
    </div>
</header>

<!-- Main content -->
<main class="max-w-6xl mx-auto px-4 py-10">

    <!-- Language filter -->
    @if(count($languages) > 0)
    <div class="mb-8">
        <h2 class="text-sm font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400 mb-3">Filter by Language</h2>
        <div class="flex flex-wrap gap-2" id="lang-filters">
            <button onclick="filterByLang('all')"
                    data-lang="all"
                    class="lang-btn active-filter px-3 py-1 rounded-full text-sm font-medium bg-indigo-600 text-white transition">
                All
            </button>
            @foreach($languages as $lang)
            <button onclick="filterByLang('{{ $lang }}')"
                    data-lang="{{ $lang }}"
                    class="lang-btn px-3 py-1 rounded-full text-sm font-medium bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300 hover:bg-indigo-500 hover:text-white transition">
                {{ $lang }}
            </button>
            @endforeach
        </div>
    </div>
    @endif

    <!-- Repository count -->
    <p class="text-sm text-gray-500 dark:text-gray-400 mb-6" id="repo-count">
        Showing <span id="visible-count">{{ count($repositories) }}</span> of {{ count($repositories) }} repositories
    </p>

    <!-- Search -->
    <div class="mb-6">
        <input
            type="search"
            id="search-input"
            placeholder="Search repositories…"
            class="w-full sm:w-80 px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500 text-sm"
        />
    </div>

    @if(count($repositories) === 0)
        <div class="text-center py-20">
            <svg class="mx-auto w-16 h-16 text-gray-300 dark:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M12 20h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <p class="mt-4 text-gray-500 dark:text-gray-400 text-lg">No repositories found.</p>
            <p class="text-gray-400 dark:text-gray-500 text-sm mt-1">Check back later or verify the GitHub username configuration.</p>
        </div>
    @else
        <!-- Repository Grid -->
        <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3" id="repo-grid">
            @foreach($repositories as $repo)
            <div class="repo-card card-hover bg-white dark:bg-gray-800 rounded-xl border border-gray-200 dark:border-gray-700 p-5 flex flex-col"
                 data-lang="{{ $repo['language'] ?? '' }}"
                 data-name="{{ strtolower($repo['name']) }}"
                 data-description="{{ strtolower($repo['description'] ?? '') }}">

                <!-- Card header -->
                <div class="flex items-start justify-between mb-3">
                    <div class="flex items-center gap-2 min-w-0">
                        <svg class="w-5 h-5 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"/>
                        </svg>
                        <h3 class="font-semibold text-gray-900 dark:text-white truncate text-sm">
                            {{ $repo['name'] }}
                        </h3>
                    </div>
                    <a href="{{ $repo['url'] }}" target="_blank" rel="noopener noreferrer"
                       class="text-gray-400 hover:text-indigo-500 transition flex-shrink-0 ml-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                        </svg>
                    </a>
                </div>

                <!-- Description -->
                <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed flex-1 min-h-[3rem]">
                    {{ $repo['description'] ?: 'No description provided.' }}
                </p>

                <!-- Topics -->
                @if(count($repo['topics']) > 0)
                <div class="mt-3 flex flex-wrap gap-1">
                    @foreach(array_slice($repo['topics'], 0, 4) as $topic)
                    <span class="px-2 py-0.5 bg-indigo-50 dark:bg-indigo-900/30 text-indigo-600 dark:text-indigo-400 rounded text-xs font-medium">
                        {{ $topic }}
                    </span>
                    @endforeach
                </div>
                @endif

                <!-- Stats footer -->
                <div class="mt-4 pt-3 border-t border-gray-100 dark:border-gray-700 flex items-center justify-between text-xs text-gray-500 dark:text-gray-400">
                    <div class="flex items-center gap-3">
                        @if($repo['language'])
                        <span class="flex items-center gap-1">
                            <span class="lang-dot" style="background-color: {{ langColor($repo['language']) }}"></span>
                            {{ $repo['language'] }}
                        </span>
                        @endif
                        <span class="flex items-center gap-1">
                            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            {{ $repo['stars'] }}
                        </span>
                        <span class="flex items-center gap-1">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2"/></svg>
                            {{ $repo['forks'] }}
                        </span>
                    </div>
                    <time class="text-gray-400" datetime="{{ $repo['updated_at'] }}">
                        {{ \Carbon\Carbon::parse($repo['updated_at'])->diffForHumans() }}
                    </time>
                </div>
            </div>
            @endforeach
        </div>
    @endif
</main>

<!-- Footer -->
<footer class="mt-16 border-t border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800">
    <div class="max-w-6xl mx-auto px-4 py-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-sm text-gray-500 dark:text-gray-400">
        <p>© {{ date('Y') }} José Luis B. Donin. All rights reserved.</p>
        <div class="flex gap-4">
            <a href="https://github.com/luisdonin" target="_blank" rel="noopener noreferrer"
               class="hover:text-indigo-500 transition">GitHub</a>
            <a href="https://www.linkedin.com/in/jos%C3%A9-luis-b-donin-a78b10196/" target="_blank" rel="noopener noreferrer"
               class="hover:text-indigo-500 transition">LinkedIn</a>
            <a href="https://stackoverflow.com/users/16545442/donin" target="_blank" rel="noopener noreferrer"
               class="hover:text-indigo-500 transition">Stack Overflow</a>
        </div>
    </div>
</footer>

<script>
    // Language filter
    let currentLang = 'all';

    function filterByLang(lang) {
        currentLang = lang;
        updateFilters();
        applyFilters();
    }

    function updateFilters() {
        document.querySelectorAll('.lang-btn').forEach(btn => {
            if (btn.dataset.lang === currentLang) {
                btn.classList.add('bg-indigo-600', 'text-white');
                btn.classList.remove('bg-gray-200', 'dark:bg-gray-700', 'text-gray-700', 'dark:text-gray-300');
            } else {
                btn.classList.remove('bg-indigo-600', 'text-white');
                btn.classList.add('bg-gray-200', 'text-gray-700', 'dark:bg-gray-700', 'dark:text-gray-300');
            }
        });
    }

    // Search
    document.getElementById('search-input').addEventListener('input', applyFilters);

    function applyFilters() {
        const query = document.getElementById('search-input').value.toLowerCase();
        const cards = document.querySelectorAll('.repo-card');
        let visible = 0;

        cards.forEach(card => {
            const langMatch = currentLang === 'all' || card.dataset.lang === currentLang;
            const searchMatch = !query ||
                card.dataset.name.includes(query) ||
                card.dataset.description.includes(query);

            if (langMatch && searchMatch) {
                card.style.display = '';
                visible++;
            } else {
                card.style.display = 'none';
            }
        });

        document.getElementById('visible-count').textContent = visible;
    }
</script>

@endsection
