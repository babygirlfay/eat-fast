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
    public function allComplaint()
    {
        $complaints = Complaint::where('user_id','=', Auth::user()->id  )->latest()->get();

        return view('all-complaint', compact('complaints'));
    }

    //
}
