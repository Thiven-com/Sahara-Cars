<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Enquiry;

class EnquiryController extends Controller
{
    public function index()
    {
        $enquiries = Enquiry::with('car')
            ->latest()
            ->paginate(20);

        return view('admin.enquiries.index', compact('enquiries'));
    }

    public function show(Enquiry $enquiry)
    {
        return view('admin.enquiries.show', compact('enquiry'));
    }

    public function destroy(Enquiry $enquiry)
    {
        $enquiry->delete();

        return back()->with('success', 'Enquiry deleted successfully.');
    }
}
