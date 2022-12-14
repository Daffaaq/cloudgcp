@section('sidebar')
<nav class="pcoded-navbar">
    <div class="nav-list">
        <div class="pcoded-inner-navbar main-menu">
            <div class="pcoded-navigation-label">Navigation</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="">
                    <a href="#" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="feather icon-home"></i>
                        </span>
                        <span class="pcoded-mtext">Dashboard</span>
                    </a>
                </li>
                <li class="">
                    <a href="#" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="feather icon-edit"></i>
                        </span>
                        <span class="pcoded-mtext">Profil Restoran</span>
                    </a>
                </li>
                <li class="pcoded-hasmenu {{ (request()->segment(1) == 'menu') ? 'active pcoded-trigger' : '' }}">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-list"></i></span>
                        <span class="pcoded-mtext">Menu Restoran</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="{{ (request()->segment(2) == 'categories') ? 'active' : '' }}">
                            <a href="{{ route('categories.index') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Kategori Menu</span>
                            </a>
                        </li>
                        <li class="{{ (request()->segment(2) == 'daftar_menu') ? 'active' : '' }}">
                            <a href="{{ route('daftar_menu.index') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Daftar Menu</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="#" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Paket Menu</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="{{ (request()->segment(1) == 'promo') ? 'active' : '' }}">
                    <a href="{{ route('promo.index') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="feather icon-tag"></i>
                        </span>
                        <span class="pcoded-mtext">Promo</span>
                    </a>
                </li>
                <li class="{{ (request()->segment(1) == 'tables') ? 'active' : '' }}">
                    <a href="{{ route('tables.index') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="feather icon-grid"></i>
                        </span>
                        <span class="pcoded-mtext">Daftar Meja</span>
                    </a>
                </li>
                <li class="">
                    <a href="#" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="feather icon-users"></i>
                        </span>
                        <span class="pcoded-mtext">Manage User</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@show