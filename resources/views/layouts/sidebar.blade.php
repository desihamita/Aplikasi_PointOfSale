<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('AdminLTE-2/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li>
                <a href="{{ url('dashboard') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i><span>Master Data</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/charts/chartjs.html"><i class="fa fa-cube"></i> Kategori</a></li>
                    <li><a href="pages/charts/morris.html"><i class="fa fa-cubes"></i> Produk</a></li>
                    <li><a href="pages/charts/flot.html"><i class="fa fa-id-card"></i> Member</a></li>
                    <li><a href="pages/charts/inline.html"><i class="fa fa-truck"></i> Supplier</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-bank "></i><span>Transaksi</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/UI/general.html"><i class="fa fa-money"></i> Pengeluaran</a></li>
                    <li><a href="pages/UI/icons.html"><i class="fa fa-download"></i> Pembelian</a></li>
                    <li><a href="pages/UI/buttons.html"><i class="fa fa-upload"></i> Penjualan</a></li>
                    <li><a href="pages/UI/sliders.html"><i class="fa  fa-cart-arrow-down"></i> Transaksi Lama</a></li>
                    <li><a href="pages/UI/timeline.html"><i class="fa  fa-cart-arrow-down"></i> Transaksi Baru</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-external-link"></i><span>Report</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/forms/general.html"><i class="fa fa-file-pdf-o"></i> Laporan</a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-gears "></i><span>Pengaturan</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/tables/simple.html"><i class="fa fa-users"></i> User</a></li>
                    <li><a href="pages/tables/data.html"><i class="fa fa-cogs"></i> Setting</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
