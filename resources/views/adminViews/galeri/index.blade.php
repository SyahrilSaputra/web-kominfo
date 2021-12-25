@extends('adminTemplates.temp')
@section('title', 'Galeri Aplikasi')
@section('dashboardContent')
@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.2/datatables.min.css"/>
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">
<style>
    @media screen and (min-width: 712px) {
    .faq-layout, #team{
        min-height:800px;
    }
  }
/* style untuk jumbotron dan image pada galery bagian admin */
.carousel{
    margin-top: auto;
  }
  @media screen and (min-width: 100px) {
    .img-jumb {
      max-width:250px;
    }
    .carousel{
      height:500px;
    }
     /* img galery admin */
    .img-galery-admin
    {
      width:100px;
    }
  }
  @media screen and (min-width: 450px) {
    .img-jumb {
      max-width:300px;
    }
    .carousel{
      height:500px;
    }
    /* img galery admin */
    .img-galery-admin
    {
      width:200px;
    }
  }
  @media screen and (min-width: 712px) {
    .img-jumb {
      max-width:350px;
    }
    .carousel{
      height:600px;
    }
    .img-galery-admin
    {
      width:250px;
    }
  }

  /* Style untuk mengatur detail informasi user */
  .card-body img{
    max-width: 100%;
    height: auto;
  }
  .card table{
    max-width: 100%;
    height: auto;
  }
  .img-info-side {
     height:200px;
   }
 @media (min-width: 576px) { 
   .img-info-side {
     height:70px;
   }
 }

 /* Style untuk mengatur information user */
  .img-parent{
    max-height: 300px;
  }
@media (min-width: 576px) { 
  .img-info-side {
    height:70px;
  }
}
.no-gutters .card-title {
    font-size: 12px;
}
.card .member-info a{
    font-size: 14px;
}

.parent-galery{
  width:300px;
  height:200px;
}
.parent-galery img{
  width:100%;
  height:100%;
  object-fit:cover;
}
</style>
@endsection
        <div class="my-5">
            <div class="my-3">
                <a href="{{ route('galeri.add') }}" class="btn btn-primary">Tambah Galeri</a>
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
                            Gambar
                        </th>
                        <th>
                            judul
                        </th>
                        <th class="text-center">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($galeri as $g)    
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><img class="img-galery-admin" src="{{ asset('storage/photos/galeri-img/'.$g->img) }}" alt=""></td>
                        <td>{{  $g->title}}</td>
                        <td class="text-center" nowrap="nowrap">
                            <a href="{{ route('galeri.show', ['galeri' => $g->uuid]) }}" class="badge bg-info text-decoration-none mb-2 px-3">Detail</a>
                            <a href="{{ url('dashboard/galeri/galeri-delete/'.$g->id) }}" onclick="return confirm('Apakah anda yakin ?')" class="badge bg-danger text-decoration-none mb-2 px-3">hapus</a>
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
<script src="{{ asset('') }}assets/myStyle/js/mygalerydatatables.js"></script>
@endpush
@endSection 