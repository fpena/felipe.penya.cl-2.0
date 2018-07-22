<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="iOS,Laravel,PHP,Vue,Vancouver,Architect,Software,Developer,apps,backend,9punto5,remote">
    <meta name="description" content="Felipe Peña is a senior software developer with more than 10 years of experience in mobile and backend technologies. He’s been involved in multiple high scale and complex tech stack projects, in both startup and enterprise fields. His set of skills ranges from architecture definition, team management, product infrastructure layout and technical lead.">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/ico" sizes="32x32">

    <title>Felipe Peña - Architect and software developer - iOS, Laravel (PHP) and Vue enthusiast.</title>

    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" defer>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous" defer>
</head>
<body class="bg-black text-white" style="font-family: 'Lato', sans-serif; background: url('img/vienna.jpg')">
    <div class="container mx-auto h-screen flex flex-wrap content-between">
        @yield('content')
        <footer class="w-full px-4 lg:px-0 pb-6 text-center  pt-12 md:pt-0">
            <div class="flex flex-column md:flex-row">
                <div class="flex-1">{{ date('Y') }}</div>
                <div class="flex-1">
                    <a target="_blank" href="https://www.github.com/fpena">
                        <i class="text-white fab fa-github"></i>
                    </a>
                </div>
                <div class="flex-1">
                    <a target="_blank" href="https://www.linkedin.com/in/felipepenariveros/">
                        <i class="text-white fab fa-linkedin"></i>
                    </a>
                </div>
                <div class="flex-1">
                    <a target="_blank" href="https://www.twitter.com/patrosmania/">
                        <i class="text-white fab fa-twitter"></i>
                    </a>
                </div>
                <div class="flex-1">
                    <a target="_blank" href="https://medium.com/@felipe_pena">
                        <i class="text-white fab fa-medium"></i>
                    </a>
                </div>
            </div>
            <div class="mt-6">
                <p class="text-sm">Feel free to shoot me an email at <a class="text-white" href="mailto:felipe@penya.cl">felipe@penya.cl</a></p>
            </div>
        </footer>
    </div>

    @if(env('APP_ENV') !== 'local')
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-22568454-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-22568454-1');
        </script>
    @endif
</body>
</html>
