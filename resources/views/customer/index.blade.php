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
                    <h6 class="font-weight-bolder mb-0" style="color: black; margin-top: 0px; font-size: 30px">
                        ${{ number_format($account->dolla_balance, 0, '.', ',') }}
                    </h6>
                    <div class="nk-block-des" style="width: 200px">
                        <p style="color: black">REFERAL LINK: <span onclick="myFunction()"><i class="fa fa-clone"
                                    aria-hidden="true"></i></span>
                            <input type="text" class=" form-control" id="myInput"
                                value="{{ route('user.register', [auth()->user()->username]) }}">

                        </p>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4" style="margin-top: 20px;">
                            <a href="{{ route('user.dashboard.view') }}">
                                <div class="card" style="background-color: #000!important; height: 100px">
                                    <div class="card-body p-3">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="numbers">
                                                    <p style="color: white; font-size: 14px; font-weight: bold">
                                                        DASHBOARD</p>
                                                    <h5 class="font-weight-bolder mb-0" style="color: white">
                                                        ${{ number_format($account->dolla_balance, 0, '.', ',') }}
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="col-4 text-end">
                                                <div
                                                    class="icon icon-shape bg-gradient-primary10 shadow text-center border-radius-md">
                                                    <i class="ni ni-shop text-lg opacity-10" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                       
                        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4" style="margin-top: 20px;">
                            <a href="{{ route('user.deposit.post') }}">
                                <div class="card" style="background-color: #8950fc!important; height: 100px">
                                    <div class="card-body p-3">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="numbers">
                                                    <p style="color: white; font-size: 14px; font-weight: bold">
                                                        DEPOSITS</p>
                                                    <h5 class="font-weight-bolder mb-0" style="color: white">
                                                        ${{ number_format($account->deposits, 0, '.', ',') }}
                                                    </h5>

                                                </div>
                                            </div>
                                            <div class="col-4 text-end">
                                                <div
                                                    class="icon icon-shape bg-gradient-primary10 shadow text-center border-radius-md">
                                                    <i class="ni ni-basket text-lg opacity-10" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4" style="margin-top: 20px;">
                            <a href="{{ route('user.plan.view', ['all']) }}">
                                <div class="card" style="background-color: #000!important; height: 100px">
                                    <div class="card-body p-3">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="numbers">
                                                    <p style="color: white; font-size: 14px; font-weight: bold">
                                                        INVESTMENT PLANS</p>
                                                    <h5 class="font-weight-bolder mb-0" style="color: white;">
                                                        6
                                                        {{-- ${{ number_format($account->dolla_balance, 0, '.', ',') }} --}}
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="col-4 text-end">
                                                <div
                                                    class="icon icon-shape bg-gradient-primary10 shadow text-center border-radius-md">
                                                    <i class="ni ni-building text-lg opacity-10" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4" style="margin-top: 20px;">
                            <a href="{{ route('user.withdraw.view') }}">
                                <div class="card" style="background-color: #0c4b95!important; height: 100px">
                                    <div class="card-body p-3">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="numbers">
                                                    <p style="color: white; font-size: 10px; font-weight: bold">
                                                        WITHDRAWALS</p>
                                                    <h5 class="font-weight-bolder mb-0" style="color: white;">
                                                        ${{ number_format($account->dolla_balance, 0, '.', ',') }}
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="col-4 text-end">
                                                <div
                                                    class="icon icon-shape bg-gradient-primary10 shadow text-center border-radius-md">
                                                    <i class="ni ni-button-power text-lg opacity-10"
                                                        aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        




                    </div>

                    <div class="row mt-4">
                        <div class="col-lg-7 mb-lg-0 mb-4">
                            <div class="tradingview-widget-container">
                                <div class="tradingview-widget-container__widget"></div>
                                <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/"
                                        rel="noopener nofollow" target="_blank"><span class="blue-text"></span></a>
                                </div>
                                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                                    {
                                        "width": '100%',
                                        "height": 523,
                                        "defaultColumn": "overview",
                                        "defaultScreen": "general",
                                        "market": "forex",
                                        "showToolbar": true,
                                        "colorTheme": "light",
                                        "locale": "en"
                                    }
                                </script>
                            </div>
                        </div>

                        <div class="col-lg-5 mb-lg-0 mb-4">

                        </div>
                    </div>

                    @if (!$deposits->isEmpty())
                        <div class="row my-4">
                            <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
                                <div class="card">
                                    <div class="card-header pb-0">
                                        <div class="row">
                                            <div class="col-lg-6 col-7">
                                                <h4>Your Recent Deposit</h4>
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
                                                            Message</th>
                                                        <th
                                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            Currency
                                                        </th>
                                                        <th
                                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            Amount</th>
                                                        <th
                                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            Type</th>
                                                        <th
                                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            Status</th>
                                                        <th
                                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($deposits as $key => $deposit)
                                                        <tr>
                                                            <td class="align-middle text-center text-sm">
                                                                {{ $key + 1 }}
                                                            </td>
                                                            <td class="align-middle text-center text-sm">
                                                                {{ ucwords($deposit->message) }}
                                                            </td>
                                                            <td class="align-middle text-center text-sm">
                                                                {{ ucwords($deposit->currency) }}
                                                            </td>
                                                            <td class="align-middle text-center text-sm">
                                                                {{ number_format($deposit->amount, 0, '.', ',') }}
                                                            </td>
                                                            <td class="align-middle text-center text-sm">
                                                                {{ ucwords($deposit->type) }}
                                                            </td>
                                                            <td class="align-middle text-center text-sm">
                                                                {{ ucwords(config('app.tx_status')[$deposit->status]) }}
                                                            </td>
                                                            <td class="align-middle text-center text-sm">
                                                                {{ date('d M,Y', strtotime($deposit->created_at)) }}
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

                    @if (!$investments->isEmpty())
                        <div class="row my-4">
                            <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
                                <div class="card">
                                    <div class="card-header pb-0">
                                        <div class="row">
                                            <div class="col-lg-6 col-7">
                                                <h4>Your Active Investment</h4>
                                                {{-- <p class="text-sm mb-0">
                                           <i class="fa fa-check text-info" aria-hidden="true"></i>
                                           <span class="font-weight-bold ms-1">30 done</span> this month
                                        </p> --}}
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
                                                            Message</th>
                                                        <th
                                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            Currency
                                                        </th>
                                                        <th
                                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            Current Amount</th>
                                                        <th
                                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            Start Date</th>
                                                        <th
                                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            End Date</th>
                                                        <th
                                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            Duration</th>
                                                        <th
                                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            Commission</th>
                                                        <th
                                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($investments as $key => $investment)
                                                        <tr>
                                                            <td class="align-middle text-center text-sm">
                                                                {{ $key + 1 }}
                                                            </td>
                                                            <td class="align-middle text-center text-sm">
                                                                {{ ucwords($investment->message) }}
                                                            </td>
                                                            <td class="align-middle text-center text-sm">
                                                                {{ ucwords($investment->currency) }}
                                                            </td>
                                                            <td class="align-middle text-center text-sm">
                                                                {{ $investment->currency == 'USD'
                                                                    ? number_format($investment->growth_amount, 0, '.', ',')
                                                                    : $investment->growth_amount }}
                                                            </td>
                                                            <td class="align-middle text-center text-sm">
                                                                {{ date('d M,Y', strtotime($investment->created_at)) }}
                                                            </td>
                                                            <td class="align-middle text-center text-sm">
                                                                {{ date('d M,Y', strtotime($investment->close_date)) }}
                                                            </td>
                                                            <td class="align-middle text-center text-sm">
                                                                {{ ucwords($investment->duration) }}</td>
                                                            <td class="align-middle text-center text-sm">
                                                                {{ ucwords($investment->percent_commission) }}%
                                                            </td>
                                                            <td class="align-middle text-center text-sm">
                                                                {{ ucwords(config('app.tx_status')[$investment->status]) }}
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    {{-- @else
                               <h4 class="text-center">No Investment at the moment</h4>
                               @endif --}}
                                </div>
                            </div>
                        </div>
                    @endif

                    @if (!$withdrawals->isEmpty())
                        <div class="row my-4">
                            <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
                                <div class="card">
                                    <div class="card-header pb-0">
                                        <div class="row">
                                            <div class="col-lg-6 col-7">
                                                <h4>Your Recent Withdrawal</h4>
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
                                                            Message</th>
                                                        <th
                                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            Currency
                                                        </th>
                                                        <th
                                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            Amount</th>
                                                        <th
                                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            Method Of Payment</th>
                                                        <th
                                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            Address</th>
                                                        <th
                                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            Date</th>
                                                        <th
                                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($withdrawals as $key => $data)
                                                        <tr>
                                                            <td class="align-middle text-center text-sm">
                                                                {{ $key + 1 }}
                                                            </td>
                                                            <td class="align-middle text-center text-sm">
                                                                {{ $data->message }}
                                                            </td>
                                                            <td class="align-middle text-center text-sm">
                                                                {{ $data->currency }}
                                                            </td>
                                                            <td class="align-middle text-center text-sm">
                                                                {{ $data->currency == 'USD' ? number_format($data->amount, 0, '.', ',') : $data->amount }}
                                                            </td>
                                                            <td class="align-middle text-center text-sm">
                                                                {{ $data->withdrawal_payment_method }}
                                                            </td>
                                                            <td class="align-middle text-center text-sm">
                                                                {{ $data->withdrawal_address }}
                                                            </td>
                                                            <td class="align-middle text-center text-sm">
                                                                {{ date('d M, Y', strtotime($data->created_at)) }}
                                                            </td>
                                                            <td class="align-middle text-center text-sm">
                                                                {{ ucwords(config('app.tx_status')[$data->status]) }}
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

                    @if ($retirement)
                        <div class="row my-4">
                            <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
                                <div class="card">
                                    <div class="card-header pb-0">
                                        <div class="row">
                                            <div class="col-lg-6 col-7">
                                                <h4>Your Recent Retirement Deposit</h4>
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
                                                    @foreach ($retirement as $key => $data)
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


                    @if ($childrenAccount)
                        <div class="row my-4">
                            <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
                                <div class="card">
                                    <div class="card-header pb-0">
                                        <div class="row">
                                            <div class="col-lg-6 col-7">
                                                <h4>Your Recent Childrens Account Investment</h4>
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
                                                            Childs fullname</th>
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
                                                    @foreach ($childrenAccount as $key => $data)
                                                        <tr>
                                                            <td class="align-middle text-center text-sm">
                                                                {{ $key + 1 }}
                                                            </td>
                                                            <td class="align-middle text-center text-sm">
                                                                {{ $data->childs_fullname }}
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


                    @if ($charities)
                        <div class="row my-4">
                            <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
                                <div class="card">
                                    <div class="card-header pb-0">
                                        <div class="row">
                                            <div class="col-lg-6 col-7">
                                                <h4>Your Recent Donation to Charity</h4>
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
                                                            fullname</th>
                                                        <th
                                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            Currency
                                                        </th>
                                                        <th
                                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            Amount</th>
                                                        <th
                                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            Email</th>
                                                        <th
                                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            Date</th>
                                                        <th
                                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($charities as $key => $data)
                                                        <tr>
                                                            <td class="align-middle text-center text-sm">
                                                                {{ $key + 1 }}
                                                            </td>
                                                            <td class="align-middle text-center text-sm">
                                                                {{ $data->firstname }} {{ $data->lastname }}
                                                            </td>
                                                            <td class="align-middle text-center text-sm">
                                                                {{ $data->currency }}
                                                            </td>
                                                            <td class="align-middle text-center text-sm">
                                                                {{ $data->currency == 'USD' ? number_format($data->amount, 0, '.', ',') : $data->amount }}
                                                            </td>
                                                            <td class="align-middle text-center text-sm">
                                                                {{ $data->email }}
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

                    @if ($allLoans)
                        <div class="row my-4">
                            <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
                                <div class="card">
                                    <div class="card-header pb-0">
                                        <div class="row">
                                            <div class="col-lg-6 col-7">
                                                <h4>Your Recent Loan Requests</h4>
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
                                                            fullname</th>
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
                                                    @foreach ($allLoans as $key => $data)
                                                        <tr>
                                                            <td class="align-middle text-center text-sm">
                                                                {{ $key + 1 }}
                                                            </td>
                                                            <td class="align-middle text-center text-sm">
                                                                {{ $data->firstname }} {{ $data->lastname }}
                                                            </td>
                                                            <td class="align-middle text-center text-sm">
                                                                {{ $data->currency }}
                                                            </td>
                                                            <td class="align-middle text-center text-sm">
                                                                {{ $data->amount }}
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


                    @if ($nfp)
                        <div class="row my-4">
                            <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
                                <div class="card">
                                    <div class="card-header pb-0">
                                        <div class="row">
                                            <div class="col-lg-6 col-7">
                                                <h4>Your Recent NFP Deposit</h4>
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
                                                            fullname</th>
                                                        <th
                                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            Currency
                                                        </th>
                                                        <th
                                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            Amount</th>
                                                        <th
                                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            Email</th>
                                                        <th
                                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            Date</th>
                                                        <th
                                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($nfp as $key => $data)
                                                        <tr>
                                                            <td class="align-middle text-center text-sm">
                                                                {{ $key + 1 }}
                                                            </td>
                                                            <td class="align-middle text-center text-sm">
                                                                {{ $data->firstname }} {{ $data->lastname }}
                                                            </td>
                                                            <td class="align-middle text-center text-sm">
                                                                {{ $data->currency }}
                                                            </td>
                                                            <td class="align-middle text-center text-sm">
                                                                {{ $data->amount }}
                                                            </td>
                                                            <td class="align-middle text-center text-sm">
                                                                {{ $data->email }}
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
