<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

Class FeedbackController extends Controller
{
    public function create ()
    {
        return view('feedback.form');
    }

    public function send (Request $request)

    {
        $request->validate([
            'fullname' => 'required',
            'email' => 'required|email',
            'comment' => 'required'
        ]);

        $fullname = $request->input('fullname');
        $email = $request->input('email');
        $comment = $request->input('comment');

    public function messages()
    {
        return [
            'fullname.required' => 'Please enter your full name.',
            'email.required' => 'Please enter a valid email address.',
            'comment.required' => 'Please enter your feedback.'
        ];
    }
}