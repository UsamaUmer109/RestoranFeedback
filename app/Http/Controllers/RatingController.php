<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;
use Session;

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
}
