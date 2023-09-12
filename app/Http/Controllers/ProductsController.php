<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Products;

class ProductsController extends Controller
{

    // index route 1 (1 of n)
    public function showBookProducts(){
        try {
            $bookProducts = Products::where('type', 'book')->latest()->get();
            return view('ecommerce.books', [
                'bookProducts' => $bookProducts
            ]);
        } catch (\Exception $e) {
            error_log('An exception occurred: ' . $e->getMessage());

            // Add an error flash message to the session
            session()->flash('error', 'An error occurred: ' . $e->getMessage());

            // Email support email when error occurs
              // Compose the error message
            $errorMessage = "Error Message: " . $e->getMessage() . "\n";
            $errorMessage .= "File: " . $e->getFile() . "\n";
            $errorMessage .= "Line: " . $e->getLine() . "\n";
            $errorMessage .= "Trace: " . $e->getTraceAsString();

            // Send an email with the error message
            $to = "support@ofroot.technology";
            $subject = "Error Notification: AbigalesBookCorner";
            $headers = "From: support@ofroot.technology";
            $message = $errorMessage;

            // Use the mail() function to send the email
            $mailSent = mail($to, $subject, $message, $headers);

            if ($mailSent) {
                echo "Error notification email sent successfully.";
            } else {
                echo "Failed to send error notification email.";
            }

            // Redirect back with the error flash message
            return back();
        }
    }

    // index route 2 (2 of n)
    public function showGeneralProducts(){
        try {
            $generalProducts = Products::where('type','general')->latest()->get();
            return view('ecommerce.general', ['generalProducts' => $generalProducts]);
        } catch (\Exception $e){
            session()->flash('error', 'An error occurred: ' . $e->getMessage());

            // Redirect back with the error flash message
            return back();
        }

    }



}
