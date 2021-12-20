@extends('adminTemplates.temp')
@section('title', 'Tambah Admin')
@section('dashboardContent')
@section('css')
    
@endsection
        <div class="mt-5">
            <h4 class="card-title">Tambah Data Baru</h4>            
            <form action="{{ route('admin.store') }}" class="forms-sample mt-5" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputName1" class=" @error('name') text-danger @enderror" >Nama</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputName1" name="name" value="{{ old('name') }}">
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label class=" @error('email') text-danger @enderror">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputName1" name="email" value="{{ old('email') }}">
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Role</label>
                    <input class="form-control" value="admin" readonly>
                </div>
                <div class="form-group">
                    <label class=" @error('password') text-danger @enderror">Password</label>
                    <input type="text" class="form-control @error('password') is-invalid @enderror" name="password">
                    @error('password')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <br>
                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <a href="{{ route('admin') }}" class="btn btn-warning">Cancel</a>
              </form>
        </div>
    @push('scripts')
        
    @endpush
@endSection 