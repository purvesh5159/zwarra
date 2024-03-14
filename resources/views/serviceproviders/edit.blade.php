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
                            <a class="btn btn-primary m-2" href="{{ route('serviceproviders.index') }}"> Back</a>
                        </div>
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit serviceprovider</h3>
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
                            <form action="{{ route('serviceproviders.update',$serviceprovider->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputErname">En name</label>
                                            <input type="text" name="Enname" value="{{ $serviceprovider->Enname }}" class="form-control" id="exampleInputErname" placeholder="Enter er name">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputarname">Ar name</label>
                                            <input type="text" name="Arname" value="{{ $serviceprovider->Arname }}" class="form-control" id="exampleInputarname" placeholder="Enter ar name">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" name="Email" value="{{ $serviceprovider->Email }}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" name="Password" value="{{ $serviceprovider->Password }}" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputphone">Phone</label>
                                            <input type="phone" name="Phone" value="{{ $serviceprovider->Phone }}" class="form-control" id="exampleInputphone" placeholder="Enter phone">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputcommerticalregisternumber">Commerical register number</label>
                                            <input type="phone" name="Crnumber"  value="{{ $serviceprovider->Crnumber }}" class="form-control" id="exampleInputcommerticalregisternumber" placeholder="Enter commerical register numbe">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputcity">Select city</label>
                                            <select name="City" class="custom-select">
                                            <option value="{{ $serviceprovider->City }}" selected="selected">{{ $serviceprovider->City }}</option>
                                                <option>option 1</option>
                                                <option>option 2</option>
                                                <option>option 3</option>
                                                <option>option 4</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputcountrycode">Country code</label>
                                            <input type="text" name="Countrycode"  value="{{ $serviceprovider->Countrycode }}" class="form-control" id="exampleInputcountrycode" placeholder="Enter country code">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputvat">Vat</label>
                                            <input type="text" name="Vat"  value="{{ $serviceprovider->vat }}" class="form-control" id="exampleInputvat" placeholder="Enter vat">
                                        </div>
                                    </div>
                                    <!-- <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputvatcertificate">Upload vat registration certificate</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="exampleInputvatcertificate">
                                                    <label class="custom-file-label" for="exampleInputvatcertificate">Choose file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputlogo">Upload logo</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="exampleInputlogo">
                                                    <label class="custom-file-label" for="exampleInputlogo">Choose file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputcomregister">Upload commercial register</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="exampleInputcomregister">
                                                    <label class="custom-file-label" for="exampleInputcomregister">Choose file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="form-row">
                                        <!-- <div class="form-group col-md-4">
                                            <label for="exampleInputhealthlicence">Upload ministry health licence</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="exampleInputhealthlicence">
                                                    <label class="custom-file-label" for="exampleInputhealthlicence">Choose file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputtypeofservice">Type of service</label>
                                            <select name="Typeofservice" class="custom-select">
                                            <option value="{{ $serviceprovider->Financialshare }}" selected="selected">{{ $serviceprovider->Typeofservice }}</option>
                                                <option>option 1</option>
                                                <option>option 2</option>
                                                <option>option 3</option>
                                                <option>option 4</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputfinancialsahre">Financial share</label>
                                            <input type="text" name="Financialshare"  value="{{ $serviceprovider->Financialshare }}" class="form-control" id="exampleInputfinancialsahre" placeholder="Enter Financial share">
                                        </div>
                                        <div class="form-group col-md-4">
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