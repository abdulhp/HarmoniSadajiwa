<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link">
        <img src="{{url('')}}/laravel/vendor/almasaeed2010/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Harmoni Sadajiwa</span>
    </a>
    
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex justify-content-between align-items-center">
            <div class="image">
                <img src="{{url('')}}/laravel/vendor/almasaeed2010/adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{session('name')}}</a>
            </div>
            <div class="logout-btn info">
                <a href="{{route('admin.logout')}}" title="Keluar"><span class="fas fa-sign-out-alt"></span></a>
            </div>
        </div>
        
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('admin.artikel')}}" class="nav-link @if($data['activeMenu'] == 'Artikel') active @endif">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>Artikel</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link @if($data['activeMenu'] == 'Musik') active @endif">
                        <i class="nav-icon fas fa-music"></i>
                        <p>
                            Musik
                            {{-- <span class="right badge badge-danger">New</span> --}}
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>