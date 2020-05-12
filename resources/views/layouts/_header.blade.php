<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>

<!-- Header -->
<div class="header-top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 d-flex">
                <a href="index.html" class="site-logo">
                  Info Penyakit
                </a>

                <a href="#" class="ml-auto d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>

            </div>
            <div class="col-12 col-lg-6 ml-auto d-flex">
                <div class="ml-md-auto top-social d-none d-lg-inline-block">
                    <a href="https://twitter.com/kafri_bung" target="_blank" class="d-inline-block p-3"><span class="icon-twitter"></span></a>
                    <a href="https://www.instagram.com/kafri_bung/" target="_blank" class="d-inline-block p-3"><span class="icon-instagram"></span></a>
                    <a href="https://github.com/kafribung/" target="_blank" class="d-inline-block p-3"><span class="icon-github"></span></a>

                    
                </div>
                <form action="/penyakit" class="search-form d-inline-block">

                    <div class="d-flex">
                        <input type="text" name="data" class="form-control" placeholder="Search...">
                        <button type="submit" class="btn btn-secondary"><span class="icon-search"></span></button>
                    </div>
                </form>
            </div>
            <div class="col-6 d-block d-lg-none text-right">

            </div>
        </div>
    </div>

    <!-- Navbar  -->
    <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">

        <div class="container">
            <div class="d-flex align-items-center">

                <div class="mr-auto">
                    <nav class="site-navigation position-relative text-right" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
                            <li class="{{Request()->is('home') ? 'active' : ''}}">
                                <a href="/home" class="nav-link text-left">Home</a>
                            </li>
                            
                            <li class="{{Request()->is('penyakit') ? 'active' : ''}}">
                                <a href="/penyakit" class="nav-link text-left">Penyakit</a>
                            </li>
                           
                            <li class="{{Request()->is('motivasi') ? 'active' : ''}}">
                                <a href="/motivasi" class="nav-link text-left">Motivasi</a>
                            </li>

                            <li class="{{Request()->is('tentang') ? 'active' : ''}}">
                                <a href="/tentang" class="nav-link text-left">Tentang</a>
                            </li>

                            <li class="{{Request()->is('login') ? 'active' : ''}}">
                                <b><a href="/login" class="nav-link text-left">Login</a></b>
                            </li>
                        </ul>
                    </nav>

                </div>

            </div>
        </div>

    </div>
    <!-- End Navbar  -->

</div>
<!-- Header -->