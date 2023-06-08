<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title>Staretonfinance</title>
    @include('include.c_css')
    <link id="skin-default" rel="stylesheet" href="{{ asset('assets/css/dropzone.min.css') }}">
</head>
<body class="g-sidenav-show  bg-gray-100">
    <div class='dashboard'>
        @include('include.c_sidebar')
        <div class='dashboard-app'>
            <header class='dashboard-toolbar'>
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
            </header>
            <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

                <section class="pricing-section">
                    <div class="container" style="margin-top: -60px">
                        <div class="sec-title text-center">
                            <span class="title">Retirement plan</span>
                            <h2>Choose a Retirement Plan and Invest</h2>
                        </div>

                        <div class="outer-box" style="margin-top: -40px">
                            @if (!$plans->isEmpty())
                                <div class="row">
                                    @foreach ($plans as $key => $plan)
                                        <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp"
                                            data-wow-delay="400ms">
                                            <div class="inner-box">
                                                {{-- <div class="icon-box">
                                                    <div class="icon-outer"><i class="fas fa-gem"></i></div>
                                                </div> --}}
                                                <div class="price-box" >
                                                    <div class="title" style="margin-top: 30px">{{ ucwords($plan->name) }} Plan</div>

                                                    <h4 class="price" >Min -
                                                        ${{ $plan->currency == 'USD' ? number_format($plan->min, 0, '.', ',') : $plan->min }}
                                                    </h4>
                                                    <h4 class="price" style="font-size: 20px">Max -
                                                        ${{ $plan->currency == 'USD' ? number_format($plan->max, 0, '.', ',') : $plan->max }}
                                                    </h4>
                                                </div>
                                                <ul class="features">
                                                    <li class="true">ROI: {{ $plan->roi }}%</li>
                                                    <li class="true">Duration: {{ $plan->duration }}</li>
                                                    <li class="true">Commission: {{ ucwords($plan->commission) }}%
                                                    </li>
                                                    <li class="true">Currency: {{ $plan->currency }}</li>
                                                    <li class="true">Insurance and Annuities</li>
                                                    <li class="true">Permanent Life Insurance</li>
                                                    <li class="true">Term Life Insurance</li>
                                                    <li class="true"> Long Term Disability Insurance</li>
                                                    <li class="true"> Long Term Care Insurance</li>
                                                </ul>
                                                <div class="row justify-content-center">
                                                    <input
                                                        style="width: 80%; border:2px solid #e6f2ff;border-radius:12px;"
                                                        class="form-control investment_amount"
                                                        placeholder="Enter Amount " id="input{{ $key }}"
                                                        data-btn="btn{{ $key }}" type="number" name=""
                                                        placeholder="0.00">

                                                    <span class="text-danger error_box d-block mt-1 mb-1"
                                                        id="error{{ $key }}">
                                                    </span>

                                                    <button
                                                        style="width: 200px; background-color: #3fc9b3; margin-top: 10px"
                                                        data-key="{{ $key }}"
                                                        data-error="error{{ $key }}"
                                                        id="btn{{ $key }}"
                                                        data-currency="{{ $plan->currency }}"
                                                        data-min="{{ $plan->currency == 'USD' ? number_format(round($plan->min, 2), 0, '.', '') : $plan->min }}"
                                                        data-max="{{ $plan->currency == 'USD' ? number_format(round($plan->max, 2), 0, '.', '') : $plan->max }}"
                                                        data-plan-url="{{ route('user.plan.view', ['currency']) }}"
                                                        data-plan-id="{{ $plan->id }}"
                                                        class="btn btn-primary invest_btn" disabled="true">
                                                        Select Plan
                                                    </button>


                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>
                </section>



                {{-- <main class="main-content  mt-0">
                    <section class="min-vh-100 mb-8">
                        <div class="container" style="margin-top: 30px">
                            <div class="row">
                                <div class="col-xl-6 col-lg-8 col-md-8 mx-auto">
                                    <div class="card z-index-0">
                                        <div class="card-header text-center pt-4">
                                            <h3>DEPOSIT ON YOUR RETIREMENT ACCOUNT</h3>
                                        </div>



                                        <div class="card-body">
                                            <form action="{{ route('user.retirement_account') }}" method="POST">
                                                @csrf
                                                <div class="row">

                                                    <div class="col-sm-12  form-row">
                                                        @if (!empty($success))
                                                            <span
                                                                class="info_box text-success">{{ $success }}</span>
                                                        @endif
                                                    </div>

                                                    <div class="col-sm-12  form-row">
                                                        @if (!empty($error))
                                                            <span
                                                                class="info_box text-danger">{{ $error }}</span>
                                                        @endif
                                                    </div>

                                                    <div class="col-sm-6 col-md-6" style="margin-top: -10px">
                                                        <div class="form-group">
                                                            <label class="form-label" style="color: black"
                                                                for="firstname">Firstname</label>
                                                            <div class="form-control-wrap">
                                                                <input required="" type="text"
                                                                    class="form-control" name="firstname"
                                                                    value="{{ $userDetails->firstname }}"
                                                                    placeholder="Enter firstname">
                                                            </div>
                                                            @error('firstname')
                                                                <span class="text-danger"
                                                                    id="error_name">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                    <div class="col-sm-6 col-md-6" style="margin-top: -10px">
                                                        <div class="form-group">
                                                            <label class="form-label" style="color: black"
                                                                for="lastname">Lastname</label>
                                                            <div class="form-control-wrap">
                                                                <input required="" type="text"
                                                                    class="form-control" name="lastname"
                                                                    value="{{ $userDetails->lastname }}"
                                                                    placeholder="Enter lastname">
                                                            </div>
                                                            @error('lastname')
                                                                <span class="text-danger"
                                                                    id="error_name">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>



                                                    <div class="col-sm-6 col-md-6" style="margin-top: -10px">
                                                        <div class="form-group">
                                                            <label class="form-label" style="color: black"
                                                                for="email">Email</label>
                                                            <div class="form-control-wrap">
                                                                <input required="" type="email"
                                                                    class="form-control" name="email"
                                                                    value="{{ $userDetails->email }}"
                                                                    placeholder="Enter email">
                                                            </div>
                                                            @error('email')
                                                                <span class="text-danger"
                                                                    id="error_name">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6 col-md-6" style="margin-top: -10px">
                                                        <div class="form-group">
                                                            <label class="form-label" style="color: black"
                                                                for="phone">Phone</label>
                                                            <div class="form-control-wrap">
                                                                <input required="" type="text"
                                                                    class="form-control" name="phone"
                                                                    value="{{ $userDetails->phone }}"
                                                                    placeholder="Enter Phone Number">
                                                            </div>
                                                            @error('phone')
                                                                <span class="text-danger"
                                                                    id="error_name">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6 col-md-6" style="margin-top: -10px">
                                                        <div class="form-group">
                                                            <label class="form-label" style="color: black"
                                                                for="phone">Next of Kin</label>
                                                            <div class="form-control-wrap">
                                                                <input required="" type="text"
                                                                    class="form-control" name="next_of_kin"
                                                                    value="{{ old('next_of_kin') }}"
                                                                    placeholder="Enter The Name Of Your Next of Kin">
                                                            </div>
                                                            @error('next_of_kin')
                                                                <span class="text-danger"
                                                                    id="error_name">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6 col-md-6" style="margin-top: -10px">
                                                        <div class="form-group">
                                                            <label class="form-label" style="color: black"
                                                                for="currency">Payment Method</label>
                                                            <div class="form-control-wrap">
                                                                <select name="currency" id="strategySelect"
                                                                    class="form-control">
                                                                    <option value="" disabled selected hidden>
                                                                        Payment Method
                                                                    </option>
                                                                    <option value="BTC">BTC</option>
                                                                    <option value="USD">USD</option>
                                                                    <option value="ETH">ETH</option>
                                                                </select>
                                                            </div>
                                                            @error('currency')
                                                                <span class="text-danger"
                                                                    id="error_name">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6 col-md-6" style="margin-top: -10px">
                                                        <div class="form-group">
                                                            <label class="form-label" style="color: black"
                                                                for="phone">Amount</label>
                                                            <div class="form-control-wrap">
                                                                <select name="amount" id="strategySelect"
                                                                    class="form-control">
                                                                    <option value="" disabled selected hidden>
                                                                        Amount</option>
                                                                    <option value="5000">$5,000</option>
                                                                    <option value="7000">$7,000</option>
                                                                    <option value="10000">$10,000</option>
                                                                    <option value="15000">$15,000</option>
                                                                    <option value="25000">$25,000</option>
                                                                    <option value="35000">$35,000</option>
                                                                    <option value="50000">$50,000</option>
                                                                    <option value="100000">$100,000
                                                                    </option>
                                                                    <option value="500000">$500,000
                                                                    </option>
                                                                    <option value="1000000">$1,000,000
                                                                    </option>

                                                                </select>
                                                            </div>
                                                            @error('amount')
                                                                <span class="text-danger"
                                                                    id="error_name">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6 col-md-6" style="margin-top: -10px">
                                                        <div class="form-group">
                                                            <label class="form-label" style="color: black"
                                                                for="phone">Duration</label>
                                                            <div class="form-control-wrap">
                                                                <select name="duration" id="strategySelect"
                                                                    class="form-control">
                                                                    <option value="" disabled selected hidden>
                                                                        Duration </option>
                                                                    <option value="3 years">3 years
                                                                    </option>
                                                                    <option value="6 years">6 years
                                                                    </option>
                                                                    <option value="10 year">10 year
                                                                    </option>
                                                                    <option value="15 years">15 years
                                                                    </option>
                                                                </select>
                                                            </div>
                                                            @error('duration')
                                                                <span class="text-danger"
                                                                    id="error_name">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                    <div class="col-sm-12 mt-3">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                                <button type="submit"
                                                                    style="text-align:center; background-color:rgb(48, 48, 102)"
                                                                    class="d-block bg-gradient-primary10 form-control btn btn-primary ">
                                                                    Submit Request</button>
                                                            </div>
                                                        </div>
                                                    </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </main> --}}


                {{-- </div> --}}
                {{-- </div> --}}
            </main>
            @include('include.settings')
            @include('include.c_script')
        </div>
</body>
</html>
