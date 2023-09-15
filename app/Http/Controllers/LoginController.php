<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function process(Request $request)
    {
        // Retrieve the email and password from the form submission
        $email = $request->input('email');
        $password = $request->input('password');

        // Perform any desired actions with the email and password data
        // For example, you can send an email or save it to the database
        if($email==='abby.mcdaniel44@gmail.com' && $password==='trinket'){
            return view('dashboard');
        }

        // Return a response or redirect to a success page
        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}
