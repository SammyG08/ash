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
            <div class="row">
                <div class="col-lg-3 col-12 bg-light px-0 division shadow me-4 mb-5">
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


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="me-4 col-lg-5 col-12 division shadow px-0 bg-light mb-5">

                    <div class="card a-food-card shadow-none light rounded-0 h-100">
                        {{-- <img src="{{ asset('assets/img/records.svg') }}" alt="" class="card-img-top"> --}}
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
                <div class=" me-4 col-lg-2 col-12 division shadow px-0 bg-light mb-5">

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
            <div class="row mt-3">
                <div class="col-12 col-lg-9">
                    <div class="d-lg-flex justify-content-between">
                        <div class="col-12 col-lg-6 form-group rounded-0 mb-5">
                            <form method="get" data-url="{{ route('agrifood.search') }}" class="search-form">
                                <div class="input-group search-bar">
                                    <div class="input-group-append">
                                        <div class="input-group-text rounded-end-0 shadow-sm border-0 search-icon"><i
                                                class="bi bi-search"></i>
                                        </div>
                                    </div>
                                    <input type="search" placeholder="Type business name here" name="search"
                                        class='form-control rounded-start-0 shadow-sm search text-dark formcolorlight border-0'>
                                </div>
                            </form>
                        </div>
                        <div class="col-12 col-lg-2 mb-5">
                            <div class="rounded-0 d-grid">
                                <button class="btn btn-sm bg-secondary-subtle addRecord" data-count="0"><a
                                        href="{{ route('agrifood.upload') }}"
                                        class="text-decoration-none add fs-6 ps-1 text-secondary">New
                                        Record <i class="ps-1 bi bi-plus-lg"></i>
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-11">
                    <div class="card search-result-card d-none bg-white shadow-none">
                        <div class="card-body mt-4 table-responsive">
                            <table class="table table-striped table-borderless table-light search-result-table">
                                <tbody class="tbody">
                                    <tr class="">
                                        <th class="text-secondary heading text-capitalize">Surname</th>
                                        <th class="text-secondary heading text-capitalize">Other names</th>
                                        <th class="text-secondary heading text-capitalize">Age</th>
                                        <th class="text-secondary heading text-capitalize">Gender</th>
                                        <th class="text-secondary heading text-capitalize">Whatsapp number</th>
                                        <th class="text-secondary heading text-capitalize">Email</th>
                                        <th class="text-secondary heading text-capitalize">Residential address</th>
                                        <th class="text-secondary heading text-capitalize">Occupation</th>
                                        <th class="text-secondary heading text-capitalize">Business name</th>
                                        <th class="text-secondary heading text-capitalize">work location</th>
                                        <th class="text-secondary heading text-capitalize">business type</th>
                                        <th class="text-secondary heading text-capitalize">business nature</th>
                                        <th class="text-secondary heading text-capitalize">business sector</th>
                                        <th class="text-secondary heading text-capitalize">work experience</th>
                                        <th class="text-secondary heading text-capitalize">have employees</th>
                                        <th class="text-secondary heading text-capitalize">number of employees</th>
                                        <th class="text-secondary heading text-capitalize">plan to expand</th>
                                        <th class="text-secondary heading text-capitalize">support needed for expansion</th>
                                        <th class="text-secondary heading text-capitalize">AgriFood Rating</th>
                                        <th class="text-secondary heading text-capitalize">program improvement
                                            recommendation
                                        </th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
