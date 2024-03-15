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
              <h1 class="poppins-semibold zw_46 zw_text_AF2245 mt-3">Doctor Positions</h1>
              <!-- <h1>Doctor Positions</h1> -->
            </div>
            <div class="col-sm-6">
              <!-- <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active"> Doctor Positions</li>
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
            <a class="btn zw_add_btn float-right  poppins-medium zw_18" href="{{ route('alldoctors.create') }}"> <i class="fas fa-plus right mr-2"></i>Add New Doctor Position</a>
          </div>
        </div>
        <div class="row">
          <!-- <div class="col-12">
            <a class="btn btn-success float-right m-2" href="{{ route('doctorpositions.create') }}">Add New Doctor Position</a>
          </div> -->
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- <div class="card-header">
                <h3 class="card-title">Our Doctor Position </h3>
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
              </div> -->

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
                      <th class="poppins-medium zw_18">En Name</th>
                      <th class="poppins-medium zw_18">Ar Name</th>
                      <th class="poppins-medium zw_18">Price</th>
                      <th class="poppins-medium zw_18">Reason</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($doctorpositions as $doctorpositions)
                    <tr>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $doctorpositions->Enname }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $doctorpositions->Arname }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $doctorpositions->Price }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">
                        <form action="{{ route('doctorpositions.destroy',$doctorpositions->id) }}" method="POST">
                          <a class="btn zw_btn" href="{{ route('doctorpositions.show',$doctorpositions->id) }}">Show</a>
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