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
              <h1>Our SubMedicalSpecialties</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active"> SubMedicalSpecialties</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="row">
          <div class="col-12">
            <a class="btn btn-success float-right m-2" href="{{ route('submedicalspecialties.create') }}">Add new Sub MedicalSpecialties</a>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Our SubMedicalSpecialties </h3>
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
                      <th>En Name</th>
                      <th>Ar Name</th>
                      <th>En Medical Specialties</th>
                      <th>Ar Medical Specialties</th>
                      <th>Status</th>
                      <th>Reason</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($submedicalspecialties as $submedicalspecialties)
                    <tr>
                      <td><img class="center-block" src="{{ asset($submedicalspecialties->Logo) }}" height="100px" width="100px" /></td>
                      
                      <td>{{ $submedicalspecialties->Enname }}</td>
                      <td>{{ $submedicalspecialties->Arname }}</td>
                      <td>{{ $submedicalspecialties->Enspecialties }}</td>
                      <td>{{ $submedicalspecialties->Arspecialties }}</td>
                       <td>
                        <div class="form-switch">
                          <input type="checkbox" class="form-check-input" id="site_state" style="cursor: pointer;">
                        </div>
                      </td>
                      <td>
                        <form action="{{ route('submedicalspecialties.destroy',$submedicalspecialties->id) }}" method="POST">
                          <a class="btn btn-info" href="{{ route('submedicalspecialties.show',$submedicalspecialties->id) }}">Show</a>
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