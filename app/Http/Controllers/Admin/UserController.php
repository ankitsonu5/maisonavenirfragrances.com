<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use App\Exports\ContactsExport;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{

    function index()
    {
        $users = User::orderBy('id', 'desc')->paginate(50);
        return view('admin.user.index', compact('users'));
    }




    public function show($userId)
    {
        $user = User::with('addresses', 'orders.orderItems.serviceItem')->findOrFail($userId);
        $totalAddresses = $user->addresses->count();
        $totalOrders = $user->orders->count();

        return view('admin.user.show', compact('user', 'totalAddresses', 'totalOrders'));
    }




    public function contact(Request $request)
    {
        $query = Contact::orderBy('id', 'desc');

        if ($request->has('search') && !empty($request->search)) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('company_name', 'like', "%{$search}%")
                    ->orWhere('contact_number', 'like', "%{$search}%")
                    ->orWhere('country', 'like', "%{$search}%");
            });
        }

        $data = $query->paginate(50)->appends($request->all());

        return view('admin.user.contact', compact('data'));
    }

    public function export()
    {
        return Excel::download(new ContactsExport, 'contacts.xlsx');
    }

    public function contactshow($id)
    {
        $contact = Contact::findOrFail($id);
        return view('admin.user.contact_show', compact('contact'));
    }
}
