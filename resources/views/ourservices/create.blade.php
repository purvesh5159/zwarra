@include('layouts.headermodule')

<body class="hold-transition sidebar-mini zw_sidebar">
  <div class="wrapper">
    @include('layouts.header')
    @include('layouts.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="row mb-2">
          <div class="col-sm-12 zw_back">
            <a href= "{{ route('ourservices.index') }}" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
            <i class="fas fa-arrow-left right mr-2"></i>Back
            </a>
          </div>
        </div>
        <div class="row">
        <div class="col-sm-12">
              <h3 class="poppins-semibold zw_34 zw_text_AF2245 mt-3">Add New Mainservice</h3>
          </div>
          <!-- left column -->
          <div class="col-md-12">
            <!-- <div class="pull-right">
              <a class="btn btn-primary m-2" href="{{ route('ourservices.index') }}"> Back</a>
            </div> -->
            <!-- general form elements -->
            <div class="card card-primary">
              <!-- <div class="card-header m-2">
                <h3 class="card-title">Add New Mainservice </h3>
              </div> -->
              <!-- /.card-header -->
              @if ($errors->any())
              <div class="alert zw_alert_danger">
                There were some problems with your input.<br><br>
                <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
              @endif
              <!-- form start -->
              <form action="{{ route('ourservices.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-row zw_form_row">
                    <div class="form-group col-md-4">
                      <label class="zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputLogo">Upload Logo</label>
                      <!-- <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="Comcerregister" class="custom-file-input" id="exampleInputcomregister">
                          <label class="custom-file-label" for="exampleInputcomregister">Choose file</label>
                        </div>
                      </div> -->
                      <input type="file" name="Logo" id="Logo">
                    </div>
                  </div>
                  <div class="form-row zw_form_row">
                    <div class="form-group col-md-6">
                      <label class="zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputEnname">En name</label>
                      <input type="text" name="Enname" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputEnname" placeholder="Enter Enname">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputArname">Ar name <span style="color: red;">*</span></label>
                      <input type="text" name="Arname" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputArname" placeholder="Enter Arname">
                    </div>
                  </div>
                  <div class="form-row zw_form_row">
                    <div class="form-group col-md-6">
                      <label class="zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputEndescription">En Description <span style="color: red;">*</span></label>
                      <textarea name="Endescription" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputEndescription" rows="2" placeholder="Enter En Description"></textarea>
                    </div>
                    <div class="form-group col-md-6">
                      <label class="zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputArdescription">Ar Description <span style="color: red;">*</span></label>
                      <textarea name="Ardescription" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputArdescription" rows="2" placeholder="Enter Ar Description"></textarea>
                    </div>
                  </div>
                  <div class="form-row zw_form_row">
                    <div class="form-group col-md-6">
                      <label class="zw_poppins_regular poppins-regular zw_20 zw_text_111535" for="exampleInputStatus">Status <span style="color: red;">*</span></label><br>
                      <input type="radio" name="Status" value="1" class=" poppins-regular zw_18 zw_text_898B9F zw_form_control zw_radio" id="exampleInputStatus" placeholder="Status">
                      <label class="zw_poppins_regular poppins-regular zw_18 zw_text_898B9F zw_radio_text" for="exampleInputStatus">Active </label>
                    </div>
                    <div class="form-group col-md-6 mt-4">
                      <button type="submit" class="btn zw_btn float-right ">Save</button>
                      <button type="submit" class="btn zw_reset float-right mr-4">Reset</button>
                    </div>
                  </div>
                  <!-- <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn zw_submit zw_submit_wh">Submit</button>

                    </div> -->
                </div>
                <!-- /.card-body -->

                <!-- <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div> -->
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