@include('layouts.headermodule')

<body class="hold-transition sidebar-mini zw_sidebar">
    <div class="wrapper">
        @include('layouts.header')
        @include('layouts.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Content Header (Page header) -->
            <section class="content-header">
            <div class="row  mb-3">
                    <div class="col-sm-6 zw_back">
                        <a href="{{ route('subservices.index') }}" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
                            <i class="fas fa-arrow-left right mr-2"></i>Back
                        </a>
                    </div>
                    <div class="col-sm-6 ">
                        <a class="btn zw_btn float-right m-2" href="{{ route('subservices.edit',$subservice->id) }}">Update</a>
                    </div>
                </div>
                <div class="row">
                    <!-- <a class="btn btn-primary m-2" href="{{ route('subservices.index') }}"> Back</a>
                    <a class="btn btn-primary float-right m-2" href="{{ route('subservices.edit',$subservice->id) }}">Update</a> -->
                    <!-- left column -->
                    <div class="col-md-12">
                    <h3 class="poppins-semibold zw_34 zw_text_AF2245 mt-4 mb-4">Show Sub Services</h3>
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <!-- <div class="card-header">
                                <h3 class="card-title">Show Sub Services</h3>
                            </div> -->
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                <div class="form-row zw_form_row">
                                    <div class="form-group  zw_18 poppins-medium col-md-4">
                                       <label class="zw_text_AF2245 poppins-bold" for="exampleInputLogo">Logo :</label>
                                        <img src="{{ asset($subservice->Logo) }}" height="" width="50"/>
                                    </div>
                                </div>
                                <div class="form-row zw_form_row">
                                    <div class="form-group  zw_18 poppins-medium col-md-6">
                                       <label class="zw_text_AF2245 poppins-bold" for="exampleInputEnname">En name :</label>
                                        {{ $subservice->Enname }}
                                    </div>
                                    <div class="form-group  zw_18 poppins-medium col-md-6">
                                       <label class="zw_text_AF2245 poppins-bold" for="exampleInputArname">Ar name :</label>
                                        {{ $subservice->Arname }}
                                    </div>
                                </div>
                                <div class="form-row zw_form_row">
                                    <div class="form-group  zw_18 poppins-medium col-md-6">
                                       <label class="zw_text_AF2245 poppins-bold" for="exampleInputEndescription">En Description :</label>
                                        {{ $subservice->Endescription }}
                                    </div>
                                    <div class="form-group  zw_18 poppins-medium col-md-6">
                                       <label class="zw_text_AF2245 poppins-bold" for="exampleInputArdescription">Ar Description :</label>
                                        {{ $subservice->Ardescription }}
                                    </div>
                                </div>
                                <div class="form-row zw_form_row">
                                    <div class="form-group  zw_18 poppins-medium col-md-6">
                                       <label class="zw_text_AF2245 poppins-bold" for="exampleInputService">Service :</label>
                                        {{ $subservice->Service }}
                                    </div>
                                    <div class="form-group  zw_18 poppins-medium col-md-6">
                                       <label class="zw_text_AF2245 poppins-bold" for="exampleInputServicetype">Service Type :</label>
                                        {{ $subservice->Servicetype }}
                                    </div>
                                </div>
                                <div class="form-row zw_form_row">
                                    <div class="form-group  zw_18 poppins-medium col-md-6">
                                       <label class="zw_text_AF2245 poppins-bold" for="exampleInputEninstrucation">En Instrucation :</label>
                                        {{ $subservice->Eninstrucation }}
                                    </div>
                                    <div class="form-group  zw_18 poppins-medium col-md-6">
                                       <label class="zw_text_AF2245 poppins-bold" for="exampleInputArinstrucation">Ar Instrucation :</label>
                                        {{ $subservice->Arinstrucation }}
                                    </div>
                                </div>
                                <div class="form-row zw_form_row">
                                    <div class="form-group  zw_18 poppins-medium col-md-6">
                                       <label class="zw_text_AF2245 poppins-bold" for="exampleInputEntitle">En available test title :</label>
                                        {{ $subservice->Entitle }}
                                    </div>
                                    <div class="form-group  zw_18 poppins-medium col-md-6">
                                       <label class="zw_text_AF2245 poppins-bold" for="exampleInputArinstrucation">Ar available test title :</label>
                                        {{ $subservice->Artitle }}
                                    </div>
                                </div>
                                <div class="form-row zw_form_row">
                                    <div class="form-group  zw_18 poppins-medium col-md-6">
                                       <label class="zw_text_AF2245 poppins-bold" for="exampleInputPrice">Price :</label>
                                        {{ $subservice->Price }}
                                    </div>
                                    <div class="form-group  zw_18 poppins-medium col-md-6">
                                       <label class="zw_text_AF2245 poppins-bold" for="exampleInputHealthcare">Healthcare :</label>
                                        {{ $subservice->Healthcare }}
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
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