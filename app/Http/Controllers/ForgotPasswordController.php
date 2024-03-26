<?php 
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use SadiqSalau\LaravelOtp\Facades\Otp;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use SadiqSalau\LaravelOtpPassword\Facades\OtpPassword;
use Sadiqsalau\Otp\OtpVerification;

class ForgotPasswordController extends Controller
{
    public function showForgotPasswordForm()
    {
        return view('auth.forgot-password');
    }

    public function sendOTP(Request $request)
    {
        $_SESSION['otp_time'] = time();
        $request->validate(['email' => 'required|email']);

        $status = OtpPassword::sendOTP(
            $request->only('email')
        );

        return $status === OtpPassword::OTP_SENT
        ? redirect()->route('verify.otp')->with('status', trans($status))->with(['email' => $request->email])
        : back()->withErrors(['email' => trans($status)]);
    }

    public function showOTPVerificationForm()
    {
        return view('auth.verify-otp');
    }

    public function verifyOTP(Request $request)
    {
        $request->validate([
          //  'email' => 'required|email',
            'otp1' => 'required',
            'otp2' => 'required',
            'otp3' => 'required',
            'otp4' => 'required',
        ]);


 // Retrieve entered OTP digits
        $otpDigits = [
            $request->otp1,
            $request->otp2,
            $request->otp3,
            $request->otp4
        ];

    // Combine entered OTP digits
        $enteredOTP = implode("", $otpDigits);
       // $credentials = $request->only('email', 'otp');
       // $isValidOTP = Otp::matchOTP($credentials);
        $isValidOTP = Otp::identifier($request->email)->attempt($enteredOTP);

        if($isValidOTP['status'] != Otp::OTP_PROCESSED){
           // abort(403, __($isValidOTP['status']));
            return back()->withErrors(['otp' => 'Invalid OTP. Please try again.'])->with('email', $request->email);
        }
        else{
            return redirect()->route('reset.password')->with('email', $request->email);
        }
    }

    public function showResetPasswordForm(Request $request)
    {
        $email = $request->session()->get('email');
        return view('auth.reset-password', compact('email'));
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ]);

        $status = OtpPassword::reset(
            $request->only(
                'email',
                'password',
                'password_confirmation'
            ),
            function ($user) use ($request) {
                $user->forceFill([
                    'password' => Hash::make($request->password),
                    'remember_token' => Str::random(60),
                ])->save();

                event(new PasswordReset($user));
            }
        );

        return $status === OtpPassword::PASSWORD_RESET
        ? redirect()->route('login')->with('status', trans($status))
        : back()->withErrors(['email' => [trans($status)]]);
    }

    public function resendOTP(Request $request)
    {
      $_SESSION['otp_time'] = time();
      $request->validate([
       // 'email'    => ['required', 'string', 'email', 'max:255']
      ]);

      $otp = Otp::identifier($request->email)->update();

      if($otp['status'] != Otp::OTP_SENT){
         //abort(403, __($otp['status']));
         // Failed to generate OTP, notify user
        return Redirect::back()->withErrors(['error' => 'Failed to resend OTP. Please try again later.'])->with('email', $request->email);
    }
    else{
         // return __($otp['status']);
         // OTP generated successfully, notify user
        return Redirect::back()->with('success', 'New OTP has been sent to your email.')->with('email', $request->email);

    }
}
}
