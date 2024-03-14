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
                    <a class="btn btn-primary m-2" href="{{ route('subservices.index') }}"> Back</a>
                    <a class="btn btn-primary float-right m-2" href="{{ route('subservices.edit',$subservice->id) }}">Update</a>
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Show Sub Services</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputLogo">Logo :</label>
                                        <img src="{{ asset($subservice->Logo) }}" height="100" width="100"/>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEnname">En name :</label>
                                        {{ $subservice->Enname }}
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputArname">Ar name :</label>
                                        {{ $subservice->Arname }}
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEndescription">En Description :</label>
                                        {{ $subservice->Endescription }}
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputArdescription">Ar Description :</label>
                                        {{ $subservice->Ardescription }}
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputService">Service :</label>
                                        {{ $subservice->Service }}
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputServicetype">Service Type :</label>
                                        {{ $subservice->Servicetype }}
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEninstrucation">En Instrucation :</label>
                                        {{ $subservice->Eninstrucation }}
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputArinstrucation">Ar Instrucation :</label>
                                        {{ $subservice->Arinstrucation }}
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEntitle">En available test title :</label>
                                        {{ $subservice->Entitle }}
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputArinstrucation">Ar available test title :</label>
                                        {{ $subservice->Artitle }}
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputPrice">Price :</label>
                                        {{ $subservice->Price }}
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputHealthcare">Healthcare :</label>
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