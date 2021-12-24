@extends('adminTemplates.temp')
@section('title', 'Visi dan Misi')
@section('dashboardContent')
@section('css')
@endsection
<div>
    <div class="card">
        <div class="card-header text-center">
            <h2>{{ $visiMisi->title }}</h2>
        </div>
        <div class="card-body">
            <div class="mx-1">
                <div class="my-3">
                    {!! $visiMisi->content !!}
                </div>
                <a href="{{ route('visiMisi.edit', ['visimisi' => $visiMisi->uuid]) }}" class="btn btn-warning">Edit</a>
            </div>
        </div>
      </div>
</div>
@push('scripts')

@endpush
@endSection 