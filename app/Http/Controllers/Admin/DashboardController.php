<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display the dashboard view.
     *
     * This method handles the request to show the admin dashboard page. It does not
     * take any parameters and returns the view responsible for displaying the dashboard.
     *
     * @return \Illuminate\View\View The view instance for the admin dashboard.
     */
    function dashboard()
    {
        return view('admin.dashboard');
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            // Get filename with extension
            $filenamewithextension = $request->file('upload')->getClientOriginalName();

            // Get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            // Get file extension
            $extension = $request->file('upload')->getClientOriginalExtension();

            // Create a unique filename to store
            $filenametostore = $filename . '_' . time() . '.' . $extension;

            // Define the path to the public/storage/ckeditor directory
            $path = public_path('storage/ckeditor');

            // Ensure the directory exists, create if not
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }

            // Move the uploaded file to the specified directory
            $request->file('upload')->move($path, $filenametostore);

            // Prepare the CKEditor response
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = '/storage/ckeditor/' . $filenametostore;
            $msg = 'Image successfully uploaded';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            // Render HTML output
            @header('Content-type: text/html; charset=utf-8');
            echo $re;
        }
    }
}
