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
                    <!-- left column -->
                    <div class="col-md-12">
                        <div class="pull-right">
                            <a class="btn btn-primary m-2" href="{{ route('ourservices.index') }}"> Back</a>
                        </div>
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit Main Service</h3>
                            </div>
                            <!-- /.card-header -->
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <!-- form start -->
                            <form action="{{ route('ourservices.update',$ourservice->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEnname">En name</label>
                                            <input type="text" name="Enname" value="{{ $ourservice->Enname }}" class="form-control" id="exampleInputEnhealthcare" placeholder="Enter En Healthcare">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputArname">Ar name <span style="color: red;">*</span></label>
                                            <input type="text" name="Arname" value="{{ $ourservice->Arname }}" class="form-control" id="exampleInputArhealthcare" placeholder="Enter Ar Healthcare">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEndescriptione">En description <span style="color: red;">*</span></label>
                                            <textarea name="Endescription" class="form-control" id="exampleInputEndescription" rows="4" placeholder="Enter En Description">{{ $ourservice->Endescription }} </textarea>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputArdescription">Ar description <span style="color: red;">*</span></label>
                                            <textarea name="Ardescription" class="form-control" id="exampleInputArdescription" rows="4" placeholder="Enter Ar Description">{{ $ourservice->Ardescription }} </textarea>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputStatus">Status <span style="color: red;">*</span></label>
                                            <input type="radio" name="Status" value="" class="form-control" id="exampleInputStatus" placeholder="Status">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
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