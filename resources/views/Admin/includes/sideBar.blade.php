<nav id="sidebar">
    <div class="sidebar-header">
        <h1>
            <a href="{{ url('/') }}">Modernize</a>
        </h1>
        <span>M</span>
    </div>
    <div class="profile-bg"></div>
    <ul class="list-unstyled components">
        <li class="active">
            <a href="{{ url('/') }}">
                <i class="fas fa-th-large"></i>
                Dashboard
            </a>
        </li>
        <li>
            <a href="#ComphanySubmenu" data-toggle="collapse" aria-expanded="false">
                <i class="fas fa-laptop"></i>
                Company
                <i class="fas fa-angle-down fa-pull-right"></i>
            </a>
            <ul class="collapse list-unstyled" id="ComphanySubmenu">
                <li>
                    <a href="{{ url('add/company') }}">Add Company</a>
                </li>
                <li>
                    <a href="{{ url('mange/company') }}">Manage Company</a>
                </li>
            </ul>
        </li>
        <li>
        <li>
            <a href="#ProductSubmenu" data-toggle="collapse" aria-expanded="false">
                <i class="fas fa-product-hunt"></i>
                Product
                <i class="fas fa-angle-down fa-pull-right"></i>
            </a>
            <ul class="collapse list-unstyled" id="ProductSubmenu">
                <li>
                    <a href="{{ url('/add/product') }}">Add Prodct</a>
                </li>
                <li>
                    <a href="{{ url('/manage/product') }}">Manage Prodct</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#ProductSubmenu" data-toggle="collapse" aria-expanded="false">
                <i class="fas fa-product-hunt"></i>
                Product
                <i class="fas fa-angle-down fa-pull-right"></i>
            </a>
            <ul class="collapse list-unstyled" id="ProductSubmenu">
                <li>
                    <a href="{{ url('/add/product') }}">Add Prodct</a>
                </li>
                <li>
                    <a href="carousels.html">Manage Prodct</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#stockSubmenu1" data-toggle="collapse" aria-expanded="false">
                <i class="fas fa-chart-pie"></i>
                Stock
                <i class="fas fa-angle-down fa-pull-right"></i>
            </a>
            <ul class="collapse list-unstyled" id="stockSubmenu1">
                <li>
                    <a href="#">Stock In</a>
                </li>
                <li>
                    <a href="#">Stock Out</a>
                </li>
                <li>
                    <a href="#">Manage Stock</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="grids.html">
                <i class="fas fa-money-bill-alt"></i>
                Supply Payment
            </a>
        </li>
        <li>
            <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false">
                <i class="far fa-file"></i>
                Pages
                <i class="fas fa-angle-down fa-pull-right"></i>
            </a>
            <ul class="collapse list-unstyled" id="pageSubmenu1">
                <li>
                    <a href="404.html">404</a>
                </li>
                <li>
                    <a href="500.html">500</a>
                </li>
                <li>
                    <a href="blank.html">Blank</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="mailbox.html">
                <i class="far fa-envelope"></i>
                Mailbox
                <span class="badge badge-secondary float-md-right bg-danger">5 New</span>
            </a>
        </li>
        <li>
            <a href="widgets.html">
                <i class="far fa-window-restore"></i>
                Widgets
            </a>
        </li>
        <li>
            <a href="pricing.html">
                <i class="fas fa-table"></i>
                Pricing Tables
            </a>
        </li>
        <li>
            <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false">
                <i class="fas fa-users"></i>
                User
                <i class="fas fa-angle-down fa-pull-right"></i>
            </a>
            <ul class="collapse list-unstyled" id="pageSubmenu3">
                <li>
                    <a href="login.html">Login</a>
                </li>
                <li>
                    <a href="register.html">Register</a>
                </li>
                <li>
                    <a href="forgot.html">Forgot password</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="maps.html">
                <i class="far fa-map"></i>
                Maps
            </a>
        </li>
    </ul>
</nav>