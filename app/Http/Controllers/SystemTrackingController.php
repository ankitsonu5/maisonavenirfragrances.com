<?php

namespace App\Http\Controllers;

use App\Models\UserSystemTracking;
use Jenssegers\Agent\Agent;
use Stevebauman\Location\Facades\Location;
use Illuminate\Http\Request;

class SystemTrackingController extends Controller
{
    /**
     * Track and save system data.
     */
    public function trackAndSaveSystemData(Request $request)
    {
        $agent = new Agent();

        // Use a static IP for testing; replace with $request->ip() in production
        // $ip = $request->ip();
        $ip = $request->ip();

        // Extract system data
        $systemData = [
            'ip_address' => $ip,
            'browser' => $agent->browser(),
            'browser_version' => $agent->version($agent->browser()),
            'platform' => $agent->platform(),
            'platform_version' => $agent->version($agent->platform()),
            'device' => $agent->device(),
            'is_mobile' => $agent->isMobile(),
            'is_tablet' => $agent->isTablet(),
            'is_desktop' => $agent->isDesktop(),
            'email' => $request->user() ? $request->user()->email : null, // Use authenticated user email if available
        ];

        // Get location data using GeoIP
        $location = Location::get($ip);
        $systemData['city'] = $location->cityName ?? null;
        $systemData['state'] = $location->regionName ?? null;
        $systemData['country'] = $location->countryName ?? null;
        $systemData['latitude'] = $location->latitude ?? null;
        $systemData['longitude'] = $location->longitude ?? null;

        // Check if the system data already exists
        $existingData = UserSystemTracking::where('ip_address', $systemData['ip_address'])
            ->where('browser', $systemData['browser'])
            ->where('platform', $systemData['platform'])
            ->first();

        if (!$existingData) {
            // Create a new record if not found
            $createdData = UserSystemTracking::create($systemData);
            return response()->json([
                'message' => 'System data created successfully.',
                'data' => $createdData,
            ]);
        }

        return response()->json([
            'message' => 'System data already exists for this system.',
            'data' => $existingData,
        ]);
    }

    /**
     * Get the ID of the UserSystemTracking record based on system details.
     */
    public function getSystemTrackingId(Request $request)
    {
        $agent = new Agent();

        // Extract system details
        $ip = $request->ip();

        $browser = $agent->browser();
        $platform = $agent->platform();

        // Query the database for the system tracking record
        $tracking = UserSystemTracking::where('ip_address', $ip)
            ->where('browser', $browser)
            ->where('platform', $platform)
            ->first();

        if ($tracking) {
            return $tracking->id;
        }

        return response()->json([
            'message' => 'No system tracking data found for the current system.',
        ], 404);
    }
}
