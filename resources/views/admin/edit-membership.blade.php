@extends('admin.layout.master')

@section('title', 'Edit Membership')

@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Membership</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Edit Membership</li>
          </ol>
        </div>
      </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <form action="{{ url('update-memberships/' . $membership->id) }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-8 offset-2">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Membership</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Membership Level</label>
                                <input type="text" name="membership" value="{{ $membership->level_name }}" class="form-control" required />
                            </div>

                            <div class="form-group">
                                <label>Order Limit</label>
                                <input type="number" name="order_limit" value="{{ $membership->order_limit }}" class="form-control" required />
                            </div>

                            <div class="form-group">
                                <label>Commission</label>
                                <input type="number" step="0.01" name="commission" value="{{ $membership->commission }}" class="form-control" required />
                            </div>

                            <div class="form-group">
                                <input type="reset" class="btn btn-default" value="Reset"/>
                                <input type="submit" class="btn btn-danger" value="Update Membership"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection
