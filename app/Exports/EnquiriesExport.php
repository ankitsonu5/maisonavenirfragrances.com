<?php

namespace App\Exports;

use App\Models\Enquiry;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class EnquiriesExport implements FromCollection, WithHeadings, WithMapping
{
    protected $search;

    public function __construct($search = null)
    {
        $this->search = $search;
    }

    public function collection()
    {
        $query = Enquiry::orderBy('created_at', 'desc');

        if (!empty($this->search)) {
            $search = $this->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('contact_number', 'like', "%{$search}%")
                  ->orWhere('gender', 'like', "%{$search}%");
            });
        }

        return $query->get();
    }

    public function headings(): array
    {
        return ['Name', 'Email', 'Contact Number', 'Age', 'Gender', 'Date'];
    }

    public function map($enquiry): array
    {
        return [
            $enquiry->name,
            $enquiry->email,
            $enquiry->contact_number,
            $enquiry->age,
            ucfirst($enquiry->gender),
            $enquiry->created_at ? $enquiry->created_at->format('d-m-Y H:i') : '',
        ];
    }
}
