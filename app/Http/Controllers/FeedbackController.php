<?php

namespace App\Http\Controllers;

use App\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function sendFeedback(Request $request)
    {
        \error_log("called");
        $feedBack = new Feedback;
        $feedBack->name = $request->name;
        $feedBack->email = $request->email;
        $feedBack->message = $request->message;

        $feedBack->save();

        return view('welcome');
    }
}