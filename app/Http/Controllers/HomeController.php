<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    // On home view return these things
    public function index(){
        $latestBooks = Products::where('type', 'book')->latest()->take(4)->get();
        $latestGeneralProducts = Products::where('type','general')->latest()->take(4)->get(); // Merch
        return view('welcome', compact('latestBooks', 'latestGeneralProducts'));
    }

    // Handle email
    public function sendEmail(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // $to = 'abby.mcdaniel44@gmail.com'; // Change this to the recipient's email address
        // $subject = 'Message from ' . $request->name;
        // $headers = "From: " . $request->email;
        // $mail = new PHPMailer(true);

    }
}
