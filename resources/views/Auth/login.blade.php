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

	<title>ezID | Sistem Pengurusan ID</title>

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
	<div class="main">
		<nav class="navbar navbar-expand-lg py-3 navbar-dark bg-dark shadow-sm">
			<div style="margin: auto;">
				<a href="#" class="navbar-brand">
					<!-- Logo Image -->
					<img src="{{asset('img/icons/logojkdm.png')}}" width="45" alt="" class="d-inline-block align-middle mr-2">
					<!-- Logo Text -->
					<span class="font-weight-bold">Sistem Pengurusan ID (ezID)</span>
				</a>
			</div>
		</nav>

		<main class="content">
			<div class="container-fluid p-0">
				<div class="row">
					<div class="col-md-12 col-xl-6" style="margin:auto;">
						<div class="card">
							<div class="card-body">
								<h1 class="mb-3 text-center" style="font-family: Helvetica, Arial, sans-serif"><strong>Selamat Datang ke Sistem e-LP 👋</strong></h1>
								<h6 class="card-subtitle text-muted text-center"> Sila masukkan E-mel dan Kata laluan untuk log masuk</h6>
								<hr>
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
								<form action="loginuser" method="POST" autocomplete="off" aria-autocomplete="off">
									@csrf
									<div class="form-group">
										<label class="form-label">E-mel</label>
										<input type="email" name="email" class="form-control" placeholder="xxxxxx@example.com" required>
									</div>
									<div class="form-group">
										<div class="d-flex justify-content-between">
											<label class="form-label" for="password">Kata laluan</label>
											<a href="/forgotpass">Terlupa Kata laluan?</a>
										</div>
										<div class="form-group">
											<input type="password" class="form-control" name="password" placeholder="Kata laluan" aria-describedby="password" required />
										</div>
									</div>
									<div class="form-row" style="text-align: center;">
										<div class="form-group col-md-12">
											<button type="submit" class=" btn btn-primary">Log Masuk</button>
											<a class="btn btn-outline-secondary" href="/register">Daftar Syarikat</a>
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
			<div class="container p-4">
				<div class="row">
					<div class="col-lg-5">
						<h5 class="mb-3 text-dark">Alamat:</h5>
						<a>
							<b>JABATAN KASTAM DIRAJA MALAYSIA SELANGOR,</b><br>
							Bahagian Perkastaman<br>
							Pusat Pelesenan Bersetempat / Unit Kawalan Ejen<br>
							Aras Bawah, Wisma Kastam Selangor,<br>
							No. 1, Jalan Perigi Nenas 7/1,<br>
							KS II, Taman Perindustrian Pulau Indah,<br>
							42907 Pelabuhan Klang,<br>
							Selangor Darul Ehsan<br>
						</a>
					</div>
					<div class="col-lg-3">
						<h5 class="mb-3 text-dark">Pautan</h5>
						<ul class="list-unstyled mb-0">
							<li class="mb-1">
								<a href="#!" style="color: #4f4f4f;">FAQ</a>
							</li>
							<li class="mb-1">
								<a href="https://drive.google.com/file/d/1XO5C7C16TRIXSvb-x9FzJ5pKFSQM-NjP/view?usp=sharing" style="color: #4f4f4f;">Panduan Pengguna</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-4">
						<h5 class="mb-3 text-dark">Hubungi Kami:</h5>
						<ul class="list-unstyled mb-0">
							<li class="mb-1">
								<a href="#!" style="color: #4f4f4f;">No. Tel : 03-3169 3927</a>
							</li>
							<li class="mb-1">
								<a href="#!" style="color: #4f4f4f;">E-mel : adminsistemelp@customs.gov.my</a>
							</li>
						</ul>

					</div>
				</div>
			</div>
			<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
				Hak Cipta Terpelihara JKDM Zon Tengah Unit II Selangor &copy;
				<script>
					document.write(new Date().getFullYear());
				</script>
			</div>
			<!-- Copyright -->
		</footer>

	</div>
</body>

</html>