@extends('adminTemplates.temp')
@section('title', 'Pimpinan')
@section('dashboardContent')
@section('css')
@endsection
    <div class="container">
      @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session('success') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      <div class="card mb-3" style="max-width: 100%;">
          <div class="row g-0">
            <div class="col-md-4 p-3">
              <img src="{{ asset('storage/photos/pimpinan-img/'.$pimpinan['image']) }}" class="img-fluid rounded-start ">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <div class="mb-2">
                  <h4 class="card-title">Nama</h4>
                  <p class="card-text">{{ $pimpinan->nama }}</p>
                </div>
                <div class="mb-2">
                  <h4 class="card-title">Jabatan</h4>
                  <p class="card-text">{{ $pimpinan->jabatan }}</p>
                </div>
                <div class="text-right">
                  <a href="{{ route('pimpinan.edit', ['pimpinan' => $pimpinan->uuid]) }}" class="btn btn-warning" style="width: 100%;">Edit</a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
@push('scripts')
@endpush
@endSection 