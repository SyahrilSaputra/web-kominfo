@extends('adminTemplates.temp')
@section('title', 'Create Galeri')
@section('dashboardContent')
@section('css')
@endsection
    <div class="container">
        <div class="card mb-3 p-3" style="max-width: 100%;">
            <form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method("post")
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label @error('image') text-danger @enderror ">Image</label>
                    <input type="file" name="img" class="form-control @error('image') is-invalid @enderror" accept=".jpg,.png,.jpeg">
                    @error('img')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label @error('title') text-danger @enderror">Judul</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{old('title')}}">
                    @error('title')
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