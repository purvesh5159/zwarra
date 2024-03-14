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
                    <a class="btn btn-primary m-2" href="{{ route('medicalspecialties.index') }}"> Back</a>
                    <a class="btn btn-primary float-right m-2" href="{{ route('medicalspecialties.edit',$medicalspecialty->id) }}">Update</a>
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Show MedicalSpecialties</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputLogo">Logo :</label>
                                        <img src="{{ asset($medicalspecialty->Logo) }}" height="100" width="100"/>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEnname">En name :</label>
                                        {{ $medicalspecialty->Enname }}
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputArname">Ar name :</label>
                                        {{ $medicalspecialty->Arname }}
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEndescription">En Description :</label>
                                        {{ $medicalspecialty->Estimatedtime }}
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputStatus">Status :</label>
                                        {{ $medicalspecialty->Status }}
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