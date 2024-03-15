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
                        <a href="{{ route('services.index') }}" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
                            <i class="fas fa-arrow-left right mr-2"></i>Back
                        </a>
                    </div>
                    <div class="col-sm-6 ">
                        <a class="btn zw_btn float-right m-2" href="{{ route('services.edit',$service->id) }}">Update</a>
                    </div>
                </div>
                <div class="row">
                    <!-- <a class="btn btn-primary m-2" href="{{ route('services.index') }}"> Back</a>
                    <a class="btn btn-primary float-right m-2" href="{{ route('services.edit',$service->id) }}">Update</a> -->
                    <!-- left column -->
                    <div class="col-md-12">
                        <h3 class="poppins-semibold zw_34 zw_text_AF2245 mt-4 mb-4">Show Services</h3>
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <!-- <div class="card-header">
                                <h3 class="card-title">Show Services</h3>
                            </div> -->
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                <div class="form-row zw_form_row">
                                    <div class="form-group col-md-4 zw_18 poppins-medium">
                                        <label class="zw_text_AF2245 poppins-bold" for="exampleInputEnhealthcare">En Healthcare :</label>
                                        {{ $service->Enhealthcare }}
                                    </div>
                                    <div class="form-group col-md-4 zw_18 poppins-medium">
                                        <label class="zw_text_AF2245 poppins-bold" for="exampleInputEnhealthcare">Ar Healthcare :</label>
                                        {{ $service->Arhealthcare }}
                                    </div>
                                    <div class="form-group col-md-4 zw_18 poppins-medium">
                                        <label class="zw_text_AF2245 poppins-bold" for="exampleInputEnservicename">En Servicename :</label>
                                        {{ $service->Enservicename }}
                                    </div>
                                </div>
                                <div class="form-row zw_form_row">
                                    <div class="form-group col-md-4 zw_18 poppins-medium">
                                        <label class="zw_text_AF2245 poppins-bold" for="exampleInputArservicename">Ar Servicename :</label>
                                        {{ $service->Arservicename }}
                                    </div>
                                    <div class="form-group col-md-4 zw_18 poppins-medium">
                                        <label class="zw_text_AF2245 poppins-bold" for="exampleInputEnsubservicename">En Sub Servicename :</label>
                                        {{ $service->Ensubservicename }}
                                    </div>
                                    <div class="form-group col-md-4 zw_18 poppins-medium">
                                        <label class="zw_text_AF2245 poppins-bold" for="exampleInputArsubsservicename">Ar Sub Servicename :</label>
                                        {{ $service->Arsubservicename }}
                                    </div>
                                </div>
                                <div class="form-row zw_form_row">
                                    <div class="form-group col-md-4 zw_18 poppins-medium">
                                        <label class="zw_text_AF2245 poppins-bold" for="exampleInputEstimatedtime">Estimate Time For Service :</label>
                                        {{ $service->Estimatedtime }}
                                    </div>
                                    <div class="form-group col-md-4 zw_18 poppins-medium">
                                        <label class="zw_text_AF2245 poppins-bold" for="exampleInputPrice">Price :</label>
                                        {{ $service->Price }}
                                    </div>
                                    <div class="form-group col-md-4 zw_18 poppins-medium">
                                        <label class="zw_text_AF2245 poppins-bold" for="exampleInputNewprice">New Price :</label>
                                        {{ $service->Newprice }}
                                    </div>
                                </div>
                                <div class="form-row zw_form_row">
                                    <div class="form-group col-md-4 zw_18 poppins-medium">
                                        <label class="zw_text_AF2245 poppins-bold" for="exampleInputGender">Gender :</label>
                                        {{ $service->Gender }}
                                    </div>
                                    <div class="form-group col-md-4 zw_18 poppins-medium">
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