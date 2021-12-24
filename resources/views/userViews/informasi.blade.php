@include('userViews.userTemp.header')
<header>
    <div class="page-header min-height-400" style="background-image: url('{{ asset('') }}assets/index.jpg')" loading="lazy">
      <span class="mask bg-gradient-dark opacity-8"></span>
    </div>(
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
              <div class="container">
                <div class="row">
                  <?php foreach ($informasi as $i) {?>
                    <div class="col-lg-3 col-sm-6">
                      <div class="card card-plain">
                        <div class="card-header p-0 position-relative">
                          <a class="d-block blur-shadow-image">
                            <?php foreach ($image as $img) {?>
                              <?php if ($i->id == $img->informasi_id) {?>
                                <div style="width: 100%; height:180px; overflow: hidden;" class="border-radius-lg">
                                  <?php if($img->name == 'default_informasi.png') {?>
                                    <img src="<?= asset(''); ?>storage/photos/informasi-img/default/<?= $img->name ?>" alt="img-blur-shadow" class="img-fluid shadow" loading="lazy" style="min-height: 180px;">
                                  <?php }else{ ?>
                                    <img src="<?= asset(''); ?>storage/photos/informasi-img/<?= $img->name ?>" alt="img-blur-shadow" class="img-fluid shadow" loading="lazy" style="min-height: 200px;">
                                  <?php } ?>
                                </div>
                              <?php break;} ?>
                           <?php }?>
                          </a>
                        </div>
                        <div class="card-body px-0">
                          <h5>
                            <a href="javascript:;" class="text-dark font-weight-bold"><?= $i->title ?></a>
                          </h5>
                          <div>
                            <?=  str_word_count(strip_tags($i->content)) > 50 ? strip_tags(substr($i->content,0,50))."..." : strip_tags($i->content) ?>
                          </div>
                          <a href="{{ route('informasi.detail.user', ['informasi' => $i->slug]) }}" class="text-info text-sm icon-move-right">Read More
                            <i class="fas fa-arrow-right text-xs ms-1"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                  {{-- @foreach ($informasi as $i)
                    
                  @endforeach --}}
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </section>
    
@include('userViews.userTemp.footer')