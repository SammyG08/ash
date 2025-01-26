@extends('layout.base')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            {{-- <h1>AgriFood</h1> --}}
            {{-- <img src="{{ asset('images/able.jpeg') }}" alt="able initiative image" class="img-fluid rounded-circle"> --}}
            <nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li> <i
                        class=" ms-1 me-1 bi bi-caret-right-fill"></i>
                    <li class="breadcrumb-item active">AgriFood</li>
                </ol>
            </nav>
        </div>

        <section class="section">
            <div class="row ">
                <div class="col-lg-3 col-12 bg-light px-0 division me-4">
                    <div class="card a-food-card rounded-0 text-muted light shadow-none h-100">
                        <div class="px-0 card-body pt-3 d-flex justify-content-evenly align-items-center">
                            <div class="mt-2 d-flex flex-column justify-content-around align-items-center">
                                <h1 class="text-center fs-5 title">Total Records</h1>
                                <div
                                    class="card-footer w-100 bg-transparent d-flex justify-content-center border-dark footer">
                                    <div
                                        class=" mt-3 w-auto record-number numberColor text-center text-success rounded-circle">
                                        <h4 class="mt-2 me-1 px-1">100</h4>
                                    </div>
                                </div>

                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <div class="col-lg-12 col-4 d-flex justify-content-center align-items-center">
                                    <h1 class="fs-6 px-2 pt-1 pb-1 numberColor text-center gender fw-bold rounded-circle">
                                        W
                                    </h1>
                                    <div class=" ms-2 text-center text-muted number">
                                        <h4 class="">200</h4>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-center align-items-center">
                                    <h1 class=" px-2 pt-1 pb-1 numberColor text-center gender fw-bold fs-6 rounded-circle">
                                        M
                                    </h1>
                                    <div class="ms-2 text-center text-muted number">
                                        <h4 class="mt-1">700</h4>
                                    </div>
                                    </>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="me-4 col-lg-5 col-12 division px-0 bg-light">

                    <div class="card a-food-card shadow-none light rounded-0 h-100">
                        <div class="px-0 card-body pt-3 pb-3 d-flex justify-content-evenly align-items-center body">
                            <div class="d-flex flex-column justify-content-around align-items-center cohort-card">
                                <div class="d-grid">
                                    <span class="text-center cohort fs-4">Cohort
                                        1</span>
                                </div>
                                <div class="card-footer bg-transparent border-0 d-flex flex-column align-items-center">
                                    <span class="text-center totalNum pb-2">Total Number</span>

                                    <div
                                        class="record-number text-center numberColor text-success pt-1 w-auto rounded-circle">
                                        <h4 class="mt-1 px-1">200</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-column justify-content-around align-items-center">
                                <div class="d-grid">
                                    <span class="text-center cohort fs-4">Cohort
                                        2</span>
                                </div>
                                <div class="card-footer bg-transparent border-0 d-flex flex-column align-items-center">
                                    <span class="text-center totalNum pb-2">Total Number</span>

                                    <div
                                        class="record-number text-center numberColor text-success pt-1 w-auto rounded-circle">
                                        <h4 class="mt-1 px-1">200</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class=" me-4 col-lg-2 col-12 division px-0 bg-light">

                    <div class="card a-food-card rounded-0 pt-3 light shadow-none h-100">
                        <div class="px-0 card-body d-flex flex-column justify-content-around align-items-center pt-3">
                            <h1 class="text-center title fs-5">Active in Business</h1>
                            <div class="card-footer w-100 d-flex justify-content-center bg-transparent border-dark footer">
                                <div class="record-number text-center numberColor text-success rounded-circle w-auto">
                                    <h4 class="mt-2 px-1">200</h4>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-10 col-12">
                    <div class="card bg-transparent shadow-none pt-3 rounded-0">
                        <div class="card-body">
                            <div class=" border-0 d-grid bg-transparent">
                                <button class="btn btn-outline-info btn-secondary btn-lg text-light addRecord"
                                    data-count="0"><a href="{{ route('agrifood.upload') }}"
                                        class="text-decoration-none text-white add fs-4">View Records
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-3 col-12 d-none">
                    <div class="card bg-transparent shadow-none pt-3">
                        <div class="card-body">
                            <div class=" border-0 d-grid bg-transparent">
                                <button class="btn btn-outline-success btn-secondary text-light view-record-btn"
                                    data-count="0"><a href="{{ route('agrifood.upload') }}"
                                        class="text-decoration-none text-white view">View records</a></button>
                            </div>
                        </div>
                    </div>
                </div> --}}
        </section>

    </main>
@endsection
