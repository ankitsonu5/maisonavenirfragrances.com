<?php

namespace App\Http\Controllers;

use App\Mail\ContactCreatedMail;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'company_name' => 'nullable|string|max:255',
            'contact_number' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'enquiry' => 'required|string',
            'country' => 'required|string',
        ]);

        $contact = Contact::create($request->all());
        Mail::to('info@maisonavenirfragrances.com')->send(new ContactCreatedMail($contact));
        return back()->with('success', 'Your enquiry has been submitted successfully.');
    }



    public function index()
    {
        $contacts = Contact::orderBy('id', 'desc')->paginate(10);
        return view('admin.contact.index', compact('contacts'));
    }





    public function thankyou()
    {

        return view('website.pages.thankyou');
    }
}
