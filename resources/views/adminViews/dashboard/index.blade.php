@extends('adminTemplates.temp')
@section('title', 'Dashboard Admin')
@section('dashboardContent')
<div class="row">
  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
    <a href="{{ route('informasi') }}" style="width: 100%;">
      <div class="card-style-3 mb-30">
        <div class="card-content">
          <center>
            <h4>Informasi</h4>
            <h1 class="my-2">{{ $jumInfo }}</h1>
          </center>
          {{-- <a href="#0" class="read-more">Read More</a> --}}
        </div>
      </div>
    </a>
  </div>
  <!-- end col -->
  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
    <a href="{{ route('contact') }}" style="width: 100%;">
      <div class="card-style-3 mb-30">
        <div class="card-content">
          <center>
            <h4>Kontak</h4>
            <h1 class="my-2">{{ $jumKontak }}</h1>
          </center>
          {{-- <a href="#0" class="read-more">Read More</a> --}}
        </div>
      </div>
    </a>
  </div>
  <!-- end col -->
  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
    <a href="{{ route('galeri') }}" style="width: 100%;">
      <div class="card-style-3 mb-30">
        <div class="card-content">
          <center>
            <h4>Galeri</h4>
            <h1 class="my-2">{{ $jumGaleri }}</h1>
          </center>
          {{-- <a href="#0" class="read-more">Read More</a> --}}
        </div>
      </div>
    </a>
  </div>
  <!-- end col -->
</div>
<div class="row">
  <div class="col-sm-4">
    <a href="" style="width: 100%; text-decoration:none; color:black;">
      <div class="card mb-3" style="width: 100%;">
        <center>
          <img src="{{ asset('') }}storage/photos/pimpinan-img/{{ $pimpinan->image }}" class="card-img-top" style="width:90%">
        </center>
        <div class="card-body">
          <center>
            <h3 class="text-bold mb-2">{{ $pimpinan->nama }}</h3>
            <h5>{{ $pimpinan->jabatan }}</h5>
          </center>
        </div>
      </div>
    </a>
  </div>
  <div class="col-sm-8">
    <div class="card" style="width: 100%; height: 585px; overflow:auto;">
      <div class="card-body">
        <center>
          <h3 class="text-bold mb-2">{{ $tentang->title }}</h3>
        </center>
        <p>{!! $tentang->content !!}</p>
      </div>
    </div>
  </div>
</div>
@endSection 