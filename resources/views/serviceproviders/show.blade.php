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
        <a class="btn zw_btn m-2" href="{{ route('serviceproviders.index') }}"> Back</a>
        <a class="btn zw_btn float-right m-2" href="{{ route('serviceproviders.edit',$serviceprovider->id) }}">Update</a>
        <!-- left column -->
        <div class="col-md-12">
        
            <h3 class="poppins-semibold zw_34 zw_text_AF2245 mt-4 mb-4">Healthcare</h3>

            <!-- general form elements -->
            <div class="card">
                <!-- <div class="card-header">
                    <h3 class="card-title">Show Service Providers</h3>
                </div> -->
                <!-- /.card-header -->
                <!-- form start -->
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-4 zw_18 poppins-medium">
                            <label for="exampleInputErname" class="zw_text_AF2245 poppins-bold">En name :</label>
                            {{ $serviceprovider->Enname }}
                        </div>
                        <div class="form-group col-md-4 zw_18 poppins-medium">
                            <label for="exampleInputErname" class="zw_text_AF2245 poppins-bold">Ar name :</label>
                            {{ $serviceprovider->Arname }}
                        </div>
                        <div class="form-group col-md-4 zw_18 poppins-medium">
                            <label for="exampleInputEmail1" class="zw_text_AF2245 poppins-bold">Start time :</label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4 zw_18 poppins-medium">
                            <label for="exampleInputEmail1" class="zw_text_AF2245 poppins-bold">Email :</label>
                            {{ $serviceprovider->Email }}
                        </div>
                        <div class="form-group col-md-4 zw_18 poppins-medium">
                            <label for="exampleInputphone" class="zw_text_AF2245 poppins-bold">Phone :</label>
                            {{ $serviceprovider->Phone }}
                        </div>
                        <div class="form-group col-md-4 zw_18 poppins-medium">
                            <label for="exampleInputEmail1" class="zw_text_AF2245 poppins-bold">End time :</label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4 zw_18 poppins-medium">
                            <label for="exampleInputEmail1" class="zw_text_AF2245 poppins-bold">Role :</label>
                            Zwarra
                        </div>
                        <div class="form-group col-md-4 zw_18 poppins-medium">
                            <label for="exampleInputphone" class="zw_text_AF2245 poppins-bold">Status :</label>
                            Approved
                        </div>
                        <div class="form-group col-md-4 zw_18 poppins-medium">
                            <label for="exampleInputEmail1" class="zw_text_AF2245 poppins-bold">Date Available :</label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4 zw_18 poppins-medium">
                            <label for="exampleInputEmail1" class="zw_text_AF2245 poppins-bold">Cr number :</label>
                        </div>
                        <div class="form-group col-md-4 zw_18 poppins-medium">
                            <label for="exampleInputphone" class="zw_text_AF2245 poppins-bold">Vat :</label>
                            {{ $serviceprovider->vat }}
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
        <div class="content-wrapper">

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
        <h3 class="poppins-semibold zw_34 zw_text_AF2245 mt-4 mb-4">Attachments</h3>
            <!-- general form elements -->
            <!-- <div class="card zw_card"> -->
                <!-- <div class="card-header">
                    <h3 class="card-title">Attachments</h3>
                </div> -->
                <div class="card-deck row">
                    <!-- First Card -->
                    <div class="card col-md-2 zw_card">
                        <div class="card-title  mb-3">
                            <h6 class="card-subtitle mt-2 text-center poppins-medium zw_16 zw_text_333333">Logo</h6>
                        </div>
                        <div class="card-body zw_box_shadow">
                            <img class="center-block img-fluid" src="{{ asset($serviceprovider->Logo_url) }}" height="" width="auto" />
                        </div>
                    </div>
                    <!-- Second Card -->
                    <div class="card col-md-3 zw_card">
                        <div class="card-title mb-3">
                            <h6 class="card-subtitle mt-2 text-center poppins-medium zw_16 zw_text_333333">Upload Ministry Health Licence</h6>
                        </div>
                        <div class="card-body zw_bg_f7e9ec zw_bor_radi_6">
                            <a class="btn zw_pdf_btn zw_pdfbtn_bg poppins-medium zw_18" href="{{ asset($serviceprovider->Healthlicence_url) }}" style="width:100%">
                                <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-pdf" viewBox="0 0 16 16">
                                    <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1"></path>
                                    <path d="M4.603 12.087a.8.8 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.7 7.7 0 0 1 1.482-.645 20 20 0 0 0 1.062-2.227 7.3 7.3 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a11 11 0 0 0 .98 1.686 5.8 5.8 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.86.86 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.7 5.7 0 0 1-.911-.95 11.6 11.6 0 0 0-1.997.406 11.3 11.3 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.8.8 0 0 1-.58.029m1.379-1.901q-.25.115-.459.238c-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361q.016.032.026.044l.035-.012c.137-.056.355-.235.635-.572a8 8 0 0 0 .45-.606m1.64-1.33a13 13 0 0 1 1.01-.193 12 12 0 0 1-.51-.858 21 21 0 0 1-.5 1.05zm2.446.45q.226.244.435.41c.24.19.407.253.498.256a.1.1 0 0 0 .07-.015.3.3 0 0 0 .094-.125.44.44 0 0 0 .059-.2.1.1 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a4 4 0 0 0-.612-.053zM8.078 5.8a7 7 0 0 0 .2-.828q.046-.282.038-.465a.6.6 0 0 0-.032-.198.5.5 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822q.036.167.09.346z"></path>
                                </svg> -->
                                <span style="float : left"> PDF</span>
                                <span>Download  PDF</span>
                               
                            </a>
                        </div>
                    </div>

                    <!-- Three Card -->
                    <div class="card col-md-3 zw_card">
                        <div class="card-title mb-3">
                            <h6 class="card-subtitle mt-2 text-center poppins-medium zw_16 zw_text_333333">Upload Commerical Licence</h6>
                        </div>
                        <div class="card-body zw_bg_f7e9ec zw_bor_radi_6">
                            <a class="btn zw_pdf_btn zw_pdfbtn_bg poppins-medium zw_18" href="{{ asset($serviceprovider->Comcerregister_url) }}">
                                <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-pdf" viewBox="0 0 16 16">
                                    <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1"></path>
                                    <path d="M4.603 12.087a.8.8 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.7 7.7 0 0 1 1.482-.645 20 20 0 0 0 1.062-2.227 7.3 7.3 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a11 11 0 0 0 .98 1.686 5.8 5.8 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.86.86 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.7 5.7 0 0 1-.911-.95 11.6 11.6 0 0 0-1.997.406 11.3 11.3 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.8.8 0 0 1-.58.029m1.379-1.901q-.25.115-.459.238c-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361q.016.032.026.044l.035-.012c.137-.056.355-.235.635-.572a8 8 0 0 0 .45-.606m1.64-1.33a13 13 0 0 1 1.01-.193 12 12 0 0 1-.51-.858 21 21 0 0 1-.5 1.05zm2.446.45q.226.244.435.41c.24.19.407.253.498.256a.1.1 0 0 0 .07-.015.3.3 0 0 0 .094-.125.44.44 0 0 0 .059-.2.1.1 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a4 4 0 0 0-.612-.053zM8.078 5.8a7 7 0 0 0 .2-.828q.046-.282.038-.465a.6.6 0 0 0-.032-.198.5.5 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822q.036.167.09.346z"></path>
                                </svg> -->
                                <span style="float : left"> PDF</span>
                                <span>Download  PDF</span>
                            </a>
                        </div>
                    </div>
                    <!-- forth Card -->
                    <div class="card col-md-4 zw_card">
                        <div class="card-title mb-3">
                            <h6 class="card-subtitle mt-2 text-center poppins-medium zw_16 zw_text_333333">Upload Vat Registration Licence</h6>
                        </div>
                        <div class="card-body zw_bg_f7e9ec zw_bor_radi_6">
                            <a class="btn zw_pdf_btn zw_pdfbtn_bg poppins-medium zw_18" href="{{ asset($serviceprovider->Regcertificate_url) }}">
                            <span style="float : left"> PDF</span>
                                <span>Download  PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
            <!-- </div> -->
            <!-- /.card -->
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
    </div>
    </section>
    </div>
    @include('layouts.footer')
    </div>
</body>
</html>