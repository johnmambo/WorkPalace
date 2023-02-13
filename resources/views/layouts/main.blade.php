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
                    @endrole
                    @role('superadmin')
                        <li class="nav-item">
                            <a href="{{ route('superadmin.dashboard')}}" class="nav-link"><i class="ri-calendar-todo-line"></i> 
                                <span>Dashboard </span></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link has-sub"><i class="ri-pencil-ruler-2-line"></i>
                                <span>Job Categories</span></a>
                            <nav class="nav nav-sub">
                                <a href="{{ route('superadmin.create.category')}}"
                                    class="nav-sub-link">Create Category</a>
                                <a href="http://themepixels.me/demo/dashbyte/docs/layout-columns.html"
                                    class="nav-sub-link">Columns</a>
                                <a href="http://themepixels.me/demo/dashbyte/docs/layout-gutters.html"
                                    class="nav-sub-link">Gutters</a>
                            </nav>
                        </li>
                    @endrole


                    <li class="nav-item">
                        <a href="sales.html" class="nav-link"><i class="ri-shopping-bag-3-line"></i> <span>Sales
                                Monitoring</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="analytics.html" class="nav-link"><i class="ri-bar-chart-2-line"></i> <span>Website
                                Analytics</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="crypto.html" class="nav-link"><i class="ri-coin-line"></i>
                            <span>Cryptocurrency</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="helpdesk.html" class="nav-link"><i class="ri-service-line"></i> <span>Helpdesk
                                Service</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="storage.html" class="nav-link"><i class="ri-hard-drive-2-line"></i> <span>Storage
                                Management</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="product.html" class="nav-link active"><i class="ri-suitcase-2-fill"></i> <span>Product
                                Management</span></a>
                    </li>
                </ul>
            </div><!-- nav-group -->
            <div class="nav-group show">
                <a href="#" class="nav-label">Applications</a>
                <ul class="nav nav-sidebar">
                    <li class="nav-item">
                        <a href="http://themepixels.me/demo/dashbyte/apps/file-manager.html" class="nav-link"><i
                                class="ri-folder-2-line"></i> <span>File Manager</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="http://themepixels.me/demo/dashbyte/apps/email.html" class="nav-link"><i
                                class="ri-mail-send-line"></i> <span>Email</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="http://themepixels.me/demo/dashbyte/apps/calendar.html" class="nav-link"><i
                                class="ri-calendar-line"></i> <span>Calendar</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="http://themepixels.me/demo/dashbyte/apps/chat.html" class="nav-link"><i
                                class="ri-question-answer-line"></i> <span>Chat</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="http://themepixels.me/demo/dashbyte/apps/contact.html" class="nav-link"><i
                                class="ri-contacts-book-line"></i> <span>Contacts</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="http://themepixels.me/demo/dashbyte/apps/tasks.html" class="nav-link"><i
                                class="ri-checkbox-multiple-line"></i> <span>Task Manager</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link has-sub"><i class="ri-gallery-line"></i> <span>Media
                                Gallery</span></a>
                        <nav class="nav nav-sub">
                            <a href="http://themepixels.me/demo/dashbyte/apps/gallery-music.html"
                                class="nav-sub-link">Music
                                Stream</a>
                            <a href="http://themepixels.me/demo/dashbyte/apps/gallery-video.html"
                                class="nav-sub-link">Video
                                Stream</a>
                        </nav>
                    </li>
                </ul>
            </div><!-- nav-group -->
            <div class="nav-group show">
                <a href="#" class="nav-label">Pages</a>
                <ul class="nav nav-sidebar">
                    <li class="nav-item">
                        <a href="#" class="nav-link has-sub"><i class="ri-account-circle-line"></i> <span>User
                                Pages</span></a>
                        <nav class="nav nav-sub">
                            <a href="http://themepixels.me/demo/dashbyte/pages/profile.html" class="nav-sub-link">User
                                Profile</a>
                            <a href="http://themepixels.me/demo/dashbyte/pages/people.html"
                                class="nav-sub-link">People &amp;
                                Groups</a>
                            <a href="http://themepixels.me/demo/dashbyte/pages/activity.html"
                                class="nav-sub-link">Activity Log</a>
                            <a href="http://themepixels.me/demo/dashbyte/pages/events.html"
                                class="nav-sub-link">Events</a>
                            <a href="http://themepixels.me/demo/dashbyte/pages/settings.html"
                                class="nav-sub-link">Settings</a>
                        </nav>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link has-sub"><i class="ri-lock-2-line"></i>
                            <span>Authentication</span></a>
                        <nav class="nav nav-sub">
                            <a href="http://themepixels.me/demo/dashbyte/pages/sign-in.html" class="nav-sub-link">Sign
                                In Basic</a>
                            <a href="http://themepixels.me/demo/dashbyte/pages/sign-in-2.html"
                                class="nav-sub-link">Sign In Cover</a>
                            <a href="http://themepixels.me/demo/dashbyte/pages/sign-up.html" class="nav-sub-link">Sign
                                Up Basic</a>
                            <a href="http://themepixels.me/demo/dashbyte/pages/sign-up-2.html"
                                class="nav-sub-link">Sign Up Cover</a>
                            <a href="http://themepixels.me/demo/dashbyte/pages/verify-account.html"
                                class="nav-sub-link">Verify
                                Account</a>
                            <a href="http://themepixels.me/demo/dashbyte/pages/forgot-password.html"
                                class="nav-sub-link">Forgot
                                Password</a>
                            <a href="http://themepixels.me/demo/dashbyte/pages/lock-screen.html"
                                class="nav-sub-link">Lock Screen</a>
                        </nav>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link has-sub"><i class="ri-error-warning-line"></i> <span>Error
                                Pages</span></a>
                        <nav class="nav nav-sub">
                            <a href="http://themepixels.me/demo/dashbyte/pages/error-404.html"
                                class="nav-sub-link">Page Not Found</a>
                            <a href="http://themepixels.me/demo/dashbyte/pages/error-500.html"
                                class="nav-sub-link">Internal Server
                                Error</a>
                            <a href="http://themepixels.me/demo/dashbyte/pages/error-503.html"
                                class="nav-sub-link">Service
                                Unavailable</a>
                            <a href="http://themepixels.me/demo/dashbyte/pages/error-505.html"
                                class="nav-sub-link">Forbidden</a>
                        </nav>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link has-sub"><i class="ri-file-text-line"></i> <span>Other
                                Pages</span></a>
                        <nav class="nav nav-sub">
                            <a href="http://themepixels.me/demo/dashbyte/pages/pricing.html"
                                class="nav-sub-link">Pricing</a>
                            <a href="http://themepixels.me/demo/dashbyte/pages/faq.html" class="nav-sub-link">FAQ</a>
                        </nav>
                    </li>
                </ul>
            </div><!-- nav-group -->
            <div class="nav-group show mb-3">
                <a href="#" class="nav-label">UI Elements</a>
                <ul class="nav nav-sidebar">
                    <li class="nav-item">
                        <a href="#" class="nav-link has-sub"><i class="ri-pencil-ruler-2-line"></i>
                            <span>Getting Started</span></a>
                        <nav class="nav nav-sub">
                            <a href="http://themepixels.me/demo/dashbyte/docs/layout-grid.html"
                                class="nav-sub-link">Grid System</a>
                            <a href="http://themepixels.me/demo/dashbyte/docs/layout-columns.html"
                                class="nav-sub-link">Columns</a>
                            <a href="http://themepixels.me/demo/dashbyte/docs/layout-gutters.html"
                                class="nav-sub-link">Gutters</a>
                        </nav>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link has-sub"><i class="ri-suitcase-line"></i>
                            <span>Components</span></a>
                        <nav class="nav nav-sub">
                            <a href="http://themepixels.me/demo/dashbyte/docs/com-accordion.html"
                                class="nav-sub-link">Accordion</a>

                        </nav>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link has-sub"><i class="ri-list-check-2"></i>
                            <span>Forms</span></a>
                        <nav class="nav nav-sub">
                            <a href="http://themepixels.me/demo/dashbyte/docs/form-elements.html"
                                class="nav-sub-link">Text
                                Elements</a>

                        </nav>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link has-sub"><i class="ri-bar-chart-2-line"></i> <span>Charts
                                &amp;
                                Graphs</span></a>
                        <nav class="nav nav-sub">
                            <a href="http://themepixels.me/demo/dashbyte/docs/chart-flot.html"
                                class="nav-sub-link">Flot</a>

                        </nav>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link has-sub"><i class="ri-stack-line"></i> <span>Maps &amp;
                                Icons</span></a>
                        <nav class="nav nav-sub">
                            <a href="http://themepixels.me/demo/dashbyte/docs/map-leaflet.html"
                                class="nav-sub-link">Leaflet Maps</a>
                            < </nav>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link has-sub"><i class="ri-briefcase-4-line"></i>
                            <span>Utilities</span></a>
                        <nav class="nav nav-sub">
                            <a href="http://themepixels.me/demo/dashbyte/docs/util-animation.html"
                                class="nav-sub-link">Animation</a>

                        </nav>
                    </li>
                </ul>
            </div><!-- nav-group -->
        </div><!-- sidebar-body -->
        <div class="sidebar-footer">
            <div class="sidebar-footer-top">
                <div class="sidebar-footer-thumb">
                    <img src="http://themepixels.me/demo/dashbyte/assets/img/img1.jpg" alt="">
                </div><!-- sidebar-footer-thumb -->
                <div class="sidebar-footer-body">
                    <h6><a href="http://themepixels.me/demo/dashbyte/pages/profile.html">Shaira Diaz</a></h6>
                    <p>Premium Member</p>
                </div><!-- sidebar-footer-body -->
                <a id="sidebarFooterMenu" href="#" class="dropdown-link"><i
                        class="ri-arrow-down-s-line"></i></a>
            </div><!-- sidebar-footer-top -->
            <div class="sidebar-footer-menu">
                <nav class="nav">
                    <a href="#"><i class="ri-edit-2-line"></i> Edit Profile</a>
                    <a href="#"><i class="ri-profile-line"></i> View Profile</a>
                </nav>
                <hr>
                <nav class="nav">
                    <a href="#"><i class="ri-question-line"></i> Help Center</a>
                    <a href="#"><i class="ri-lock-line"></i> Privacy Settings</a>
                    <a href="#"><i class="ri-user-settings-line"></i> Account Settings</a>
                    <a href="#"><i class="ri-logout-box-r-line"></i> Log Out</a>
                </nav>
            </div><!-- sidebar-footer-menu -->
        </div><!-- sidebar-footer -->
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
                        <div class="avatar online"><img src="http://themepixels.me/demo/dashbyte/assets/img/img10.jpg"
                                alt=""></div>
                        <div class="list-group-body">
                            <p><strong>Dominador Manuel</strong> and <strong>100 other people</strong> reacted to your
                                comment "Tell
                                your partner that...</p>
                            <span>Aug 20 08:55am</span>
                        </div><!-- list-group-body -->
                    </li>
                    <li class="list-group-item">
                        <div class="avatar online"><img src="http://themepixels.me/demo/dashbyte/assets/img/img11.jpg"
                                alt=""></div>
                        <div class="list-group-body">
                            <p><strong>Angela Ighot</strong> tagged you and <strong>9 others</strong> in a post.</p>
                            <span>Aug 18 10:30am</span>
                        </div><!-- list-group-body -->
                    </li>
                    <li class="list-group-item">
                        <div class="avatar"><span class="avatar-initial bg-primary">a</span></div>
                        <div class="list-group-body">
                            <p>New listings were added that match your search alert <strong>house for rent</strong></p>
                            <span>Aug 15 08:10pm</span>
                        </div><!-- list-group-body -->
                    </li>
                    <li class="list-group-item">
                        <div class="avatar online"><img src="http://themepixels.me/demo/dashbyte/assets/img/img14.jpg"
                                alt=""></div>
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
                            <p><strong>Dyanne Aceron</strong> reacted to your post <strong>King of the Bed</strong>.</p>
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
                    <div class="avatar avatar-xl online mb-3"><img src="assets/img/img1.jpg" alt=""></div>
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
