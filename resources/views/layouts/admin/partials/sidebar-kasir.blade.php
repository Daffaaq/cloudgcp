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
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-credit-card"></i></span>
                        <span class="pcoded-mtext">Transaksi</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="#" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Pesanan Masuk</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="#" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Pembayaran</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="#" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Pesanan Selesai</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="#" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="feather icon-list"></i>
                        </span>
                        <span class="pcoded-mtext">Daftar Menu</span>
                    </a>
                </li>
                <li class="">
                    <a href="#" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="feather icon-tag"></i>
                        </span>
                        <span class="pcoded-mtext">Daftar Promo</span>
                    </a>
                </li>
                <li class="">
                    <a href="#" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="feather icon-grid"></i>
                        </span>
                        <span class="pcoded-mtext">Daftar Meja</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@show