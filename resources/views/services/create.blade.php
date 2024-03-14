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
              <a class="btn btn-primary m-2" href="{{ route('services.index') }}"> Back</a>
            </div>
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header m-2">
                <h3 class="card-title">Add new service provider</h3>
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
              <form action="{{ route('services.store') }}" method="POST"  enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputErname">En Healthcare</label>
                      <input type="text" name="Enhealthcare" class="form-control" id="exampleInputEnhealthcare" placeholder="Enter En Healthcare">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputArhealthcare">Ar Healthcare <span style="color: red;">*</span></label>
                      <input type="text" name="Arhealthcare" class="form-control" id="exampleInputArhealthcare" placeholder="Enter Ar Healthcare">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputEnservicename">En Servicename <span style="color: red;">*</span></label>
                      <input type="text" name="Enservicename" class="form-control" id="exampleInputEnservicename" placeholder="Enter En Servicename">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputArservicename">Ar Servicename <span style="color: red;">*</span></label>
                      <input type="text" name="Arservicename" class="form-control" id="exampleInputArservicename" placeholder="Enter Ar Servicename">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputEnsubservicename">En Sub Servicename <span style="color: red;">*</span></label>
                      <input type="text" name="Ensubservicename" class="form-control" id="exampleInputEnsubservicename" placeholder="Enter En Sub Servicename">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputArsubservicename">Ar Sub Servicename <span style="color: red;">*</span></label>
                      <input type="text" name="Arsubservicename" class="form-control" id="exampleInputArsubservicename" placeholder="Enter Ar Sub Servicename ">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputEstimatedtime">Estimated Time for Service <span style="color: red;">*</span></label>
                      <input type="text" name="Estimatedtime" class="form-control" id="exampleInputEstimatedtime" placeholder="Enter Estimated Time for Service">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputPrice">Price <span style="color: red;">*</span></label>
                      <input type="text" name="Price" class="form-control" id="exampleInputPrice" placeholder="Enter Price ">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputNewprice"> New Price <span style="color: red;">*</span></label>
                      <input type="text" name="Newprice" class="form-control" id="exampleInputNewprice" placeholder="Enter New Price ">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputGender">Gender <span style="color: red;">*</span></label>
                      <input type="text" name="Gender" class="form-control" id="exampleInputGender" placeholder="Enter Gender">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

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