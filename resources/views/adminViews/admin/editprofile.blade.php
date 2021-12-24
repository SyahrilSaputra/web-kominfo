@extends('adminTemplates.temp')
@section('title', 'Admin Aplikasi')
@section('dashboardContent')
@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.2/datatables.min.css"/>
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">
@endsection
<h4 class="card-title">Edit Profil</h4>            
<form action="{{ route('profil.update', ['user' => $user->id]) }}" class="forms-sample mt-5" method="POST">
    @csrf
    @method('patch')
    <div class="form-group">
        <label for="exampleInputName1" class=" @error('name') text-danger @enderror" >Nama</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputName1" name="name" value="{{ old('name') ? old('name') : $user->name }}">
        @error('name')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
        <label class=" @error('email') text-danger @enderror">Email</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputName1" name="email" value="{{ old('email') ? old('email') : $user->email }}">
        @error('email')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <br>
    <button type="submit" class="btn btn-primary me-2">Submit</button>
    <a href="{{ route('dashboard') }}" class="btn btn-warning">Cancel</a>
</form>
@push('scripts')
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script> --}}
<script src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.2/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script>
<script src="{{ asset('') }}assets/myStyle/js/maindatatables.js"></script>
@endpush
@endSection 