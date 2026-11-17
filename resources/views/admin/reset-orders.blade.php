@extends('admin.layout.master')

@section('title', 'Set Single Continous')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Select Orders</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Reset Orders</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-2">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Select Exactly Three Orders</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('save_selected_orders', $user->id) }}" method="POST">
                            @csrf

                            <!-- Textbox for showing order count -->
                            <div class="form-group">
                                <label>After Order Number:</label>
                                <input type="text" name="order_after" class="form-control" placeholder="Enter order number after which these orders will be received" required>
                            </div>

                            <!-- Submit Button -->
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Save Selected Orders</button>
                            </div>
                            <!-- Table for selecting orders -->
                            <div class="form-group">
                                <label>Select Orders:</label>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Select</th>
                                                <th>Title</th>
                                                <th>Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($order_list as $item)
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" name="selected_orders[]" value="{{ $item->id }}">
                                                    </td>
                                                    <td>{{ $item->title }}</td>
                                                    <td>{{ $item->price }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>


                        </form>

                        <!-- Display Selected Orders in Table Format -->
                        @if (session('selected_orders'))
                            <div class="table-responsive mt-4">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Title</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach (session('selected_orders') as $order)
                                            <tr>
                                                <td>{{ $order['id'] }}</td>
                                                <td>{{ $order['title'] }}</td>
                                                <td>{{ $order['price'] }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
