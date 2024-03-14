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
                    <a class="btn btn-primary m-2" href="{{ route('doctorrequest.index') }}"> Back</a>
                    <a class="btn btn-primary float-right m-2" href="{{ route('doctorrequest.edit',$doctorrequest->id) }}">Update</a>
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Show Join Doctor Requests</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputErname">En name :</label>
                                        {{ $doctorrequest->Enname }}
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputErname">Ar name :</label>
                                        {{ $doctorrequest->Arname }}
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Email :</label>
                                        {{ $doctorrequest->Email }}
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputPhone">Phone :</label>
                                        {{ $doctorrequest->Phone }}
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputYearofexp">Year Of Experience :</label>
                                        {{ $doctorrequest->Yearofexp }}
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputPosition">Doctor Position :</label>
                                        {{ $doctorrequest->Position }}
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputMedicalspec">Medical Specialties :</label>
                                        {{ $doctorrequest->Medicalspec }}
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