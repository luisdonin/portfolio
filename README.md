# José Luis B. Donin — Portfolio

A modern Laravel 11 portfolio website that automatically fetches and displays public GitHub repositories for user **luisdonin** with a professional, responsive design.

## Features

- 🚀 **Automatic GitHub Integration** — Fetches public repositories via the GitHub REST API v3
- ⚡ **Caching** — Repository data is cached for 1 hour to respect API rate limits
- 🎨 **Responsive Design** — Mobile-first grid layout (1 → 2 → 3 columns)
- 🌙 **Dark Mode** — Toggle between light and dark themes (respects system preference)
- 🔍 **Search** — Filter repositories by name or description in real time
- 🏷️ **Language Filter** — Click language badges to filter by programming language
- 📊 **Repository Stats** — Stars, forks, primary language, last updated date, and topics
- 🎯 **Modern UI** — Smooth hover effects, gradient header, clean card design

## Tech Stack

- **Laravel 11** — PHP web application framework
- **Tailwind CSS** (CDN) — Utility-first CSS framework
- **Laravel HTTP Client** — For GitHub API requests
- **Laravel Cache** — For caching API responses

## Installation

### Prerequisites

- PHP 8.2+
- Composer

### Steps

1. **Clone the repository**

   ```bash
   git clone https://github.com/luisdonin/portfolio.git
   cd portfolio
   ```

2. **Install PHP dependencies**

   ```bash
   composer install
   ```

3. **Copy the environment file**

   ```bash
   cp .env.example .env
   ```

4. **Generate an application key**

   ```bash
   php artisan key:generate
   ```

5. **Configure environment variables** (see below)

6. **Start the development server**

   ```bash
   php artisan serve
   ```

   Open [http://localhost:8000](http://localhost:8000) in your browser.

## Environment Configuration

Edit the `.env` file and set the following variables:

```env
APP_NAME="Portfolio"
APP_URL=http://localhost:8000

# GitHub API Configuration
GITHUB_USERNAME=luisdonin
GITHUB_TOKEN=your_github_personal_access_token_here
```

### Generating a GitHub Personal Access Token

1. Go to [GitHub Settings → Developer Settings → Personal Access Tokens](https://github.com/settings/tokens)
2. Click **"Generate new token (classic)"**
3. Give it a descriptive name (e.g., `portfolio-app`)
4. Select the scope: **`public_repo`** (read-only access to public repositories)
5. Click **"Generate token"** and copy the token
6. Paste it as the value of `GITHUB_TOKEN` in your `.env` file

> **Note:** A GitHub token is optional for basic use, but it increases the API rate limit from 60 to 5,000 requests per hour.

## Project Structure

```
app/
├── Http/Controllers/
│   └── PortfolioController.php   # Handles the portfolio page
├── Services/
│   └── GitHubService.php         # GitHub API integration + caching
config/
└── github.php                    # GitHub configuration (username, token)
resources/
└── views/
    ├── layouts/
    │   └── app.blade.php         # Base HTML layout
    └── portfolio.blade.php       # Portfolio page with project grid
routes/
└── web.php                       # Application routes
.env.example                      # Example environment variables
```

## Caching

Repository data is cached for **1 hour** using Laravel's default cache driver.

To manually clear the cache (e.g., after pushing new repositories):

```bash
php artisan cache:clear
```

## Running Tests

```bash
php artisan test
```

## Customization

- **Change the GitHub username:** Update `GITHUB_USERNAME` in `.env`
- **Change cache duration:** Edit the `3600` (seconds) value in `GitHubService.php`
- **Update personal info:** Edit the header section in `resources/views/portfolio.blade.php`

## Preview

The portfolio displays a responsive card grid of all public (non-fork) repositories sorted by star count, with:
- Repository name and description
- Programming language with color-coded dot
- Star and fork counts
- "Last updated" relative time
- Topic/tag badges
- Direct link to the GitHub repository
