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
                    <a class="btn btn-primary m-2" href="{{ route('services.index') }}"> Back</a>
                    <a class="btn btn-primary float-right m-2" href="{{ route('services.edit',$service->id) }}">Update</a>
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Show Services</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEnhealthcare">En Healthcare :</label>
                                        {{ $service->Enhealthcare }}
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEnhealthcare">Ar Healthcare :</label>
                                        {{ $service->Arhealthcare }}
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEnservicename">En Servicename :</label>
                                        {{ $service->Enservicename }}
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputArservicename">Ar Servicename :</label>
                                        {{ $service->Arservicename }}
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEnsubservicename">En Sub Servicename :</label>
                                        {{ $service->Ensubservicename }}
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputArsubsservicename">Ar Sub Servicename :</label>
                                         {{ $service->Arsubservicename }}
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEstimatedtime">Estimate Time For Service :</label>
                                        {{ $service->Estimatedtime }}
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputPrice">Price :</label>
                                        {{ $service->Price }}
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputNewprice">New Price :</label>
                                        {{ $service->Newprice }}
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputGender">Gender :</label>
                                        {{ $service->Gender }}
                                    </div>
                                    <div class="form-group col-md-4">
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