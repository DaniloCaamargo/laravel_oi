@extends('layouts/main')

@section('title', 'Lista de Produtos')

@push('styles')
    {{-- <link href="{{ URL::asset('css/PATH_CSS') }}" rel="stylesheet" type="text/css" /> --}}
@endpush

@section('container')

    <div class="row">
        <div class="col-xl-12">
            <div class="card-box">
                <h4 class="header-title mb-4">Nova Fibra</h4>

                <ul class="nav nav-tabs nav-bordered nav-justified">
                    <li class="nav-item">
                        <a href="#vendas" data-toggle="tab" aria-expanded="true" class="nav-link active">
                            Vendas
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#atendimentocampo" data-toggle="tab" aria-expanded="true" class="nav-link">
                            Atendimento de campo
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#atendimento" data-toggle="tab" aria-expanded="true" class="nav-link">
                            Atendimento
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#retirada" data-toggle="tab" aria-expanded="false" class="nav-link">
                            Retirada
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="vendas">
                        <div class="card-body">
                            <h4 class="header-title mb-0">Vendas</h4>
                            <div id="cardCollpase3" class="collapse pt-3 show">
                                <div style="max-height: 980px;">
                                    <div class="timeline-alt">
                                        <div class="timeline-item">
                                            <i class="timeline-icon"></i>
                                            <div class="timeline-item-info">
                                                <a href="#"
                                                    class="text-body font-weight-semibold mb-1 d-block">Instalação</a>
                                                <small>Lorem ipsum dolor, sit amet consectetur adipisicing elit</small><br>
                                                <small>Protocolo: INC00000012345.</small><br>
                                                <small>Status: <span class="badge badge-info">Em
                                                        andamento</span>.</small><br>
                                                <p class="mt-2">
                                                    <small class="text-muted">30 min indisponível</small>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="timeline-item">
                                            <i class="timeline-icon"></i>
                                            <div class="timeline-item-info">
                                                <a href="#" class="text-body font-weight-semibold mb-1 d-block">Reparo</a>
                                                <small>Protocolo: INC00000012345.</small><br>
                                                <small>Status: <span class="badge badge-danger">Inativo</span>.</small><br>
                                                <p class="mt-2">
                                                    <small class="text-muted">30 min indisponível</small>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="timeline-item">
                                            <i class="timeline-icon"></i>
                                            <div class="timeline-item-info">
                                                <a href="#"
                                                    class="text-body font-weight-semibold mb-1 d-block">Provisionamento</a>
                                                <small>Protocolo: INC00000012345.</small><br>
                                                <small>Status: <span class="badge badge-success">Resolvido</span>.</small>
                                                <p class="mt-2">
                                                    <small class="text-muted">30 min indisponível</small>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="timeline-item">
                                            <i class="timeline-icon"></i>
                                            <div class="timeline-item-info">
                                                <a href="#" class="text-body font-weight-semibold mb-1 d-block">Retirada</a>
                                                <small>Protocolo: INC00000012345.</small><br>
                                                <small>Status: <span class="badge badge-success">Resolvido</span>.</small>
                                                <p class="mt-2">
                                                    <small class="text-muted">----</small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end timeline -->
                                </div> <!-- end slimscroll -->
                            </div> <!-- collapsed end -->
                        </div> <!-- end card-body -->
                    </div>

                    <div class="tab-pane" id="atendimentocampo">
                        <div class="card-body">
                            <h4 class="header-title mb-0">Atendimento de campo</h4>
                            <div id="cardCollpase3" class="collapse pt-3 show">
                                <div style="max-height: 980px;">
                                    <div class="timeline-alt">
                                        <div class="timeline-item">
                                            <i class="timeline-icon"></i>
                                            <div class="timeline-item-info">
                                                <a href="#"
                                                    class="text-body font-weight-semibold mb-1 d-block">Instalação</a>
                                                <small>Lorem ipsum dolor, sit amet consectetur adipisicing elit</small><br>
                                                <small>Protocolo: INC00000012345.</small><br>
                                                <small>Status: <span class="badge badge-info">Em
                                                        andamento</span>.</small><br>
                                                <p class="mt-2">
                                                    <small class="text-muted">30 min indisponível</small>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="timeline-item">
                                            <i class="timeline-icon"></i>
                                            <div class="timeline-item-info">
                                                <a href="#" class="text-body font-weight-semibold mb-1 d-block">Reparo</a>
                                                <small>Protocolo: INC00000012345.</small><br>
                                                <small>Status: <span
                                                        class="badge badge-resolvido">Inativo</span>.</small><br>
                                                <p class="mt-2">
                                                    <small class="text-muted">30 min indisponível</small>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="timeline-item">
                                            <i class="timeline-icon"></i>
                                            <div class="timeline-item-info">
                                                <a href="#"
                                                    class="text-body font-weight-semibold mb-1 d-block">Provisionamento</a>
                                                <small>Protocolo: INC00000012345.</small><br>
                                                <small>Status: <span
                                                        class="badge badge-success">Resolvido</span>.</small><br>
                                                <p class="mt-2">
                                                    <small class="text-muted">30 min indisponível</small>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="timeline-item">
                                            <i class="timeline-icon"></i>
                                            <div class="timeline-item-info">
                                                <a href="#" class="text-body font-weight-semibold mb-1 d-block">Retirada</a>
                                                <small>Protocolo: INC00000012345.</small><br>
                                                <small>Status: <span
                                                        class="badge badge-success">Resolvido</span>.</small><br>
                                                <p class="mt-2">
                                                    <small class="text-muted">----</small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end timeline -->
                                </div> <!-- end slimscroll -->
                            </div> <!-- collapsed end -->
                        </div> <!-- end card-body -->
                    </div>

                    <div class="tab-pane" id="atendimento">
                        <div class="card-body">
                            <h4 class="header-title mb-0">Atendimento</h4>
                            <div id="cardCollpase3" class="collapse pt-3 show">
                                <div style="max-height: 980px;">
                                    <div class="timeline-alt">
                                        <div class="timeline-item">
                                            <i class="timeline-icon"></i>
                                            <div class="timeline-item-info">
                                                <a href="#"
                                                    class="text-body font-weight-semibold mb-1 d-block">Instalação</a>
                                                <small>Lorem ipsum dolor, sit amet consectetur adipisicing elit</small><br>
                                                <small>Protocolo: INC00000012345.</small><br>
                                                <small>Status: <span class="badge badge-info">Em
                                                        andamento</span>.</small><br>
                                                <p class="mt-2">
                                                    <small class="text-muted">30 min indisponível</small>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="timeline-item">
                                            <i class="timeline-icon"></i>
                                            <div class="timeline-item-info">
                                                <a href="#" class="text-body font-weight-semibold mb-1 d-block">Reparo</a>
                                                <small>Protocolo: INC00000012345.</small><br>
                                                <small>Status: <span class="badge badge-warning">Inativo</span>.</small><br>
                                                <p class="mt-2">
                                                    <small class="text-muted">30 min indisponível</small>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="timeline-item">
                                            <i class="timeline-icon"></i>
                                            <div class="timeline-item-info">
                                                <a href="#"
                                                    class="text-body font-weight-semibold mb-1 d-block">Provisionamento</a>
                                                <small>Protocolo: INC00000012345.</small><br>
                                                <small>Status: <span
                                                        class="badge badge-success">Resolvido</span>.</small><br>
                                                <p class="mt-2">
                                                    <small class="text-muted">30 min indisponível</small>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="timeline-item">
                                            <i class="timeline-icon"></i>
                                            <div class="timeline-item-info">
                                                <a href="#"
                                                    class="text-body font-weight-semibold mb-1 d-block">Retirada</a>
                                                <small>Protocolo: INC00000012345.</small>
                                                <small>Status: <span class="badge badge-success">Resolvido</span>.</small>
                                                <p class="mt-2">
                                                    <small class="text-muted">----</small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end timeline -->
                                </div> <!-- end slimscroll -->
                            </div> <!-- collapsed end -->
                        </div> <!-- end card-body -->
                    </div>
                    <div class="tab-pane" id="retirada">
                        <div class="card-body">
                            <h4 class="header-title mb-0">Retiradas</h4>
                            <div id="cardCollpase3" class="collapse pt-3 show">
                                <div style="max-height: 980px;">
                                    <div class="timeline-alt">
                                        <div class="timeline-item">
                                            <i class="timeline-icon"></i>
                                            <div class="timeline-item-info">
                                                <a href="#"
                                                    class="text-body font-weight-semibold mb-1 d-block">Instalação</a>
                                                <small>Lorem ipsum dolor, sit amet consectetur adipisicing elit</small><br>
                                                <small>Protocolo: INC00000012345.</small><br>
                                                <small>Status: <span class="badge badge-info">Em
                                                        andamento</span>.</small><br>
                                                <p class="mt-2">
                                                    <small class="text-muted">30 min indisponível</small>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="timeline-item">
                                            <i class="timeline-icon"></i>
                                            <div class="timeline-item-info">
                                                <a href="#" class="text-body font-weight-semibold mb-1 d-block">Reparo</a>
                                                <small>Protocolo: INC00000012345.</small><br>
                                                <small>Status: <span class="badge badge-danger">Inativo</span>.</small><br>
                                                <p class="mt-2">
                                                    <small class="text-muted">30 min indisponível</small>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="timeline-item">
                                            <i class="timeline-icon"></i>
                                            <div class="timeline-item-info">
                                                <a href="#"
                                                    class="text-body font-weight-semibold mb-1 d-block">Provisionamento</a>
                                                <small>Protocolo: INC00000012345.</small><br>
                                                <small>Status: <span
                                                        class="badge badge-success">Resolvido</span>.</small><br>
                                                <p class="mt-2">
                                                    <small class="text-muted">30 min indisponível</small>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="timeline-item">
                                            <i class="timeline-icon"></i>
                                            <div class="timeline-item-info">
                                                <a href="#"
                                                    class="text-body font-weight-semibold mb-1 d-block">Retirada</a>
                                                <small>Protocolo: INC00000012345.</small><br>
                                                <small>Status: <span
                                                        class="badge badge-success">Resolvido</span>.</small><br>
                                                <p class="mt-2">
                                                    <small class="text-muted">----</small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end timeline -->
                                </div> <!-- end slimscroll -->
                            </div> <!-- collapsed end -->
                        </div> <!-- end card-body -->
                    </div>
                </div>
            </div> <!-- end card-box-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->

@endsection

@section('pre-script')
@endsection

@section('middle-script')
@endsection

@section('pos-script')

    {{-- <script src="{{ URL::asset('assets/js/pages/PATH_JS') }}"></script> --}}

    <script>
        $(document).ready(function() {
            console.log('Página de Produtos');
        })
    </script>
@endsection
