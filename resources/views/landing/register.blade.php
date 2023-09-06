<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Register - KOI</title>
    <link rel="shortcut icon" href="{{ asset('images/logo/logo-koi.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/logo/logo-koi.png') }}" type="image/x-icon">
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,600,700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        body {
            font-family: 'Poppins', sans-serif !important;
        }

        @media only screen and (max-width : 600px) {
            .dekstop-view {
                display: none !important;
            }
        }

        @media only screen and (min-width : 600px) {
            .mobile-view {
                display: none !important;
            }
        }

    </style>
</head>

<body>

    <div class="main-canvas">
        <div class="row dekstop-view">
            <div class="col-lg-8 d-flex justify-content-center"
                style="background: linear-gradient(135deg, #19663b 0%, #113220 100%);min-height: 100vh !important;">
                <div class="card m-auto" style="border-radius: 20px; width: 60%; padding: 40px 20px;">

                    {{-- alert --}}
                    @if (!empty(Session::get('alert_success')))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert" style="font-size: 15px;">
                        <strong>Terdapat Kesalahan!</strong> Silahkan coba kembali
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    <div class="card-body">
                        <h2 class="card-title text-bold">Daftar Disini</h2>

                        <p>Sudah memiliki akun ? <a href="{{ route('login.form') }}"
                                style="color:#19663b;font-weight: 600;text-decoration: none;">Login disini</a></p>

                        {{-- form --}}
                        <form class="row row-cols-lg-auto g-3 align-items-center mt-4"
                            action="{{ route('regist.post') }}" method="POST">
                            @csrf
                            <input type="hidden" name="accountType" value="RESELLER" readonly>
                            <input type="hidden" name="store_reference" value="26572" readonly>
                            <input type="hidden" name="plan" value="1" readonly>
                            <input type="hidden" name="storeType" value="1" readonly>
                            <div class="col-12">
                                <div class="input-group shadow rounded-pill">
                                    {{-- <div class="input-group-text" style="border-radius: 20px 0px 0px 20px;">@</div> --}}
                                    <input type="text" class="form-control rounded-pill" id="name" name="name"
                                        placeholder="Nama Lengkap">
                                </div>
                            </div>

                            <div class="col-12 mt-4">
                                <div class="input-group shadow rounded-pill">
                                    <input type="email" class="form-control rounded-pill" id="email"
                                        placeholder="Email Anda" name="email">
                                </div>
                            </div>

                            <div class="col-12 mt-4">
                                <div class="input-group shadow rounded-pill">
                                    <div class="input-group-text" style="border-radius: 20px 0px 0px 20px;">+62</div>
                                    <input type="number" class="form-control" id="no_hp" placeholder="Nomor Hp"
                                        style="border-radius: 0px 20px 20px 0px;" name="phone">
                                </div>
                            </div>

                            <div class="col-12 mt-5 text-center">
                                <button type="submit" class="btn w-25 rounded-pill shadow"
                                    style="background-color: #19663b; color:#fff;">Daftar Sekarang</button>
                            </div>
                        </form>

                        {{-- Powered --}}
                        <div class="powered text-center" style="margin-top: 70px;">
                            <p style="font-size: 12px;color: #aeaeae;">Powered by iPaymu Ecosystem (Viralmu & Resellr)
                            </p>

                            <div class="row w-75 m-auto">
                                <div class="col-lg-4">
                                    <img src="{{asset('images/logo/viralmu-mini.png')}}"
                                        style="width: 70%;margin-top: -10px;">
                                </div>
                                <div class="col-lg-4">
                                    <img src="{{asset('images/logo/ipaymu.png')}}" style="width: 70%">
                                </div>
                                <div class="col-lg-4">
                                    <img src="{{asset('images/logo/resellr-logo.png')}}" style="width: 70%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            {{-- Right Content --}}
            <div class="col-lg-4 d-flex justify-content-center">
                <div class="image-wrapper m-auto text-center">
                    <img src="{{ asset('images/logo/logo-koi.png') }}" alt="" style="margin-left: -150px">
                </div>
            </div>
        </div>


        {{-- MOBILE VIEW --}}
        <div class="row mobile-view">
            <div class="col-lg-12"
                style="background: linear-gradient(135deg, #19663b 0%, #113220 100%);min-height: 100vh !important; padding: 20px 0px;">
                <div class="wrapper-in d-flex justify-content-center flex-column" style="min-height: 100vh !important;">
                    <div class="image-wrapper m-auto text-center" style="z-index: 999;">
                        <img src="{{ asset('images/logo/logo-koi.png') }}" alt="" style="width : 30%">
                    </div>
                    <div class="card m-auto"
                        style="border-radius: 20px; width: 90%; padding: 40px 10px; margin-top: -50px !important;">

                        <div class="card-body">
                            <h2 class="card-title text-bold">Daftar Disini</h2>

                            <p>Sudah memiliki akun ? <a href="{{ route('login.form') }}"
                                    style="color:#19663b;font-weight: 600;text-decoration: none;">Login disini</a></p>

                            {{-- form --}}
                            <form class="row row-cols-lg-auto g-3 align-items-center mt-4"
                                action="{{ route('regist.post') }}" method="POST">
                                @csrf
                                <input type="hidden" name="accountType" value="RESELLER" readonly>
                                <input type="hidden" name="store_reference" value="26572" readonly>
                                <input type="hidden" name="plan" value="4" readonly>
                                <div class="col-12">
                                    <div class="input-group shadow rounded-pill">
                                        {{-- <div class="input-group-text" style="border-radius: 20px 0px 0px 20px;">@</div> --}}
                                        <input type="text" class="form-control rounded-pill" id="name" name="name"
                                            placeholder="Nama Lengkap">
                                    </div>
                                </div>

                                <div class="col-12 mt-4">
                                    <div class="input-group shadow rounded-pill">
                                        <input type="email" class="form-control rounded-pill" id="email"
                                            placeholder="Email Anda" name="email">
                                    </div>
                                </div>

                                <div class="col-12 mt-4">
                                    <div class="input-group shadow rounded-pill">
                                        <div class="input-group-text" style="border-radius: 20px 0px 0px 20px;">+62
                                        </div>
                                        <input type="number" class="form-control" id="no_hp" placeholder="Nomor Hp"
                                            style="border-radius: 0px 20px 20px 0px;" name="phone">
                                    </div>
                                </div>

                                <div class="col-12 mt-5 text-center">
                                    <button type="submit" class="btn w-75 rounded-pill shadow"
                                        style="background-color: #19663b; color:#fff;">Daftar Sekarang</button>
                                </div>
                            </form>

                            {{-- Powered --}}
                            <div class="powered text-center" style="margin-top: 70px;">
                                <p style="font-size: 11px;color: #aeaeae;">Powered by iPaymu Ecosystem (Viralmu &
                                    Resellr)
                                </p>

                                <div class="row w-100 m-auto">
                                    <div class="col-lg-4 col-sm-4 col-md-4 col-4">
                                        <img src="{{asset('images/logo/viralmu-mini.png')}}"
                                            style="width:100%;margin-top: -10px;">
                                    </div>
                                    <div class="col-lg-4 col-sm-4 col-md-4 col-4">
                                        <img src="{{asset('images/logo/ipaymu.png')}}" style="width: 100%">
                                    </div>
                                    <div class="col-lg-4 col-sm-4 col-md-4 col-4">
                                        <img src="{{asset('images/logo/resellr-logo.png')}}" style="width: 100%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>

</body>

</html>
