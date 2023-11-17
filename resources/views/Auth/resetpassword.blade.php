<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Web UI Kit &amp; Dashboard Template based on Bootstrap">
    <meta name="author" content="AdminKit">
    <meta name="keywords" content="adminkit, bootstrap, web ui kit, dashboard template, admin template">

    <link rel="shortcut icon" href="{{ asset ('img/icons/logojkdm.png') }}" />

    <title>e-LP | Sistem Lesen Pengangkut</title>

    <link href="{{asset ('css/app.css') }}" rel="stylesheet">
    <link href="{{asset ('vendors/styles/style.min.css') }}" rel="stylesheet">

    <style type="text/css">
        .main {
            display: flex;
            width: 100%;
            min-width: 0;
            min-height: 100vh;
            transition: margin-left 0.35s ease-in-out, left 0.35s ease-in-out,
                margin-right 0.35s ease-in-out, right 0.35s ease-in-out;
            background: #f7f7fc;
            background-size: cover;
            background-image: url("../css/imgLogin/sunset.jpg");
            flex-direction: column;
            overflow: hidden;
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }
    </style> <!-- untuk custom style/format -->

</head>

<body>
    <div class="wrapper">

        <div class="main">
            <nav class="navbar navbar-expand-lg py-3 navbar-dark bg-dark shadow-sm">
                <div style="margin:auto">
                    <a href="#" class="navbar-brand">
                        <!-- Logo Image -->
                        <img src="{{asset('img/icons/logojkdm.png')}}" width="45" alt="" class="d-inline-block align-middle mr-2">
                        <!-- Logo Text -->
                        <span class="font-weight-bold">Sistem Lesen Pengangkut (e-LP)</span>
                    </a>
                </div>
            </nav>

            <main class="content">
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-md-12 col-xl-6" style="margin:auto;">
                            @if($message = Session::get('error'))
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="alert-message">
                                    <strong>Harap Maaf!</strong> {{ session()->get('error') }}
                                </div>
                            </div>
                            @endif

                            @if($message = Session::get('success'))
                            <div class="alert alert-primary alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="alert-message">
                                    <strong>Berjaya!</strong> {{ session()->get('success') }}
                                </div>
                            </div>
                            @endif
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"><b>Reset Kata laluan<b></h4>
                                    <h6 class="card-subtitle text-muted"> Sila masukkan kata laluan baru untuk kemaskini.</h6>
                                </div>
                                <div class="card-body">
                                    <form action="/updatepassword" method="POST" autocomplete="off" aria-autocomplete="off">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $user->id }}">
                                        <div class="input-group custom">
                                            <input type="text" class="form-control form-control-lg" placeholder="Email" name="email" value="{{ $user->email }}" readonly required />
                                            <div class="input-group-append custom">
                                                <span class="input-group-text"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                                            </div>
                                        </div>
                                        <div class="input-group custom">
                                            <input type="password" class="form-control form-control-lg" placeholder="Kata Laluan Baru" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@$!%*#?&]).{8,32}" title="Your password must be between 8 - 32 characters long and include uppercase letter (A-Z), lowercase letter (a-z), number (0-9) and special characters such as @$!%*#?&" required />
                                            <div class="input-group-append custom">
                                                <span class="input-group-text"><i class="fa fa-key" aria-hidden="true"></i></span>
                                            </div>
                                        </div>
                                        <div class="input-group custom">
                                            <input type="password" class="form-control form-control-lg" placeholder="Ulang Kata Laluan Baru" name="repassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@$!%*#?&]).{8,32}" title="Your password must be between 8 - 32 characters long and include uppercase letter (A-Z), lowercase letter (a-z), number (0-9) and special characters such as @$!%*#?&" required />
                                            <div class="input-group-append custom">
                                                <span class="input-group-text"><i class="fa fa-key" aria-hidden="true"></i></span>
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-12">
                                                <div class="input-group mb-0">
                                                    <input class="btn btn-primary btn-lg btn-block" type="submit" value="Hantar">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <footer style="background-color: #eee6d3;">
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                    Hak Cipta Terpelihara JKDM Zon Tengah Unit II Selangor &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script>

                </div>
            </footer>
        </div>
    </div>

    <script src="{{ asset('js/vendor.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>