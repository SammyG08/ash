@extends('layout.base')
@section('content')
    <main id="main" class="main mt-4">

        {{-- <div class="pagetitle pt-4">
            <h1 class="fs-2 dashboard">Dashboard</h1>
        </div> --}}
        <div class="row mb-5 pt-5">
            <div class="col-12">
                <div class="d-flex align-items-center">
                    <div class="align-self-center me-2">
                        <i class="bi bi-person fs-3 fw-bold userIcon"></i>
                    </div>
                    <div class="d-flex flex-column">
                        <span class="fs-4 fw-bold text-dark greetUser">Good evening, Mubarak</span>
                        <span class="small fw-bold text-secondary">Here is what's happening.</span>
                    </div>
                </div>
            </div>
        </div>

        <section class="section dashboard">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-xxl-3 col-md-3 mb-5">
                            <div class="card rounded-5 cards text-secondary">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="card-title text-muted fs-5">Initiatives</h5>
                                        <i class="bi bi-globe-europe-africa fs-3 fw-bold"></i>
                                    </div>
                                    <div class="">
                                        <div>
                                            <h3 class="fs-4 fw-bold">6</h3>
                                        </div>
                                        <div class="card-progress fs-6">
                                            <span class="small pt-1 fw-bold">6</span>
                                            <span class="small">Completed</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-3 mb-5">
                            <div class="card rounded-5 cards text-secondary">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="card-title text-muted fs-5">Active Tasks</h5>
                                        <i class="bi bi-list-task fs-3 fw-bold"></i>

                                    </div>
                                    <div class="">
                                        <div>
                                            <h3 class="fs-4 fw-bold">20</h3>
                                        </div>
                                        <div class="card-progress fs-6">
                                            <span class="small pt-1 fw-bold">9</span>
                                            <span class="small ">Completed</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-3 mb-5">
                            <div class="card rounded-5 cards text-secondary">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="card-title text-muted fs-5">Team Members</h5>
                                        <i class="bi bi-people fs-3 fw-bold"></i>
                                    </div>
                                    <div class="">
                                        <div>
                                            <h3 class="fs-4 fw-bold">6</h3>
                                        </div>
                                        <div class="card-progress fs-6">
                                            <span class="small pt-1 fw-bold">6</span>
                                            <span class="small">Available</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-3 col-12 mb-5">
                            <div class="card rounded-5 cards text-secondary">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="card-title text-muted fs-5 ">Productivity</h5>
                                        <i class="bi bi-opencollective fs-3 fw-bold"></i>
                                    </div>
                                    <div class="">
                                        <div>
                                            <h3 class=" fs-4 fw-bold">78%</h3>
                                        </div>
                                        <div class="card-progress fs-6">
                                            <span class=" small pt-1 fw-bold">15</span>
                                            <span class=" small">Completed</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-7 col-12 mb-5">
                            <div class="card rounded-5 cards text-secondary">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="card-title text-muted fs-5 ">Initiatives</h5>
                                    </div>
                                    <div class="table-responsive-lg">
                                        <table class="table table-hover">
                                            <tr>
                                                <th class="bg-light table-head">Initiative Name</th>
                                                <th class="bg-light table-head">Participants</th>
                                                <th class="bg-light table-head">Priority</th>
                                                <th class="bg-light table-head">Progress</th>
                                            </tr>
                                            <tr>
                                                <td class=""><i class="bi bi-unlock me-2"></i>Able</td>
                                                <td class="h-4">132</td>
                                                <td class="text-warning priority small">High</td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            style="width: 50%;" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100">50%</div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=""><i class="bi bi-flower2 me-2"></i>AgriFood</td>
                                                <td class="h-4">256</td>
                                                <td class="text-warning priority small">Medium</td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            style="width: 70%;" aria-valuenow="70" aria-valuemin="0"
                                                            aria-valuemax="100">70%</div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=""><i class="bi bi-tropical-storm me-2"></i>Climate Care
                                                </td>
                                                <td class="h-4">99</td>
                                                <td class="text-warning priority small">Low</td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-secondary" role="progressbar"
                                                            style="width: 30%;" aria-valuenow="30" aria-valuemin="0"
                                                            aria-valuemax="100">30%</div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=""><i class="bi bi-rainbow me-2"></i>Greenovate</td>
                                                <td class="h-4">332</td>
                                                <td class="text-warning priority small">Medium</td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            style="width: 60%;" aria-valuenow="60" aria-valuemin="0"
                                                            aria-valuemax="100">60%</div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=""><i class="bi bi-slack me-2"></i>DigiSME</td>
                                                <td class=" h-4">567</td>
                                                <td class="text-warning priority small">High</td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            style="width: 100%;" aria-valuenow="100" aria-valuemin="0"
                                                            aria-valuemax="100">100%</div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class=""><i class="bi bi-unity me-2 "></i>District Skills
                                                    And
                                                    Entrepreneurship Roadshow</td>
                                                <td class=" h-4">370</td>
                                                <td class="text-warning priority small">High</td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 80%;" aria-valuenow="80" aria-valuemin="0"
                                                            aria-valuemax="100">80%</div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-5 col-12 mb-5">
                            <div class="card rounded-5 cards text-secondary">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="card-title text-muted fs-5">Team Members</h5>
                                    </div>
                                    <div class="text-secondary table-responsive-lg">
                                        <table class="table table-hover">
                                            <tr>
                                                <th class="bg-light table-head">Name</th>
                                                <th class="bg-light table-head">Role</th>
                                                <th class="bg-light table-head">Last Activity</th>
                                            </tr>
                                            <tr>
                                                <td class=""><i class="bi bi-person-circle me-2"></i>Mimi</td>
                                                <td class="h-4">Project Manager</td>
                                                <td class="small">3rd May, 2024</td>
                                            </tr>
                                            <tr>
                                                <td class=""><i class="bi bi-person-circle me-2"></i>Rachel</td>
                                                <td class=" h-4">Director</td>
                                                <td class=" small">Today</td>
                                            </tr>
                                            <tr>
                                                <td class=""><i class="bi bi-person-circle me-2"></i>Alfred</td>
                                                <td class=" h-4">Developer</td>
                                                <td class=" small">16th November, 2024</td>
                                            </tr>
                                            <tr>
                                                <td class=""><i class="bi bi-person-circle me-2"></i>Patrick
                                                </td>
                                                <td class=" h-4">Digital Marketer</td>
                                                <td class=" small">5th August, 2024</td>
                                            </tr>
                                            <tr>
                                                <td class=""><i class="bi bi-person-circle me-2"></i>Sheila</td>
                                                <td class="h-4">Account Manager</td>
                                                <td class="small">Today</td>
                                            </tr>
                                            <tr>
                                                <td class=""><i class="bi bi-person-circle me-2"></i>Fred</td>
                                                <td class="h-4">Social Media Manager</td>
                                                <td class="small">2nd September, 2024</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mb-5">
                    <div class="card rounded-5 cards text-secondary">
                        <h4 class="card-title ms-3 text-muted sessionType">Session by Device Type</h4>
                        <div class="card-body mt-3 d-flex">
                            <div class="col-4 d-flex flex-column justify-content-evenly">
                                <h4 class=" fs-5 fw-bold">Desktop</h4>
                                <h4 class="text-info fs-2 fw-bold">55.6%</h4>
                                <h6 class="text-info small fw-bold">201,434</h6>
                            </div>
                            <div class="col-4 d-flex flex-column justify-content-evenly">
                                <h4 class=" fs-5 fw-bold">Mobile</h4>
                                <h4 class="text-success fs-2 fw-bold">34.9%</h4>
                                <h6 class="text-success small fw-bold">134,693</h6>
                            </div>
                            <div class="col-4 d-flex flex-column justify-content-evenly">
                                <h4 class=" fs-5 fw-bold">Tablet</h4>
                                <h4 class="text-warning fs-2 fw-bold">20.6%</h4>
                                <h6 class="text-warning small fw-bold">81,525</h6>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent">
                            <div class="col-12">
                                <div class="progress" style="height: 70px !important">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 55.6%"
                                        aria-valuenow="55.6" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 34.9%"
                                        aria-valuenow="34.9" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 20.6%"
                                        aria-valuenow="20.6" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
