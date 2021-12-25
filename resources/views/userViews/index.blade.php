@include('userViews.userTemp.header')
<header class="header-2">
  <div class="page-header min-vh-75 relative" style="background-image: url('{{ asset('') }}assets/index.jpg')">
    <span class="mask bg-gradient-dark opacity-7"></span>
    <div class="container">
      <div class="row">
        <div class="col-lg-7 text-center mx-auto">
          <h1 class="text-white border-dark pt-3 mt-n5" style="text-shadow: 3px 2px 1px black;">Selamat Datang Di Website Kominfo Bone</h1>
          <p class="lead text-white mt-3" style="text-shadow: 3px 2px 1px black;">Website Company Profile Kementrian Komunikasi Informatika dan Persandian Kabupaten Bone</p>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">

<section class="pt-3 pb-4" id="count-stats">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 mx-auto py-3">
        <div class="row">
          <div class="col-md-4 position-relative">
            <div class="p-3 text-center">
              <h1 class="text-gradient text-info"><span id="state1" countTo="{{ $jumInfo }}">0</span></h1>
              <h5 class="mt-3">Informasi</h5>
              <p class="text-sm font-weight-normal">Infromasi Terkait Kementrian Komunikasi dan Informatika Kabupaten Bone</p>
            </div>
            <hr class="vertical dark">
          </div>
          <div class="col-md-4 position-relative">
            <div class="p-3 text-center">
              <h1 class="text-gradient text-info"> <span id="state2" countTo="{{ $jumKontak }}">0</span></h1>
              <h5 class="mt-3">Kontak</h5>
              <p class="text-sm font-weight-normal">Kontak Terkait Kementrian Komunikasi dan Informatika Kabupaten Bone</p>
            </div>
            <hr class="vertical dark">
          </div>
          <div class="col-md-4">
            <div class="p-3 text-center">
              <h1 class="text-gradient text-info" id="state3" countTo="{{ $jumGaleri }}">0</h1>
              <h5 class="mt-3">Galeri</h5>
              <p class="text-sm font-weight-normal">Galeri Kementrian Komunikasi dan Informatika Kabupaten Bone</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="my-5 py-5">
  <div class="container">
    <center>
      <span class="badge bg-info mb-3" ><h4 class="text-light fw-bold">Tentang Kami</h4></span>
    </center>
    <div class="row">
      <div class="col-lg-5">
        <img src="{{ asset('')}}assets/index1.jpg" style="width:100%; border-radius: 10px;">
      </div>
      <div class="col-lg-7">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-center">{{ $tentang->title }}</h5>
            <div>
              {!! str_word_count($tentang->content) > 600 ? substr($tentang->content,0,600)."..." : $tentang->content !!}
              @if (str_word_count($tentang->content) > 600)
                  <a href="{{ route('tentang') }}" class="text-info"><i>selengkapnya</i></a>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="container mt-sm-5">
  <div class="page-header py-6 py-md-5 my-sm-3 mb-3 border-radius-xl" style="background-image: url('{{ asset('') }}assets/index.jpg');" loading="lazy">
    <span class="mask bg-gradient-dark"></span>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 ms-lg-5">
          <h4 class="text-white">Informasi Terbaru</h4>
          <h1 class="text-white">{{ $newinfo->title }}</h1>
          <h5 class="text-white">{!! substr($newinfo->content,0,100) !!}</h5>
          <a href="{{ route('informasi.detail.user', ['informasi' => $newinfo->slug]) }}" class="text-white icon-move-right">
            Selengkapnya
            <i class="fas fa-arrow-right text-sm ms-1"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>


<section class="my-5 py-5">
  <div class="container">
    <center>
      <span class="badge bg-info mb-3"><h4 class="text-light fw-bold">Pimpinan</h4></span>
      <div class="card" style="width: 16rem;">
        <img src="{{ asset('') }}storage/photos/pimpinan-img/{{ $pimpinan->image }}" alt="" class="img-thumbnail img-fluid">
      </div>
      <h2 class="text-dark mb-0">{{ $pimpinan->nama }}</h2>
      <p class="lead">{{ $pimpinan->jabatan }}</p>
    </center>
  </div>
</section>

<section class="my-5">
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-12 ">
        <div class="card mb-3" style="width: 100%;">
          <div class="card-body">
            <h3 class="text-gradient text-info mb-0">Kontak</h3>
            @foreach ($kontak as $k)
              <div>
                <h4 class="my-2">{{ $k->type }}</h4>
                <p class="pe-md-5 mb-4">
                  {{ $k->content }}
                </p>
              </div>
            @endforeach
          </div>
        </div>
      </div>
      <div class="col-md-7 col-12 my-auto">
        <a href="https://www.creative-tim.com/product/material-kit-pro?ref=index-mk2">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4997.526710984576!2d120.30605431534914!3d-4.538784149101996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbde5109f3723e1%3A0x9da87e4367e8ce20!2sDinas%20Kominfo%20dan%20Persandian%20Kabupaten%20Bone!5e1!3m2!1sid!2sid!4v1640153235475!5m2!1sid!2sid" style="width: 100%; height:400px;" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- -------   END PRE-FOOTER 2 - simple social line w/ title & 3 buttons    -------- -->

@include('userViews.userTemp.footer')

  

  
  















<!--   Core JS Files   -->
