<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="">
    <meta name="author" content="Work Palace">

    <title>@yield('title')</title>

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/lib/remixicon/fonts/remixicon.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/css/style.min.css') }}">
    @livewireStyles
</head>

<body>

    <div class="sidebar">
        <div class="sidebar-header">
            <a href="#" class="sidebar-logo">Work Palace</a>
        </div><!-- sidebar-header -->
        <div id="sidebarMenu" class="sidebar-body">
            <div class="nav-group show">
                <a href="#" class="nav-label">Dashboard</a>
                <ul class="nav nav-sidebar">
                    @role('user')
                        <li class="nav-item">
                            <a href="{{ route('user.new-job') }}" class="nav-link"><i class="ri-pie-chart-2-line"></i>
                                <span>Add Job</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('user.alljobs') }}" class="nav-link"><i class="ri-shopping-bag-3-line"></i>
                                <span>All Jobs</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link"><i class="ri-coin-line"></i>
                                <span>Payments </span></a>
                            <nav class="nav nav-sub2">
                                <a href="#" class="nav-sub-link"> All Paymets</a>
                                <a href="#" class="nav-sub-link">Completed Payments</a>
                                <a href="#"class="nav-sub-link">Pending Payments</a>
                            </nav>
                        </li>
                    @endrole
                    @role('superadmin')
                        <li class="nav-item">
                            <a href="{{ route('superadmin.dashboard') }}" class="nav-link"><i
                                    class="ri-calendar-todo-line"></i>
                                <span>Dashboard </span></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link has-sub"><i class="ri-pencil-ruler-2-line"></i>
                                <span>Job Categories</span></a>
                            <nav class="nav nav-subs">
                                <a href="{{ route('superadmin.create.category') }}" class="nav-sub-link">Create Category</a>
                                <a href="#" class="nav-sub-link">All Categories</a>
                            </nav>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link"><i class="ri-shopping-bag-3-line"></i>
                                <span>Jobs</span></a>

                            <nav class="nav nav-sub1">
                                <a href="#" class="nav-sub-link">All Jobs</a>
                                <a href="#" class="nav-sub-link">Completed Jobs</a>
                                <a href="#"class="nav-sub-link">Pending Jobs</a>
                            </nav>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link"><i class="ri-coin-line"></i>
                                <span>Payments </span></a>
                            <nav class="nav nav-sub2">
                                <a href="#" class="nav-sub-link">All Payments</a>
                                <a href="#" class="nav-sub-link">Completed Payments</a>
                                <a href="#"class="nav-sub-link">Pending Payments</a>
                            </nav>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link"><i class="ri-service-line"></i>
                                <span>Users</span></a>
                            <nav class="nav nav-sub3">
                                <a href="#" class="nav-sub-link">Admins</a>
                                <a href="#" class="nav-sub-link">Employers</a>
                                <a href="#" class="nav-sub-link">Freelancers</a>
                            </nav>
                        </li>
                    @endrole
                    @role('freelancer')
                    <li class="nav-item">
                        <a href="#" class="nav-link"><i class="ri-shopping-bag-3-line"></i>
                            <span>Jobs</span></a>

                        <nav class="nav nav-sub1">
                            <a href="#" class="nav-sub-link">All Jobs</a>
                            <a href="#" class="nav-sub-link">My Completed Jobs</a>
                            <a href="#"class="nav-sub-link">My Pending Jobs</a>
                        </nav>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link"><i class="ri-coin-line"></i>
                            <span>Payments </span></a>
                        <nav class="nav nav-sub2">
                            <a href="#" class="nav-sub-link">All my Payments</a>
                            <a href="#" class="nav-sub-link">Completed Payments</a>
                            <a href="#"class="nav-sub-link">Pending Payments</a>
                        </nav>
                    </li>
                    @endrole
                </ul>
            </div><!-- sidebar-body -->

        </div><!-- sidebar -->

        <div class="header-main px-3 px-lg-4">
            <a id="menuSidebar" href="#" class="menu-link me-3 me-lg-4"><i class="ri-menu-2-fill"></i></a>

            <div class="form-search me-auto">
                <input type="text" class="form-control" placeholder="Search">
                <i class="ri-search-line"></i>
            </div><!-- form-search -->

            <div class="dropdown dropdown-skin">
                <a href="#" class="dropdown-link" data-bs-toggle="dropdown" data-bs-auto-close="outside"><i
                        class="ri-settings-3-line"></i></a>
                <div class="dropdown-menu dropdown-menu-end mt-10-f">
                    <label>Skin Mode</label>
                    <nav id="skinMode" class="nav nav-skin">
                        <a href="#" class="nav-link active">Light</a>
                        <a href="#" class="nav-link">Dark</a>
                    </nav>
                    <hr>
                    <label>Sidebar Skin</label>
                    <nav id="sidebarSkin" class="nav nav-skin">
                        <a href="#" class="nav-link active">Default</a>
                        <a href="#" class="nav-link">Prime</a>
                        <a href="#" class="nav-link">Dark</a>
                    </nav>
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->

            <div class="dropdown dropdown-notification ms-3 ms-xl-4">
                <a href="#" class="dropdown-link" data-bs-toggle="dropdown"
                    data-bs-auto-close="outside"><small>3</small><i class="ri-notification-3-line"></i></a>
                <div class="dropdown-menu dropdown-menu-end mt-10-f me--10-f">
                    <div class="dropdown-menu-header">
                        <h6 class="dropdown-menu-title">Notifications</h6>
                    </div><!-- dropdown-menu-header -->
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="avatar online"><img
                                    src="http://themepixels.me/demo/dashbyte/assets/img/img10.jpg" alt="">
                            </div>
                            <div class="list-group-body">
                                <p><strong>Dominador Manuel</strong> and <strong>100 other people</strong> reacted to
                                    your
                                    comment "Tell
                                    your partner that...</p>
                                <span>Aug 20 08:55am</span>
                            </div><!-- list-group-body -->
                        </li>
                        <li class="list-group-item">
                            <div class="avatar online"><img
                                    src="http://themepixels.me/demo/dashbyte/assets/img/img11.jpg" alt="">
                            </div>
                            <div class="list-group-body">
                                <p><strong>Angela Ighot</strong> tagged you and <strong>9 others</strong> in a post.</p>
                                <span>Aug 18 10:30am</span>
                            </div><!-- list-group-body -->
                        </li>
                        <li class="list-group-item">
                            <div class="avatar"><span class="avatar-initial bg-primary">a</span></div>
                            <div class="list-group-body">
                                <p>New listings were added that match your search alert <strong>house for rent</strong>
                                </p>
                                <span>Aug 15 08:10pm</span>
                            </div><!-- list-group-body -->
                        </li>
                        <li class="list-group-item">
                            <div class="avatar online"><img
                                    src="http://themepixels.me/demo/dashbyte/assets/img/img14.jpg" alt="">
                            </div>
                            <div class="list-group-body">
                                <p>Reminder: <strong>Jerry Cuares</strong> invited you to like <strong>Cuares Surveying
                                        Services</strong>.
                                    <br><a href="#">Accept</a> or <a href="#">Decline</a>
                                </p>
                                <span>Aug 14 11:50pm</span>
                            </div><!-- list-group-body -->
                        </li>
                        <li class="list-group-item">
                            <div class="avatar online"><img src="assets/img/img15.jpg" alt=""></div>
                            <div class="list-group-body">
                                <p><strong>Dyanne Aceron</strong> reacted to your post <strong>King of the Bed</strong>.
                                </p>
                                <span>Aug 10 05:30am</span>
                            </div><!-- list-group-body -->
                        </li>
                    </ul>
                    <div class="dropdown-menu-footer"><a href="#">Show all Notifications</a></div>
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
            <div class="dropdown dropdown-profile ms-3 ms-xl-4">
                <a href="#" class="dropdown-link" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="avatar online"><img src="assets/img/img1.jpg" alt=""></div>
                </a>
                <div class="dropdown-menu dropdown-menu-end mt-10-f">
                    <div class="dropdown-menu-body">
                        <div class="avatar avatar-xl online mb-3"><img src="assets/img/img1.jpg" alt="">
                        </div>
                        <h5 class="mb-1 text-dark fw-semibold">Shaira Diaz</h5>

                        <nav class="nav">
                            <a href="#"><i class="ri-edit-2-line"></i> Edit Profile</a>
                            <a href="#"><i class="ri-profile-line"></i> View Profile</a>
                        </nav>
                        <hr>
                        <nav class="nav">
                            <a href="#"><i class="ri-question-line"></i> Help Center</a>
                            <a href="#"><i class="ri-lock-line"></i> Privacy Settings</a>
                            <a href="#"><i class="ri-user-settings-line"></i> Account Settings</a>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }} <i class="ri-logout-box-r-line"></i>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </nav>
                    </div><!-- dropdown-menu-body -->
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
        </div><!-- header-main -->

        <div class="main main-app p-3 p-lg-4">


            <div class="row g-3" style="min-height: 50vh">
                @yield('content')
            </div><!-- row -->

            <div class="main-footer mt-5">
                <span>&copy; 2023. All Rights Reserved.</span>
            </div><!-- main-footer -->
        </div><!-- main -->


        <script src="{{ asset('assets/admin/lib/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/admin/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/admin/lib/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ asset('assets/admin/lib/jquery.flot/jquery.flot.js') }}"></script>
        <script src="{{ asset('assets/admin/lib/jquery.flot/jquery.flot.stack.js') }}"></script>
        <script src="{{ asset('assets/admin/lib/jquery.flot/jquery.flot.resize.js') }}"></script>
        <script src="{{ asset('assets/admin/lib/chart.js/chart.min.js') }}"></script>

        <script src="{{ asset('assets/admin/assets/js/script.js') }}"></script>
        <script src="{{ asset('assets/admin/assets/js/db.product.js') }}"></script>
        @livewireScripts

</body>

<!-- Mirrored from themepixels.me/demo/dashbyte/dashboard/product.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Feb 2023 14:56:57 GMT -->

</html>
