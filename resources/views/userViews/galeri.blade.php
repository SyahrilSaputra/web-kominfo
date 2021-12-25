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
            <section class="mt-5 pt-5">
                <div class="">
                  <div class="row">
                    <div class="col-lg-2 d-lg-block d-none"></div>
                    <div class="col-lg-8 col-12">
                      <center>
                        <span class="mb-3" ><h2 class="text-dark fw-bold">Galeri</h2></span>
                      </center>
                        <div class="row">
                           @foreach ($galeri as $g)
                            <div class="col-lg-4 col-xl-3 col-sm-6 col-12">
                              <div class="mb-2" style="width:100%; height:150px; overflow:hidden; border-radius: 10px;">
                                <a class="fancyLink" data-fancybox="gallery" href="{{ asset('') }}storage/photos/galeri-img/{{ $g->img }}" data-caption="{{ $g->title }}"><img src="{{ asset('') }}storage/photos/galeri-img/{{ $g->img }}" alt="" style="width:100%;"></a>
                              </div>
                            </div>
                           @endforeach
                        </div>
                    </div>
                    <div class="col-lg-2 d-none d-lg-block"></div>
                  </div>
                </div>
              </section>
          </div>
        </div>
      </div>
    </section>
    
@include('userViews.userTemp.footer')