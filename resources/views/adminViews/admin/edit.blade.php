@extends('adminTemplates.temp')
@section('title', 'Edit Admin')
@section('dashboardContent')
@section('css')
    
@endsection
        <div class="mt-5">
            <h4 class="card-title">Edit Data Admin</h4>            
            <form action="{{ route('admin.update', ['user' => $admin->id]) }}" class="forms-sample mt-5" method="POST">
                @csrf
                @method('patch')
                <div class="form-group">
                    <label for="exampleInputName1" class=" @error('name') text-danger @enderror" >Nama</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputName1" name="name" value="{{ old('name') ? old('name') : $admin->name }}">
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label class=" @error('email') text-danger @enderror">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputName1" name="email" value="{{ old('email') ? old('email') : $admin->email }}">
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label class=" @error('password') text-danger @enderror">Password Baru (Optional)</label>
                    <input type="text" class="form-control @error('password') is-invalid @enderror" id="exampleInputName1" name="password">
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