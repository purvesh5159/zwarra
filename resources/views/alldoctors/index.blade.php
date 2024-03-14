@include('layouts.headermodule')

<body class="hold-transition sidebar-mini zw_sidebar">
  <div class="wrapper">
    @include('layouts.header')
    @include('layouts.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Doctors</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Doctors</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="row">
          <div class="col-12">
            <a class="btn btn-success float-right m-2" href="{{ route('alldoctors.create') }}">Add New Doctor</a>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Doctors data</h3>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              @if ($message = Session::get('success'))
              <div class="alert alert-success">
                <p>{{ $message }}</p>
              </div>
              @endif
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Image</th>
                      <th>Ername</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Date</th>
                      <th>Year Of Experience</th>
                      <th>Status</th>
                      <th>Reason</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($alldoctors as $alldoctors)
                    <tr>
                      
                      <td><img class="center-block" src="{{ asset($alldoctors->Logo) }}" height="100px" width="100px" /></td>
                      <td>{{ $alldoctors->Enname }}</td>
                      <td>{{ $alldoctors->Email }}</td>
                      <td>{{ $alldoctors->Phone }}</td>
                      <td>{{ $alldoctors->CreatedAt }}</td>
                      <td>{{ $alldoctors->Yearofexp }}</td>
                      <td>
                        <div class="form-switch">
                          <input type="checkbox" class="form-check-input" id="site_state" style="cursor: pointer;">
                        </div>
                      </td>
                      <td>
                        <form action="{{ route('alldoctors.destroy',$alldoctors->id) }}" method="POST">
                          <a class="btn btn-info" href="{{ route('alldoctors.show',$alldoctors->id) }}">Show</a>
                          @csrf
                          @method('DELETE')

                          <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </section>
    </div>
    @include('layouts.footer')
  </div>
</body>
</html>