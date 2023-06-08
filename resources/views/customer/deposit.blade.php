<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <title>Stackforte Finance</title>
    @include('include.c_css')
    <link id="skin-default" rel="stylesheet" href="{{ asset('assets/css/dropzone.min.css') }}">

    <style>
        #success_message {
            display: none;
        }
    </style>

    <script>
        $(document).ready(function() {
            $('#contact_form').bootstrapValidator({
                    // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
                    feedbackIcons: {
                        valid: 'glyphicon glyphicon-ok',
                        invalid: 'glyphicon glyphicon-remove',
                        validating: 'glyphicon glyphicon-refresh'
                    },
                    fields: {
                        first_name: {
                            validators: {
                                stringLength: {
                                    min: 2,
                                },
                                notEmpty: {
                                    message: 'Please supply your first name'
                                }
                            }
                        },
                        last_name: {
                            validators: {
                                stringLength: {
                                    min: 2,
                                },
                                notEmpty: {
                                    message: 'Please supply your last name'
                                }
                            }
                        },
                        email: {
                            validators: {
                                notEmpty: {
                                    message: 'Please supply your email address'
                                },
                                emailAddress: {
                                    message: 'Please supply a valid email address'
                                }
                            }
                        },
                        phone: {
                            validators: {
                                notEmpty: {
                                    message: 'Please supply your phone number'
                                },
                                phone: {
                                    country: 'US',
                                    message: 'Please supply a vaild phone number with area code'
                                }
                            }
                        },
                        address: {
                            validators: {
                                stringLength: {
                                    min: 8,
                                },
                                notEmpty: {
                                    message: 'Please supply your street address'
                                }
                            }
                        },
                        city: {
                            validators: {
                                stringLength: {
                                    min: 4,
                                },
                                notEmpty: {
                                    message: 'Please supply your city'
                                }
                            }
                        },
                        state: {
                            validators: {
                                notEmpty: {
                                    message: 'Please select your state'
                                }
                            }
                        },
                        zip: {
                            validators: {
                                notEmpty: {
                                    message: 'Please supply your zip code'
                                },
                                zipCode: {
                                    country: 'US',
                                    message: 'Please supply a vaild zip code'
                                }
                            }
                        },
                        comment: {
                            validators: {
                                stringLength: {
                                    min: 10,
                                    max: 200,
                                    message: 'Please enter at least 10 characters and no more than 200'
                                },
                                notEmpty: {
                                    message: 'Please supply a description of your project'
                                }
                            }
                        }
                    }
                })
                .on('success.form.bv', function(e) {
                    $('#success_message').slideDown({
                        opacity: "show"
                    }, "slow") // Do something ...
                    $('#contact_form').data('bootstrapValidator').resetForm();

                    // Prevent form submission
                    e.preventDefault();

                    // Get the form instance
                    var $form = $(e.target);

                    // Get the BootstrapValidator instance
                    var bv = $form.data('bootstrapValidator');

                    // Use Ajax to submit form data
                    $.post($form.attr('action'), $form.serialize(), function(result) {
                        console.log(result);
                    }, 'json');
                });
        });
    </script>

</head>

