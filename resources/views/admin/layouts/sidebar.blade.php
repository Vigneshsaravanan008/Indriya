<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{route("admin.dashboard")}}" class="brand-link">
        <img src="{{asset($setting->logo)}}" alt="Indriya" class="brand-image img-circle elevation-3"
            style="opacity:.8">
        <span class="brand-text font-weight-light">Indriya</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('admin.dashboard')}}" class="nav-link {{request()->routeIs('admin.dashboard')?"active":""}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-header">Assets</li>

                <li class="nav-item">
                    <a href="{{route("admin.aboutus")}}" class="nav-link {{request()->routeIs('admin.aboutus')?"active":""}}">
                        <i class="nav-icon far fa-address-card"></i>
                        <p>
                            About Us
                        </p>
                    </a>
                </li>
               
                <li class="nav-item">
                    <a href="{{url("/")}}" class="nav-link">
                        <i class="nav-icon fas fa-image"></i>
                        <p>
                            Assets
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route("admin.pagemanagement")}}" class="nav-link {{request()->routeIs('admin.pagemanagement')?"active":""}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Page Management</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-header">Events</li>
                <li class="nav-item">
                    <a href="{{url("/")}}" class="nav-link">
                        <i class="nav-icon fas fa-calendar-week"></i>
                        <p>
                            Events & Campaign
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route("admin.event")}}" class="nav-link {{request()->routeIs('admin.event')?"active":""}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Events</p>
                            </a>
                        </li>
                    </ul>
                </li>

                
                <li class="nav-header">Forms</li>
                <li class="nav-item">
                    <a href="{{route("admin.contactus")}}" class="nav-link {{request()->routeIs('admin.contactus')?"active":""}}">
                        <i class="nav-icon fas fa-comment-dots"></i>
                        <p>
                            Contact Us
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route("admin.subscription")}}" class="nav-link {{request()->routeIs('admin.subscription')?"active":""}}">
                        <i class="nav-icon fas fa-paper-plane"></i>
                        <p>
                            Subscriptions
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{url("/")}}" class="nav-link">
                        <i class="nav-icon far fa-sticky-note"></i>
                        <p>
                            Merchandise
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url("/")}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Receipents</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-header">Products</li>
                <li class="nav-item">
                    <a href="{{route("admin.productcategory")}}" class="nav-link">
                        <i class="nav-icon fas fa-shopping-cart"></i>
                        <p>
                            Products Category
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url("/")}}" class="nav-link">
                        <i class="nav-icon fas fa-shopping-cart"></i>
                        <p>
                            Products
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url("/")}}" class="nav-link">
                        <i class="nav-icon fas fa-cart-arrow-down"></i>
                        <p>
                            Orders
                        </p>
                    </a>
                </li>
                
                <li class="nav-header">Settings & SEO</li>
                <li class="nav-item">
                    <a href="{{route("admin.setting")}}" class="nav-link {{request()->routeIs('admin.setting')?"active":""}}">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>Settings</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
