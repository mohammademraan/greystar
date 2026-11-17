@extends('admin.layout.master')

@section('title', 'Edit Order List')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Orders List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Edit Orders List</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <form action="{{ url('update-order-list/' . $order->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <!-- /.col (left) -->
                    <div class="col-md-8 offset-2">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit Orders List</h3>
                            </div>
                            <div class="card-body">
                                <!--Orders List -->
                                <div class="form-group">
                                    <label>Orders List </label>
                                    <div class="input-group" data-target-input="nearest">
                                        <input type="text" name="title" class="form-control"
                                            value="{{ $order->title }}" required />
                                    </div>
                                </div>
                                <!-- /.form group -->
                                <!--Price -->
                                <div class="form-group">
                                    <label>Price</label>
                                    <div class="input-group" data-target-input="nearest">
                                        <input type="text" name="price" placeholder="Add Price" class="form-control"
                                            value="{{ $order->price }}" required />
                                    </div>
                                </div>
                                <!-- /.form group -->
                                <!--Description -->
                                <div class="form-group">
                                    <label>Description</label>
                                    <div class="input-group" data-target-input="nearest">
                                        <input type="text" name="description" placeholder="Enter Short Description"
                                            class="form-control" value="{{ $order->description }}" />
                                    </div>
                                </div>
                                <!-- /.form group -->
                                <!--Image -->
                                <div class="form-group">
                                    <label>Image</label>
                                    <div class="input-group"data-target-input="nearest">
                                        <input type="file" name="image" class="form-control" />
                                    </div>
                                    @if ($order->image)
                                        <img src="{{ asset('OrderImages/' . $order->image) }}" alt="Current Image"
                                            width="200" height="200">
                                    @endif
                                </div>
                                <!-- /.form group -->



                                <!-- form Buttons -->
                                <div class="form-group">
                                    <input type="reset" class="btn btn-default" value="Reset" />
                                    <input type="submit" class="btn btn-danger" value="Update Orders List" />
                                </div>
                                <!-- /.form buttonss -->



                            </div>

                            <!-- /.card -->

                        </div>
                        <!-- /.col (right) -->
                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.container-fluid -->
            </form>
    </section>
    <!-- /.content -->

@endsection
