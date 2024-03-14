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
                            <a class="btn btn-primary m-2" href="{{ route('offers.index') }}"> Back</a>
                        </div>
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit Offer</h3>
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
                            <form action="{{ route('offers.update',$offer->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputName">Name</label>
                      <input type="text" name="Name"  value="{{ $offer->Name }}" class="form-control" id="exampleInputName" placeholder="Enter Name">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputCode">Code <span style="color: red;">*</span></label>
                      <input type="text" name="Code"  value="{{ $offer->Code }}" class="form-control" id="exampleInputCode" placeholder="Enter Code">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputPercantage">Percantage <span style="color: red;">*</span></label>
                      <input type="text" name="Percantage"  value="{{ $offer->Percantage }}" class="form-control" id="exampleInputPercantage" placeholder="Enter Percantage">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputCount">Count <span style="color: red;">*</span></label>
                      <input type="text" name="Count"  value="{{ $offer->Count }}" class="form-control" id="exampleInputCount" placeholder="Enter Count">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputType">Select Type <span style="color: red;">*</span></label>
                      <select name="Type" class="custom-select">
                      <option value="{{ $offer->Type }}" selected="selected">{{ $offer->Type }}</option>
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputServicename">Service Name <span style="color: red;">*</span></label>
                      <input type="text" name="Servicename" value="{{ $offer->Servicename }}" class="form-control" id="exampleInputServicename" placeholder="Enter Servicename">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputSubservicename">Select Sub Servicename <span style="color: red;">*</span></label>
                      <select name="Subservicename" class="custom-select">
                      <option value="{{ $offer->Subservicename }}" selected="selected">{{ $offer->Subservicename }}</option>
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputHealthcare">Select Healthcare <span style="color: red;">*</span></label>
                      <select name="Healthcare" class="custom-select">
                      <option value="{{ $offer->Healthcare }}" selected="selected">{{ $offer->Healthcare }}</option>
                      <option>Badralhema for homecare</option>
                        <option>Motmaen medical service co</option>
                        <option>Warred care</option>
                        <option>Home made clinics</option>
                        <option>Dr.Bassam medical center</option>
                        <option>Anfas medical care hospital</option>
                        <option>Healthcare</option>
                      </select>
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