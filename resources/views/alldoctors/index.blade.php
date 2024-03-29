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
            <div class="col-sm-6 zw_back">
              <a href="" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
                <i class="fas fa-arrow-left right mr-2"></i>Back
              </a>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="poppins-semibold zw_46 zw_text_AF2245 mt-3">Doctors</h1>

              <!-- <h1>Doctors</h1> -->
            </div>
            <div class="col-sm-6">
              <!-- <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Doctors</li>
              </ol> -->
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="row mb-2">
          <div class="col-6">
            <form class="zw_search_form ">
              <div class="input-group input-group-sm">
                <input type="text" name="table_search" class=" zw_search_input zw_16 poppins-regular" placeholder="Search">
                <div class="input-group-append zw_input-group-append">
                  <button type="submit" class="btn zw_search_button zw_bg_ffffff">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
          <div class="col-6">
            <a class="btn zw_add_btn float-right  poppins-medium zw_18" href="{{ route('alldoctors.create') }}"> <i class="fas fa-plus right mr-2"></i>Add New Doctor</a>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card">
              @if ($message = Session::get('success'))
              <div class="alert zw_alert_success">
                <p>{{ $message }}</p>
              </div>
              @endif
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead class="zw_bg_AF2245 zw_text_ffffff">
                    <tr>
                      <th class="poppins-medium zw_18">Image</th>
                      <th class="poppins-medium zw_18">Ername</th>
                      <th class="poppins-medium zw_18">Email</th>
                      <th class="poppins-medium zw_18">Phone</th>
                      <th class="poppins-medium zw_18">Date</th>
                      <th class="poppins-medium zw_18">Year Of Experience</th>
                      <th class="poppins-medium zw_18">Status</th>
                      <th class="poppins-medium zw_18">Reason</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($alldoctors as $alldoctors)
                    <tr>
                      <td class="poppins-regular zw_14 zw_text_333333"><img class="center-block" src="{{ asset($alldoctors->Logo) }}" height="" width="50px" /></td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $alldoctors->Enname }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $alldoctors->Email }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $alldoctors->Phone }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $alldoctors->CreatedAt }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $alldoctors->Yearofexp }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">
                        <div class="form-switch">
                          <input type="checkbox" class="form-check-input" id="site_state" style="cursor: pointer;">
                        </div>
                      </td>
                      <td class="poppins-regular zw_14 zw_text_333333">
                        <form action="{{ route('alldoctors.destroy',$alldoctors->id) }}" method="POST">
                          <a class="btn zw_btn" href="{{ route('alldoctors.show',$alldoctors->id) }}">Show</a>
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn zw_btn">Delete</button>
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