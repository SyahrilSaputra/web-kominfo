<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
<link rel="icon" type="image/png" href="./assets/img/favicon.png">

<title>Kementrian Komunikasi Informatika dan Persandian Kabupaten Bone</title>



<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

<!-- Nucleo Icons -->
<link href="{{ asset('') }}assets/user/css/nucleo-icons.css" rel="stylesheet" />
<link href="{{ asset('') }}assets/user/css/nucleo-svg.css" rel="stylesheet" />

<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

<!-- CSS Files -->



<link id="pagestyle" href="{{ asset('') }}assets/user/css/material-kit.css?v=3.0.0" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

@yield('css')
</head>

<body class="index-page bg-gray-200">
  
  
  <!-- Navbar -->
<div class="container position-sticky z-index-sticky top-0"><div class="row"><div class="col-12">
	<nav class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
		<div class="container-fluid px-0">
			<a class="navbar-brand font-weight-bolder ms-sm-3" href="https://demos.creative-tim.com/material-kit/index" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
				Kominfo Bone
			</a>
			<button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon mt-2">
				<span class="navbar-toggler-bar bar1"></span>
				<span class="navbar-toggler-bar bar2"></span>
				<span class="navbar-toggler-bar bar3"></span>
			</span>
			</button>
			<div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
				<ul class="navbar-nav navbar-nav-hover ms-auto">
					<li class="nav-item dropdown dropdown-hover mx-2 active">
						<a href="{{ route('landing') }}" class="nav-link ps-2 d-flex align-items-center">
						<i class="material-icons opacity-6 me-2 text-md">dashboard</i>
						Home
						</a>
					</li>
					<li class="nav-item dropdown dropdown-hover mx-2">
						<a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
							<i class="material-icons opacity-6 me-2 text-md">dashboard</i>
							Profil
							<img src="{{ asset('') }}assets/user/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-auto ms-md-2">
						</a>
						<div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-xl mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages">
							<div class="d-none d-lg-block">
								<a href="{{ route('visimisi') }}" class="dropdown-item border-radius-md">
									<span>Visi Misi</span>
								</a>
								<a href="{{ route('tentang') }}" class="dropdown-item border-radius-md">
									<span>Tentang Kami</span>
								</a>
								<a href="{{ route('pimpinan.user') }}" class="dropdown-item border-radius-md">
									<span>Pimpinan</span>
								</a>
							</div>

							<div class="d-lg-none">
								<a href="{{ route('visimisi') }}" class="dropdown-item border-radius-md">
									<span>Visi Misi</span>
								</a>
								<a href="{{ route('tentang') }}" class="dropdown-item border-radius-md">
									<span>Tentang Kami</span>
								</a>
								<a href="{{ route('pimpinan.user') }}" class="dropdown-item border-radius-md">
									<span>Pimpinan</span>
								</a>
							</div>

						</div>
					</li>
					<li class="nav-item dropdown dropdown-hover mx-2">
						<a href="{{ route('informasi.user') }}" class="nav-link ps-2 d-flex cursor-pointer align-items-center">
						<i class="material-icons opacity-6 me-2 text-md">dashboard</i>
						Informasi
						</a>
					</li>
					<li class="nav-item dropdown dropdown-hover mx-2">
						<a href="{{ route('galeri.user') }}" class="nav-link ps-2 d-flex cursor-pointer align-items-center">
						<i class="material-icons opacity-6 me-2 text-md">dashboard</i>
						Galeri
						</a>
					</li>
					<li class="nav-item dropdown dropdown-hover mx-2">
						<a href="{{ route('kontak.user') }}" class="nav-link ps-2 d-flex cursor-pointer align-items-center">
						<i class="material-icons opacity-6 me-2 text-md">dashboard</i>
						Kontak
						</a>
					</li>
				</ul>
			</div>



		</div>
	</nav>
<!-- End Navbar -->
</div>
</div>
</div>
