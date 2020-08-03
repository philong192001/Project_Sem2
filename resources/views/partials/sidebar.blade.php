<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a class="brand-link" href="">
        <img alt="AdminLTE Logo" class="brand-image img-circle elevation-3" src="{{ asset('adminlte/dist/img/AdminLTELogo.png') }} " style="opacity: .8">
            <span class="brand-text font-weight-light">
                Admin
            </span>
        </img>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img alt="User Image" class="img-circle elevation-2" src="{{ asset('adminlte/dist/img/user2-160x160.jpg') }} ">
                </img>
            </div>
            <div class="info">
                <a class="d-block" href="#">
                   VOGiACu
                </a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-accordion="false" data-widget="treeview" role="menu">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('menu.index') }}">
                        <i class="nav-icon fas fa-th">
                        </i>
                        <p>
                            Menu
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('categories.index') }}">
                        <i class="nav-icon fas fa-th">
                        </i>
                        <p>
                            Quan li Danh muc 
                            <span class="right badge badge-danger">
                                New
                            </span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('product.index') }}">
                        <i class="nav-icon fas fa-th">
                        </i>
                        <p>
                            Quan li San pham
                            <span class="right badge badge-danger">
                                New
                            </span>
                        </p>
                    </a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="{{ route('settings.index') }}">
                        <i class="nav-icon fas fa-th">
                        </i>
                        <p>
                            Setting
                            <span class="right badge badge-danger">
                                New
                            </span>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>