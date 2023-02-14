@extends('layouts.main')
@section('title', 'Employer Dashboard')
@section('content')
    <div class="row g-3">
        <div class="col-xl-5">
            <div class="row g-3">
                <div class="col-6 col-md-3 col-xl-6">
                    <div class="card card-one card-product">
                        <div class="card-body p-3">

                            <h2 class="card-value ls--1"><span></span>14</h2>
                            <label class="card-label fw-medium text-dark">Posted Tasks</label>

                        </div><!-- card-body -->
                    </div><!-- card -->
                </div><!-- col -->
                <div class="col-6 col-md-3 col-xl-6">
                    <div class="card card-one card-product">
                        <div class="card-body p-3">

                            <h2 class="card-value ls--1"><span></span>8</h2>
                            <label class="card-label fw-medium text-dark">Completed Tasks</label>

                        </div><!-- card-body -->
                    </div><!-- card -->
                </div><!-- col -->
                <div class="col-6 col-md-3 col-xl-6">
                    <div class="card card-one card-product">
                        <div class="card-body p-3">

                            <h2 class="card-value ls--1">2</h2>
                            <label class="card-label fw-medium text-dark"> Tasks In Progress</label>

                        </div><!-- card-body -->
                    </div><!-- card -->
                </div><!-- col -->
                <div class="col-6 col-md-3 col-xl-6">
                    <div class="card card-one card-product">
                        <div class="card-body p-3">

                            <h2 class="card-value ls--1">18</h2>
                            <label class="card-label fw-medium text-dark">Draft Tasks</label>

                        </div><!-- card-body -->
                    </div><!-- card -->
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- col -->
        <div class="col-xl-7">
            <div class="card card-one card-product-inventory">
                <div class="card-header">
                    <h6 class="card-title">My Tasks</h6>

                </div><!-- card-header -->

            </div><!-- card -->
        </div><!-- col -->
        <div class="col-xl-12">
            <div class="card card-one">
                <div class="card-header">
                    <h6 class="card-title">Draft Jobs</h6>

                </div><!-- card-header -->
                <div class="card-body p-3">

                    <div class="product-wrapper">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="product-thumb"><img
                                                src="http://themepixels.me/demo/dashbyte/assets/img/prod4.jpg"
                                                alt=""></div>
                                    </td>
                                    <td>
                                        <h6 class="mb-1"><a href="#">Macbook Air M2 Chip</a></h6>
                                        <span class="fs-sm text-secondary">16GB Ram 512GB SSD Storage</span>
                                    </td>
                                    <td>
                                        <label class="d-block text-secondary fs-sm mb-1">Price</label>
                                        <span class="d-block fw-medium text-dark ff-numerals">$1,910.00</span>
                                    </td>
                                    <td>
                                        <label class="d-block text-secondary fs-sm mb-1">Available</label>
                                        <span class="d-block fw-medium text-dark ff-numerals">100</span>
                                    </td>
                                    <td>
                                        <label class="d-block text-secondary fs-sm mb-1">Sold</label>
                                        <span class="d-block fw-medium text-dark ff-numerals">50</span>
                                    </td>
                                    <td>
                                        <label class="d-block text-secondary fs-sm mb-1">Sales</label>
                                        <span class="d-block fw-medium text-dark ff-numerals">$95,500.00</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div><!-- product-wrapper -->
                </div><!-- card-body -->
            </div><!-- card -->
        </div><!-- col -->



        <!--- col -->
        <div class="col-xl-6">
            <div class="card card-one">
                <div class="card-header">
                    <h6 class="card-title">Recently Completed</h6>
                    <nav class="nav nav-icon nav-icon-sm ms-auto">
                        <a href="#" class="nav-link"><i class="ri-refresh-line"></i></a>
                        <a href="#" class="nav-link"><i class="ri-more-2-fill"></i></a>
                    </nav>
                </div><!-- card-header -->
                <div class="card-body p-3">
                    <div class="row g-3">
                        <div class="col-sm-5 col-md-4 col-xl-5 col-xxl-4">
                            <div class="h-100 border rounded px-2 bg-white"><img
                                    src="http://themepixels.me/demo/dashbyte/assets/img/prod5.jpg" class="img-fluid"
                                    alt=""></div>
                        </div><!-- col -->
                        <div class="col-sm-7 col-md-8 col-xl-7 col-xxl d-flex flex-column">
                            <h6 class="fs-15 fw-semibold text-dark mb-1">Nike Sneakers</h6>
                            <p class="text-secondary mb-3">Court Vision Low Next Nature Shoes</p>
                            <ul class="list-unstyled">
                                <li>- Best for lifestyle</li>
                                <li>- Polyurethane upper</li>
                                <li>- Vulcanized construction</li>
                                <li>- Textile inner</li>
                                <li>- <a href="#">See more</a></li>
                            </ul>
                            <div class="d-flex align-items-center justify-content-between mt-auto">
                                <h6 class="card-value fw-semibold fs-15 mb-0"><span>$</span>120.50</h6>
                                <div class="d-flex gap-1 text-primary fs-14">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-line"></i>
                                </div>
                            </div>
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- card-body -->
            </div><!-- card -->
        </div>
        <!--- col -->
        <div class="col-xl-6">
            <div class="card card-one">
                <div class="card-header">
                    <h6 class="card-title">Recently Assigned</h6>
                    <nav class="nav nav-icon nav-icon-sm ms-auto">
                        <a href="#" class="nav-link"><i class="ri-refresh-line"></i></a>
                        <a href="#" class="nav-link"><i class="ri-more-2-fill"></i></a>
                    </nav>
                </div><!-- card-header -->
                <div class="card-body p-3">
                    <div class="row g-3">
                        <div class="col-sm-4 col-md-3 col-xl-4">
                            <div class="avatar avatar-xl mb-2"><span class="avatar-initial bg-gray-700">s</span></div>
                            <h6 class="fw-semibold text-dark mb-1">Reyna R. Labares</h6>
                            <p class="fs-xs text-secondary mb-1">Dec 20, 2023 8:45am</p>
                            <div class="d-flex gap-1 text-primary fs-16">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                        </div><!-- col -->
                        <div class="col-sm-8 col-md-9 col-xl-8 d-flex flex-column">
                            <h6 class="fw-semibold text-dark lh-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do
                                eiusmod</h6>
                            <p class="text-secondary">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                nisi ut
                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                                esse cillum
                                <span class="d-xl-none d-xxl-inline">dolore eu fugiat nulla pariatur</span>...
                            </p>
                            <div class="product-review-footer mt-auto">
                                <a href="#"><i class="ri-thumb-up-line"></i></a>
                                <a href="#"><i class="ri-thumb-down-line"></i></a>
                                <a href="#">Report Review</a>
                            </div><!-- product-review-footer -->
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- card-body -->
            </div><!-- card -->
        </div>
        <!--- col -->
    </div><!-- row -->
@endsection
