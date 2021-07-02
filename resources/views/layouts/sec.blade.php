<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        {{-- <script async src="https://www.googletagmanager.com/"></script> --}}
        {{-- <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA');
        </script> --}}

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Twitter -->
        <!-- <meta name="twitter:site" content="@bootstrapdash">
        <meta name="twitter:creator" content="@bootstrapdash">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Azia">
        <meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
        <meta name="twitter:image" content="https://www.bootstrapdash.com/azia/img/azia-social.png"> -->

        <!-- Facebook -->
        <!-- <meta property="og:url" content="https://www.bootstrapdash.com/azia">
        <meta property="og:title" content="Azia">
        <meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template">

        <meta property="og:image" content="https://www.bootstrapdash.com/azia/img/azia-social.png">
        <meta property="og:image:secure_url" content="https://www.bootstrapdash.com/azia/img/azia-social.png">
        <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="600"> -->

        <!-- Meta -->
        <meta name="description" content="arifu">
        <meta name="author" content="Alfeo Raymond (Pheogrammer)">

        <title>{{ config('app.name', 'Arifu') }}</title>

        <!-- vendor css -->
        <link href="../lib/typicons.font/typicons.css" rel="stylesheet">
        <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
        <link href="../lib/fontawesome-free/css/all.min.css" rel="stylesheet">

        <!-- apps CSS -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="../css/azia.css">

      </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

                    @yield('content')

            </div>
        </div>
    </body>
</html>
