@extends('adminTemplates.temp')
@section('title', 'Kontak Aplikasi')
@section('dashboardContent')
@section('css')
<style>
    .div-img-inf{
        height: 700px;
        width: 100%;
        overflow: hidden;
    }
</style>
@endsection
    <div class="">
        <div class="">
            <a href="{{ route('informasi') }}" class="btn btn-primary mb-2">Kembali</a>
        </div>
        <div>
            <div class="card mx-auto" style="width:700px">
                <h5 class="card-header">Informasi Kominfo Bone</h5>
                <div class="card-body">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @if (count($image) > 1) 
                                @foreach ($image as $img)
                                    <div class="carousel-item {{ $loop->iteration == 1 ? 'active' : '' }} div-img-inf">
                                        <img src="{{ asset('') }}storage/photos/informasi-img/{{$img->name}}" class="d-block w-100" alt="...">
                                    </div>
                                @endforeach
                            @else
                                <div class="carousel-item active div-img-inf">
                                    <img src="{{ asset('') }}storage/photos/informasi-img/default/default_informasi.png" class="d-block w-100" alt="...">
                                </div>
                            @endif
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
        </div>
    </div>
@push('scripts')
@endpush
@endSection 