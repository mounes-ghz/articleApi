<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

        <span class="brand-text font-weight-light">داشبورد</span>


    <!-- Sidebar -->
    <div class="sidebar" style="direction: ltr">
        <div style="direction: rtl">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
{{--                    <img src="https://www.gravatar.com/avatar/52f0fbcbedee04a121cba8dad1174462?s=200&d=mm&r=g" class="img-circle elevation-2" alt="User Image">--}}
                </div>

            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{ route('user.index') }}" class="nav-link">
                            <i class="nav-icon fa fa-user"></i>
                            <p>
                                باشگاه مشتریان
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('category.index') }}" class="nav-link">
                            <i class="nav-icon fa fa-spinner"></i>
                            <p>
                                مدیریت دسته بندی ها
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('status.index') }}" class="nav-link">
                            <i class="nav-icon fa fa-exclamation-circle"></i>
                            <p>
                                مدیریت وضعیت ها
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('article.index') }}" class="nav-link">
                            <i class="nav-icon fa fa-building"></i>
                            <p>مقاله ها </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
    </div>
    <!-- /.sidebar -->
</aside>
