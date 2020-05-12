<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="{{Request::segment(1) == 'dashboard' ? 'active' : ''}}">
                    <a href="/dashboard"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                </li>

                <li class="menu-title">Manajemen</li>
                <!-- /.menu-title -->
                <li class="{{Request::segment(1) == 'admin' ? 'active' : ''}}">
                    <a href="/admin"> <i class="menu-icon ti-user"></i>Admin</a>
                </li>

                <li class="menu-title">Informasi</li>

                <li class="{{Request::segment(1) == 'quote' ? 'active' : ''}}">
                    <a href="/quote"> <i class="menu-icon ti-comment-alt"></i>Quotes</a>
                </li>

                <li class="menu-title">Artikel</li>
                <!-- /.menu-title -->
                <li class="{{ Request()->is('artikel')  ? 'active' : '' }}">
                    <a href="/artikel"> <i class="menu-icon ti-write"></i>All Artikel</a>
                </li>

                <li class="{{ Request()->is('artikel/create') ? 'active' : ''}}">
                    <a href="/artikel/create"> <i class="menu-icon ti-marker-alt"></i>Add Artikel</a>
                </li>

                <li class="menu-title">Tentang</li>
                <!-- /.menu-title -->
                <li class="{{Request::segment(1) == 'about' ? 'active' : ''}}">
                    <a href="/about"> <i class="menu-icon ti-bookmark"></i>About</a>
                </li>

                <li class="menu-title">Pengungjung</li>
                <!-- /.menu-title -->
                <li class="{{Request::segment(1) == 'statistik' ? 'active' : ''}}">
                    <a href="/statistik"> <i class="menu-icon ti-bookmark"></i>Statistik</a>
                </li>


            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
</aside>
<!-- /#left-panel -->