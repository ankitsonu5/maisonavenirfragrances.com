<?php

namespace App\Exports;

use App\Models\Contact;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ContactsExport implements FromCollection, WithHeadings, WithMapping
{
    public function collection()
    {
        return Contact::orderBy('id', 'desc')->get();
    }

    public function headings(): array
    {
        return [
            'Name',
            'Email',
            'Company Name',
            'Contact Number',
            'Enquiry',
            'Country',
            'Date Submitted'
        ];
    }

    public function map($contact): array
    {
        return [
            $contact->name,
            $contact->email,
            $contact->company_name,
            $contact->contact_number,
            $contact->enquiry,
            $contact->country,
            $contact->created_at ? $contact->created_at->format('d-m-Y H:i') : ''
        ];
    }
}
