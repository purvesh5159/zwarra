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
                    <a class="btn zw_btn m-2" href="{{ route('complaints.index') }}"> Back</a>
                    <a class="btn zw_btn float-right m-2" href="{{ route('complaints.edit',$complaint->id) }}">Update</a>
                    <!-- left column -->
                    <div class="col-md-12">

                        <h3 class="poppins-semibold zw_34 zw_text_AF2245 mt-4 mb-4">Complaints</h3>

                        <!-- general form elements -->
                        <div class="card">
                            <!-- <div class="card-header">
                    <h3 class="card-title">Show Service Providers</h3>
                </div> -->
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-6 zw_18 poppins-medium">
                                        <label for="exampleInputName" class="zw_text_AF2245 poppins-bold">Name :</label>
                                        {{ $complaint->Name }}
                                    </div>
                                    <div class="form-group col-md-6 zw_18 poppins-medium">
                                        <label for="exampleInputIssues" class="zw_text_AF2245 poppins-bold">Issues :</label>
                                        {{ $complaint->Issues }}
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6 zw_18 poppins-medium">
                                        <label for="exampleInputPhone" class="zw_text_AF2245 poppins-bold">Phone :</label>
                                        {{ $complaint->Phone }}
                                    </div>
                                    <div class="form-group col-md-6 zw_18 poppins-medium">
                                        <label for="exampleInputEmail" class="zw_text_AF2245 poppins-bold">Email :</label>
                                        {{ $complaint->Email }}
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