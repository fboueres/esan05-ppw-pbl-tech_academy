<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>@yield("title", "Tech Academy")</title>

        @vite(["resources/scss/app.scss", "resources/js/app.js"])
    </head>
    <body class="d-flex flex-column min-vh-100">
        @include("partials.navbar")
        <main class="flex-grow-1 d-flex flex-column container my-3">
            @yield("content")
        </main>
        @include("partials.footer")
    </body>
</html>
