@extends('layouts.main');
@section('title', 'All-My-Jobs')
@section('content')

    <div>
        <div class="col-xl-12">
            <div class="card card-one">
                <div class="card-header">
                    <h6 class="card-title">All My Jobs</h6>
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <nav class="nav nav-icon nav-icon-sm ms-auto">
                        <a href="#" class="nav-link"><i class="ri-refresh-line"></i></a>
                        <a href="#" class="nav-link"><i class="ri-more-2-fill"></i></a>
                    </nav>
                </div><!-- card-header -->
                <div class="card-body p-3">

                    <table class="table">
                        <thead>
                            <th>id</th>
                            <th>Headline</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <div class="product-wrapper">
                                @foreach ($jobs as $key => $job)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $job->headline }}</td>
                                        <td>{{ $job->title }}</td>
                                        <td>{{ $job->status }}</td>
                                        <td>
                                            <a href="{{ route('user.single-job',$job->id) }}"><button class="btn btn-sm btn-primary">Edit</button></a>
                                            <a href="{{ route('user.delete-single-job',$job->id) }}"><button class="btn btn-sm btn-danger">Delete</button></a>                                           
                                            
                                        </td>
                                    </tr>
                                @endforeach
                            </div>

                        </tbody>
                    </table>

                </div><!-- card-body -->
            </div><!-- card -->
        </div><!-- col -->

    </div>

@endsection
