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
        <div class="h-screen flex flex-wrap content-between">
            <section class="container mx-auto px-4 lg:px-0 pt-6 text-center">
                <h1 class="mb-8">
                    <img src="{{ asset('img/felipe.png') }}" width="200" height="200" alt="Felipe Peña">
                </h1>
                <ul class="text-2xl md:text-3xl list-reset">
                    <li class="mb-6">
                        <div class="flex justify-center flex-col md:flex-row items-center">
                            @emojione(':art:')
                            <div class="ml-0 md:ml-6 mt-6 md:mt-0">
                                <p class="mb-4 md:mb-1">I'm a software architect and developer</p>
                                <p class="text-base">(currently living in beautiful Vancouver, BC)</p>
                            </div>

                        </div>
                    </li>
                    <li class="mb-6">
                        <div class="flex justify-center flex-col md:flex-row items-center">
                            @emojione(':rocket:')
                            <span class="ml-0 md:ml-6 mt-6 md:mt-0">I organize a <a target="_blank" class="text-white" href="http://www.9punto5.cl">remote work conference</a></span>
                        </div>
                    </li>
                    <li class="mb-6">
                        <div class="flex justify-center flex-col md:flex-row items-center">
                            @emojione(':iphone:')
                            <span class="ml-0 md:ml-6 mt-6 md:mt-0">I have <a target="_blank" class="text-white" href="https://itunes.apple.com/ca/app/earwizard/id599466971?mt=8">one educational app</a> in the App Store</span>
                        </div>
                    </li>
                    <li class="mb-6">
                        <div class="flex justify-center flex-col md:flex-row items-center">
                            @emojione(':book:')
                            <span class="ml-0 md:ml-6 mt-6 md:mt-0">I like to <a target="_blank" class="text-white" href="https://www.goodreads.com/user/show/31677851-felipe-pe-a">read</a></span>
                        </div>
                    </li>
                </ul>
            </section>
            <footer class="container mx-auto px-4 lg:px-0 pb-6 text-center flex flex-column md:flex-row pt-12 md:pt-0">
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
