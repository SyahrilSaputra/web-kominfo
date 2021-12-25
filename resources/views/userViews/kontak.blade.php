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
          </div>
        </div>
      </div>
    </section>
    
@include('userViews.userTemp.footer')