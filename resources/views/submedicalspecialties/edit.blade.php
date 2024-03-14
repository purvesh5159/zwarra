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
                        <a href="{{ route('submedicalspecialties.index') }}" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
                            <i class="fas fa-arrow-left right mr-2"></i>Back
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="poppins-semibold zw_34 zw_text_AF2245 mt-3">Edit Sub MedicalSpecialties</h3>
                    </div>
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- <div class="pull-right">
                            <a class="btn btn-primary m-2" href="{{ route('submedicalspecialties.index') }}"> Back</a>
                        </div> -->
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <!-- <div class="card-header">
                                <h3 class="card-title">Edit Sub MedicalSpecialties</h3>
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
                            <form action="{{ route('submedicalspecialties.update',$submedicalspecialty->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-row zw_form_row">
                                        <div class="form-group col-md-6">
                                           <label class="zw_poppins_regular poppins-regular zw_20 zw_text_111535"  for="exampleInputEnname">En name</label>
                                            <input type="text" name="Enname" value="{{ $submedicalspecialty->Enname }}" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputEnhealthcare" placeholder="Enter En Healthcare">
                                        </div>
                                        <div class="form-group col-md-6">
                                           <label class="zw_poppins_regular poppins-regular zw_20 zw_text_111535"  for="exampleInputArname">Ar name <span style="color: red;">*</span></label>
                                            <input type="text" name="Arname" value="{{ $submedicalspecialty->Arname }}" class="form-control poppins-regular zw_18 zw_text_898B9F zw_form_control" id="exampleInputArhealthcare" placeholder="Enter Ar Healthcare">
                                        </div>
                                    </div>
                                    <div class="form-row zw_form_row">
                                        <div class="form-group col-md-6">
                                           <label class="zw_poppins_regular poppins-regular zw_20 zw_text_111535"  for="exampleInputEnspecialties">En Medical Specialties <span style="color: red;">*</span></label>
                                            <select name="Enspecialties" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none">
                                                <option value="{{ $submedicalspecialty->Enspecialties }}" selected="selected">{{ $submedicalspecialty->Enspecialties }}</option>
                                                <option>1 Option</option>
                                                <option>2 Option </option>
                                                <option>3 Option</option>
                                                <option>4 Option</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                           <label class="zw_poppins_regular poppins-regular zw_20 zw_text_111535"  for="exampleInputArspecialties">Ar Medical Specialties <span style="color: red;">*</span></label>
                                            <select name="Arspecialties" class="custom-select poppins-regular zw_18 zw_text_898B9F zw_form_control zw_box_shadow_none">
                                                <option value="{{ $submedicalspecialty->Arspecialties }}" selected="selected">{{ $submedicalspecialty->Arspecialties }}</option>
                                                <option>1 Option</option>
                                                <option>2 Option </option>
                                                <option>3 Option</option>
                                                <option>4 Option</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <button type="submit" class="btn zw_submit zw_send_wh">Send</button>
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