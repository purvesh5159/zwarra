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
            <a href= "{{ route('serviceproviders.index') }}" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
            <i class="fas fa-arrow-left right mr-2"></i>Back
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
              <h3 class="poppins-semibold zw_34 zw_text_AF2245 mt-3">Add new service provider</h3>
          </div>
          <!-- left column -->
          <div class="col-md-12">
            <!-- <div class="pull-right">
              <a class="btn btn-primary m-2" href="{{ route('serviceproviders.index') }}"> Back</a>
            </div> -->
            <!-- general form elements -->
            <div class="card card-primary">
              <!-- <div class="card-header m-2">
                <h3 class="card-title">Add new service provider</h3>
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
              <form action="{{ route('serviceproviders.store') }}" method="POST"  enctype="multipart/form-data">
                @csrf
                <div class="card-body">
           
                   <div class="form-row zw_form_row">
                    <div class="form-group col-md-4">
                      <label for="exampleInputErname" class="zw_poppins_regular poppins-regular zw_20 zw_text_111535">En name</label>
                      <input type="text" name="Enname" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputErname" placeholder="Enter ername">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="exampleInputarname" class="zw_poppins_regular poppins-regular zw_20 zw_text_111535">Ar name <span style="color: red;">*</span></label>
                      <input type="text" name="Arname" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputarname" placeholder="Enter arname">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="exampleInputEmail1" class="zw_poppins_regular poppins-regular zw_20 zw_text_111535">Email address <span style="color: red;">*</span></label>
                      <input type="email" name="Email" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                  </div>
                   <div class="form-row zw_form_row">
                    <div class="form-group col-md-4">
                      <label for="exampleInputPassword1" class="zw_poppins_regular poppins-regular zw_20 zw_text_111535">Password <span style="color: red;">*</span></label>
                      <input type="password" name="Password" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="exampleInputphone" class="zw_poppins_regular poppins-regular zw_20 zw_text_111535">Phone <span style="color: red;">*</span></label>
                      <input type="phone" name="Phone" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputphone" placeholder="Enter phone">
                    </div>
                    <div class="form-group col-md-4" >
                      <label for="exampleInputcommerticalregisternumber" class="zw_poppins_regular poppins-regular zw_20 zw_text_111535">Commerical register number <span style="color: red;">*</span></label>
                      <input type="phone"  name="Crnumber" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputcommerticalregisternumber" placeholder="Enter commerical register number">
                    </div>
                  </div>
                   <div class="form-row zw_form_row">
                    <div class="form-group col-md-4">
                      <label for="exampleInputcity" class="zw_poppins_regular poppins-regular zw_20 zw_text_111535">Select city <span style="color: red;">*</span></label>
                      <select name="City" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                      </select>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="exampleInputcountrycode" class="zw_poppins_regular poppins-regular zw_20 zw_text_111535">Country code <span style="color: red;">*</span></label>
                      <input type="text" name="Countrycode" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputcountrycode" placeholder="Enter country code" >
                    </div>
                    <div class="form-group col-md-4">
                      <label for="exampleInputvat" class="zw_poppins_regular poppins-regular zw_20 zw_text_111535">Vat <span style="color: red;">*</span></label>
                      <input type="text" name="Vat" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputvat" placeholder="Enter vat">
                    </div>
                  </div>
                   <div class="form-row zw_form_row">
                    <div class="form-group col-md-4">
                      <label for="exampleInputvatcertificate" class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Upload vat registration certificate</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="Regcertificate" class="custom-file-input" id="exampleInputvatcertificate">
                          <label class="custom-file-label zw_form_control" for="exampleInputvatcertificate">Choose file</label>
                        </div>
                      </div>
                      <!-- <input type="file" name="Regcertificate" id="Regcertificate"> -->
                    </div>
                    <div class="form-group col-md-4">
                      <label for="exampleInputlogo" class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Upload logo</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file"  name="Logo" class="custom-file-input" id="exampleInputlogo">
                          <label class="custom-file-label zw_form_control" for="exampleInputlogo">Choose file</label>
                        </div>
                      </div>
                      <!-- <input type="file" name="Logo" id="Logo"> -->
                    </div>
                    <div class="form-group col-md-4">
                      <label for="exampleInputcomregister" class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Upload commercial register</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="Comcerregister" class="custom-file-input" id="exampleInputcomregister">
                          <label class="custom-file-label zw_form_control" for="exampleInputcomregister">Choose file</label>
                        </div>
                      </div>
                      <!-- <input type="file" name="Comcerregister" id="Comcerregister"> -->
                    </div>
                  </div>
                   <div class="form-row zw_form_row">
                    <div class="form-group col-md-4">
                      <label for="exampleInputhealthlicence" class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Upload ministry health licence</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="Healthlicence" class="custom-file-input" id="exampleInputhealthlicence">
                          <label class="custom-file-label zw_form_control" for="exampleInputhealthlicence">Choose file</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="exampleInputtypeofservice" class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Type of service <span style="color: red;">*</span></label>
                      <select name="Typeofservice" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none" >
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                      </select>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="exampleInputfinancialsahre" class="zw_label_height zw_poppins_regular poppins-regular zw_20 zw_text_111535">Financial share <span style="color: red;">*</span></label>
                      <input type="text" name="Financialshare" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none" id="exampleInputfinancialsahre" placeholder="Enter Financial share" >
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn zw_submit zw_submit_wh">Submit</button>

                    </div>
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