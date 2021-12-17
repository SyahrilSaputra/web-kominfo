@extends('adminTemplates.temp')
@section('title', 'Edit Visi Misi')
@section('dashboardContent')
@section('css')
<link rel="stylesheet" href="{{ asset('') }}assets/myStyle/css/style.css">
@endsection
        <div class="mt-5">
            <h4 class="card-title">Edit Data Tentang Kami</h4>            
            <form action="{{ route('tentangKami.update', ['tentangkami' => $tentangKami->uuid]) }}" class="forms-sample mt-5" method="POST">
                @csrf
                @method('patch')
                <div class="form-group">
                    <label for="exampleInputName1" class=" @error('title') text-danger @enderror">Judul</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="exampleInputName1" name="title" value="{{ old('title') ? old('title') : $tentangKami->title }}">
                    @error('title')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label class=" @error('content') text-danger @enderror">Isi</label>
                    <textarea style="height: 200px;" class="form-control   @error('content') is-invalid @enderror" name="content">{!! old('content') ? old('content') : $tentangKami->content !!}</textarea>
                    @error('content')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <br>
                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <a href="{{ route('visiMisi') }}" class="btn btn-warning">Cancel</a>
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