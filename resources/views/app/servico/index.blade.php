@extends('layouts/main')

@section('title', 'Lista de serviços')

@push('styles')
    <link href="{{ URL::asset('assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
@endpush

@section('container')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Todos os Serviços</h4>
                    <p class="text-muted font-13 mb-4">
                        Alguma obs aqui
                    </p>

                    <table id="basic-datatable" class="table dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>Serviço</th>
                                <th>Status</th>
                                <th>URL</th>
                                <th>Descrição</th>
                            </tr>
                        </thead>


                        <tbody>
                            <tr>
                                <td><i class="mdi mdi-checkbox-blank-circle text-success align-middle mr-1"></i>ACM</td>
                                <td><span class="badge badge-success mt-1 pb-1">Operante</span></td>
                                <td><a href="#">Produto X | Serviço Y</a></td>
                                <td>Último incidente há 2 dias</td>
                            </tr>
                            <tr>
                                <td><i class="mdi mdi-checkbox-blank-circle text-success align-middle mr-1"></i>AGILI</td>
                                <td><span class="badge badge-success mt-1 pb-1">Operante</span></td>
                                <td><a href="#">Produto X | Serviço Y</a></td>
                                <td>Último incidente há 2 dias</td>
                            </tr>
                            <tr>
                                <td><i class="mdi mdi-checkbox-blank-circle text-success align-middle mr-1"></i>API GATEWAY
                                </td>
                                <td><span class="badge badge-success mt-1 pb-1">Operante</span></td>
                                <td><a href="#">Produto X | Serviço Y</a></td>
                                <td>Último incidente há 2 dias</td>
                            </tr>
                            <tr>
                                <td><i class="mdi mdi-checkbox-blank-circle text-success align-middle mr-1"></i>ARBOR</td>
                                <td><span class="badge badge-success mt-1 pb-1">Operante</span></td>
                                <td><a href="#">Produto X | Serviço Y</a></td>
                                <td>Último incidente há 2 dias</td>
                            </tr>
                            <tr>
                                <td><i class="mdi mdi-checkbox-blank-circle text-success align-middle mr-1"></i>ARBOR ONLINE
                                </td>
                                <td><span class="badge badge-success mt-1 pb-1">Operante</span></td>
                                <td><a href="#">Produto X | Serviço Y</a></td>
                                <td>Último incidente há 2 dias</td>
                            </tr>
                            <tr>
                                <td><i class="mdi mdi-checkbox-blank-circle text-success align-middle mr-1"></i>BARRAMENTO
                                </td>
                                <td><span class="badge badge-danger mt-1 pb-1">Alerta crítico</span></td>
                                <td><a href="#">Produto X | Serviço Y</a></td>
                                <td>Último incidente há 2 dias</td>
                            </tr>
                            <tr>
                                <td><i class="mdi mdi-checkbox-blank-circle text-success align-middle mr-1"></i>BBL</td>
                                <td><span class="badge badge-success mt-1 pb-1">Operante</span></td>
                                <td><a href="#">Produto X | Serviço Y</a></td>
                                <td>Último incidente há 2 dias</td>
                            </tr>
                            <tr>
                                <td><i class="mdi mdi-checkbox-blank-circle text-success align-middle mr-1"></i>BRADCAST
                                </td>
                                <td><span class="badge badge-warning mt-1 pb-1">Alerta médio</span></td>
                                <td><a href="#">Produto X | Serviço Y</a></td>
                                <td>Último incidente há 2 dias</td>
                            </tr>

                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    {{-- <div class="row mt-2">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="grid-structure">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="page-title mb-3">Todos os Serviços</h2>
                            </div>
                        </div>



                        <div class="row">
                            <div id="accordion" class="mb-3 col-lg-12">
                                <div class="card mb-1">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="m-0">
                                            <a class="text-dark" data-toggle="collapse" href="#collapseOne"
                                                aria-expanded="true">
                                                <i class="mdi mdi-checkbox-blank-circle text-success align-middle mr-1"></i>
                                                ACM último indidente há 2 dias
                                            </a>
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <ol class="breadcrumb m-0">
                                                <li class="breadcrumb-item"><a href="#">Produto X</a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#">Serviço Y</a>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-1">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="m-0">
                                            <a class="text-dark" data-toggle="collapse" href="#collapseTwo"
                                                aria-expanded="false">
                                                <i class="mdi mdi-checkbox-blank-circle text-success align-middle mr-1"></i>
                                                AGILI último incidente há 2 dias
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <ol class="breadcrumb m-0">
                                                <li class="breadcrumb-item"><a href="#">Produto X</a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#">Serviço Y</a>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-1">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="m-0">
                                            <a class="text-dark" data-toggle="collapse" href="#collapseThree"
                                                aria-expanded="false">
                                                <i class="mdi mdi-checkbox-blank-circle text-success align-middle mr-1"></i>
                                                API GATEWAY último incidente há 2 dias.
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <ol class="breadcrumb m-0">
                                                <li class="breadcrumb-item"><a href="#">Produto X</a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#">Serviço Y</a>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-1">
                                    <div class="card-header" id="headingFour">
                                        <h5 class="m-0">
                                            <a class="text-dark" data-toggle="collapse" href="#collapseFour"
                                                aria-expanded="false">
                                                <i class="mdi mdi-checkbox-blank-circle text-success align-middle mr-1"></i>
                                                ARBOR último incidente há 2 dias.
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="collapseFour"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <ol class="breadcrumb m-0">
                                                <li class="breadcrumb-item"><a href="#">Produto X</a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#">Serviço Y</a>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-1">
                                    <div class="card-header" id="headingFive">
                                        <h5 class="m-0">
                                            <a class="text-dark" data-toggle="collapse" href="#collapseFive"
                                                aria-expanded="false">
                                                <i class="mdi mdi-checkbox-blank-circle text-success align-middle mr-1"></i>
                                                ARBOR ONLINE último incidente há 2 dias.
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="collapseFive"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <ol class="breadcrumb m-0">
                                                <li class="breadcrumb-item"><a href="#">Produto X</a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#">Serviço Y</a>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-1">
                                    <div class="card-header" id="headingSix">
                                        <h5 class="m-0">
                                            <a class="text-dark" data-toggle="collapse" href="#collapseSix"
                                                aria-expanded="false">
                                                <i class="mdi mdi-checkbox-blank-circle text-success align-middle mr-1"></i>
                                                ASAP último incidente há 2 dias.
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseSix" class="collapse" aria-labelledby="collapseSix"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <ol class="breadcrumb m-0">
                                                <li class="breadcrumb-item"><a href="#">Produto X</a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#">Serviço Y</a>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-1">
                                    <div class="card-header" id="headingSeven">
                                        <h5 class="m-0">
                                            <a class="text-dark" data-toggle="collapse" href="#collapseSeven"
                                                aria-expanded="false">
                                                <i class="mdi mdi-checkbox-blank-circle text-success align-middle mr-1"></i>
                                                BARRAMENTO último incidente há 2 dias.
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseSeven" class="collapse" aria-labelledby="collapseSeven"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <ol class="breadcrumb m-0">
                                                <li class="breadcrumb-item"><a href="#">Produto X</a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#">Serviço Y</a>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-1">
                                    <div class="card-header" id="headingEight">
                                        <h5 class="m-0">
                                            <a class="text-dark" data-toggle="collapse" href="#collapseEigth"
                                                aria-expanded="false">
                                                <i
                                                    class="mdi mdi-checkbox-blank-circle text-success align-middle mr-1"></i>
                                                BBL último incidente há 2 dias.
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseEigth" class="collapse" aria-labelledby="collapseEigth"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <ol class="breadcrumb m-0">
                                                <li class="breadcrumb-item"><a href="#">Produto X</a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#">Serviço Y</a>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end #accordions-->
                        </div>
                    </div> <!-- grid-structure -->

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div> --}}

@endsection

@section('pre-script')
@endsection

@section('middle-script')
    <script src="{{ URL::asset('assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/datatables/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
@endsection

@section('pos-script')

    {{-- <script src="{{ URL::asset('assets/js/pages/PATH_JS') }}"></script> --}}

    <script type="text/javascript">
        $(document).ready(function() {
            $('#basic-datatable').DataTable({
                destroy: true,
                searching: true,
                paging: true,
                lengthMenu: [5, 10, 20, 50, 100],
                language: {
                    info: "Mostrando _START_ &agrave; _END_ de _TOTAL_ registros",
                    search: "Pesquisar",
                    lengthMenu:    "Mostrar _MENU_ registros",
                    paginate: {
                        first: "Primeiro",
                        previous: "Anterior",
                        next: "Próximo",
                        last: "Último"
                    }
                }
            });
        });
    </script>
@endsection
