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
              <h1 class="poppins-semibold zw_46 zw_text_AF2245">  Orders </h1>
            </div>
            <div class="col-sm-6">
            <a class="btn zw_add_btn float-right m-2 poppins-medium zw_18" href="{{ route('bookings.create') }}"> <i class="fas fa-plus right mr-2"></i>Add New Order</a>

              <!-- <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Service Provider</li>
              </ol> -->
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="row">
          <div class="col-12">
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card">
              @if ($message = Session::get('success'))
              <div class="alert alert-success">
                <p>{{ $message }}</p>
              </div>
              @endif
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap ">
                  <thead class="zw_bg_AF2245 zw_text_ffffff">
                    <tr>
                      <th class="poppins-medium zw_18">Date</th>
                      <th class="poppins-medium zw_18">Service Provider</th>
                      <th class="poppins-medium zw_18">Servicename</th>
                      <th class="poppins-medium zw_18">Username</th>
                      <th class="poppins-medium zw_18">Phone</th>
                      <th class="poppins-medium zw_18">User Email</th>
                      <th class="poppins-medium zw_18">Reason</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($booking as $booking)
                    <tr class="m-4">
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $booking->Date }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $booking->Serviceprovider }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $booking->Servicename }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $booking->Username }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $booking->Phone }}</td>
                      <td class="poppins-regular zw_14 zw_text_333333">{{ $booking->Email }}</td>
                      <td>
                        <form action="{{ route('bookings.destroy',$booking->id) }}" method="POST">
                          <a class="btn zw_btn" href="{{ route('bookings.show',$booking->id) }}">Show</a>
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