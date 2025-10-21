<!--start wrapper-->
<div class="wrapper">
    <!--start top header-->
    <header class="top-header">
        <nav class="navbar navbar-expand gap-3">
            <div class="mobile-toggle-icon fs-3">
                <i class="bi bi-list"></i>
            </div>
            {{-- <form class="searchbar">
                <div class="position-absolute top-50 translate-middle-y search-icon ms-3"><i class="bi bi-search"></i>
                </div>
                <input class="form-control" type="text" placeholder="Type here to search">
                <div class="position-absolute top-50 translate-middle-y search-close-icon"><i class="bi bi-x-lg"></i>
                </div>
            </form> --}}
            <div class="top-navbar-right ms-auto">

            </div>
            <div class="dropdown dropdown-user-setting">
                <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                    <div class="user-setting d-flex align-items-center gap-3">
                        <img src="{{ asset('website/assets/images/Favicon.png') }}" class="user-img" alt="">
                        <div class="d-none d-sm-block">
                            <p class="user-name mb-0">maisonavenirfragrances</p>
                            <small class="mb-0 dropdown-user-designation">{{ auth()->user()->email }}</small>
                        </div>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="{{ route('admin.profile.edit') }}">
                            <div class="d-flex align-items-center">
                                <div class=""><i class="bi bi-person-fill"></i></div>
                                <div class="ms-3"><span>Profile</span></div>
                            </div>
                        </a>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>

                        <a class="dropdown-item" href="{{ route('admin.logout') }}">
                            <div class="d-flex align-items-center">
                                <div class=""><i class="bi bi-lock-fill"></i></div>
                                <div class="ms-3"><span>Logout</span></div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!--end top header-->

    <!--start sidebar -->
    <aside class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">

            <div>
                {{-- <span class="fs-5"> Maison de l’Avenir</span> --}}
                <img class="footerlogo" src="{{ asset('website/assets/images/logo1.png') }}"
                    alt="Maisonavenirfragrances  " />

            </div>
            <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
            </div>
        </div>
        <!--navigation-->
        <ul class="metismenu" id="menu">
            <li>
                <!-- Collection Menu -->
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="bi bi-collection"></i> <!-- Updated Icon -->
                    </div>
                    <div class="menu-title">Fragrances</div>
                </a>
                <ul>

                    @can('collection-list')
                        <li> <a href="{{ route('admin.collection.index') }}"><i class="bi bi-circle"></i>Collections </a>
                        </li>
                    @endcan

                    @can('product-list')
                        <li> <a href="{{ route('admin.product.index') }}"><i class="bi bi-circle"></i>Products </a>
                        </li>
                    @endcan




                </ul>
            </li>
            {{-- <li>

                <!-- AI Fragrance Finder Menu -->
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="bi bi-robot"></i> <!-- Updated Icon -->
                    </div>
                    <div class="menu-title">AI Fragrance Finder</div>
                </a>

                <ul>
                    @can('moodoccasion-list')
                        <li> <a href="{{ route('admin.moodoccasion.index') }}"><i class="bi bi-circle"></i>Mood Occasion
                            </a>
                        </li>
                    @endcan
                </ul>
            </li> --}}

            <li>
                <!-- Master Menu -->
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="bi bi-robot"></i> <!-- Updated Icon -->
                    </div>
                    <div class="menu-title">AI Fragrance Finder </div>
                </a>

                <ul>
                    @can('mood-list')
                        <li> <a href="{{ route('admin.mood.index') }}"><i class="bi bi-circle"></i>Moods </a>
                        </li>
                    @endcan


                    @can('occasion-list')
                        <li> <a href="{{ route('admin.occasion.index') }}"><i class="bi bi-circle"></i>Occasions </a>
                        </li>
                    @endcan
                    @can('ingredients-list')
                        <li> <a href="{{ route('admin.ingredients.index') }}"><i class="bi bi-circle"></i>Ingredients </a>
                        </li>
                    @endcan

                    @can('fragranceaccord-list')
                        <li> <a href="{{ route('admin.fragranceaccord.index') }}"><i class="bi bi-circle"></i>Fragrance
                                Accord
                            </a>
                        </li>
                    @endcan

                    @can('layer-withs-list')
                        <li>
                            <a href="{{ route('admin.layer-withs.index') }}">
                                <i class="bi bi-circle"></i>Fragrance Layering
                            </a>
                        </li>
                    @endcan

                    @can('fragrancefamily-list')
                        <li> <a href="{{ route('admin.fragrancefamily.index') }}"><i class="bi bi-circle"></i>Fragrance
                                Family
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>

            <li>
                <a href="{{ route('admin.contact.detail') }}">
                    <div class="parent-icon"><i class="bi bi-person-badge"></i>

                    </div>
                    <div class="menu-title">Website Enquires
                    </div>
                </a>
            </li>


            <li>
                <a href="{{ route('admin.enquiry.index') }}">
                    <div class="parent-icon"><i class="bi bi-person-badge"></i>
                    </div>
                    <div class="menu-title">AI Fragrance Finder Enquiry </div>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.user-system-tracking.index') }}">
                    <div class="parent-icon"><i class="bi bi-globe"></i></div>
                    <div class="menu-title">User System Tracking</div>
                </a>
            </li>

            @can('blog-list')
                <li>
                    <a href="{{ route('admin.blog.index') }}">
                        <div class="parent-icon"><i class="bi bi-file-earmark-text"></i> <!-- Updated Icon Here -->
                        </div>
                        <div class="menu-title">Blogs</div>
                    </a>
                </li>
            @endcan


            {{-- <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="bi bi-lock-fill"></i>
                    </div>
                    <div class="menu-title">Authentication</div>
                </a>
                <ul>
                    @can('role-list')
                        <li> <a href="{{ route('admin.roles.index') }}"><i class="bi bi-circle"></i>Roles</a>
                        </li>
                    @endcan
                    @can('employee-list')
                        <li> <a href="{{ route('admin.employees.index') }}"><i class="bi bi-circle"></i>Employees</a>
                        </li>
                    @endcan


                </ul>
            </li> --}}



            {{-- <li>
                <a href="tel:+916392945727" target="_blank">
                    <div class="parent-icon"><i class="bi bi-telephone-fill"></i>
                    </div>
                    <div class="menu-title">Support</div>
                </a>
            </li> --}}
        </ul>
        <!--end navigation-->
    </aside>
    <!--end sidebar -->
