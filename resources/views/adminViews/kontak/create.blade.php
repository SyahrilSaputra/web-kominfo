@extends('adminTemplates.temp')
@section('title', 'Buat Kontak')
@section('dashboardContent')
@section('css')
    
@endsection
    <div class="mx-5" style="width: 100%;">
        <div class="mt-5">
            <h4 class="card-title">Tambah Data Baru</h4>            
            <form action="{{ route('contact.store') }}" class="forms-sample mt-5" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputName1" class=" @error('type') text-danger @enderror" value="{{ old('type') }}">Nama</label>
                    <input type="text" class="form-control @error('type') is-invalid @enderror" id="exampleInputName1" name="type">
                    @error('type')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label class=" @error('content') text-danger @enderror">Isi</label>
                    <textarea class="form-control  @error('content') is-invalid @enderror"style="height: 100px" name="content">{{ old('content') }}</textarea>
                    @error('content')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <a href="{{ route('contact') }}" class="btn btn-warning">Cancel</a>
              </form>
        </div>
    </div>
    @push('scripts')
        
    @endpush
@endSection 