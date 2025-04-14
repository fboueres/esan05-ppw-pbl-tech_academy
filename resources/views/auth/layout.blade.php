<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>@yield("title", "Tech Academy")</title>

        @vite(["resources/scss/app.scss", "resources/js/app.js"])
    </head>
    <body
        class="container d-flex flex-column w-50 min-vh-100 align-items-center justify-content-center"
    >
        @yield("content")
    </body>
</html>
