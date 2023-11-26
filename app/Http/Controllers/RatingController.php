<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;
use Session;
use Auth;

class RatingController extends Controller
{
    public function ratings(Request $request)
    {
        Session::put('page','ratings');
        $ratings = Rating::with(['user','product'])->paginate(10);
        return view('admin.ratings', compact('ratings'));
    }

    public function updateRatingStatus(Request $request)
    {
        if ($request->ajax()) {
            $data = $request->all();
            if ($data['status']== 'Active') {
                $status = 0;
            } else {
                $status = 1;
            }
            Rating::where('id', $data['rating_id'])->update(['status'=> $status]);
            return response()->json(['status' => $status, 'rating_id' => $data['rating_id']]);
        }
    }

    public function addRating(Request $request)
    {
        if ($request->isMethod('POST')) {
            if (!Auth::check()) {
                $message = "Login is required to Rate this Product...!";
                return redirect()->back()->with('error', $message);
            }
            $data               = $request->all();
            $rating             = new Rating();
            $rating->user_id    = auth()->user()->id;
            $rating->product_id = $data['product_id'];
            $rating->title      = $data['title'];
            $rating->category   = $data['category'];
            $rating->review     = $data['review'];
            $rating->rating     = $data['rate'];
            $rating->status     = $data['status'];
            $rating->save();
            return redirect()->back()->with('success', 'Your Feedback is added successfully...!');
        }
    }
}
