@extends('admin.layout.master')

@section('title', 'Add Users Wallet Information')

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
            <li class="breadcrumb-item"><a href="/administration">Home</a></li>
            <li class="breadcrumb-item active">Wallet Information</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
<form action="{{ URL('save-vallet') }}" method="post">
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
               <!--Wallet Information -->
               <div class="form-group">
                <label>Wallet Address</label>
                  <div class="input-group" id="reservationdatetime" data-target-input="nearest">
                    <input type="text" name="WalletAddress" class="form-control" id="">
                  </div>
              </div>
              <!-- /.form group -->
              <!--Wallet Type -->
              <div class="form-group">
                <label>Currency</label>
                <div class="input-group">
                  <select name="WalletType" class="form-control">
                    <option value="">Select Option</option>
                    <option value="USDT">USDT</option>
                    <option value="USDC">USDC</option>
                    <option value="ETH">ETH</option>
                    <option value="BTC">BTC</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label>Blockchain</label>
                <div class="input-group">
                  <select name="blockchain" class="form-control">
                    <option value="">Select Option</option>
                    <option value="TRC20">TRC20</option>
                    <option value="ERC20">ERC20</option>
                    <option value="ETH">ETH</option>
                    <option value="ETH">BTC</option>
                    <option value="APTOS">APTOS</option>
                  </select>
                </div>
              </div>

              <!-- /.form group -->

              <!--Wallet Type -->
              <div class="form-group">
                <label>Contact Number</label>
                  <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                    <input type="text" name="phone" class="form-control" id="">
                  </div>
              </div>
              <!-- /.form group -->

              <input type="hidden" name="id" value="{{ $user->id }}">
              <!-- form Buttons -->
              <div class="form-group">
                        <input type="reset" class="btn btn-default" value="Reset"/>
                        <input type="submit" class="btn btn-danger" value="Save Wallet Information"/>
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

    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->

@endsection
