<?php

namespace App\Http\Controllers;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;
use App\Mail\SubscriptionConfirmation; // Add this line to import the Mailable class

class SubscriptionController extends Controller
{
    public function index(){
        $sub = Subscription::all();
        return response()->json($sub);
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|email|unique:subscriptions',
            ]);
    
            $subscription = new Subscription();
            $subscription->email = $request->email;
            $subscription->save();
    
            // Send email to the subscription email address
            Mail::to($subscription->email)->send(new SubscriptionConfirmation()); // Use the correct Mailable class name
    
            return response()->json([
                'message' => 'Subscription successful! Email sent.',
                'success' => true,
            ], 201);
        } catch (ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $e->errors(),
            ], 200);
        }
    }
}
