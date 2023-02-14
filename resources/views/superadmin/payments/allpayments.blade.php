@extends('layouts.main');
@section('title', 'All-Payments')
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
                            <th>Task_id</th>
                            <th>Title</th>
                            <th>Amount Paid</th>
                            <th>Date Paid</th>
                            <th>Amount Pending</th>
                        </thead>
                        <tbody>
                            <div class="product-wrapper">
                                {{-- @foreach ($payments as $key => $payment)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $payment->task_id }}</td>
                                        <td>{{ $payment->amount_paid }}</td>
                                        <td>{{ $payment->date_of_payment }}</td>
                                        <td>{{ $payment->amount_pending}}</td>
                                    </tr>
                                @endforeach --}}
                            </div>

                        </tbody>
                    </table>

                </div><!-- card-body -->
            </div><!-- card -->
        </div><!-- col -->

    </div>

@endsection
