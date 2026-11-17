@extends('admin.layout.master')

@section('title', 'Redemption History')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="card-title">Redemption History for User: {{ $userInfo->name ?? 'User' }}</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Redemption History</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Recent Redemptions</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>Amount</th>
                      <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($redemptionHistory as $redemption)
                    <tr>
                      <td>{{ $redemption->id }}</td>
                      <td>${{ number_format($redemption->amount, 2) }}</td>
                      <td>{{ $redemption->created_at->format('d-m-Y H:i A') }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>Amount</th>
                      <th>Date</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->

<!-- DataTables Script -->
@push('scripts')
<script>
  $(document).ready(function() {
      $('#redemptionTable').DataTable({
          "responsive": true,
          "autoWidth": false,
      });
  });
</script>
@endpush
@endsection
