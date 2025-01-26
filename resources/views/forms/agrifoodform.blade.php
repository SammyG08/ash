@extends('layout.base')
@section('content')
    <main id="main" class="main">
        <div class="container">
            <div class="mx-auto">
                <div class="pagetitle">
                    <nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li> <i
                                class=" ms-1 me-1 bi bi-caret-right-fill"></i>
                            <li class="breadcrumb-item"><a href="{{ route('AgriFood') }}">AgriFood</a></li> <i
                                class=" ms-1 me-1 bi bi-caret-right-fill"></i>
                            <li class="breadcrumb-item active">View Records</li>
                        </ol>
                    </nav>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card statusCard rounded-3 mt-3 status-card-light-bg shadow" style="display:none">
                            <div class="card-body p-1 pb-0 d-flex align-items-center justify-content-center">
                                <h5 class="fs-4 statusHeader text-success fw-bold" style="display: none">successful</h5>
                            </div>
                        </div>
                        <div class="card rounded-3 pt-3 addRecordForm formcolorlight">
                            <div class="card-body">
                                <form class="agrifoodform" method="post" data-url="{{ route('agrifood.upload') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="input-group bg-transparent">
                                        <input type="file" class="form-control" id="file-select" name="file" required>
                                        <button class="btn btn-outline-success btn-success text-light">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 pt-5 record-div">
                        <div class="table-responsive">
                            @if ($records->count())
                                <table class="table table-hover table-light record-table shadow ">
                                    <tbody class="tbody">
                                        <tr class="">
                                            <th class="text-muted heading text-capitalize">Surname</th>
                                            <th class="text-muted heading text-capitalize">Other names</th>
                                            <th class="text-muted heading text-capitalize">Age</th>
                                            <th class="text-muted heading text-capitalize">Gender</th>
                                            <th class="text-muted heading text-capitalize">Whatsapp number</th>
                                            <th class="text-muted heading text-capitalize">Email</th>
                                            <th class="text-muted heading text-capitalize">Residential address</th>
                                            <th class="text-muted heading text-capitalize">Occupation</th>
                                            <th class="text-muted heading text-capitalize">Business name</th>
                                            <th class="text-muted heading text-capitalize">work location</th>
                                            <th class="text-muted heading text-capitalize">business type</th>
                                            <th class="text-muted heading text-capitalize">business nature</th>
                                            <th class="text-muted heading text-capitalize">business sector</th>
                                            <th class="text-muted heading text-capitalize">work experience</th>
                                            <th class="text-muted heading text-capitalize">have employees</th>
                                            <th class="text-muted heading text-capitalize">number of employees</th>
                                            <th class="text-muted heading text-capitalize">plan to expand</th>
                                            <th class="text-muted heading text-capitalize">support needed for expansion</th>
                                            <th class="text-muted heading text-capitalize">AgriFood Rating</th>
                                            <th class="text-muted heading text-capitalize">program improvement
                                                recommendation
                                            </th>
                                        </tr>
                                        @foreach ($records as $record)
                                            <tr class="records">
                                                <td class="table-data text-secondary">{{ $record->surname }}</td>
                                                <td class="table-data text-secondary">{{ $record->other_names }}</td>
                                                <td class="table-data text-secondary">{{ $record->age }}</td>
                                                <td class="table-data text-secondary">{{ $record->gender }}</td>
                                                <td class="table-data text-secondary">{{ $record->whatsapp_number }}
                                                </td>
                                                <td class="table-data text-secondary">{{ $record->email }}</td>
                                                <td class="table-data text-secondary">{{ $record->residential_address }}
                                                </td>
                                                <td class="table-data text-secondary">{{ $record->occupation }}</td>
                                                <td class="table-data text-secondary">{{ $record->business_name }}</td>
                                                <td class="table-data text-secondary">{{ $record->work_location }}</td>
                                                <td class="table-data text-secondary">{{ $record->type_of_business }}
                                                </td>
                                                <td class="table-data text-secondary">{{ $record->nature_of_business }}
                                                </td>
                                                <td class="table-data text-secondary">{{ $record->business_sector }}
                                                </td>
                                                <td class="table-data text-secondary">
                                                    {{ $record->num_of_years_worked_in_business }}</td>
                                                <td class="table-data text-secondary">
                                                    {{ $record->do_you_have_employees }}
                                                </td>
                                                <td class="table-data text-secondary">{{ $record->num_of_employees }}
                                                </td>
                                                <td class="table-data text-secondary">
                                                    {{ $record->do_you_plan_on_expansion }}
                                                </td>
                                                <td class="table-data text-secondary">
                                                    {{ $record->what_support_or_assistance_needed_to_support_this_expansion }}
                                                </td>
                                                <td class="table-data text-secondary">
                                                    {{ $record->agrifood_program_rating }}
                                                </td>
                                                <td class="table-data text-secondary">
                                                    {{ $record->recommendation_for_improving_program }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
