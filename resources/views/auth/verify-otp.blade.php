@include('layouts.headermodule')

<body class="hold-transition sidebar-mini zw_sidebar zw_login_form">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <main class="login-form ">
        <!-- otp verification -->
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6 col-sm-6 zw_login_rightbar">
                    <img src="dist/img/login_doctor.jpg" alt="login doctor" class="zw_bg_img">
                    <div class="zw_overlay">
                        <div class="text-center m-4 pt-4">
                            <a href="index3.html" class="">
                                <img src="dist/img/zwaara_login_logo.png" alt="Zwaara Logo" class="" width="100px">
                                <!-- <span class="brand-text font-weight-light">Zwarra Admin Panel</span> -->
                            </a>
                        </div>
                        <div class="text_quote p-3 zw_bor_radi_6">
                            <!-- <div class="quote"><i class="fa fa-quote-left fa-4x"></i></div> -->
                            <div class="quote mb-3">
                                <img src="dist/img/quote.png" alt="Zwaara Quote" class="">
                            </div>
                            <p class="zw_text_ffffff poppins-regular zw_18">In an era of advanced medical capabilities, fostering a culture of preventive healthcare not only enhances individual well-being but also fortifies the foundation of a healthier society, reducing the burden on healthcare systems and promoting longevity.</p>
                            <div class="quote text-right">
                                <img src="dist/img/l_shape.png" alt="Zwaara Quote" class="">
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                // Calculate remaining time for OTP expiration
                $otpExpiration = 120; // 2 minutes in seconds
                if (isset($_SESSION['otp_time'])) {
                    $currentTime = time();
                    $elapsedTime = $currentTime - $_SESSION['otp_time'];
                    $remainingTime = max(0, $otpExpiration - $elapsedTime);
                    $remainingMinutes = floor($remainingTime / 60); // Convert remaining time to minutes and round down
                    $remainingSeconds = $remainingTime % 60; // Calculate remaining seconds
                } else {
                    $remainingTime = $otpExpiration;
                    $remainingMinutes = floor($remainingTime / 60); // Convert remaining time to minutes and round down
                    $remainingSeconds = $remainingTime % 60; // Calculate remaining seconds
                }
                ?>
                <div class="col-lg-7 col-md-6 col-sm-6 zw_bg_f6f6f6">
                    <div class="card zw_login_card zw_login_mtb zw_bg_f6f6f6">
                        <h3 class="poppins-bold zw_30 zw_text_333333">Enter Verification Code</h3>
                        <p class="poppins-regular zw_18 zw_text_000000">Enter code that we have sent to your email </p>
                        <div class="zw_divider"></div>
                        <center>
                            <!-- @if (session('status'))
                            <div>{{ session('status') }}</div>
                            @endif -->

                            @if ($errors->any())
                            <div>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <p>OTP Time: <span id="timer"><?php echo $remainingMinutes; ?> : <?php echo $remainingSeconds; ?> </span></p>
                        </center>

                        <div class="card-body p-0">
                            <form method="POST" action="{{ route('verify.otp') }}">
                                <div class="form-group mt-4">
                                    @csrf
                                    <input type="hidden" id="email" name="email" value="{{ session('email') }}" readonly>
                                    <div class="row zw_row_otp">
                                        <div class="col-3 col-md-3 col-sm-3 col-xs-3">
                                            <input type="text" placeholder="1" maxlength="1" class="form-control poppins-regular zw_18 zw_text_333333 zw_login_form_control text-center" id="otp1" name="otp1">
                                        </div>
                                        <div class="col-3 col-md-3 col-sm-3 col-xs-3">
                                            <input type="text" placeholder="1" maxlength="1" class="form-control poppins-regular zw_18 zw_text_333333 zw_login_form_control text-center" id="otp2" name="otp2">
                                        </div>
                                        <div class="col-3 col-md-3 col-sm-3 col-xs-3">
                                            <input type="text" placeholder="1" maxlength="1" class="form-control poppins-regular zw_18 zw_text_333333 zw_login_form_control text-center" id="otp3" name="otp3">
                                        </div>
                                        <div class="col-3 col-md-3 col-sm-3 col-xs-3">
                                            <input type="text" placeholder="1" maxlength="1" class="form-control poppins-regular zw_18 zw_text_333333 zw_login_form_control text-center" id="otp4" name="otp4">
                                        </div>
                                    </div>
                                </div>

                                <div class="d-grid mx-auto pt-3">
                                    <button type="submit" class="btn zw_btn btn-block p-2">Verify</button>
                                </div>
                            </form>
                            <form method="POST" action="{{ route('resend.otp') }}">
                                @csrf
                                <input type="hidden" id="email" name="email" value="{{ session('email') }}" readonly>
                                <div class="d-grid mx-auto pt-3">
                                    <p class="poppins-regular zw_18 zw_text_000000">Didn’t receive the code? <button class="zw_text_AF2245" type="submit">Resend OTP</button></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        // Countdown timer
        var timeLeft = <?php echo $remainingTime; ?>;
        var timerElement = document.getElementById('timer');

        function countdown() {
            if (timeLeft > 0) {
                timeLeft--;
                var remainingMinutes = Math.floor(timeLeft / 60);
                var remainingSeconds = timeLeft % 60;
                timerElement.innerText = remainingMinutes + " minutes " + remainingSeconds + " seconds";
                setTimeout(countdown, 1000);
            }
        }

        countdown();
    </script>
</body>

</html>