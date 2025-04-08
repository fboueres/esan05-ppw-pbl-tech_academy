<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>@yield("title", "Tech Academy")</title>

        <!-- Styles / Scripts -->
        @vite(["resources/css/app.css", "resources/js/app.js"])
    </head>
    <body class="d-flex flex-column min-vh-100">
        @include("partials.navbar")
        <main>
            @section("content")
            @show
        </main>
        <footer
            class="d-flex flex-wrap justify-content-between align-items-center p-3 border-top w-100 mt-auto"
        >
            <span class="mb-3 text-body-secondary">©2025 Tech Academy</span>
        </footer>
    </body>
</html>
