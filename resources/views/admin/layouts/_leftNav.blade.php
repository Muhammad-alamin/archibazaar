<div class="inner-wrapper">
    <!-- start: sidebar -->
    <aside id="sidebar-left" class="sidebar-left">

        <div class="sidebar-header">
            <div class="sidebar-title">
                Navigation
            </div>
            <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
            </div>
        </div>

        <div class="nano">
            <div class="nano-content">
                <nav id="menu" class="nav-main" role="navigation">

                    <ul class="nav nav-main">
                        <li>
                            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                                <i class="fas fa-home" aria-hidden="true"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-parent">
                            <a class="nav-link" href="#">
                                <i class="fas fa-shopping-cart" aria-hidden="true"></i>
                                <span>Professional Category</span>
                            </a>
                            <ul class="nav nav-children">
                                <li>
                                    <a class="nav-link" href="{{ route('admin.professional.category') }}">
                                        Add Category
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{ route('admin.professional.category.list') }}">
                                        List of Category
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-parent">
                            <a class="nav-link" href="#">
                                <i class="fas fa-shopping-cart" aria-hidden="true"></i>
                                <span>Slider</span>
                            </a>
                            <ul class="nav nav-children">
                                <li>
                                    <a class="nav-link" href="{{ route('admin.slider') }}">
                                        Add slider
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{ route('admin.slider.list') }}">
                                        List of slider
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-parent">
                            <a class="nav-link" href="#">
                                <i class="fas fa-shopping-cart" aria-hidden="true"></i>
                                <span>Product Category</span>
                            </a>
                            <ul class="nav nav-children">
                                <li>
                                    <a class="nav-link" href="{{ route('admin.product.category') }}">
                                        Add Category
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{ route('admin.product.category.list') }}">
                                        List of Category
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-parent">
                            <a class="nav-link" href="#">
                                <i class="fas fa-shopping-cart" aria-hidden="true"></i>
                                <span>Professional</span>
                            </a>
                            <ul class="nav nav-children">
                                <li>
                                    <a class="nav-link" href="{{ route('admin.professional') }}">
                                        Add professional
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{ route('admin.professional.list') }}">
                                        List of professional
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-parent">
                            <a class="nav-link" href="#">
                                <i class="fas fa-shopping-cart" aria-hidden="true"></i>
                                <span>Projects</span>
                            </a>
                            <ul class="nav nav-children">
                                <li>
                                    <a class="nav-link" href="ecommerce-dashboard.html">
                                        Add projects
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="ecommerce-dashboard.html">
                                        List of projects
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-parent">
                            <a class="nav-link" href="#">
                                <i class="fas fa-shopping-cart" aria-hidden="true"></i>
                                <span>Products</span>
                            </a>
                            <ul class="nav nav-children">
                                <li>
                                    <a class="nav-link" href="ecommerce-dashboard.html">
                                        Add Product
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="ecommerce-dashboard.html">
                                        List of Product
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-parent">
                            <a class="nav-link" href="#">
                                <i class="fas fa-shopping-cart" aria-hidden="true"></i>
                                <span>Articles</span>
                            </a>
                            <ul class="nav nav-children">
                                <li>
                                    <a class="nav-link" href="ecommerce-dashboard.html">
                                        Add articles
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="ecommerce-dashboard.html">
                                        List of articles
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </nav>
            </div>

            <script>
                // Maintain Scroll Position
                if (typeof localStorage !== 'undefined') {
                    if (localStorage.getItem('sidebar-left-position') !== null) {
                        var initialPosition = localStorage.getItem('sidebar-left-position'),
                            sidebarLeft = document.querySelector('#sidebar-left .nano-content');

                        sidebarLeft.scrollTop = initialPosition;
                    }
                }
            </script>


        </div>

    </aside>

    @yield('content')

</div>