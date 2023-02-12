<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/welcome/favicon.png') }}" />

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{ asset('assets/welcome/jquery-ui/jquery-ui.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/welcome/swiper/swiper-bundle.min.css') }}" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/welcome/dist/css/style.css') }}" />

    <title>Work Palace</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/welcome/dist/css/main.css')}}">
</head>

{{-- <body class="antialiased">
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif


    </div>
</body> --}}

<body class="page__joblist">
    <nav class="navbar navbar-expand-xl">
        <div class="container-xxl justify-content-md-start">
            <a class="navbar-brand" href="index.html">
                <img src="assets/logo.svg" alt="" />
            </a>
            <!-- /.navbar-brand -->

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <img src="assets/icons/bars.svg" class="svg-inject svg-icon" alt="" />
            </button>
            <!-- /.navbar-toggler-mobile -->

            <div class="d-none d-md-flex d-xl-none ms-auto">
                <a class="btn btn-alice-blue text-dark fw-semiBold py-12 px-34 me-12 rounded-pill"
                    href="applicationform.html" role="button">Log In</a>
                <a class="btn btn-primary fw-semiBold py-12 px-43 rounded-pill" href="applicationform.html"
                    role="button">Sign Up</a>
            </div>
            <!-- /.btn-login and btn-signup mobile -->

            <div class="collapse navbar-collapse" id="navbarContent">
                <div class="d-grid d-xl-flex align-items-xl-center pb-15 pb-xl-0 w-100 gap-20 gap-xl-0">
                    <ul class="navbar-nav mx-xl-auto order-2 order-xl-1">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html#pricing-section">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="eventlist.html">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="joblist.html">Become a member</a>
                        </li>
                    </ul>
                    <!-- /.navbar-nav -->

                    <form class="order-1 order-xl-2" role="search" action="#" method="get">
                        <div class="form-search">
                            <input class="form-control border border-alice-blue" type="search"
                                placeholder="Search here..." aria-label="Search" />
                        </div>
                    </form>
                    <!-- /.form-search -->

                    <div class="d-grid d-md-none d-xl-flex gap-15 gap-xl-0 order-3">
                        <a class="btn btn-alice-blue text-dark fw-semiBold py-12 px-xl-34 ms-xl-12 rounded-pill"
                            href="applicationform.html" role="button">Log In</a>
                        <a class="btn btn-primary fw-semiBold py-12 px-xl-43 ms-xl-12 rounded-pill"
                            href="applicationform.html" role="button">Sign Up</a>
                    </div>
                    <!-- /.btn-login and btn-sign-up desktop -->
                </div>
            </div>
        </div>
    </nav>
    <!-- = /. Navbar Section = -->

    <main class="main">
        <div class="container-xxl">
            <div class="row">
                <div class="col-12 col-lg-6 my-34 my-lg-80 my-xl-120 my-xxl-180 order-2 order-lg-1">
                    <h1 class="heading-header-1 mb-0">Find your dream jobs through <span
                            class="text-primary">Ziro</span> easily</h1>
                    <!-- /.heading-header -->

                    <form class="ms-auto mt-60" role="search" action="#" method="get">
                        <div class="form-btn-inner shadow-2 rounded-pill">
                            <input class="form-control" type="search" placeholder="Search here..." />
                            <button class="btn btn-primary fw-semiBold py-12 px-20 px-lg-34 flex-nofill shadow-none"
                                type="submit">Search Job</button>
                        </div>
                    </form>
                    <!-- /.search-job-form -->

                    <div class="d-flex flex-wrap justify-content-center justify-content-lg-start mt-34 gap-12">
                        <a href="#" class="btn btn-suggestion fw-medium rounded-pill shadow-none">Web Dev</a>
                        <a href="#" class="btn btn-suggestion fw-medium rounded-pill shadow-none">Mobile Dev</a>
                        <a href="#" class="btn btn-suggestion fw-medium rounded-pill shadow-none">Design</a>
                        <a href="#" class="btn btn-suggestion fw-medium rounded-pill shadow-none">Writing</a>
                        <a href="#"
                            class="d-none d-md-inline-block btn btn-suggestion fw-medium rounded-pill shadow-none">Admin
                            Support</a>
                        <a href="#"
                            class="d-none d-md-inline-block btn btn-suggestion fw-medium rounded-pill shadow-none">Customer
                            Service</a>
                        <a href="#"
                            class="d-none d-md-inline-blockbtn btn-suggestion fw-medium rounded-pill shadow-none">Marketing</a>
                        <a href="#"
                            class="d-none d-md-inline-block btn btn-suggestion fw-medium rounded-pill shadow-none">Accounting</a>
                        <a href="#" class="btn btn-suggestion fw-medium rounded-pill shadow-none">View all
                            categories</a>
                    </div>
                    <!-- /.search-suggestion -->
                </div>
                <!-- /.col -->

                <div class="col-12 col-lg-6 order-1 order-lg-2">
                    <div class="position-relative h-lg-100">
                        <img src="assets/pages/joblist/header/heroImage.png" class="hero-image-img" alt="" />
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
        <!-- = /. Header Section = -->

        <div class="mt-43"></div>
        <!-- = /. Gap Section = -->

        <div class="container-xxl">
            <div class="d-flex flex-column flex-xl-row align-items-xl-center gap-20">
                <h4 class="heading-section-4 text-dark mb-0">Showing 34 Jobs</h4>
                <!-- /.heading-section -->

                <div
                    class="d-flex flex-column flex-md-row align-items-md-center w-100 w-xl-auto ms-auto gap-15 gap-md-34">
                    <div class="d-flex gap-43 py-15 overflow-auto">
                        <div class="d-flex gap-25">
                            <div class="checkbox-type type-1">
                                <input class="checkbox-type-input" type="checkbox" value=""
                                    id="checkFulltime" />
                                <label class="checkbox-type-label" for="checkFulltime">
                                    <div class="checkbox-type-icon">
                                        <img src="assets/icons/check-circle-stroke.svg" class="svg-inject"
                                            alt="" />
                                    </div>
                                    <div class="checkbox-type-text fw-semiBold">Fulltime</div>
                                </label>
                            </div>
                            <!-- /.checkbox-filter -->

                            <div class="checkbox-type type-1">
                                <input class="checkbox-type-input" type="checkbox" value=""
                                    id="checkFreelance" checked />
                                <label class="checkbox-type-label" for="checkFreelance">
                                    <div class="checkbox-type-icon">
                                        <img src="assets/icons/check-circle-stroke.svg" class="svg-inject"
                                            alt="" />
                                    </div>
                                    <div class="checkbox-type-text fw-semiBold">Freelance</div>
                                </label>
                            </div>
                            <!-- /.checkbox-filter -->
                        </div>

                        <div class="d-flex gap-25">
                            <div class="checkbox-switch checkbox-switch-end">
                                <input class="checkbox-switch-input" type="checkbox" role="switch"
                                    id="swicthCheckDetails" />
                                <label class="checkbox-switch-label" for="swicthCheckDetails">
                                    <div class="checkbox-switch"></div>
                                    <div class="checkbox-switch-text fw-semiBold">Details</div>
                                </label>
                            </div>
                            <!-- /.checkbox-swicth-fillter -->

                            <div class="checkbox-switch checkbox-switch-end">
                                <input class="checkbox-switch-input" type="checkbox" role="switch"
                                    id="switchCheckSalary" checked />
                                <label class="checkbox-switch-label" for="switchCheckSalary">
                                    <div class="checkbox-switch"></div>
                                    <div class="checkbox-switch-text fw-semiBold">Salary</div>
                                </label>
                            </div>
                            <!-- /.checkbox-swicth-fillter -->
                        </div>
                    </div>

                    <div class="d-flex gap-15 ms-auto">
                        <button
                            class="btn d-flex align-items-center fw-medium text-dark py-12 px-25 border border-1 border-platinum rounded-pill shadow-none">
                            Newest
                            <img src="assets/icons/chevron-down.svg" class="svg-inject text-primary is-20 ms-15"
                                alt="" />
                        </button>
                        <!-- /.btn-newest -->

                        <button class="btn btn-rounded border border-1 border-platinum shadow-none" role="button">
                            <img src="assets/icons/filter.svg" class="svg-inject svg-icon text-primary"
                                alt="" />
                        </button>
                        <!-- /.btn-filter -->
                    </div>
                </div>
            </div>

            <div class="d-grid mt-60 gap-34">
                <div class="job-card-harizontal">
                    <button
                        class="btn btn-rounded btn-white position-absolute d-xl-none top-100 start-50 p-10 translate-middle"
                        type="button" data-bs-toggle="collapse" data-bs-target="#jobInfoCardCollapse"
                        aria-expanded="false" aria-controls="jobInfoCardCollapse">
                        <img src="assets/icons/chevron-down.svg" class="svg-inject text-primary is-16"
                            alt="" />
                    </button>
                    <div class="job-info">
                        <div class="job-image">
                            <img src="assets/job-logo/job-logo-5.png" alt="" />
                        </div>
                        <div class="job-info-inner">
                            <h5 class="job-title">
                                <a href="jobdetail.html">Senior UX Designer</a>
                            </h5>
                            <div class="job-author">
                                <a href="#">Highspeed Studios</a>
                            </div>
                        </div>
                    </div>
                    <div class="job-info-card-collapse collapse" id="jobInfoCardCollapse">
                        <div class="job-info-card">
                            <div class="info-card">
                                <div class="info-card-icon bg-ufo-green-100 rounded-pill">
                                    <img src="assets/icons/sack-dollar.svg" class="svg-inject svg-icon"
                                        alt="" />
                                </div>
                                <div class="info-card-content">
                                    <h6 class="info-card-title">$14,000 - $25,000</h6>
                                    <div class="info-card-desc">Monthly Salary</div>
                                </div>
                            </div>
                            <div class="info-card">
                                <div class="info-card-icon bg-rajah rounded-pill">
                                    <img src="assets/icons/mark.svg" class="svg-inject svg-icon" alt="" />
                                </div>
                                <div class="info-card-content">
                                    <h6 class="info-card-title">London, England</h6>
                                    <div class="info-card-desc">Location</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="job-action">
                        <a class="btn btn-apply flex-fill flex-md-nofill fw-semiBold py-12 px-43 rounded-pill"
                            href="jobdetail.html">Apply Now</a>
                        <button class="btn btn-rounded btn-book">
                            <img src="assets/icons/heart.svg" class="svg-inject svg-icon is-20" alt="" />
                        </button>
                    </div>
                </div>
                <!-- /.job-card-grid-harizontal-component -->

                <div class="job-card-harizontal">
                    <button
                        class="btn btn-rounded btn-white position-absolute d-xl-none top-100 start-50 p-10 translate-middle"
                        type="button" data-bs-toggle="collapse" data-bs-target="#jobInfoCardCollapse2"
                        aria-expanded="false" aria-controls="jobInfoCardCollapse2">
                        <img src="assets/icons/chevron-down.svg" class="svg-inject text-primary is-16"
                            alt="" />
                    </button>
                    <div class="job-info">
                        <div class="job-image">
                            <img src="assets/job-logo/job-logo-1.png" alt="" />
                        </div>
                        <div class="job-info-inner">
                            <h5 class="job-title">
                                <a href="jobdetail.html">Intern UX Designer</a>
                            </h5>
                            <div class="job-author">
                                <a href="#">Maximoz Team</a>
                            </div>
                        </div>
                    </div>
                    <div class="job-info-card-collapse collapse" id="jobInfoCardCollapse2">
                        <div class="job-info-card">
                            <div class="info-card">
                                <div class="info-card-icon bg-ufo-green-100 rounded-pill">
                                    <img src="assets/icons/sack-dollar.svg" class="svg-inject svg-icon"
                                        alt="" />
                                </div>
                                <div class="info-card-content">
                                    <h6 class="info-card-title">$500 - $1,000</h6>
                                    <div class="info-card-desc">Monthly Salary</div>
                                </div>
                            </div>
                            <div class="info-card">
                                <div class="info-card-icon bg-rajah rounded-pill">
                                    <img src="assets/icons/mark.svg" class="svg-inject svg-icon" alt="" />
                                </div>
                                <div class="info-card-content">
                                    <h6 class="info-card-title">Manchester, England</h6>
                                    <div class="info-card-desc">Location</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="job-action">
                        <a class="btn btn-apply flex-fill flex-md-nofill fw-semiBold py-12 px-43 rounded-pill"
                            href="jobdetail.html">Apply Now</a>
                        <button class="btn btn-rounded btn-book">
                            <img src="assets/icons/heart.svg" class="svg-inject svg-icon is-20" alt="" />
                        </button>
                    </div>
                </div>
                <!-- /.job-card-grid-harizontal-component -->

                <div class="job-card-harizontal">
                    <button
                        class="btn btn-rounded btn-white position-absolute d-xl-none top-100 start-50 p-10 translate-middle"
                        type="button" data-bs-toggle="collapse" data-bs-target="#jobInfoCardCollapse3"
                        aria-expanded="false" aria-controls="jobInfoCardCollapse3">
                        <img src="assets/icons/chevron-down.svg" class="svg-inject text-primary is-16"
                            alt="" />
                    </button>
                    <div class="job-info">
                        <div class="job-image">
                            <img src="assets/job-logo/job-logo-6.png" alt="" />
                        </div>
                        <div class="job-info-inner">
                            <h5 class="job-title">
                                <a href="jobdetail.html">Junior UX Designer</a>
                            </h5>
                            <div class="job-author">
                                <a href="#">Vvibu Leu Boz Studios</a>
                            </div>
                        </div>
                    </div>
                    <div class="job-info-card-collapse collapse" id="jobInfoCardCollapse3">
                        <div class="job-info-card">
                            <div class="info-card">
                                <div class="info-card-icon bg-ufo-green-100 rounded-pill">
                                    <img src="assets/icons/sack-dollar.svg" class="svg-inject svg-icon"
                                        alt="" />
                                </div>
                                <div class="info-card-content">
                                    <h6 class="info-card-title">$8,000 - $12,000</h6>
                                    <div class="info-card-desc">Monthly Salary</div>
                                </div>
                            </div>
                            <div class="info-card">
                                <div class="info-card-icon bg-rajah rounded-pill">
                                    <img src="assets/icons/mark.svg" class="svg-inject svg-icon" alt="" />
                                </div>
                                <div class="info-card-content">
                                    <h6 class="info-card-title">Oxford, England</h6>
                                    <div class="info-card-desc">Location</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="job-action">
                        <a class="btn btn-apply flex-fill flex-md-nofill fw-semiBold py-12 px-43 rounded-pill"
                            href="jobdetail.html">Apply Now</a>
                        <button class="btn btn-rounded btn-book">
                            <img src="assets/icons/heart.svg" class="svg-inject svg-icon is-20" alt="" />
                        </button>
                    </div>
                </div>
                <!-- /.job-card-grid-harizontal-component -->

                <div class="job-card-harizontal">
                    <button
                        class="btn btn-rounded btn-white position-absolute d-xl-none top-100 start-50 p-10 translate-middle"
                        type="button" data-bs-toggle="collapse" data-bs-target="#jobInfoCardCollapse4"
                        aria-expanded="false" aria-controls="jobInfoCardCollapse4">
                        <img src="assets/icons/chevron-down.svg" class="svg-inject text-primary is-16"
                            alt="" />
                    </button>
                    <div class="job-info">
                        <div class="job-image">
                            <img src="assets/job-logo/job-logo-7.png" alt="" />
                        </div>
                        <div class="job-info-inner">
                            <h5 class="job-title">
                                <a href="jobdetail.html">Principal UX Designer</a>
                            </h5>
                            <div class="job-author">
                                <a href="#">Lowvoltages Team</a>
                            </div>
                        </div>
                    </div>
                    <div class="job-info-card-collapse collapse" id="jobInfoCardCollapse4">
                        <div class="job-info-card">
                            <div class="info-card">
                                <div class="info-card-icon bg-ufo-green-100 rounded-pill">
                                    <img src="assets/icons/sack-dollar.svg" class="svg-inject svg-icon"
                                        alt="" />
                                </div>
                                <div class="info-card-content">
                                    <h6 class="info-card-title">$11,000 - $60,000</h6>
                                    <div class="info-card-desc">Monthly Salary</div>
                                </div>
                            </div>
                            <div class="info-card">
                                <div class="info-card-icon bg-rajah rounded-pill">
                                    <img src="assets/icons/mark.svg" class="svg-inject svg-icon" alt="" />
                                </div>
                                <div class="info-card-content">
                                    <h6 class="info-card-title">London, England</h6>
                                    <div class="info-card-desc">Location</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="job-action">
                        <a class="btn btn-apply flex-fill flex-md-nofill fw-semiBold py-12 px-43 rounded-pill"
                            href="jobdetail.html">Apply Now</a>
                        <button class="btn btn-rounded btn-book">
                            <img src="assets/icons/heart.svg" class="svg-inject svg-icon is-20" alt="" />
                        </button>
                    </div>
                </div>
                <!-- /.job-card-grid-harizontal-component -->

                <div class="job-card-harizontal">
                    <button
                        class="btn btn-rounded btn-white position-absolute d-xl-none top-100 start-50 p-10 translate-middle"
                        type="button" data-bs-toggle="collapse" data-bs-target="#jobInfoCardCollapse5"
                        aria-expanded="false" aria-controls="jobInfoCardCollapse5">
                        <img src="assets/icons/chevron-down.svg" class="svg-inject text-primary is-16"
                            alt="" />
                    </button>
                    <div class="job-info">
                        <div class="job-image">
                            <img src="assets/job-logo/job-logo-8.png" alt="" />
                        </div>
                        <div class="job-info-inner">
                            <h5 class="job-title">
                                <a href="jobdetail.html">Senior UX Designer</a>
                            </h5>
                            <div class="job-author">
                                <a href="#">Highspeed Studios</a>
                            </div>
                        </div>
                    </div>
                    <div class="job-info-card-collapse collapse" id="jobInfoCardCollapse5">
                        <div class="job-info-card">
                            <div class="info-card">
                                <div class="info-card-icon bg-ufo-green-100 rounded-pill">
                                    <img src="assets/icons/sack-dollar.svg" class="svg-inject svg-icon"
                                        alt="" />
                                </div>
                                <div class="info-card-content">
                                    <h6 class="info-card-title">$500 - $1,000</h6>
                                    <div class="info-card-desc">Monthly Salary</div>
                                </div>
                            </div>
                            <div class="info-card">
                                <div class="info-card-icon bg-rajah rounded-pill">
                                    <img src="assets/icons/mark.svg" class="svg-inject svg-icon" alt="" />
                                </div>
                                <div class="info-card-content">
                                    <h6 class="info-card-title">London, England</h6>
                                    <div class="info-card-desc">Location</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="job-action">
                        <a class="btn btn-apply flex-fill flex-md-nofill fw-semiBold py-12 px-43 rounded-pill"
                            href="jobdetail.html">Apply Now</a>
                        <button class="btn btn-rounded btn-book">
                            <img src="assets/icons/heart.svg" class="svg-inject svg-icon is-20" alt="" />
                        </button>
                    </div>
                </div>
                <!-- /.job-card-grid-harizontal-component -->

                <div class="job-card-harizontal">
                    <button
                        class="btn btn-rounded btn-white position-absolute d-xl-none top-100 start-50 p-10 translate-middle"
                        type="button" data-bs-toggle="collapse" data-bs-target="#jobInfoCardCollapse6"
                        aria-expanded="false" aria-controls="jobInfoCardCollapse6">
                        <img src="assets/icons/chevron-down.svg" class="svg-inject text-primary is-16"
                            alt="" />
                    </button>
                    <div class="job-info">
                        <div class="job-image">
                            <img src="assets/job-logo/job-logo-9.png" alt="" />
                        </div>
                        <div class="job-info-inner">
                            <h5 class="job-title">
                                <a href="jobdetail.html">Principal UX Designer</a>
                            </h5>
                            <div class="job-author">
                                <a href="#">Lowvoltages Team</a>
                            </div>
                        </div>
                    </div>
                    <div class="job-info-card-collapse collapse" id="jobInfoCardCollapse6">
                        <div class="job-info-card">
                            <div class="info-card">
                                <div class="info-card-icon bg-ufo-green-100 rounded-pill">
                                    <img src="assets/icons/sack-dollar.svg" class="svg-inject svg-icon"
                                        alt="" />
                                </div>
                                <div class="info-card-content">
                                    <h6 class="info-card-title">$11,000 - $60,000</h6>
                                    <div class="info-card-desc">Monthly Salary</div>
                                </div>
                            </div>
                            <div class="info-card">
                                <div class="info-card-icon bg-rajah rounded-pill">
                                    <img src="assets/icons/mark.svg" class="svg-inject svg-icon" alt="" />
                                </div>
                                <div class="info-card-content">
                                    <h6 class="info-card-title">London, England</h6>
                                    <div class="info-card-desc">Location</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="job-action">
                        <a class="btn btn-apply flex-fill flex-md-nofill fw-semiBold py-12 px-43 rounded-pill"
                            href="jobdetail.html">Apply Now</a>
                        <button class="btn btn-rounded btn-book">
                            <img src="assets/icons/heart.svg" class="svg-inject svg-icon is-20" alt="" />
                        </button>
                    </div>
                </div>
                <!-- /.job-card-grid-harizontal-component -->

                <div class="job-card-harizontal">
                    <button
                        class="btn btn-rounded btn-white position-absolute d-xl-none top-100 start-50 p-10 translate-middle"
                        type="button" data-bs-toggle="collapse" data-bs-target="#jobInfoCardCollapse7"
                        aria-expanded="false" aria-controls="jobInfoCardCollapse7">
                        <img src="assets/icons/chevron-down.svg" class="svg-inject text-primary is-16"
                            alt="" />
                    </button>
                    <div class="job-info">
                        <div class="job-image">
                            <img src="assets/job-logo/job-logo-10.png" alt="" />
                        </div>
                        <div class="job-info-inner">
                            <h5 class="job-title">
                                <a href="jobdetail.html">Senior UX Designer</a>
                            </h5>
                            <div class="job-author">
                                <a href="#">Highspeed Studios</a>
                            </div>
                        </div>
                    </div>
                    <div class="job-info-card-collapse collapse" id="jobInfoCardCollapse7">
                        <div class="job-info-card">
                            <div class="info-card">
                                <div class="info-card-icon bg-ufo-green-100 rounded-pill">
                                    <img src="assets/icons/sack-dollar.svg" class="svg-inject svg-icon"
                                        alt="" />
                                </div>
                                <div class="info-card-content">
                                    <h6 class="info-card-title">$500 - $1,000</h6>
                                    <div class="info-card-desc">Monthly Salary</div>
                                </div>
                            </div>
                            <div class="info-card">
                                <div class="info-card-icon bg-rajah rounded-pill">
                                    <img src="assets/icons/mark.svg" class="svg-inject svg-icon" alt="" />
                                </div>
                                <div class="info-card-content">
                                    <h6 class="info-card-title">London, England</h6>
                                    <div class="info-card-desc">Location</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="job-action">
                        <a class="btn btn-apply flex-fill flex-md-nofill fw-semiBold py-12 px-43 rounded-pill"
                            href="jobdetail.html">Apply Now</a>
                        <button class="btn btn-rounded btn-book">
                            <img src="assets/icons/heart.svg" class="svg-inject svg-icon is-20" alt="" />
                        </button>
                    </div>
                </div>
                <!-- /.job-card-grid-harizontal-component -->

                <div class="job-card-harizontal">
                    <button
                        class="btn btn-rounded btn-white position-absolute d-xl-none top-100 start-50 p-10 translate-middle"
                        type="button" data-bs-toggle="collapse" data-bs-target="#jobInfoCardCollapse8"
                        aria-expanded="false" aria-controls="jobInfoCardCollapse8">
                        <img src="assets/icons/chevron-down.svg" class="svg-inject text-primary is-16"
                            alt="" />
                    </button>
                    <div class="job-info">
                        <div class="job-image">
                            <img src="assets/job-logo/job-logo-11.png" alt="" />
                        </div>
                        <div class="job-info-inner">
                            <h5 class="job-title">
                                <a href="jobdetail.html">Principal UX Designer</a>
                            </h5>
                            <div class="job-author">
                                <a href="#">Lowvoltages Team</a>
                            </div>
                        </div>
                    </div>
                    <div class="job-info-card-collapse collapse" id="jobInfoCardCollapse8">
                        <div class="job-info-card">
                            <div class="info-card">
                                <div class="info-card-icon bg-ufo-green-100 rounded-pill">
                                    <img src="assets/icons/sack-dollar.svg" class="svg-inject svg-icon"
                                        alt="" />
                                </div>
                                <div class="info-card-content">
                                    <h6 class="info-card-title">$11,000 - $60,000</h6>
                                    <div class="info-card-desc">Monthly Salary</div>
                                </div>
                            </div>
                            <div class="info-card">
                                <div class="info-card-icon bg-rajah rounded-pill">
                                    <img src="assets/icons/mark.svg" class="svg-inject svg-icon" alt="" />
                                </div>
                                <div class="info-card-content">
                                    <h6 class="info-card-title">London, England</h6>
                                    <div class="info-card-desc">Location</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="job-action">
                        <a class="btn btn-apply flex-fill flex-md-nofill fw-semiBold py-12 px-43 rounded-pill"
                            href="jobdetail.html">Apply Now</a>
                        <button class="btn btn-rounded btn-book">
                            <img src="assets/icons/heart.svg" class="svg-inject svg-icon is-20" alt="" />
                        </button>
                    </div>
                </div>
                <!-- /.job-card-grid-harizontal-component -->

                <div class="job-card-harizontal">
                    <button
                        class="btn btn-rounded btn-white position-absolute d-xl-none top-100 start-50 p-10 translate-middle"
                        type="button" data-bs-toggle="collapse" data-bs-target="#jobInfoCardCollapse9"
                        aria-expanded="false" aria-controls="jobInfoCardCollapse9">
                        <img src="assets/icons/chevron-down.svg" class="svg-inject text-primary is-16"
                            alt="" />
                    </button>
                    <div class="job-info">
                        <div class="job-image">
                            <img src="assets/job-logo/job-logo-12.png" alt="" />
                        </div>
                        <div class="job-info-inner">
                            <h5 class="job-title">
                                <a href="jobdetail.html">Senior UX Designer</a>
                            </h5>
                            <div class="job-author">
                                <a href="#">Highspeed Studios</a>
                            </div>
                        </div>
                    </div>
                    <div class="job-info-card-collapse collapse" id="jobInfoCardCollapse9">
                        <div class="job-info-card">
                            <div class="info-card">
                                <div class="info-card-icon bg-ufo-green-100 rounded-pill">
                                    <img src="assets/icons/sack-dollar.svg" class="svg-inject svg-icon"
                                        alt="" />
                                </div>
                                <div class="info-card-content">
                                    <h6 class="info-card-title">$500 - $1,000</h6>
                                    <div class="info-card-desc">Monthly Salary</div>
                                </div>
                            </div>
                            <div class="info-card">
                                <div class="info-card-icon bg-rajah rounded-pill">
                                    <img src="assets/icons/mark.svg" class="svg-inject svg-icon" alt="" />
                                </div>
                                <div class="info-card-content">
                                    <h6 class="info-card-title">London, England</h6>
                                    <div class="info-card-desc">Location</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="job-action">
                        <a class="btn btn-apply flex-fill flex-md-nofill fw-semiBold py-12 px-43 rounded-pill"
                            href="jobdetail.html">Apply Now</a>
                        <button class="btn btn-rounded btn-book">
                            <img src="assets/icons/heart.svg" class="svg-inject svg-icon is-20" alt="" />
                        </button>
                    </div>
                </div>
                <!-- /.job-card-grid-harizontal-component -->
            </div>
            <!-- /.job-list -->

            <div class="d-flex justify-content-center mt-60">
                <nav class="pagination-container" aria-label="Page navigation example">
                    <a href="#" class="page-link previous">
                        <img src="assets/icons/angles-left.svg" class="svg-inject" alt="" />
                        Previous
                    </a>
                    <ul class="pagination bg-lavender-web-100">
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item active"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                    </ul>
                    <a href="#" class="page-link next">
                        Next
                        <img src="assets/icons/angles-right.svg" class="svg-inject" alt="" />
                    </a>
                </nav>
            </div>
            <!-- /.job-list-pagination -->
        </div>
        <!-- /.container -->
        <!-- = /. Job List Section = -->

        <div class="mt-80"></div>
        <!-- = /. Gap Section = -->

        <div class="border-top border-alice-blue"></div>
        <!-- = /. Gap Border Section = -->

        <div class="mt-80"></div>
        <!-- = /. Gap Section = -->

        <div class="container-xxl py-60">
            <div class="d-flex flex-column flex-md-row align-items-md-center gap-20">
                <h4 class="heading-section-4 text-dark mb-0">Upcoming Events</h4>
                <!-- /.heading-section -->

                <div
                    class="d-flex align-items-center justify-content-between justify-content-md-start ms-md-auto gap-15">
                    <button
                        class="btn d-flex align-items-center fw-medium text-dark py-12 px-25 border border-1 border-platinum rounded-pill shadow-none">
                        <img src="assets/icons/calendar.svg" class="svg-inject text-primary is-20 me-15"
                            alt="" />
                        Filter Date
                        <img src="assets/icons/chevron-down.svg" class="svg-inject text-primary is-20 ms-15"
                            alt="" />
                    </button>
                    <!-- /.btn-filter-date -->

                    <button
                        class="btn d-flex align-items-center fw-medium text-dark py-12 px-25 border border-1 border-platinum rounded-pill shadow-none">
                        Newest
                        <img src="assets/icons/chevron-down.svg" class="svg-inject text-primary is-20 ms-15"
                            alt="" />
                    </button>
                    <!-- /.btn-newest -->
                </div>
            </div>

            <div class="row mt-60">
                <div class="col-12 col-md-6 col-xl-4 my-15">
                    <div class="event-card complete">
                        <div class="event-thumb">
                            <img src="assets/event-thumb/event-thumb-1.png" alt="event-1" />
                        </div>
                        <div class="event-content">
                            <div class="event-content-header">
                                <div class="event-content-date-book">
                                    <div class="event-date">
                                        20
                                        <span>NOV</span>
                                    </div>
                                    <button class="btn btn-event-book" type="button">
                                        <img src="assets/icons/check-circle-stroke-full.svg" class="svg-inject"
                                            alt="" />
                                    </button>
                                </div>
                                <div class="event-content-info">
                                    <div class="event-categories">
                                        <a class="event-categories-link" href="#">Mobile App</a>
                                    </div>
                                    <h2 class="event-title">
                                        <a class="event-title-link" href="#">Global Android Programmer Meetup
                                            2020</a>
                                    </h2>
                                </div>
                            </div>
                            <div class="event-content-footer">
                                <div class="event-summary">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.event-card-grid-component -->
                </div>
                <!-- /.col -->

                <div class="col-12 col-md-6 col-xl-4 my-15">
                    <div class="event-card">
                        <div class="event-thumb">
                            <img src="assets/event-thumb/event-thumb-2.png" alt="event-2" />
                        </div>
                        <div class="event-content">
                            <div class="event-content-header">
                                <div class="event-content-date-book">
                                    <div class="event-date">
                                        15
                                        <span>NOV</span>
                                    </div>
                                    <button class="btn btn-event-book" type="button">
                                        <img src="assets/icons/heart.svg" class="svg-inject" alt="" />
                                    </button>
                                </div>
                                <div class="event-content-info">
                                    <div class="event-categories">
                                        <a class="event-categories-link" href="#">ART EXIBITHION</a>
                                    </div>
                                    <h2 class="event-title">
                                        <a class="event-title-link" href="#">Paris Designer Meetup with Ziro
                                            Partner</a>
                                    </h2>
                                </div>
                            </div>
                            <div class="event-content-footer">
                                <div class="event-summary">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.event-card-grid-component -->
                </div>
                <!-- /.col -->

                <div class="col-12 col-md-6 col-xl-4 my-15">
                    <div class="event-card">
                        <div class="event-thumb">
                            <img src="assets/event-thumb/event-thumb-3.png" alt="event-3" />
                        </div>
                        <div class="event-content">
                            <div class="event-content-header">
                                <div class="event-content-date-book">
                                    <div class="event-date">
                                        07
                                        <span>NOV</span>
                                    </div>
                                    <button class="btn btn-event-book" type="button">
                                        <img src="assets/icons/heart.svg" class="svg-inject" alt="" />
                                    </button>
                                </div>
                                <div class="event-content-info">
                                    <div class="event-categories">
                                        <a class="event-categories-link" href="#">Accounting</a>
                                    </div>
                                    <h2 class="event-title">
                                        <a class="event-title-link" href="#">Bussiness Plan in Pandemic with
                                            Famous Native Speaker</a>
                                    </h2>
                                </div>
                            </div>
                            <div class="event-content-footer">
                                <div class="event-summary">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.event-card-grid-component -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row
                 -->
            <div class="d-flex">
                <a class="btn btn-primary fw-semiBold py-12 px-43 mt-60 mx-auto rounded-pill" href="eventlist.html"
                    role="button">View more</a>\
                <!-- /.btn-view-more -->
            </div>
        </div>
        <!-- = /. Upcoming Events Section = -->

        <div class="mt-43"></div>
        <!-- = /. Gap Section = -->

        <div class="container py-60 py-lg-100">
            <div class="swiper image-slider client-logo-slider mx-xl-34 mx-xxl-80">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="assets/client-logo/client-logo-1.png" alt="" />
                    </div>

                    <div class="swiper-slide">
                        <img src="assets/client-logo/client-logo-2.png" alt="" />
                    </div>

                    <div class="swiper-slide">
                        <img src="assets/client-logo/client-logo-3.png" alt="" />
                    </div>

                    <div class="swiper-slide">
                        <img src="assets/client-logo/client-logo-4.png" alt="" />
                    </div>

                    <div class="swiper-slide">
                        <img src="assets/client-logo/client-logo-5.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
        <!-- = /. Logo Client Section = -->
    </main>
    <!-- = /. Main Section = -->

    <footer class="footer bg-black">
        <div class="container-xxl">
            <div class="row py-25 py-lg-43 py-xl-80 align-items-md-center">
                <div class="col-12 col-md-6">
                    <h2 class="heading-section-2 text-white mb-0">Don't miss our weekly updates about freelancer career
                    </h2>
                    <!-- /.newsletter-heading -->
                </div>
                <!-- /.col -->

                <div class="col-12 col-md-6 col-lg-5 offset-lg-1 mt-25 mt-md-0">
                    <form class="ms-auto" action="#">
                        <div class="form-btn-inner form-newsletter rounded-pill">
                            <input class="form-control" type="email" placeholder="Enter your email address..." />
                            <button
                                class="btn btn-accent text-white text-uppercase fw-semiBold py-12 px-20 px-lg-34 shadow-none"
                                type="submit">Subscribe</button>
                        </div>
                    </form>
                    <!-- /.newsletter-form -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row py-20 py-xl-80">
                <div class="col-12 col-xl-4 footer-widget about">
                    <div class="footer-brand">
                        <img src="assets/logo-footer.svg" alt="logo" />
                    </div>
                    <p class="footer-description mt-34">Ziro is a Freelance Landing Website lorem ipsum dolor sit amet,
                        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud</p>
                    <ul class="social-btn-group mt-34">
                        <li class="social-item">
                            <a class="social-link" href="#">
                                <img src="assets/icons/facebook-f.svg" class="svg-inject svg-icon" alt="" />
                            </a>
                        </li>
                        <li class="social-item">
                            <a class="social-link" href="#">
                                <img src="assets/icons/twitter.svg" class="svg-inject svg-icon" alt="" />
                            </a>
                        </li>
                        <li class="social-item">
                            <a class="social-link" href="#">
                                <img src="assets/icons/youtube.svg" class="svg-inject svg-icon" alt="" />
                            </a>
                        </li>
                        <li class="social-item">
                            <a class="social-link" href="#">
                                <img src="assets/icons/linkedin.svg" class="svg-inject svg-icon" alt="" />
                            </a>
                        </li>
                        <li class="social-item">
                            <a class="social-link" href="#">
                                <img src="assets/icons/instagram.svg" class="svg-inject svg-icon" alt="" />
                            </a>
                        </li>
                    </ul>
                    <!-- /.social-btn-component -->
                </div>
                <!-- /.col -->

                <div class="col-12 col-lg-4 col-xl footer-widget link-list mt-34 mt-xl-0">
                    <h6 class="footer-title">Ziro</h6>
                    <ul class="footer-link-list">
                        <li class="link-item">
                            <a class="link" href="#">Why Ziro</a>
                        </li>
                        <li class="link-item">
                            <a class="link" href="#">Enterprise</a>
                        </li>
                        <li class="link-item">
                            <a class="link" href="#">Customer Story</a>
                        </li>
                        <li class="link-item">
                            <a class="link" href="#">Security</a>
                        </li>
                        <li class="link-item">
                            <a class="link" href="#">Pricing</a>
                        </li>
                    </ul>
                </div>
                <!-- /.col -->

                <div class="col-12 col-lg-4 col-xl footer-widget link-list mt-34 mt-xl-0">
                    <h6 class="footer-title">Resources</h6>
                    <ul class="footer-link-list">
                        <li class="link-item">
                            <a class="link" href="#">Download</a>
                        </li>
                        <li class="link-item">
                            <a class="link" href="#">Help Center</a>
                        </li>
                        <li class="link-item">
                            <a class="link" href="#">Events</a>
                        </li>
                        <li class="link-item">
                            <a class="link" href="#">Guides</a>
                        </li>
                        <li class="link-item">
                            <a class="link" href="#">Partner</a>
                        </li>
                        <li class="link-item">
                            <a class="link" href="#">Directories</a>
                        </li>
                    </ul>
                </div>
                <!-- /.col -->

                <div class="col-12 col-lg-4 col-xl footer-widget link-list mt-34 mt-xl-0">
                    <h6 class="footer-title">Company</h6>
                    <ul class="footer-link-list">
                        <li class="link-item">
                            <a class="link" href="#">About us</a>
                        </li>
                        <li class="link-item">
                            <a class="link" href="#">Contact us</a>
                        </li>
                        <li class="link-item">
                            <a class="link" href="#">Products</a>
                        </li>
                        <li class="link-item">
                            <a class="link" href="#">Login</a>
                        </li>
                        <li class="link-item">
                            <a class="link" href="#">Sign Up</a>
                        </li>
                        <li class="link-item">
                            <a class="link" href="#">FAQ</a>
                        </li>
                    </ul>
                </div>
                <!-- /.col -->

                <div class="col-12 col-xl-3 footer-widget link-list _icon mt-34 mt-xl-0">
                    <h6 class="footer-title">Get in Touch with Us</h6>
                    <ul class="footer-link-list _icon">
                        <li class="link-item">
                            <img src="assets/icons/mark-stroke.svg" class="svg-inject svg-icon" alt="" />
                            <a class="link" href="#">
                                <span>832 Thompson Drive, San Fransisco CA 94107, United States</span>
                            </a>
                        </li>
                        <li class="link-item">
                            <img src="assets/icons/phone-stroke.svg" class="svg-inject svg-icon" alt="" />
                            <a class="link" href="#">
                                <span>+123 345123 556</span>
                            </a>
                        </li>
                        <li class="link-item">
                            <img src="assets/icons/envelope-stroke.svg" class="svg-inject svg-icon" alt="" />
                            <a class="link" href="#">
                                <span>support@ziro.id</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->

        <div class="border border-arsenic border-end-0 border-bottom-0 border-start-0">
            <div class="container-xxl d-grid d-lg-flex gap-12 gap-xl-0 justify-content-lg-between py-25">
                <div class="fs-14 text-white text-center">Ziro Freelancer Landing Website - © 2020 All Rights Reserved
                </div>

                <div class="fs-14 text-white text-center">Made with ♥ by Peterdraw</div>
            </div>
        </div>
    </footer>
    <!-- = /. Footer Section = -->

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/welcome/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Vendors -->
    <script src="{{ asset('assets/welcome/vendors/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/welcome/vendors/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/welcome/vendors/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/welcome/vendors/fslightbox/fslightbox.js') }}"></script>
    <script src="{{ asset('assets/welcome/vendors/svg-inject/dist/svg-inject.min.js') }}"></script>

    <!-- Template Function -->
    <script src="{{ asset('assets/welcome/dist/js/theme.js') }}"></script>
</body>

</html>
