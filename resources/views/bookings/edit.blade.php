@include('layouts.headermodule')

<body class="hold-transition sidebar-mini zw_sidebar">
  <div class="wrapper">
    @include('layouts.header')
    @include('layouts.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <div class="pull-right">
              <a class="btn btn-primary m-2" href="{{ route('bookings.index') }}"> Back</a>
            </div>
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Offer</h3>
              </div>
              <!-- /.card-header -->
              @if ($errors->any())
              <div class="alert alert-danger">
                There were some problems with your input.<br><br>
                <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
              @endif
              <!-- form start -->
              <form action="{{ route('bookings.update',$booking->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputServiceprovider">Select Service Provider <span style="color: red;">*</span></label>
                      <select name="Serviceprovider" class="custom-select">
                        <option value="{{ $booking->Serviceprovider }}" selected="selected">{{ $booking->Serviceprovider }}</option>
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputServicename">Select Servicename <span style="color: red;">*</span></label>
                      <select name="Servicename" class="custom-select">
                        <option value="{{ $booking->Servicename }}" selected="selected">{{ $booking->Servicename }}</option>
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputType">Select Username <span style="color: red;">*</span></label>
                      <select name="Username" class="custom-select">
                        <option value="{{ $booking->Username }}" selected="selected">{{ $booking->Username }}</option>
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputPhone">Phone <span style="color: red;">*</span></label>
                      <input type="phone" name="Phone" value="{{ $booking->Phone }}" class="form-control" id="exampleInputPhone" placeholder="Enter Phone">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputEmail">Email <span style="color: red;">*</span></label>
                      <input type="email" name="Email" value="{{ $booking->Email }}" class="form-control" id="exampleInputEmail" placeholder="Enter Email">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputType">Select Status <span style="color: red;">*</span></label>
                      <select name="Type" class="custom-select">
                        <option value="{{ $booking->Type }}" selected="selected">{{ $booking->Type }}</option>
                        <option>Completed</option>
                        <option>InCompleted</option>
                        <option>Cancelled</option>
                        <option>Refund</option>
                      </select>
                    </div>
                  </div>
                </div <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!--/.col (right) -->
  </div>
  </section>
  </div>
  @include('layouts.footer')
  </div>
</body>

</html>