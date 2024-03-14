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
                            <a class="btn btn-primary m-2" href="{{ route('doctorpositions.index') }}"> Back</a>
                        </div>
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit Doctor Position</h3>
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
                            <form action="{{ route('doctorpositions.update',$doctorposition->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEnname">En name</label>
                                            <input type="text" name="Enname" value="{{ $doctorposition->Enname }}" class="form-control" id="exampleInputEnname" placeholder="Enter Enname">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputArname">Ar name <span style="color: red;">*</span></label>
                                            <input type="text" name="Arname" value="{{ $doctorposition->Arname }}" class="form-control" id="exampleInputArname" placeholder="Enter Arname">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputPrice">Price <span style="color: red;">*</span></label>
                                            <input type="text" name="Price" value="{{ $doctorposition->Price }}" class="form-control" id="exampleInputPrice" placeholder="Enter Price">
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