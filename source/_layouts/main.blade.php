<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">

        <meta property="og:site_name" content="{{ $page->siteName }}"/>
        <meta property="og:title" content="{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
        <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}"/>
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:image" content="/assets/img/logo.png"/>
        <meta property="og:type" content="website"/>

        <meta name="twitter:image:alt" content="{{ $page->siteName }}">
        <meta name="twitter:card" content="summary_large_image">

        <title>{{ $page->siteName }}{{ $page->title ? ' | ' . $page->title : '' }}</title>

        <link rel="home" href="{{ $page->baseUrl }}">
        <link rel="icon" href="/favicon.ico">

        @stack('meta')

        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>

    <body class="flex flex-col justify-between min-h-screen font-sans leading-normal text-gray-800 bg-gray-100">
        <header class="flex items-center py-4 mb-8 h-24 bg-white border-b shadow" role="banner">
            <div class="container flex items-center px-4 mx-auto max-w-8xl lg:px-8">
                <div class="flex items-center">
                    <a href="/" title="{{ $page->siteName }} home" class="inline-flex items-center">
                        <h1 class="pr-4 my-0 text-lg font-semibold text-orange-500 md:text-2xl hover:text-blue-600">{{ $page->siteName }}</h1>
                    </a>
                </div>
            </div>
        </header>

        <main role="main" class="flex-auto w-full">
            @yield('body')
        </main>

        <footer class="py-4 mt-12 text-sm text-center bg-white" role="contentinfo">
            &copy; {{ date('Y') }} built with ❤️ &amp; ☕️ by <a href="https://twitter.com/n1c" title="n1c's Twitter">@n1c</a>.
        </footer>
    </body>

    <?php
    /*
    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    */
    ?>

    @stack('scripts')
</html>
