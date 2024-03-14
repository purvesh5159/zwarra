<?php

namespace App\Http\Controllers;
use App\Models\CustomerReview;

use Illuminate\Http\Request;

class CustomerReviewController extends Controller
{
    public function index()
    {
        $reviews = CustomerReview::all();
    
        // Append image URL to each review
        $reviews->transform(function ($review) {
            $review->Image = url('images/' . $review->Image); // Update 'Image' field
            unset($review->image); // Remove 'image' field
            return $review;
        });
    
        return response()->json($reviews);
    }
    
    
}
