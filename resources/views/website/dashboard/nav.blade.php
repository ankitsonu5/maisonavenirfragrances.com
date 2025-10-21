<div class="offcanvas-lg offcanvas-start h-100" tabindex="-1" id="offcanvasSidebar">

    <div class="offcanvas-body p-0">
        <div class="card border p-3 w-100">
            <!-- Card header -->
            <div class="card-header text-center border-bottom">
                <!-- Avatar -->
                <div class="avatar avatar-xl position-relative mb-2">
                    <img class="avatar-img rounded-circle border border-2 border-white"
                        src="{{ asset('website/assets/images/user-dummy-pic.png') }}" alt="">

                </div>
                <h6 class="mb-0">{{ auth()->user()->name }}</h6>
                <a href="#" class="text-reset text-primary-hover small">{{ auth()->user()->email
                    }}</a>
            </div>

            <!-- Card body START -->
            <div class="card-body p-0 mt-4">
                <!-- Sidebar menu item START -->
                <ul class="nav nav-pills-primary-border-start flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="account-detail.html"><i class="bi bi-person fa-fw me-2"></i>My
                            profile</a>
                    </li>
                 

                    <li class="nav-item">
                        <a class="nav-link" href="#"><i
                                class="bi bi-wallet fa-fw me-2"></i>Payment details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('order') }}"><i class="bi bi-basket fa-fw me-2"></i>Order
                            history</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-trash fa-fw me-2"></i>Delete
                            profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="#"><i class="fas fa-sign-out-alt fa-fw me-2"></i>Sign
                            Out</a>
                    </li>
                </ul>
                <!-- Sidebar menu item END -->
            </div>
            <!-- Card body END -->
        </div>
    </div>
</div>