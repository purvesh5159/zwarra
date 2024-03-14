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
                    <a class="btn btn-primary m-2" href="{{ route('ourservices.index') }}"> Back</a>
                    <a class="btn btn-primary float-right m-2" href="{{ route('ourservices.edit',$ourservice->id) }}">Update</a>
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Show Main Services</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputLogo">Logo :</label>
                                        <img src="{{ asset($ourservice->Logo) }}" height="100" width="100"/>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEnname">En name :</label>
                                        {{ $ourservice->Enname }}
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputArname">Ar name :</label>
                                        {{ $ourservice->Arname }}
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEndescription">En Description :</label>
                                        {{ $ourservice->Endescription }}
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputArdescription">Ar Description :</label>
                                        {{ $ourservice->Ardescription }}
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputStatus">Status :</label>
                                        {{ $ourservice->Status }}
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