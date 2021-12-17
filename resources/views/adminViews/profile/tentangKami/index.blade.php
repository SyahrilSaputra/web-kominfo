@extends('adminTemplates.temp')
@section('title', 'Visi dan Misi')
@section('dashboardContent')
@section('css')
@endsection
<div>
    <div class="card">
        <div class="card-header text-center">
            <h2>{{ $tentangKami->title }}</h2>
        </div>
        <div class="card-body">
            <div class="container">
                <div class="my-3">
                    {!! $tentangKami->content !!}
                </div>
                <a href="{{ route('tentangKami.edit', ['tentangkami' => $tentangKami->uuid]) }}" class="btn btn-warning">Edit</a>
            </div>
        </div>
      </div>
</div>
@push('scripts')

@endpush
@endSection 