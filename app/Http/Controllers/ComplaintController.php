<?php

namespace App\Http\Controllers;

use App\Complaint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComplaintController extends Controller
{
    public function addComplaint()
    {
     return view('add-complaint');
    }
    public function uploadComplaint(Request $request)
    {

        $complaint = new Complaint();
        $complaint->title = $request->title;
        $complaint->message = $request->message;
        $complaint->user_id = Auth::user()->id;
        $complaint->save();
        return back();
    }


    //
}
