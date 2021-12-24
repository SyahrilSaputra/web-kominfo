@extends('adminTemplates.temp')
@section('title', 'Admin Aplikasi')
@section('dashboardContent')
@section('css')
@endsection
<h4 class="card-title">Edit Profil</h4>            
<form action="{{ route('password.update', ['user' => $user->id]) }}" class="forms-sample mt-5" method="POST">
    @csrf
    @method('patch')
    <div class="form-group">
        <label for="exampleInputName1" class=" @error('oldpassword') text-danger @enderror" >Password Lama</label>
        <input type="text" class="form-control @error('oldpassword') is-invalid @enderror" id="exampleInputName1" name="oldpassword" value="{{ old('oldpassword')}}">
        @error('oldpassword')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleInputName1" class=" @error('newpassword') text-danger @enderror" >Password Baru</label>
        <input type="text" class="form-control @error('newpassword') is-invalid @enderror" id="exampleInputName1" name="newpassword" value="{{ old('newpassword')}}">
        @error('newpassword')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <br>
    <button type="submit" class="btn btn-primary me-2">Submit</button>
    <a href="{{ route('dashboard') }}" class="btn btn-warning">Cancel</a>
</form>
@push('scripts')
@endpush
@endSection 