@extends('layout.base')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            {{-- <h1>Able</h1> --}}
            {{-- <img src="{{ asset('images/able.jpeg') }}" alt="able initiative image" class="img-fluid rounded-circle"> --}}


            <nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li> <i
                        class=" ms-1 me-1 bi bi-caret-right-fill"></i>
                    <li class="breadcrumb-item active">ABLE</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h1 class="card-title">ABLE</h1>
                            <p>Empowering Persons with Disabilities to Achieve Economic Inclusion.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
