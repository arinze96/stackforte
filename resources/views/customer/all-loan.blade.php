<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <title>STACKFORTE FINANCE</title>
    @include('include.c_css')

    <script>
        function myFunction() {
            var copyText = document.getElementById("myInput");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            navigator.clipboard.writeText(copyText.value);
            alert("Copied the text: " + copyText.value);
        }
    </script>



</head>

<body>
    <div class='dashboard'>
        @include('include.c_sidebar')
        <div class='dashboard-app'>
            @include('include.c_header')
            <main class="main-content  position-relative max-height-vh-100 h-100 ">
                <div class="container-fluid py-4">

                    @if ($loan)
                        <div class="row my-4">
                            <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
                                <div class="card">
                                    <div class="card-header pb-0">
                                        <div class="row">
                                            <div class="col-lg-6 col-7">
                                                <h4>Your Recent Loans</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body px-0 pb-2">
                                        <div class="table-responsive">
                                            <table class="table align-items-center mb-0">
                                                <thead>
                                                    <tr>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                                            style="font-weight: 900; color: black">
                                                            #</th>
                                                        <th
                                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                            Next-of-kin</th>
                                                        <th
                                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            Currency
                                                        </th>
                                                        <th
                                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            Amount</th>
                                                        <th
                                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            Duration</th>
                                                        <th
                                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            Date</th>
                                                        <th
                                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($loan as $key => $data)
                                                        <tr>
                                                            <td class="align-middle text-center text-sm">
                                                                {{ $key + 1 }}
                                                            </td>
                                                            <td class="align-middle text-center text-sm">
                                                                {{ $data->next_of_kin }}
                                                            </td>
                                                            <td class="align-middle text-center text-sm">
                                                                {{ $data->currency }}
                                                            </td>
                                                            <td class="align-middle text-center text-sm">
                                                                {{ $data->currency == 'USD' ? number_format($data->amount, 0, '.', ',') : $data->amount }}
                                                            </td>
                                                            <td class="align-middle text-center text-sm">
                                                                {{ $data->duration }}
                                                            </td>
                                                            <td class="align-middle text-center text-sm">
                                                                {{ date('d M, Y', strtotime($data->created_at)) }}
                                                            </td>
                                                            <td class="align-middle text-center text-sm">
                                                                {{ $data->status == 0 ? 'processing' : 'approved' }}
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    <footer class="footer pt-3  ">
                        <div class="container-fluid">
                            <div class="row align-items-center justify-content-lg-between">
                                <div class="col-lg-6 mb-lg-0 mb-4">
                                    <div class="copyright text-center text-sm text-muted text-lg-start">
                                        ©
                                        <script>
                                            document.write(new Date().getFullYear())
                                        </script>,
                                        made with <i class="fa fa-heart"></i> by
                                        <a href="https://staretontech.com/" class="font-weight-bold"
                                            target="_blank">Stackforte Finance</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </main>
            <div class="fixed-plugin">
                <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
                    <i class="fa fa-cog py-2"> </i>
                </a>
                <div class="card shadow-lg ">
                    <div class="card-header pb-0 pt-3 ">
                        <div class="float-start">
                            <h5 class="mt-3 mb-0">Soft UI Configurator</h5>
                            <p>See our dashboard options.</p>
                        </div>
                        <div class="float-end mt-4">
                            <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                                <i class="fa fa-close"></i>
                            </button>
                        </div>

                    </div>
                    <hr class="horizontal dark my-1">
                    <div class="card-body pt-sm-3 pt-0">

                        <div>
                            <h6 class="mb-0">Sidebar Colors</h6>
                        </div>
                        <a href="javascript:void(0)" class="switch-trigger background-color">
                            <div class="badge-colors my-2 text-start">
                                <span class="badge filter bg-gradient-primary active" data-color="primary"
                                    onclick="sidebarColor(this)"></span>
                                <span class="badge filter bg-gradient-dark" data-color="dark"
                                    onclick="sidebarColor(this)"></span>
                                <span class="badge filter bg-gradient-info" data-color="info"
                                    onclick="sidebarColor(this)"></span>
                                <span class="badge filter bg-gradient-success" data-color="success"
                                    onclick="sidebarColor(this)"></span>
                                <span class="badge filter bg-gradient-warning" data-color="warning"
                                    onclick="sidebarColor(this)"></span>
                                <span class="badge filter bg-gradient-danger" data-color="danger"
                                    onclick="sidebarColor(this)"></span>
                            </div>
                        </a>

                        <div class="mt-3">
                            <h6 class="mb-0">Sidenav Type</h6>
                            <p class="text-sm">Choose between 2 different sidenav types.</p>
                        </div>
                        <div class="d-flex">
                            <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-transparent"
                                onclick="sidebarType(this)">Transparent</button>
                            <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white"
                                onclick="sidebarType(this)">White</button>
                        </div>
                        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop
                            view.</p>

                        <div class="mt-3">
                            <h6 class="mb-0">Navbar Fixed</h6>
                        </div>
                        <div class="form-check form-switch ps-0">
                            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed"
                                onclick="navbarFixed(this)">
                        </div>
                        <hr class="horizontal dark my-sm-4">


                    </div>
                </div>
            </div>
            @include('include.c_script')
        </div>
    </div>
</body>


</html>
