<aside class="main-sidebar sidebar-dark-primary elevation-4" style="min-height: 917px;">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
        <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        @if ( auth()->user()->hasRoleId(2) )
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <a href="{{route('order')}}" target="_blank" class="d-block btn btn-secondary btn-block text-uppercase">
                    <strong>Place new Order</strong>
                </a>
            </div>
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                    <li class="nav-item">
                        <a href="{{ route('customer.home') }}" class="nav-link {{ request()->routeIs('customer.home') ? 'active' : '' }}">
                            <i class="fas fa-fw fa-tachometer-alt nav-icon"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>

                    <li class="nav-header">ORDERS</li>

                    <li class="nav-item">
                        <a href="{{ route('customer.orders.index') }}" class="nav-link {{ request()->routeIs('customer.orders.*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>Orders</p>
                        </a>
                    </li>

                    {{-- <li class="nav-item">
                        <a href="{{ route('customer.invoices.index') }}" class="nav-link {{ request()->routeIs('customer.invoices.*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-receipt"></i>
                            <p>Invoices</p>
                        </a>
                    </li> --}}
                    <li class="nav-header">PROFILE</li>

                    <li class="nav-item">
                        <a href="{{route('customer.profile.index')}}" class="nav-link {{ request()->routeIs('customer.profile.index') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-user"></i>
                            <p>Profile</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('customer.profile.change-password')}}" class="nav-link {{ request()->routeIs('customer.profile.change-password') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-unlock"></i>
                            <p>Change Password</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link"
                            onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                            <p>
                                <i class="fas fa-fw fa-sign-out-alt nav-icon">

                                </i>
                                <p>{{ trans('global.logout') }}</p>
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
        @else
            <!-- Admin Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.home') }}">
                            <i class="fas fa-fw fa-tachometer-alt nav-icon">
                            </i>
                            <p>
                                {{ trans('global.dashboard') }}
                            </p>
                        </a>
                    </li>

                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.orders.*') ? 'active' : '' }}"
                                href="{{ route('admin.orders.index') }}">
                                <i class="fa-fw fas fa-tag nav-icon">
                                </i>
                                <p>
                                    Order's List
                                </p>
                            </a>
                        </li>
                    {{-- @endcan --}}
                    {{-- @can('') --}}
                        {{-- <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.invoices.*') ? 'active' : '' }}"
                                href="{{ route('admin.invoices.index') }}">
                                <i class="fa-fw fas fa-file nav-icon">
                                </i>
                                <p>
                                    Invoice List
                                </p>
                            </a>
                        </li> --}}
                    {{-- @endcan --}}
                    {{-- @can('') --}}
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.contacts.*') ? 'active' : '' }}"
                                href="{{ route('admin.contacts.index') }}">
                                <i class="fa-fw fas fa-phone nav-icon">
                                </i>
                                <p>
                                    Contact
                                </p>
                            </a>
                        </li>
                    {{-- @endcan --}}
                    {{-- @can('') --}}
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.services.*') ? 'active' : '' }}"
                                href="{{ route('admin.services.index') }}">
                                <i class="fa-fw fas fa-cubes nav-icon">
                                </i>
                                <p>
                                    Services
                                </p>
                            </a>
                        </li>
                    {{-- @endcan --}}
                    {{-- @can('') --}}
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.blogs.*') ? 'active' : '' }}"
                                href="{{ route('admin.blogs.index') }}">
                                <i class="fa-fw fas fa-copy nav-icon">
                                </i>
                                <p>
                                    Blogs
                                </p>
                            </a>
                        </li>
                    {{-- @endcan --}}
                    {{-- @can('') --}}
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.customers.*') ? 'actives' : '' }}"
                                href="{{ route('admin.customers.index') }}">
                                <i class="fa-fw fas fa-user-plus nav-icon"></i>
                                <p>
                                    Customers List
                                </p>
                            </a>
                        </li>
                    {{-- @endcan --}}
                    {{-- @can('') --}}
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.setting.*') ? 'actives' : '' }}"
                                href="{{ route('admin.setting.index') }}">
                                <i class="fa-fw fas fa-cog nav-icon"></i>
                                <p>
                                    Setting
                                </p>
                            </a>
                        </li>
                    {{-- @endcan --}}
                    @if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                        @can('profile_password_edit')
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}"
                                    href="{{ route('profile.password.edit') }}">
                                    <i class="fa-fw fas fa-key nav-icon">
                                    </i>
                                    <p>
                                        {{ trans('global.change_password') }}
                                    </p>
                                </a>
                            </li>
                        @endcan
                    @endif
                    <li class="nav-item">
                        <a href="#" class="nav-link"
                            onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                            <p>
                                <i class="fas fa-fw fa-sign-out-alt nav-icon">

                                </i>
                                <p>{{ trans('global.logout') }}</p>
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
        @endif

    </div>

</aside>
