@extends('adminTemplates.temp')
@section('title', 'Show Galeri')
@section('dashboardContent')
@section('css')
@endsection
    <div class="">
        <div class="card mb-3 p-3" style="max-width: 100%;">
            <div class="card card-custom card-stretch ">
                <div class="card-header py-3 d-inline">
                    <div class="card-title align-items-start flex-column">
                        <h3 class="card-label font-weight-bolder text-dark py-3">Detail Gambar</h3>
                    </div>
                    <div class="card-toolbar">
                        <a href="{{ route('galeri') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
                <div class="card-body">
                    {{-- <div class="row">
                        <label class="col-xl-3"></label>
                        <div class="col-lg-9 col-xl-6">
                            <h5 class="font-weight-bold mb-6">Image Info</h5>
                        </div>
                    </div> --}}
                    <div class="form-group mb-5 row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Image</label>
                        <div class="col-lg-9 col-xl-9">
                            <div>
                                <img src="{{ asset('storage/photos/galeri-img/'. $galeri->img) }}" style="width: 100%;" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Title</label>
                        <div class="col-lg-9 col-xl-9">
                            <input class="form-control form-control-lg form-control-solid" type="text" value="{{ $galeri->title }}" readonly />
                        </div>
                    </div>
                </div>
              </div>
        </div>
    </div>
@push('scripts')

@endpush
@endSection 