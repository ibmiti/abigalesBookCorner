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

      // Creating Product
      public function store(Request $request){

        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'description' => 'required|string',
        //     'image' => 'required|string',
        //     'price' => 'required|numeric',
        //     'type' => 'required|string',
        //     'sale' => 'boolean',
        //      'source' => 'required|string',
        // ]);

        $expectedProductTypes = ['book', 'general'];
        if (!in_array($request->type, $expectedProductTypes) ){
            return back()->with('failure', 'Expected product type not given, please try again.');
        }

        $product = new Products;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->image = $request->image;
        $product->price = $request->price;
        $product->type = $request->type;
        $product->source = $request->source;

        $product->save();
        // direct to product edit page
        return view('ecommerce.editProducts')->with('success', 'Product created successfully.');
    }

    // View with list of products, which can be edited
    public function showEditPage(){
        $productsToEdit = Products::latest()->get();
        return view('ecommerce.editProducts', ['products' => $productsToEdit]);
    }

    // View containing individual product, which can be updated,deleted
    public function showProductToBeEdited($productId)
    {
        $product = Products::find($productId);
        return view('ecommerce.edit', ['product'=> $product]);
    }

 /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $productId)
    {
        // Find target product in db
        $storedProductToBeEdited = Products::find($productId);

        // Protect db from bad data; check type field against below expected types
        $expectedProductTypes = ['book', 'general'];
        if (!in_array($request->type, $expectedProductTypes) ){
            return back()->with('failure', 'Expected product type not given, please try again.');
        }

    // Check for null fields, if field null, retain previous data
    //  1 If form field null, recall prev fields data and resave.
        $storedProductToBeEdited->name = $request->name ?? $storedProductToBeEdited->name;
        $storedProductToBeEdited->description = $request->description ?? $storedProductToBeEdited->description;
        $storedProductToBeEdited->image = $request->image ?? $storedProductToBeEdited->image;
        $storedProductToBeEdited->price = $request->price ?? $storedProductToBeEdited->price;
        $storedProductToBeEdited->type = $request->type ?? $storedProductToBeEdited->type;
        $storedProductToBeEdited->sale = (boolean)$request->sale ?? (boolean)$storedProductToBeEdited->sale;
    // Update target product with current product
        try {
            $storedProductToBeEdited->save();
            return back()->with('success', 'Successfully updated product');
        } catch (\Exception $e) {
            return back()->with('failure', 'did not update');
        }
    }

    public function delete($productId){
        $productToDelete = Products::find($productId);
        $productToDelete->delete();
        return view('ecommerce.admin')->with('success', 'Successfully deleted product');
    }



}
