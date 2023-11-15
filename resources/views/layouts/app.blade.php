<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    @hasSection('title')
        <title>@yield('title')</title>
    @else
        <title>Bidawa+ - Bidawa plus</title>
    @endif
    @hasSection('description')
        <meta name="description" content="@yield('description')">
    @else
        <meta name="description"
            content="Bidawa, Bidawa plus ,Bidawa maroc , Bidawa plus ma, Bidawa ma, Association casablanca, vivre à casablanca, amélioration des conditions de vie des Casablancais " />
    @endif
    <meta name="keywords"
        content="Bidawa, Bidawa plus ,Bidawa maroc , Bidawa plus ma, Bidawa ma, Association casablanca, vivre à casablanca, amélioration des conditions de vie des Casablancais " />
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/bidawa.png') }}" />
    <meta property="url" content="https://bidawaplus.ma/" />
    <meta property="site_name" content="Bidawa+" />
    <meta property="type" content="website" />
    <meta property="image" content="{{ asset('img/bidawa-img.png') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/slide.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style-rtl.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-163666244-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-163666244-1');
    </script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="{{ session()->get('locale') == 'ar' ? 'rtl' : '' }}">
    <nav>
        @include('layouts.header')
    </nav>
    <main class="py-4">
        @yield('content')
    </main>
    <footer>
        @include('layouts.footer')
    </footer>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/slide.js') }}"></script>
    <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const glightbox = GLightbox({
                selector: '.glightbox'
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $("a.scrollLink").click(function(event) {
                event.preventDefault();
                $("html, body").animate({
                    scrollTop: $($(this).attr("href")).offset().top
                }, 500);
            });
        });
    </script>
    <script type="text/javascript">
        var url = "{{ route('changeLang') }}";
        $(".Langchange").change(function() {
            window.location.href = url + "?lang=" + $(this).val();
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
