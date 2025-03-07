@extends('layout.base')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            {{-- <h1>DigiSME</h1> --}}
            {{-- <img src="{{ asset('images/able.jpeg') }}" alt="able initiative image" class="img-fluid rounded-circle"> --}}


            <nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li> <i
                        class=" ms-1 me-1 bi bi-caret-right-fill"></i>
                    <li class="breadcrumb-item active">DigiSME</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h1 class="card-title">DigiSME</h1>
                            <p class="fs-5">Equipping MSMEs with idgital prowess to thrive in a dynamic market catalyzing
                                Post-Covid
                                Recovery.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
