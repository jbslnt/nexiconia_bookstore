<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta name="description" content="Nexiconia Bookstore — thoughtful books for curious readers.">
        <title>{{ config('app.name', 'Nexiconia Bookstore') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <style>
            :root {
                --nexiconia-ink: #172a3a;
                --nexiconia-cream: #f8f4ec;
                --nexiconia-paper: #fffdf8;
                --nexiconia-amber: #d9853b;
                --nexiconia-muted: #66717a;
            }

            body {
                background: var(--nexiconia-cream);
                color: var(--nexiconia-ink);
            }

            .nexiconia-auth-shell {
                position: relative;
                min-height: 100vh;
                overflow: hidden;
                background:
                    radial-gradient(circle at 90% 10%, rgba(217, 133, 59, .17), transparent 28rem),
                    var(--nexiconia-cream);
            }

            .nexiconia-auth-shell::before {
                position: absolute;
                top: 28px;
                left: 8vw;
                color: rgba(23, 42, 58, .05);
                content: "N";
                font: 700 22rem/.7 Georgia, serif;
                pointer-events: none;
            }

            .nexiconia-auth-brand {
                position: relative;
                z-index: 1;
                text-align: center;
            }

            .nexiconia-auth-brand a {
                color: var(--nexiconia-ink);
                text-decoration: none;
            }

            .nexiconia-auth-brand img {
                width: 64px;
                height: 64px;
                object-fit: contain;
            }

            .nexiconia-auth-brand strong {
                display: block;
                margin-top: 8px;
                font: 700 15px Georgia, serif;
                letter-spacing: .17em;
            }

            .nexiconia-auth-brand span {
                display: block;
                margin-top: 8px;
                color: var(--nexiconia-muted);
                font-size: 13px;
            }

            .nexiconia-auth-card {
                position: relative;
                z-index: 1;
                border: 1px solid #e4dbce;
                border-radius: 16px;
                background: rgba(255, 253, 248, .94);
                box-shadow: 0 24px 70px rgba(23, 42, 58, .12);
            }

            .nexiconia-auth-card input {
                border-color: #d8d0c4;
                background: #fff;
            }

            .nexiconia-auth-card input:focus {
                border-color: var(--nexiconia-amber);
                box-shadow: 0 0 0 2px rgba(217, 133, 59, .18);
            }

            .nexiconia-auth-card button {
                border: 0;
                background: var(--nexiconia-ink);
            }

            .nexiconia-auth-card button:hover {
                background: var(--nexiconia-amber);
            }
        </style>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
