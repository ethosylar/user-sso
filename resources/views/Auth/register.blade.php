<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="{{ asset ('img/icons/logojkdm.png') }}" />

    <title>e-LP | Sistem Lesen Pengangkut</title>

    <link href="{{asset ('css/app.css') }}" rel="stylesheet">
    <link href="{{asset ('vendors/styles/style.min.css') }}" rel="stylesheet">


    <style type="text/css">

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
                        <div class="col-md-12" style="margin-left: auto;">
                            @if($message = Session::get('error'))

                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="alert-icon">
                                    <i class="far fa-fw fa-bell"></i>
                                </div>
                                <div class="alert-message">
                                    <strong>Harap Maaf!</strong> {{ session()->get('error') }}
                                </div>
                            </div>
                            @endif

                            @if($message = Session::get('success'))

                            <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="alert-icon">
                                    <i class="far fa-fw fa-bell"></i>
                                </div>
                                <div class="alert-message">
                                    <strong>Berjaya!</strong> {{ session()->get('success') }}
                                </div>
                            </div>

                            @endif
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"><b>PENDAFTARAN BARU SYARIKAT<b></h4>
                                    <h6 class="card-subtitle text-muted">Sila isi maklumat di bawah.</h6>
                                </div>
                                <div class="card-body">
                                    <form action="/regusr" method="POST" autocomplete="off" aria-autocomplete="off" enctype="multipart/form-data">
                                        @csrf
                                        <div class=col-md-12">
                                            <h4 class="text-center"><strong>BUTIRAN SYARIKAT</strong></h4>
                                            <div class="dropdown-divider"></div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="company_name">Nama Syarikat*</label>
                                                <input type="text" class="form-control" name="company_name" placeholder="Nama Syarikat" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="email">E-mel Syarikat*</label>
                                                <input type="text" class="form-control" name="email" placeholder="xxxxxx@example.com" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="company_contact_no">No Telefon Syarikat*</label>
                                                <input type="text" class="form-control" name="company_contact_no" id="company_contact_no" placeholder="Tanpa (-)" maxlength=12 pattern="\d{10,11}" required>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="no_SSM">No SSM*</label>
                                                <input type="text" class="form-control" name="no_SSM" placeholder="No. SSM" required>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="no_SSM">Salinan SSM Lengkap*</label>
                                                <input type="file" class="form-control" name="ssm_attachment" id="ssm_attachment" accept=".pdf, .jpg, .jpeg, .png" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="company_address">Alamat Syarikat*</label>
                                            <input type="text" class="form-control" name="company_address" placeholder="Alamat Syarikat" required>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="city">Bandar*</label>
                                                <input type="text" class="form-control" name="city" placeholder="Bandar" required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="state">Negeri*</label>
                                                <select id="state" name="state" class="form-control" required>
                                                    <option selected>Pilih...</option>
                                                    <option value="Pahang">PAHANG</option>
                                                    <option value="Perak">PERAK</option>
                                                    <option value="Terengganu">TERENGGANU</option>
                                                    <option value="Perlis">PERLIS</option>
                                                    <option value="Selangor">SELANGOR</option>
                                                    <option value="Negeri Sembilan">NEGERI SEMBILAN</option>
                                                    <option value="Johor">JOHOR</option>
                                                    <option value="Kelantan">KELANTAN</option>
                                                    <option value="Kedah">KEDAH</option>
                                                    <option value="Pulau Pinang">PULAU PINANG</option>
                                                    <option value="Melaka">MELAKA</option>
                                                    <option value="Sabah">SABAH</option>
                                                    <option value="Sarawak">SARAWAK</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="poskod">Poskod*</label>
                                                <input type="number" class="form-control" name="poskod" placeholder="Poskod"  maxlength="5" required>
                                            </div>
                                        </div><br>
                                        <div class="col-md-12">
                                            <h4 class="text-center"><strong>BUTIRAN PEMOHON</strong></h4>
                                            <div class="dropdown-divider"></div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="applicant_name">Nama Pengarah*</label>
                                                <input type="text" class="form-control" name="applicant_name" placeholder="Nama Pemohon" required>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="no_mykad">No. Kad Pengenalan Pengarah*</label>
                                                <input type="text" class="form-control" name="no_mykad" id="no_mykad" placeholder="tanpa (-)" maxlength=12 required>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="no_SSM">Salinan Kad Pengenalan Pengarah*</label>
                                                <input type="file" class="form-control" name="ic_attachment" id="ic_attachment" accept=".pdf, .jpg, .jpeg, .png" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="applicant_contact_no">No. Telefon Pengarah*</label>
                                                <input type="text" class="form-control" name="applicant_contact_no" id="applicant_contact_no" placeholder="No. Telefon Pemohon" maxlength=11 required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="applicant_position">Jawatan*</label>
                                                <input type="text" class="form-control" name="applicant_position" placeholder="Pengarah" value="Pengarah" disabled>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="applicant_email">E-mel Pengarah*</label>
                                                <input type="email" class="form-control" name="applicant_email" placeholder="xxxxxx@example.com" required>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="password">Kata laluan*</label>
                                                <input type="password" class="form-control" name="password" placeholder="***********" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@$!%*#?&]).{8,32}" title="Your password must be between 8 - 32 characters long and include uppercase letter (A-Z), lowercase letter (a-z), number (0-9) and special characters such as @$!%*#?&" required>

                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="repassword">Ulang Kata laluan*</label>
                                                <input type="password" class="form-control" name="repassword" placeholder="***********" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@$!%*#?&]).{8,32}" title="Your password must be between 8 - 32 characters long and include uppercase letter (A-Z), lowercase letter (a-z), number (0-9) and special characters such as @$!%*#?&" required>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="modal-footer" style="text-align: center;">
                                            <div class="form-group col-md-12">
                                                <button type="submit" class=" btn btn-primary">Daftar Baru</button>
                                                <a class="btn btn-outline-secondary" href="/">Ke Log Masuk</a>
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

    <script>
        $(document).ready(function() {
            $('#company').click(function() {
                $('.register').show();
            });

            $('#agent').click(function() {

                $('.register').hide();

            });


        });
    </script>
    <script>
        document.getElementById('ssm_attachment').addEventListener('change', function() {
            const fileInput = this;
            if (fileInput.files.length > 0) {
                const fileSize = fileInput.files[0].size; // in bytes
                const maxSize = 10 * 1024 * 1024; // 10MB in bytes

                if (fileSize > maxSize) {
                    alert('Fail terlalu besar. Pilih fail tidak melebihi 10MB.');
                    // Clear the selected file (optional)
                    fileInput.value = '';
                }
            }
        });
    </script>
    <script>
        document.getElementById('ic_attachment').addEventListener('change', function() {
            const fileInput = this;
            if (fileInput.files.length > 0) {
                const fileSize = fileInput.files[0].size; // in bytes
                const maxSize = 10 * 1024 * 1024; // 10MB in bytes

                if (fileSize > maxSize) {
                    alert('Fail terlalu besar. Pilih fail tidak melebihi 10MB.');
                    // Clear the selected file (optional)
                    fileInput.value = '';
                }
            }
        });
    </script>
    <script>
        // Regex pattern for Malaysian phone numbers (10 to 11 digits)
        const phonePattern = /^(01[0-46-9]-*\d{7,8}|01[0-46-9]\d{7,8})$/;

        // Regex pattern for MyKad (No Kad Pengenalan) with specific format (12 characters)
        const myKadPattern = /^[0-9]{6}-\d{2}-\d{4}$/;

        function validatePhone() {
            const phoneInput = document.getElementById('phoneInput');
            const phoneValidationMessage = document.getElementById('phoneValidationMessage');

            if (phonePattern.test(phoneInput.value)) {
                phoneValidationMessage.textContent = 'Valid phone number.';
            } else {
                phoneValidationMessage.textContent = 'Invalid phone number.';
            }
        }
    
        function validateMyKad() {
            const myKadInput = document.getElementById('myKadInput');
            const myKadValidationMessage = document.getElementById('myKadValidationMessage');

            if (myKadPattern.test(myKadInput.value)) {
                myKadValidationMessage.textContent = 'Valid MyKad (No Kad Pengenalan).';
            } else {
                myKadValidationMessage.textContent = 'Invalid MyKad (No Kad Pengenalan).';
            }
        }
    </script>
    


    <script src="{{ asset('vendors/scripts/core.js')}}"></script>
    <script src="{{ asset('vendors/scripts/script.min.js')}}"></script>
    <script src="{{ asset('vendors/scripts/process.js')}}"></script>
    <!-- <script src=" vendors/scripts/layout-settings.js"></script> -->

    <script src="{{ asset('js/vendor.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>