<x-admin-layout>

    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title text-capitalize pe-3">Contact Detail</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="#"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">List</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">


            </div>
        </div>
    </div>
    <!--end breadcrumb-->


    <div class="card">

        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="mb-0">Enquiry Details</h4>
                <a href="{{ route('admin.contact.detail') }}" class="btn btn-secondary">Back</a>
            </div>
            <table class="table table-bordered">
                <tr>
                    <th>Name</th>
                    <td>{{ $contact->name }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $contact->email }}</td>
                </tr>
                <tr>
                    <th>Company Name</th>
                    <td>{{ $contact->company_name }}</td>
                </tr>
                <tr>
                    <th>Contact Number</th>
                    <td>{{ $contact->contact_number }}</td>
                </tr>
                <tr>
                    <th>Enquiry</th>
                    <td>{{ $contact->enquiry }}</td>
                </tr>
                <tr>
                    <th>Country</th>
                    <td>{{ $contact->country }}</td>
                </tr>
                <tr>
                    <th>Date Submitted</th>
                    <td>{{ $contact->created_at->format('d-m-Y H:i') }}</td>
                </tr>
            </table>


        </div>
    </div>


</x-admin-layout>
