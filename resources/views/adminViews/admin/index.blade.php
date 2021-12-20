@extends('adminTemplates.temp')
@section('title', 'Admin Aplikasi')
@section('dashboardContent')
@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.2/datatables.min.css"/>
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">
@endsection
        <div class="my-5">
            <div class="my-3">
                <a href="{{ route('admin.create') }}" class="btn btn-primary">Tambah User</a>
            </div>
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <table class="table-hover table table-striped" id="myTable" >
                <thead>
                    <tr>
                        <th>
                            No
                        </th>
                        <th style="max-width: 50%">
                            Nama
                        </th>
                        <th>
                            Email
                        </th>
                        <th class="text-center">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($admin as $a)    
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $a->name }}</td>
                        <td>{{  $a->email  }}</td>
                        <td class="text-center" nowrap="nowrap">
                            <a href="{{ route('admin.edit', ['user' => $a->id]) }}" class="badge bg-warning text-decoration-none mb-2 px-3">Edit</a>
                            
                            <a href="{{ route('admin.delete', ['user' => $a->id]) }}" onclick="return confirm('Apakah anda yakin ?')" class="badge bg-danger text-decoration-none mb-2 px-3">hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@push('scripts')
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script> --}}
<script src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.2/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script>
<script src="{{ asset('') }}assets/myStyle/js/maindatatables.js"></script>
@endpush
@endSection 