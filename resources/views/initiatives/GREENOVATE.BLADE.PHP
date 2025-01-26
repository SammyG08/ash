@extends('layout.base')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            {{-- <h1>Greenovate</h1> --}}
            {{-- <img src="{{ asset('images/able.jpeg') }}" alt="able initiative image" class="img-fluid rounded-circle"> --}}


            <nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li> <i
                        class=" ms-1 me-1 bi bi-caret-right-fill"></i>
                    <li class="breadcrumb-item active">Greenovate</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h1 class="card-title">GREENOVATE</h1>
                            <p class="fs-5">Driving Innovation and Sustainability in the Green Economy.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
