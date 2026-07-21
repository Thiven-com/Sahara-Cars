<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Enquiry;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'car_id' => 'required',
            'name' => 'required',
            'mobile' => 'required',
        ]);

        Enquiry::create($request->all());

        return back()->with('success', 'Your enquiry has been submitted successfully.');
    }

    public function contactStore(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'mobile' => 'required|digits_between:10,15',
            'email' => 'nullable|email',
            'message' => 'nullable|string',
        ]);

        Contact::create([
            'name' => $request->name,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        return back()->with('success', 'Thank you! We will contact you shortly.');
    }
}