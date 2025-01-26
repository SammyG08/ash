<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('favicon.png') }}">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/ash.css') }}">
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}

    <title>Africaskillshub</title>


    @if (request()->routeIs('landingPage'))
        <style>
            @media screen and (min-width: 1300px) {
                body {
                    background-color: snow !important;
                    overflow-y: hidden !important;
                    overflow-x: hidden !important;
                }

                .introduction {
                    margin-bottom: 7px !important;
                }

                .svgDiv,
                .svg {
                    display: block !important;
                }
            }
        </style>
    @endif
</head>

<body>

    <div class="container-fluid px-0">
        @if (request()->routeIs('landingPage'))
            <section class="dateTime">
                <div class="row bg-dark mx-0">
                    <div class="col-6 p-2 col-md-4 d-flex align-items-center justify-content-end">
                        <div class="align-self-center me-2">
                            <i class="bi bi-calendar3 text-white"></i>
                        </div>
                        <div class="align-self-center pe-2 border-end border-1 border-light">
                            <span class="text-light fs-7">
                                {{ date('j F Y') }}
                            </span>
                        </div>
                    </div>
                    <div class="col-3 col-md-4 d-flex align-items-center">
                        <div class="align-self-center me-2">
                            <i class="bi bi-clock text-white"></i>
                        </div>
                        <div class="align-self-center">
                            <span class="text-light realTime fs-7">
                                {{ date('H:i:s') }}
                            </span>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        @yield('index')
    </div>
    <div class="container-fluid">
        @yield('auth.content')
    </div>
    @if (request()->routeIs('landingPage') || request()->routeIs('register') || request()->routeIs('login'))
    @else
        <x-navigation></x-navigation>
        @yield('content')
    @endif

    <!-- Vendor JS Files -->
    <script src="/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/chart.js/chart.umd.js"></script>
    <script src="/assets/vendor/echarts/echarts.min.js"></script>
    <script src="/assets/vendor/quill/quill.js"></script>
    <script src="/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="/assets/js/main.js"></script>
    <script src="/assets/ash.js"></script>
</body>

</html>
