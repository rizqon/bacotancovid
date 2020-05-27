<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="referrer" content="strict-origin" />
    <title>Bacotan Netizen Covid 19</title>
    <meta name="description" content="COVID-19 Telah mengubah hidup kita, mari kita menjaga sesama dengan menerapkan physical distancing teman dan keluarga. Kami mengumpulkan banyak Harapan. Keinginan dan Aspirasi dari kalian semua selama masa pandemi ini. Apa yang akan kamu lakukan setelah wabah ini selesai?">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <livewire:styles>
    <style>
        .thumbnail img
        {
            width: 100%;
        }
    </style>
</head>

<body>

    <!-- Main Page -->
    <main>
        <!-- Landing Page -->
        <section id="landing" class="landing shadow-sm py-5 rounded">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 offset-md-2 col-lg-8 offset-lg-2 text-center">
                        <div class="mb-5">
                            <h1 class="my-4">Bacotan Covid</h1>
                            <p>BACOTAN, HARAPAN DAN KEINGINAN</p>
                            <p>COVID-19 Telah mengubah hidup kita, mari kita menjaga sesama dengan menerapkan <em>physical distancing</em> teman dan keluarga. Kami mengumpulkan banyak Harapan. Keinginan dan Aspirasi dari kalian semua selama masa pandemi
                                ini. Apa yang akan kamu lakukan setelah wabah ini selesai?
                            </p>
                            <a target="_blank" href="https://twitter.com/intent/tweet?text={{ urlencode("@bacotancovid setelah covid selesai aku ingin ...") }}" class="btn btn-lg btn-twitter shadow">Mention Kami <i class="fa fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tweets -->
        <section id="tweets" class="shadow-sm p-3 rounded">
            <div class="container">
                @yield('content')
            </div>
        </section>

        <!-- Site Footer -->
        <footer id="footer">
            <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3 text-center pt-5 pb-4">
                <p> &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>{{ config('app.name') }}</p>
            </div>
        </footer>

        <!-- Bootstrap -->
        <script src="{{ asset('js/app.js') }}"></script>
        <!-- FontAwesome -->
        <script src="https://use.fontawesome.com/c3336cd6fc.js"></script>
        <script src="https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js"></script>
        <script>
            var $container = $('.card-columns');
            $container.infiniteScroll({
                // options
                path: '.pagination li.active + li a',
                append: '.shoutbox',
                history: true,
            });
        </script>
        <livewire:scripts>
</body>

</html>