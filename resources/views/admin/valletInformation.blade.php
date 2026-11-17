@extends('admin.layout.master')

@section('title', 'Wallet Information')

@section('content')
 <!-- Content Header (Page header) -->
 <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Wallet Information</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Wallet Information</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
        @if ($valletInformation)
<form action="{{ route('update.wallet') }}" method="POST">
@csrf
      <div class="row">
        <!-- /.col (left) -->
        <div class="col-md-8 offset-2">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Wallet Information</h3>
            </div>
            <div class="card-body">
               <!--Account Title -->
               <div class="form-group">
                <label>Account Title </label>
                  <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                        <label for="Name" name="name" class="form-control">{{ $user->username }}</label>
                  </div>
              </div>
              <!-- /.form group -->
               <!--Vallet Information -->
               <div class="form-group">
                <label>Wallet Address</label>
                  <div class="input-group" id="reservationdatetime" data-target-input="nearest">
                    <label for="vallet_address" name="vallet_address" class="form-control">{{ $valletInformation->vallet_address }}</label>
                  </div>
              </div>
              <!-- /.form group -->
              <!--Vallet Type -->
              <div class="form-group">
                <label>Currency</label>
                  <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                    <label for="type" name="type" class="form-control">{{ $valletInformation->type }}</label>
                  </div>
              </div>
              <!-- /.form group -->
              <!-- Blockchain -->
              <div class="form-group">
                <label>Blockchain</label>
                  <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                    <label for="type" name="blockchain" class="form-control">{{ $valletInformation->blockchain }}</label>
                  </div>
              </div>
              <!-- /.form group -->

              <!--Vallet Type -->
              <div class="form-group">
                <label>Contact Number</label>
                  <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                    <label for="type" name="phone" class="form-control">{{ $valletInformation->phone }}</label>
                  </div>
              </div>
              <!-- /.form group -->

              <input type="hidden" name="id" value="{{ $user->id }}">
              <!-- form Buttons -->
              <div class="form-group">
                        <input type="reset" class="btn btn-dark" value="Back to Users"/>
                        <input type="submit" class="btn btn-danger" value="Update Information">
                </div>
                 <!-- /.form buttonss -->



            </div>

          <!-- /.card -->

        </div>
        <!-- /.col (right) -->
      </div>
      <!-- /.row -->
      </div>
    </form>
        @else
            <p>No wallet information available for this user.</p> <a href="{{ URL('add-vallet-information',  $user->id) }}" class="btn btn-primary btn-flat">Add User Wallet Information</a>

        @endif
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->

@endsection
