<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link">
        {{-- <img src="{{ asset('admin/dist/images/logo-lam-kprs.png') }}" alt="AdminLTE Logo" style="width:200px"> --}}
        {{-- <img src="{{ asset('admin/dist/images/logo-lam-kprs.png') }}" alt="AdminLTE Logo" class="brand-image"
            style="width: 20"> --}}
        <span class="brand-text font-weight-light">E-Kasir</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a class="d-block">{{ Auth::User()->name }}</a>
            </div>
        </div> --}}

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link @yield('dashboard')">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('customer.index') }}" class="nav-link @yield('customer')"">
                        <i class="nav-icon fas fa-store"></i>
                        <p>
                            Pelanggan
                            <span class="badge badge-info right">@yield('countCustomer')</span>
                        </p>
                    </a>
                </li>

                <li class="nav-item @yield('data.product')">
                    <a href="#" class="nav-link @yield('nav')">
                        <i class="nav-icon fas fa-box-open"></i>
                        <p>
                            Data Produk
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        {{-- Kategori --}}
                        <li class="nav-item">
                            <a href="{{ route('category.index') }}" class="nav-link @yield('category')">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-bars nav-icon"></i>
                                <p>Kategori</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        {{-- Unit --}}
                        <li class="nav-item">
                            <a href="{{ route('unit.index') }}" class="nav-link @yield('unit')">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-bars nav-icon"></i>
                                <p>Unit</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        {{-- Item --}}
                        <li class="nav-item">
                            <a href="{{ route('item.index') }}" class="nav-link @yield('item')">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-bars nav-icon"></i>
                                <p>Item</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item">
                    <a href="{{ route('user.index') }}" class="nav-link @yield('user')"">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            User
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
