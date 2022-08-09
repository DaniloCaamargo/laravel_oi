@extends('layouts/main')

@section('title', 'Lista de Home')

@push('styles')
    {{-- <link href="{{ URL::asset('css/PATH_CSS') }}" rel="stylesheet" type="text/css" /> --}}
    <style>
        .custom_ul {
            columns: 2;
            -webkit-columns: 2;
            -moz-columns: 2;
        }

    </style>
@endpush

@section('container')

    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="mr-2 font-15"><span class="badge badge-success pb-1 pt-1">Operante</span></li>
                        <li class="mr-2 font-15"><span class="badge badge-warning pb-1 pt-1">Alerta médio</span></li>
                        <li class="mr-2 font-15"><span class="badge badge-danger pb-1 pt-1">Alerta crítico</span></li>
                    </ol>
                </div>
                <h4 class="page-title">Inicio</h4>
            </div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-12">
            <div class="card-group">
                @foreach ($listProdutos as $key => $produto)
                    @php
                        //dd($produto);
                    @endphp
                    <div class="card mr-2 mb-2" style="min-width: 25rem;">
                        <div class="card-body">
                            <div class="row mb-4 meg">
                                <div class="col-4">
                                    <div class="avatar-sm rounded-circle bg-soft-{{ $produto['class_servico'] }}">
                                        <i
                                            class="fe-check-circle font-10 avatar-title text-{{ $produto['class_servico'] }} li-icon"></i>
                                    </div>
                                </div>
                                <div class="ml-2">
                                    <h4 class="text-{{ $produto['class_servico'] }} my-1"><span>{{ $produto['nome'] }}</span></h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <ul class="list-unstyled custom_ul">
                                        @if (is_array($produto))
                                            @foreach ($produto['servicos'] as $servicos)
                                                <li class="text-{{ $servicos['clase_incidente'] }} mb-1 tipo_incidente">
                                                    <small
                                                        class="mdi mdi-checkbox-blank-circle text-{{ $servicos['clase_incidente'] }} align-middle mr-1"></small>
                                                    {{ $servicos['nome_servico'] }}
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- @foreach ($listProdutos as $key => $produto)
                    @foreach ($produto as $idx => $itemsProduto)
                        <div class="card mr-2 mb-2" style="min-width: 31rem;">
                            <div class="card-body">
                                <div class="row mb-4 meg">
                                    <div class="col-4">
                                        <div class="avatar-sm rounded-circle bg-soft-success">
                                            <i class="fe-check-circle font-10 avatar-title text-success li-icon"></i>
                                        </div>
                                    </div>
                                    <div class="ml-2">
                                        <h4 class="text-dark my-1"><span>{{ $itemsProduto['nome'] }}</span></h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <ul class="list-unstyled custom_ul">
                                            @foreach ($itemsProduto as $servicos)
                                                @if (is_array($servicos))
                                                    @foreach ($servicos as $itemServico)
                                                        <li
                                                            class="text-{{ $itemServico['clase_incidente'] }} mb-1 tipo_incidente">
                                                            <small
                                                                class="mdi mdi-checkbox-blank-circle text-{{ $itemServico['clase_incidente'] }} align-middle mr-1"></small>
                                                            {{ $itemServico['nome_servico'] }}
                                                        </li>
                                                    @endforeach
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <p class="card-text">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </p>
                            </div>
                        </div>
                    @endforeach
                @endforeach --}}
            </div> <!-- end card-group-->
        </div> <!-- end col-->
    </div>

@endsection

@section('pre-script')
@endsection

@section('middle-script')
@endsection

@section('pos-script')

    {{-- <script src="{{ URL::asset('assets/js/pages/PATH_JS') }}"></script> --}}

    <script>
        $(document).ready(function() {

            // $('.tipo_incidente').find('*').each(function() {
            //     var classeWarning = $(this).hasClass("text-warning");
            //     var classeDanger = $(this).hasClass("text-danger");

            //     if (classeWarning) {
            //         $(this).parent().parent().parent().parent().siblings('div').children().children('div')
            //             .removeClass('bg-soft-success').addClass('bg-soft-warning');

            //         $(this).parent().parent().parent().parent().siblings('div').children().children('div')
            //             .children().removeClass('text-success').addClass('text-warning');
            //     } else if (classeDanger) {
            //         $(this).parent().parent().parent().parent().siblings('div').children().children('div')
            //             .removeClass('bg-soft-success').addClass('bg-soft-danger');

            //         $(this).parent().parent().parent().parent().siblings('div').children().children('div')
            //             .children().removeClass('text-success').addClass('text-danger');
            //     }
            // });
        })
    </script>
@endsection
