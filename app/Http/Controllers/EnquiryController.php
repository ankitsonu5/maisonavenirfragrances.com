<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\Request;
use App\Exports\EnquiriesExport;
use Maatwebsite\Excel\Facades\Excel;

class EnquiryController extends Controller
{

    public function index(Request $request)
    {
        $query = Enquiry::orderBy('created_at', 'desc');

        if ($request->has('search') && !empty($request->search)) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('contact_number', 'like', "%{$search}%")
                    ->orWhere('gender', 'like', "%{$search}%");
            });
        }

        $enquiries = $query->paginate(10)->appends($request->all());

        return view('admin.enquiry.index', compact('enquiries'));
    }

    public function export(Request $request)
    {
        return Excel::download(new EnquiriesExport($request->search), 'enquiries.xlsx');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'contact_number' => 'required|string|max:15',
            'age' => 'required|integer',
            'gender' => 'required|string|max:10',
        ]);

        Enquiry::create($request->all());

        return redirect()->back()->with('success', 'Enquiry submitted successfully!');
    }

    public function destroy($id)
    {
        $enquiry = Enquiry::findOrFail($id);
        $enquiry->delete();

        return redirect()->back()->with('success', 'Enquiry deleted successfully!');
    }
    public function show($id)
    {
        $enquiry = Enquiry::findOrFail($id);
        return view('admin.enquiry.show', compact('enquiry'));
    }
}