<body class="g-sidenav-show  bg-gray-100">

    @include('include.c_sidebar')
    <div class='dashboard-app'>
        @include('include.c_header')

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <main class="main-content  mt-0">
            <section class="min-vh-100 mb-8">
                <div class="container" style="margin-top: 30px">
                    <div class="row">
                        <div class="col-xl-6 col-lg-8 col-md-8 mx-auto">
                            <div class="card z-index-0">
                                <div class="card-header text-center pt-4">
                                    <h3>Top Up Your Account Balance!</h3>
                                </div>

                                <div class="card-body">
                                    <form role="form text-left">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Select Currency</label>
                                            <select name="currency" id="currency" class="form-control"
                                                id="exampleFormControlSelect1">
                                                <option {{ request()->account == 'usd' ? 'selected' : '' }}
                                                    value="usd" class="small">USD</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlSelect1">Amount to Deposit</label>
                                            <span class=" text-center text-danger" id="error_box"></span>
                                            <input type="text" class="form-control" id="buysell-amount"
                                                name="bs-amount" placeholder="Enter Amount" aria-label="Password"
                                                aria-describedby="password-addon">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Payment Method</label>
                                            <select name="method" id="method" class="form-control"
                                                id="exampleFormControlSelect1">
                                                @if ($application->bitcoin_address)
                                                    <option value="BTC">BITCOIN </option>
                                                @endif

                                                @if ($application->ethereum_address)
                                                    <option value="ETH">ETHEREUM </option>
                                                @endif

                                                @if ($application->litecoin_address)
                                                    <option value="LTC">LITCOIN </option>
                                                @endif

                                                @if ($application->btc_cash_address)
                                                    <option value="BCH">BITCOIN CASH </option>
                                                @endif

                                                @if ($application->binancecoin_address)
                                                    <option value="BNB">BINANCE COIN </option>
                                                @endif

                                                @if ($application->dodgecoin_address)
                                                    <option value="DODGE">DODGE COIN </option>
                                                @endif

                                                @if ($application->usdt_address)
                                                    <option value="USDT">TETHER (USDT) </option>
                                                @endif
                                            </select>
                                        </div>
                                        <div class="text-center">
                                            <button data-url="{{ route('user.deposit.post') }}"
                                                class="btn bg-gradient-primary10 mt-3 w-100 deposit_cash">
                                            <h6 style="color: white">+ add funds</h6>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </main>
    @include('include.settings')

    <div class="modal fade" tabindex="-1" role="dialog" id="buy-coin">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <div class="nk-block-head nk-block-head-xs text-center">
                        <div class="nk-block-text">
                            <div class="title-sub d-none bank text-primary">
                                Make Payment to the Account below , upload your reciept and click the confirm button.
                                <ul class="text-justify p-3 text-dark">
                                    <li>Bank Name : <strong class="text-primary">
                                            <?= ucwords($application->bank_name) ?></strong></li>
                                    <li>Account Number :<strong class="text-primary">
                                            <?= ucwords($application->bank_account_no) ?></strong></li>
                                    <li>Account Name :<strong class="text-primary">
                                            <?= ucwords($application->bank_account_name) ?></strong></li>
                                </ul>
                            </div>
                            <div class="nk-refwg-invite d-none btc">
                                <div class="nk-refwg-head ">
                                    <div class="nk-refwg-title">
                                        <div class="title-sub text-primary">Make Payments of <strong
                                                class="converted_payment"></strong> to the wallet address below ,
                                            upload your transaction screenshot and click confirm button.</div>
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-md-6 col-sm-7 p-1">
                                        <input readonly style="width:100%;" type="text" class="form-control"
                                            value="" id="btc_amount">
                                    </div>
                                    <div class="col-md-6 col-sm-5 p-1">
                                        <button style="width:100%;text-align:center !important;"
                                            class="btn btn-primary d-block " onclick="copyText('btc_amount')">Copy
                                            Amount</button>
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-md-6 col-sm-7 p-1">
                                        <input readonly style="width:100%;" type="text" class="form-control"
                                            value="<?= $application->btc_address ?>" id="wallet_address">
                                    </div>
                                    <div class="col-md-6 col-sm-5 p-1">
                                        <button style="width:100%;text-align:center !important;"
                                            class="btn btn-primary d-block " onclick="copyText('wallet_address')">Copy
                                            Address</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dropzone"></div>
                    <div class="nk-block">
                        <div class="buysell-field form-action text-center">
                            <div>
                                <a href="#" class="btn btn-primary mt-4 btn-lg confirm_deposit"
                                    data-url="{{ route('user.deposit.confirm.post') }}">Confirm
                                    Payments</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('include.c_script')
    <script>
        var $imageArray = [];
        var $site = "{{ route('app.home') }}";
        let $proof_upload = "{{ route('user.deposit.proof.post', ['add']) }}";
        let $proof_delete = "{{ route('user.deposit.proof.post', ['delete']) }}";
    </script>
    <script src="{{ asset('assets/js/dropzone.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom_dropzone.js') }}"></script>
    </div>
</body>


</html>
