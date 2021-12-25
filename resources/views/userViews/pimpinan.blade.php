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
            <section class="my-5 py-5">
                <div class="container">
                  <center>
                    <span><h2 class="text-dark fw-bold mb-4">Pimpinan</h2></span>
                    <div class="card" style="width: 16rem;">
                      <img src="{{ asset('') }}storage/photos/pimpinan-img/{{ $pimpinan->image }}" alt="" class="img-thumbnail img-fluid">
                    </div>
                    <h2 class="text-dark mb-0">{{ $pimpinan->nama }}</h2>
                    <p class="lead">{{ $pimpinan->jabatan }}</p>
                  </center>
                </div>
              </section>
          </div>
        </div>
      </div>
    </section>
@include('userViews.userTemp.footer')