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
                                    <h4 class="card-title"><b>Terlupa Kata laluan<b></h4>
                                    <h6 class="card-subtitle text-muted"> Sila masukkan emel untuk reset Kata laluan.</h6>
                                </div>
                                <div class="card-body">
                                    <form action="respass" method="POST" autocomplete="off" aria-autocomplete="off">
                                        @csrf
                                        <div class="form-group">
                                            <label class="form-label">E-mel</label>
                                            <input type="email" name="email" class="form-control" placeholder="xxxxxx@example.com" required>
                                        </div>
                                        <div class="form-row" style="text-align: center;">
                                            <div class="form-group col-md-12">
                                                <button type="submit" class=" btn btn-primary">Hantar</button>
                                                <a class="btn btn-outline-secondary" href="/">Kembali ke Log Masuk</a>
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