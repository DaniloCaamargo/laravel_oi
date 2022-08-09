<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li>
                    <a href="{{ route('home') }}" aria-expanded="false">
                        <i class="fe-home"></i>
                        <span> Inicio </span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="la-file-text-o"></i>
                        <span> Produtos </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{ route('produto.nova-fibra-pesquia', 'digital') }}">Digital</a>
                            <a href="{{ route('produto.nova-fibra-pesquia','novaFibra') }}">Nova Fibra</a>
                            <a href="{{ route('produto.nova-fibra-pesquia','mobilidade') }}">Mobilidade</a>
                            <a href="#">Cobre</a>
                            <a href="#">TV</a>
                            <a href="#">B2B</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('servico.index') }}" aria-expanded="false">
                        <i class="fe-codepen"></i>
                        <span> Todos os serviços </span>
                    </a>
                </li>

            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
