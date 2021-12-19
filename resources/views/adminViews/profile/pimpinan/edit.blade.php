@extends('adminTemplates.temp')
@section('title', 'Pimpinan')
@section('dashboardContent')
@section('css')
@endsection
    <div class="container">
        <div class="card mb-3 p-3" style="max-width: 100%;">
            <form action="{{ route('pimpinan.update', ['pimpinan' => $pimpinan->uuid]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method("patch")
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label @error('image') text-danger @enderror ">Image</label>
                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" accept=".jpg,.png,.jpeg">
                    @error('image')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label @error('nama') text-danger @enderror">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') ? old('nama') : $pimpinan->nama}}">
                    @error('nama')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="jabatan" class="form-label @error('jabatan') text-danger @enderror">Jabartan</label>
                    <input type="text" class="form-control @error('jabatan') is-invalid @enderror" name="jabatan" value="{{ old('jabatan') ? old('jabatan') : $pimpinan->jabatan }}">
                    @error('jabatan')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@push('scripts')

@endpush
@endSection 