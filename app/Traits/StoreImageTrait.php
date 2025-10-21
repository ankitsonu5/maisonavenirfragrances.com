<?php

namespace App\Traits;

use Illuminate\Http\Request;
use File, Storage;

trait StoreImageTrait
{

    /**
     * Does very basic image validity checking and stores it. Redirects back if somethings wrong.
     * @Notice: This is not an alternative to the model validation for this field.
     *
     * @param Request $request
     * @return $this|false|string
     */
    public function verifyAndStoreImage(Request $request, $fieldname = 'image', $directory = 'unknown')
    {
        $old = 'old_' . $fieldname;
        $old_file = $request->$old;
        if ($request->hasFile($fieldname)) {
            $file = $request->file($fieldname);
            if (!$request->file($fieldname)->isValid()) {
                return redirect()->back()->withInput();
            }
            $exp = explode('.', $file->getClientOriginalName());
            $name = $this->getNewFileName(preg_replace("/[^a-zA-Z0-9]+/", "-", $exp[0]), $file->getClientOriginalExtension(), $directory);
            $path = public_path('storage/' . $directory);
            if (!File::exists($path)) {
                File::makeDirectory($path, 0755, true);
            }
            if ($file->move($path, $name)) {
                if ($old_file) {
                    File::delete(public_path('storage/' . $directory . '/' . $old_file));
                }
                return $name;
            }
        }
        return $old_file;
    }

    public function verifyAndStoreMultipleImages(array $files, $fieldname = 'image', $directory = 'unknown')
    {
        $uploadedFiles = [];
        $path = public_path('storage/' . $directory);
        if (!File::exists($path)) {
            File::makeDirectory($path, 0755, true);
        }

        foreach ($files as $file) {
            if (!$file->isValid()) {
                return redirect()->back()->withInput();
            }

            $exp = explode('.', $file->getClientOriginalName());
            $name = $this->getNewFileName($exp[0], $file->getClientOriginalExtension(), $directory);

            if ($file->move($path, $name)) {
                $uploadedFiles[] = $name;
            }
        }

        return implode(',', $uploadedFiles); // Convert array to a comma-separated string
    }

    public function getNewFileName($filename, $extension, $path)
    {
        $i = 1;
        $new_filename = $filename . '-' . uniqid() . '.' . $extension;
        while (File::exists(public_path('storage/' . $path . '/' . $new_filename))) {
            $new_filename = $filename . '-' . uniqid() . '-' . $i++ . '.' . $extension;
        }
        return $new_filename;
    }
}
