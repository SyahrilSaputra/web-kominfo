@section('css')
<style>
  .covImg{
    width: 100%;
    height: 200px;
    overflow:auto;
  }
  @media (min-width: 576px) {
    .covImg{ 
      height:280px; 
    }
  }
  @media (min-width: 768px) { 
    .covImg{ 
      height:380px; 
    }
  }
  @media (min-width: 992px) { 
    .covImg{ 
      height:380px; 
    }
  }
  @media (min-width: 1200px) { 
    .covImg{ 
      height:400px; 
    }
  }
  @media (min-width: 1400px) { 
    .covImg{ 
      height:450px; 
    }
  }
  @media (min-width: 1600px) { 
    .covImg{ 
      height:550px; 
    }
  }
  @media (min-width: 1800px) { 
    .covImg{ 
      height:680px; 
    }
  }
</style>
@endsection
@include('userViews.userTemp.header')
<header>
    <div class="page-header min-height-400" style="background-image: url('{{ asset('') }}assets/index.jpg')" loading="lazy">
      <span class="mask bg-gradient-dark opacity-8"></span>
    </div>
  </header>
  <!-- -------- END HEADER 4 w/ search book a ticket form ------- -->
  <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6 mb-4">
    <!-- START Testimonials w/ user image & text & info -->
    <section class="py-sm-7 py-5 position-relative">
      <div class="">
        <div class="row">
          <div class="col-12 mx-auto">
            <div class="mt-n8 mt-md-n9 text-center">
              <img class="avatar avatar-xxl shadow-xl position-relative z-index-2" src="{{ asset('') }}assets/kominfo.png" alt="bruce" loading="lazy">
            </div>
            <section class="py-3">
              <div class="row">
                <div class="col-lg-2 d-none d-lg-block"></div>
                <div class="col-lg-8 col-12">
                  <div class="card" style="width: 100%;">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        @foreach ($image as $img)
                          @if ($img->name == 'default_informasi.png')
                            <div class="carousel-item {{ $loop->iteration == 1 ? 'active' : '' }} covImg" >
                              <img src="{{ asset('') }}storage/photos/informasi-img/default/{{ $img->name }}" class="d-block w-100" alt="...">
                            </div>
                          @else
                            <div class="carousel-item {{ $loop->iteration == 1 ? 'active' : '' }} covImg" >
                              <img src="{{ asset('') }}storage/photos/informasi-img/{{ $img->name }}" class="d-block w-100" alt="...">
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
                    <div class="card-body">
                      <center>
                        <h5>{{ $informasi->title }}</h5>
                        <button class="badge bg-secondary my-3">{{ $informasi->publish_at }}</button>
                      </center>
                        {!! $informasi->content !!}
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 d-none d-lg-block"></div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </section>
    
@include('userViews.userTemp.footer')