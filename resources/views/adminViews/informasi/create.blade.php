@extends('adminTemplates.temp')
@section('title', 'Tambah Informasi')
@section('dashboardContent')
@section('css')
<link rel="stylesheet" href="{{ asset('') }}assets/myStyle/css/style.css">
@endsection
        <div class="mt-5">
            <h4 class="card-title">Tambah Data Baru</h4>            
            <form action="{{ route('informasi.store') }}" class="forms-sample mt-5" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputName1" class=" @error('image') text-danger @enderror">Gambar</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image[]" multiple="true" accept=".jpg,.png,.jpeg">
                    @error('image')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputName1" class=" @error('title') text-danger @enderror">Judul</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}">
                    @error('title')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputName1" class=" @error('date') text-danger @enderror">Tanggal</label>
                    <input type="date" class="form-control @error('publish_at') is-invalid @enderror" name="publish_at" value="{{ old('date') }}">
                    @error('publish_at')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label class=" @error('content') text-danger @enderror">Deskripsi</label>
                    <textarea class="form-control  @error('content') is-invalid @enderror"style="height: 100px" name="content">{{ old('content') }}</textarea>
                    @error('content')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <br>
                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <a href="{{ route('informasi') }}" class="btn btn-warning">Cancel</a>
              </form>
        </div>
        @push('scripts')
        <script src="https://cdn.tiny.cloud/1/wsq6tbauqun7rq24d7d6wto27qs6qjlepz3f1whznzduu2rq/tinymce/5/tinymce.min.js"></script>
        <script src="https://cdn.tiny.cloud/1/6prxjo7ri5q7xsycpkvlyj9gy6rwu8b6y536f4x2xsvotp28/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script src="https://cdn.tiny.cloud/1/6prxjo7ri5q7xsycpkvlyj9gy6rwu8b6y536f4x2xsvotp28/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script src="{{ asset('') }}assets/myStyle/js/main.js"></script>
        <script src="{{ asset('') }}assets/myStyle/js/tinymce.js"></script>
        @endpush
@endSection 