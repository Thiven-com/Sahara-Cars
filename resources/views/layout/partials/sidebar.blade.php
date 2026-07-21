<!-- Sidebar -->
<div class="sidebar" id="sidebar">
        <!-- Logo -->
        <div class="sidebar-logo active">
                <a href="{{ url('admin/dashboard') }}" class="logo logo-normal d-flex align-items-center">
                        <img src="{{ asset($site->site_logo) }}" alt="Logo">
                        {{-- <img src="{{ asset('website/images/vishwa.png') }}" alt="Vishwa" style="height:50px;"> --}}
                </a>
                <a href="{{url('admin/dashboard')}}" class="logo logo-white">
                        <img src="{{ asset($site->site_logo) }}" alt="Img">
                        {{-- <img src="{{asset('website')}}/images/vishwa.png" alt="Img"> --}}
                </a>
                <a href="{{url('admin/dashboard')}}" class="logo-small">
                        <img src="{{ asset($site->site_logo) }}" alt="Img">
                        {{-- <img src="{{asset('website')}}/images/vishwa.png" alt="Img"> --}}
                </a>
                <a id="toggle_btn" href="javascript:void(0);">
                        <i data-feather="chevrons-left" class="feather-16"></i>
                </a>
        </div>
        <!-- /Logo -->

        <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                        <ul>
                                <li class="submenu-open">
                                        <h6 class="submenu-hdr">Dashboard</h6>
                                        <ul>
                                                <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
                                                        <a href="{{ route('admin.dashboard') }}"><i
                                                                        class="ti ti-layout-grid fs-16 me-2"></i><span>Dashboard</span></a>
                                                </li>
                                        </ul>
                                </li>
                                <!------schedule----->
                                <li class="submenu-open">
                                        <h6 class="submenu-hdr">Cars</h6>
                                        <ul>

                                                <li class="{{ request()->routeIs('admin.brands.*') ? 'active' : '' }}">
                                                        <a href="{{ route('admin.brands.index') }}">
                                                                <i class="ti ti-building-store fs-16 me-2"></i>
                                                                <span>Brands</span>
                                                        </a>
                                                </li>

                                                <li
                                                        class="{{ request()->routeIs('admin.categories.*') ? 'active' : '' }}">
                                                        <a href="{{ route('admin.categories.index') }}">
                                                                <i class="ti ti-category fs-16 me-2"></i>
                                                                <span>Categories</span>
                                                        </a>
                                                </li>

                                                <li
                                                        class="{{ request()->routeIs('admin.features.*') ? 'active' : '' }}">
                                                        <a href="{{ route('admin.features.index') }}">
                                                                <i class="ti ti-list-check fs-16 me-2"></i>
                                                                <span>Features</span>
                                                        </a>
                                                </li>

                                                <li class="{{ request()->routeIs('admin.cars.*') ? 'active' : '' }}">
                                                        <a href="{{ route('admin.cars.index') }}">
                                                                <i class="ti ti-car fs-16 me-2"></i>
                                                                <span>Cars</span>
                                                        </a>
                                                </li>
                                                <li class="{{ request()->routeIs('admin.gallery.*') ? 'active' : '' }}">
                                                        <a href="{{ route('admin.gallery.index') }}">
                                                                <i class="ti ti-photo fs-16 me-2"></i>
                                                                <span>Galleries</span>
                                                        </a>
                                                </li>
                                                <li
                                                        class="{{ request()->routeIs('admin.enquiries.*') ? 'active' : '' }}">
                                                        <a href="{{ route('admin.enquiries.index') }}">
                                                                <i class="ti ti-message-circle fs-16 me-2"></i>
                                                                <span>Enquiries</span>
                                                        </a>
                                                </li>

                                                <li
                                                        class="{{ request()->routeIs('admin.contacts.*') ? 'active' : '' }}">
                                                        <a href="{{ route('admin.contacts.index') }}">
                                                                <i class="ti ti-address-book fs-16 me-2"></i>
                                                                <span>Contacts</span>
                                                        </a>
                                                </li>



                                        </ul>
                                </li>


                                <li class="submenu-open">
                                        <h6 class="submenu-hdr">Settings</h6>
                                        <ul>
                                                <li
                                                        class="{{ request()->routeIs('admin.settings.company.*') ? 'active' : '' }}">
                                                        <a href="{{ route('admin.settings.company') }}">
                                                                <i class="ti ti-address-book fs-16 me-2"></i>
                                                                <span>Settings</span>
                                                        </a>
                                                </li>
                                                <li>
                                                        <a href="{{ route('admin.logout') }}"
                                                                class="{{ Request::is('signin') ? 'active' : '' }}"><i
                                                                        class="ti ti-logout fs-16 me-2"
                                                                        style="color: red;"></i><span
                                                                        style="color: red;">Logout</span>
                                                        </a>
                                                </li>
                                        </ul>
                                </li>
                        </ul>
                </div>
        </div>
</div>