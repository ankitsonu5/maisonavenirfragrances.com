<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Traits\RedirectTrait;
use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;
use Illuminate\Support\Facades\View as FacadesView;

class ActivitylogController extends Controller
{
    protected $model, $module;
    use RedirectTrait;

    public function __construct(Activity $model)
    {
        $this->model = $model;
        $this->module = 'activitylog';
        FacadesView::share('module', $this->module);
        $this->middleware('permission:activitylog-list', ['only' => ['index',]]);
        $this->middleware('permission:activitylog-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the activity logs.
     *
     * This method fetches all activity logs associated with the currently authenticated user
     * and passes them to the view for display. It leverages the Activity model's relationship
     * with the causer (user) to retrieve the relevant records.
     *
     * @return \Illuminate\View\View Returns a view with the activity logs data.
     */
    public function index(Request $request)
    {


        $query = Activity::query();


        $event = $request->input('event');
        if ($event) {
            $query->where('event', 'like', "%{$event}%");
        }

        $description = $request->input('description');
        if ($description) {
            $query->where('description', 'like', "%{$description}%");
        }

        $logname = $request->input('logname');
        if ($logname) {
            $query->where('log_name', 'like', "%{$logname}%");
        }


        $admin_id = $request->input('admin_id');
        if ($admin_id) {
            $query->where('causer_id', 'like', "%{$admin_id}%");
        }




        if ($request->input('created_at')) {
            $query->whereBetween('created_at', [$request->created_at, $request->updated_at]);
        }


        $data = $query->orderByDESC('id')->paginate();
        return view('admin.activitylog.index', compact('data'));
    }

    /**
     * Fetch a single activity log by ID
     *
     * @param int $activity
     * @return \Spatie\Activitylog\Models\Activity
     */
    public function show($activity)
    {
        $activityLog = Activity::findOrFail($activity);
        return view('admin.activitylog.show', compact('activityLog'));
    }

    /**
     * Deletes a specific activity log entry.
     *
     * This method finds an activity log entry by its ID and deletes it from the database.
     * Upon successful deletion, it redirects the user back to the activity log index page
     * with a success message.
     *
     * @param int $activity The ID of the activity log entry to be deleted.
     * @return \Illuminate\Http\RedirectResponse Redirects to the activity log index page with a success message.
     */
    public function destroy($activity)
    {
        // Delete a specific activity log
        $activityLog = Activity::findOrFail($activity);
        $activityLog->delete();
        return redirect()->route('admin.activitylog.index')->with('success', 'Activity log deleted successfully');
    }
}
