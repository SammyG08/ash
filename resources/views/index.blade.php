@extends('layout.base')
@section('index')
    <!--Logo Section -->
    <section class="mx-0 " style="background-color:transparent !important;">
        <div class="row p-3 mx-0">
            <div class="col-lg-1 col-2 d-flex align-items-center justify-content-center">
                <img src="{{ asset('ashfavicon.png') }}" alt="" class="img-fluid imgToShowOnLgScreen">
                <img src="{{ asset('favicon.png') }}" alt="" class="img-fluid d-none imgToShowOnSmScreen">
            </div>
            <div class="col-10 d-flex justify-content-end Buttons">
                <button class="btn btn-lg btn-outline-success text-dark rounded-5 joinNowBtn"
                    style="background-color: transparent;"><a href="{{ route('register') }}"
                        class="text-decoration-none text-dark">Join
                        now</a></button>
                <button class="btn btn-lg bg-white btn-outline-primary text-primary rounded-5 signInBtn"><a
                        href="{{ route('login') }}" class="text-decoration-none">Sign in</a></button>
            </div>
        </div>
        <hr>
    </section><!--Endlogo section-->
    <section class="container introSection">
        <!--Introduction section-->
        <div class="mx-auto row d-xl-flex">
            <div class="col-xl-6 col-12 ps-0 pt-0 align-self-center">
                <div class="col-12 imageCol">
                    <img src="{{ asset('images/ashlogo.jpeg') }}" alt="ash image " class="img-fluid"
                        style="width: 100%; height: 100% !important;">
                </div>
            </div>
            <div class="col-xl-5 col-12 px-3 pt-0 introduction">
                <h1 class="text-dark fs-1 fw-bold mb-4 welcome mt-0 text-center">
                    Welcome to Africa Skills Hub
                </h1>
                <h5 class="text-muted fs-5 mb-5">Africa Skills Hub (ASH) is a development and
                    social
                    enterprise-oriented
                    organization based in Ghana that helps to <span class="text-success">build
                        skilled
                        African
                        youth and women
                    </span>as agents of change in their communities.
                </h5>
                <button class="btn btn-sm d-block w-100 mb-2 buttons"><a href="{{ route('register') }}"
                        class="text-decoration-none text-light fw-bold fs-4">Join
                        us</a></button>
                <button class="btn btn-sm d-block w-100 buttons"><a href="{{ route('login') }}"
                        class="text-decoration-none text-light fw-bold fs-4">Sign
                        in</a></button>
            </div>

        </div>
    </section>
    <div class="svgDiv">
        {{-- <img src="assets/waves/wave-1.svg" alt="" class="wave-1">
        <img src="assets/waves/wave-2.svg" alt="" class="wave-2">
        <img src="assets/waves/wave-3.svg" alt="" class="wave-3">
        <img src="assets/waves/wave-4.svg" alt="" class="wave-4">
        <img src="assets/waves/wave-6.svg" alt="" class="wave-6 "> --}}
        <svg xmlns="sitewave.svg" viewBox="0 0 1440 320" class="svg">
            <path fill="#273036" fill-opacity="1"
                d="M0,32L60,53.3C120,75,240,117,360,144C480,171,600,181,720,181.3C840,181,960,171,1080,170.7C1200,171,1320,181,1380,186.7L1440,192L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
            </path>
        </svg>
    </div>
@endsection
