@extends('adminTemplates.temp')
@section('title', 'Kontak Aplikasi')
@section('css')
<style>
    .covImg{
      width: 100%;
      height:280px;
      overflow:auto;
    }
    @media (min-width: 576px) {
      .covImg{ 
        height:450px; 
      }
    }
    @media (min-width: 768px) { 
      .covImg{ 
        height:630px; 
      }
    }
    @media (min-width: 992px) { 
      .covImg{ 
        height:520px; 
      }
    }
    @media (min-width: 1200px) { 
      .covImg{ 
        height:500px; 
      }
    }
    @media (min-width: 1400px) { 
      .covImg{ 
        height:600px; 
      }
    }
    @media (min-width: 1600px) { 
      .covImg{ 
        height:700px; 
      }
    }
    @media (min-width: 1800px) { 
      .covImg{ 
        height:900px; 
      }
    }
  </style>
@endsection
@section('dashboardContent')
    <div class="">
        <div class="">
            <a href="{{ route('informasi') }}" class="btn btn-primary mb-2">Kembali</a>
        </div>
        <div>
            <div class="row">
              <div class="col-lg-2 d-none d-lg-block"></div>
              <div class="col-lg-8">
                <div class="card mx-auto" style="">
                  <h5 class="card-header">Informasi Kominfo Bone</h5>
                  <div class="card-body">
                      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                          <div class="carousel-inner">
                              @foreach ($image as $img)
                                  @if ($img->name == 'default_informasi.png')
                                      <div class="carousel-item {{ $loop->iteration == 1 ? 'active' : '' }} covImg">
                                          <img src="{{ asset('') }}storage/photos/informasi-img/default/{{$img->name}}" class="d-block w-100" alt="...">
                                      </div>
                                  @else
                                      <div class="carousel-item {{ $loop->iteration == 1 ? 'active' : '' }} covImg">
                                          <img src="{{ asset('') }}storage/photos/informasi-img/{{$img->name}}" class="d-block w-100" alt="...">
                                      </div>
                                  @endif 
                              @endforeach
                          </div>
                          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                          </button>
                          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                          </button>
                        </div>
                      <center>
                          <h5 class="card-title my-2 fs-4">{{ $informasi->title }}</h5>
                      </center>
                      <div class="card-text my-3">{!! $informasi->content !!}</div>
                      <div class="fs-6">{{ $informasi->publish_at }}</div>
                  </div>
                </div>
                <div class="col-lg-2 d-none d-lg-block"></div>
              </div>
            </div>
        </div>
    </div>
@push('scripts')
@endpush
@endSection 