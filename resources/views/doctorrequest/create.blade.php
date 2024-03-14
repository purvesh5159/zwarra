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
              <a class="btn btn-primary m-2" href="{{ route('doctorrequest.index') }}"> Back</a>
            </div>
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header m-2">
                <h3 class="card-title">Add New Join Doctor Request</h3>
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
              <form action="{{ route('doctorrequest.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputErname">En name</label>
                      <input type="text" name="Enname" class="form-control" id="exampleInputErname" placeholder="Enter ername">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputarname">Ar name <span style="color: red;">*</span></label>
                      <input type="text" name="Arname" class="form-control" id="exampleInputarname" placeholder="Enter arname">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputEmail">Email address <span style="color: red;">*</span></label>
                      <input type="email" name="Email" class="form-control" id="exampleInputEmail" placeholder="Enter email">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputphone">Phone <span style="color: red;">*</span></label>
                      <input type="phone" name="Phone" class="form-control" id="exampleInputphone" placeholder="Enter phone">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputYearofexp">Year Of Experience <span style="color: red;">*</span></label>
                      <input type="text" name="Yearofexp" class="form-control" id="exampleInputYearofexp" placeholder="Enter Year Of Experience">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputPosition">Doctor Position <span style="color: red;">*</span></label>
                      <select name="Position" class="custom-select">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputMedicalspec">Medical Specialties <span style="color: red;">*</span></label>
                      <textarea name="Medicalspec" class="form-control" id="exampleInputMedicalspec" rows="4" placeholder="Enter Medical Specialties"></textarea>
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