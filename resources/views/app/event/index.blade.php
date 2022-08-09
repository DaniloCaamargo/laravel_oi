@extends('layouts/main')

@section('title', 'Lista de Eventos')

@push('styles')
    {{-- <link href="{{ URL::asset('css/PATH_CSS') }}" rel="stylesheet" type="text/css" /> --}}
@endpush

@section('container')


    <div class="row">
        <h2>Página de Eventos</h2>
    </div> <!-- content -->

@endsection

@section('pre-script')
@endsection

@section('middle-script')
@endsection

@section('pos-script')

    {{-- <script src="{{ URL::asset('assets/js/pages/PATH_JS') }}"></script> --}}

    <script>
        $(document).ready(function() {
            console.log('Página de Eventos');
        })
    </script>
@endsection
