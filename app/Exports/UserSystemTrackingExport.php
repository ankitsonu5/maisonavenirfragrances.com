<?php

namespace App\Exports;

use App\Models\UserSystemTracking;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class UserSystemTrackingExport implements FromCollection, WithHeadings, WithMapping
{
    protected $search;
    protected $startDate;
    protected $endDate;

    public function __construct($search = null, $startDate = null, $endDate = null)
    {
        $this->search = $search;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    public function collection()
    {
        $query = UserSystemTracking::with([
            'userSystemProductRanks.rankOneProduct',
            'userSystemProductRanks.rankTwoProduct',
            'userSystemProductRanks.rankThreeProduct'
        ]);

        if (!empty($this->search)) {
            $search = $this->search;
            $query->where(function ($q) use ($search) {
                $q->where('ip_address', 'like', "%{$search}%")
                  ->orWhere('browser', 'like', "%{$search}%")
                  ->orWhere('platform', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('city', 'like', "%{$search}%")
                  ->orWhere('state', 'like', "%{$search}%")
                  ->orWhere('country', 'like', "%{$search}%");
            });
        }

        if (!empty($this->startDate) && !empty($this->endDate)) {
            $query->whereBetween('created_at', [
                $this->startDate . ' 00:00:00',
                $this->endDate . ' 23:59:59'
            ]);
        }

        return $query->orderBy('id', 'desc')->get();
    }

    public function headings(): array
    {
        return [
            'IP Address',
            'Browser',
            'Browser Version',
            'Platform',
            'Platform Version',
            'Device',
            'Mobile',
            'Tablet',
            'Desktop',
            'Email',
            'City',
            'State',
            'Country',
            'Latitude',
            'Longitude',
            'Created At',
            'Rank Preferences',
            'Rank 1 Product',
            'Rank 1 Price',
            'Rank 2 Product',
            'Rank 2 Price',
            'Rank 3 Product',
            'Rank 3 Price',
        ];
    }

    public function map($row): array
    {
        // Merge all ranks into one string for preferences
        $preferencesList = [];
        $rankOneProduct = '';
        $rankOnePrice = '';
        $rankTwoProduct = '';
        $rankTwoPrice = '';
        $rankThreeProduct = '';
        $rankThreePrice = '';

        foreach ($row->userSystemProductRanks as $rank) {
            // Preferences JSON
            $prefs = json_decode($rank->preferences, true);
            if (is_array($prefs)) {
                foreach ($prefs as $key => $value) {
                    $preferencesList[] = ucfirst(str_replace('_', ' ', $key)) . ': ' . (is_array($value) ? implode(', ', $value) : $value);
                }
            }

            // Rank 1
            if ($rank->rankOneProduct) {
                $rankOneProduct = $rank->rankOneProduct->name;
                $rankOnePrice = $rank->rankOneProduct->price;
            }

            // Rank 2
            if ($rank->rankTwoProduct) {
                $rankTwoProduct = $rank->rankTwoProduct->name;
                $rankTwoPrice = $rank->rankTwoProduct->price;
            }

            // Rank 3
            if ($rank->rankThreeProduct) {
                $rankThreeProduct = $rank->rankThreeProduct->name;
                $rankThreePrice = $rank->rankThreeProduct->price;
            }
        }

        return [
            $row->ip_address,
            $row->browser,
            $row->browser_version,
            $row->platform,
            $row->platform_version,
            $row->device,
            $row->is_mobile ? 'Yes' : 'No',
            $row->is_tablet ? 'Yes' : 'No',
            $row->is_desktop ? 'Yes' : 'No',
            $row->email,
            $row->city,
            $row->state,
            $row->country,
            $row->latitude,
            $row->longitude,
            $row->created_at ? $row->created_at->format('d-m-Y H:i') : '',
            implode(" | ", $preferencesList),
            $rankOneProduct,
            $rankOnePrice,
            $rankTwoProduct,
            $rankTwoPrice,
            $rankThreeProduct,
            $rankThreePrice,
        ];
    }
}
