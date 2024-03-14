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
                    
                    <a href="{{ route('subservices.index') }}" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
                    <i class="fas fa-arrow-left right mr-2"></i>Back
                    </a>
                    
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="poppins-semibold zw_34 zw_text_AF2245 mt-3">Edit Main Service</h3>
                    </div>
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- <div class="pull-right">
                            <a class="btn btn-primary m-2" href="{{ route('subservices.index') }}"> Back</a>
                        </div> -->
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <!-- <div class="card-header">
                                <h3 class="card-title">Edit Main Service</h3>
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
                            <form action="{{ route('subservices.update',$subservice->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-row zw_form_row" >
                                        <div class="form-group col-md-6">
                                          <label class="zw_poppins_regular poppins-regular zw_20 zw_text_111535"   for="exampleInputEnname">En name</label>
                                          <input type="text" name="Enname" value="{{ $subservice->Enname }}" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputEnname" placeholder="Enter Enname">
                                      </div>
                                      <div class="form-group col-md-6">
                                          <label class="zw_poppins_regular poppins-regular zw_20 zw_text_111535"   for="exampleInputArname">Ar name <span style="color: red;">*</span></label>
                                          <input type="text" name="Arname" value="{{ $subservice->Arname }}" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputArname" placeholder="Enter Arname">
                                      </div>
                                  </div>
                                  <div class="form-row zw_form_row" >
                                    <div class="form-group col-md-6">
                                      <label class="zw_poppins_regular poppins-regular zw_20 zw_text_111535"   for="exampleInputEndescription">En Description <span style="color: red;">*</span></label>
                                      <textarea name="Endescription" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputEndescription" rows="2" placeholder="Enter En Description">{{ $subservice->Endescription }}</textarea>
                                  </div>
                                  <div class="form-group col-md-6">
                                      <label class="zw_poppins_regular poppins-regular zw_20 zw_text_111535"   for="exampleInputArdescription">Ar Description <span style="color: red;">*</span></label>
                                      <textarea name="Ardescription" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputArdescription" rows="2" placeholder="Enter Ar Description">{{ $subservice->Ardescription }}</textarea>
                                  </div>
                              </div>
                              <div class="form-row zw_form_row" >
                                <div class="form-group col-md-6">
                                  <label class="zw_poppins_regular poppins-regular zw_20 zw_text_111535"   for="exampleInputService">Service <span style="color: red;">*</span></label>
                                  <input name="Service" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" value="{{ $subservice->Service }}" id="exampleInputService" placeholder="Enter Service">
                              </div>
                              <div class="form-group col-md-6">
                                  <label class="zw_poppins_regular poppins-regular zw_20 zw_text_111535"   for="exampleInputServicetype">Service Type <span style="color: red;">*</span></label>
                                  <select name="Servicetype" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none" >
                                      <option value="{{ $subservice->Servicetype }}" selected="selected">{{ $subservice->Servicetype }}</option>
                                    <option>option 1</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row zw_form_row" >
                            <div class="form-group col-md-6">
                              <label class="zw_poppins_regular poppins-regular zw_20 zw_text_111535"   for="exampleInputEninstrucation">En Instrucation <span style="color: red;">*</span></label>
                              <textarea name="Eninstrucation" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputEninstrucation" rows="2" placeholder="Enter En Instrucation">{{ $subservice->Eninstrucation }}</textarea>
                          </div>
                          <div class="form-group col-md-6">
                              <label class="zw_poppins_regular poppins-regular zw_20 zw_text_111535"   for="exampleInputArinstrucation">Ar Instrucation <span style="color: red;">*</span></label>
                              <textarea name="Arinstrucation" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputArinstrucation" rows="2" placeholder="Enter Ar Instrucation">{{ $subservice->Arinstrucation }}</textarea>
                          </div>
                      </div>
                      <div class="form-row zw_form_row" >
                          <div class="form-group col-md-6">
                              <label class="zw_poppins_regular poppins-regular zw_20 zw_text_111535"   for="exampleInputEntitle">En available test title</label>
                              <input type="text" name="Entitle" value="{{ $subservice->Entitle }}" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputEntitle" placeholder="Enter En Title">
                          </div>
                          <div class="form-group col-md-6">
                              <label class="zw_poppins_regular poppins-regular zw_20 zw_text_111535"   for="exampleInputArtitle">Ar available test title <span style="color: red;">*</span></label>
                              <input type="text" name="Artitle" value="{{ $subservice->Artitle }}" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputArtitle" placeholder="Enter Ar Title">
                          </div>
                      </div>
                      <div class="form-row zw_form_row" >
                        <div class="form-group col-md-6">
                          <label class="zw_poppins_regular poppins-regular zw_20 zw_text_111535"   for="exampleInputPrice">Price <span style="color: red;">*</span></label>
                          <input name="Price" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" value="{{ $subservice->Price }}" id="exampleInputPrice" placeholder="Enter Price">
                      </div>
                      <div class="form-group col-md-6">
                          <label class="zw_poppins_regular poppins-regular zw_20 zw_text_111535"   for="exampleInputHealthcare">Healthcare <span style="color: red;">*</span></label>
                          <select name="Healthcare" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none" >
                            <option value="{{ $subservice->Healthcare }}" selected="selected">{{ $subservice->Healthcare }}</option>
                            <option>option 1</option>
                            <option>option 2</option>
                            <option>option 3</option>
                            <option>option 4</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn zw_submit zw_submit_wh">Submit</button>

                    </div>
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