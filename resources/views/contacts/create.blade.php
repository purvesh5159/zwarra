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
              <a class="btn btn-primary m-2" href="{{ route('contacts.index') }}"> Back</a>
            </div>
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header m-2">
                <h3 class="card-title">Add New Contact</h3>
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
              <form action="{{ route('contacts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputSubject">Subject</label>
                      <input type="text" name="Subject" class="form-control" id="exampleInputSubject" placeholder="Enter Subject">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputCode">Phone <span style="color: red;">*</span></label>
                      <input type="phone" name="Phone" class="form-control" id="exampleInputCode" placeholder="Enter Phone">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputEmail">Email <span style="color: red;">*</span></label>
                      <input type="email" name="Email" class="form-control" id="exampleInputPercantage" placeholder="Enter Email">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputMessage">Message <span style="color: red;">*</span></label>
                      <textarea name="Message" class="form-control" id="exampleInputEmail" placeholder="Enter Email"></textarea>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputDoctor">Select Doctor <span style="color: red;">*</span></label>
                      <select name="Doctor" class="custom-select">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                      </select>
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