<?php

namespace App\Http\Controllers\Admin;


use App\Models\UserSystemProductRank;
use App\Models\UserSystemTracking;
use App\Http\Controllers\Controller;
use App\Exports\UserSystemTrackingExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class AiController extends Controller
{
    public function index(Request $request)
    {
        $query = UserSystemTracking::query();

        if ($request->has('search') && !empty($request->search)) {
            $search = $request->search;
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

        if ($request->has('start_date') && $request->has('end_date') && !empty($request->start_date) && !empty($request->end_date)) {
            $query->whereBetween('created_at', [
                $request->start_date . ' 00:00:00',
                $request->end_date . ' 23:59:59'
            ]);
        }

        $data = $query->orderBy('id', 'desc')->paginate(50)->appends($request->all());

        return view('admin.user-system-tracking.index', compact('data'));
    }

    public function export(Request $request)
    {
        return Excel::download(
            new UserSystemTrackingExport($request->search, $request->start_date, $request->end_date),
            'user_system_tracking.xlsx'
        );
    }


    public function exportPdf(Request $request)
    {
        $query = UserSystemTracking::with([
            'userSystemProductRanks.rankOneProduct',
            'userSystemProductRanks.rankTwoProduct',
            'userSystemProductRanks.rankThreeProduct'
        ])
            // Sirf wahi records jinke paas userSystemProductRanks ka data ho
            ->whereHas('userSystemProductRanks');

        // Search filter
        if ($request->filled('search')) {
            $search = $request->search;
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

        // Date filter
        if ($request->filled('start_date') && $request->filled('end_date')) {
            $query->whereBetween('created_at', [
                $request->start_date . ' 00:00:00',
                $request->end_date . ' 23:59:59'
            ]);
        }

        $data = $query->orderBy('id', 'desc')->get();

        $pdf = Pdf::loadView('admin.user-system-tracking.export-pdf', compact('data'))
            ->setPaper('a4', 'landscape');

        return $pdf->download('user_system_tracking.pdf');
    }



    public function show($id)
    {
        $tracking = UserSystemTracking::find($id);
        return view('admin.user-system-tracking.show', compact('tracking'));
    }
}
