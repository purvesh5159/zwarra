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
              <a class="btn btn-primary m-2" href="{{ route('subservices.index') }}"> Back</a>
            </div>
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header m-2">
                <h3 class="card-title">Add New Mainservice </h3>
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
              <form action="{{ route('subservices.store') }}" method="POST"  enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-row">
                   <div class="form-group col-md-4">
                      <label for="exampleInputLogo">Upload Logo</label>
                      <!-- <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="Comcerregister" class="custom-file-input" id="exampleInputcomregister">
                          <label class="custom-file-label" for="exampleInputcomregister">Choose file</label>
                        </div>
                      </div> -->
                      <input type="file" name="Logo" id="Logo">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputEnname">En name</label>
                      <input type="text" name="Enname" class="form-control" id="exampleInputEnname" placeholder="Enter Enname">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputArname">Ar name <span style="color: red;">*</span></label>
                      <input type="text" name="Arname" class="form-control" id="exampleInputArname" placeholder="Enter Arname">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputEndescription">En Description <span style="color: red;">*</span></label>
                      <textarea name="Endescription" class="form-control" id="exampleInputEndescription" rows="4" placeholder="Enter En Description"></textarea>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputArdescription">Ar Description <span style="color: red;">*</span></label>
                       <textarea name="Ardescription" class="form-control" id="exampleInputArdescription" rows="4" placeholder="Enter Ar Description"></textarea>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputService">Service <span style="color: red;">*</span></label>
                      <input name="Service" class="form-control" id="exampleInputService" placeholder="Enter Service">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputServicetype">Service Type <span style="color: red;">*</span></label>
                      <select name="Servicetype" class="custom-select" >
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputEninstrucation">En Instrucation <span style="color: red;">*</span></label>
                      <textarea name="Eninstrucation" class="form-control" id="exampleInputEninstrucation" rows="4" placeholder="Enter En Instrucation"></textarea>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputArinstrucation">Ar Instrucation <span style="color: red;">*</span></label>
                       <textarea name="Arinstrucation" class="form-control" id="exampleInputArinstrucation" rows="4" placeholder="Enter Ar Instrucation"></textarea>
                    </div>
                  </div>
                  <div class="form-row">
                  <div class="form-group col-md-6">
                      <label for="exampleInputEntitle">En available test title</label>
                      <input type="text" name="Entitle" class="form-control" id="exampleInputEntitle" placeholder="Enter En Title">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputArtitle">Ar available test title <span style="color: red;">*</span></label>
                      <input type="text" name="Artitle" class="form-control" id="exampleInputArtitle" placeholder="Enter Ar Title">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputPrice">Price <span style="color: red;">*</span></label>
                      <input name="Price" class="form-control" id="exampleInputPrice" placeholder="Enter Price">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputHealthcare">Healthcare <span style="color: red;">*</span></label>
                      <select name="Healthcare" class="custom-select" >
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="exampleInputStatus">Status <span style="color: red;">*</span></label>
                      <input type="radio" name="Status" value="1" class="form-control" id="exampleInputStatus" placeholder="Status">
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