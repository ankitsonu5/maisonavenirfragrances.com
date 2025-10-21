<?php


use Collective\Html\FormFacade as Form;






if (!function_exists('adminDropdown')) {
    function adminDropdown($name, $selected = null, $attributes = [], $search = false)
    {
        $admins = Admin::all();
        $selectOptions = ['' => 'Select Users'];

        foreach ($admins as $admin) {
            $selectOptions[$admin->id] = htmlspecialchars($admin->name);
        }

        $defaultAttributes = ['class' => 'single-select search form-control'];
        $finalAttributes = array_merge($defaultAttributes, $attributes);

        if ($search) {
            $finalAttributes['onchange'] = 'this.form.submit()';
        } else {
            // Additional behavior if $search is false
            $finalAttributes['class'] .= ' select2';
        }

        return Form::select($name, $selectOptions, $selected, $finalAttributes);
    }
}










if (!function_exists('serviceDropdown')) {
    function serviceDropdown($name, $selected = null, $attributes = [], $search = false)
    {
        $services = \App\Models\Admin\Service::all();
        $selectOptions = ['' => 'Select Service'];

        foreach ($services as $service) {
            $selectOptions[$service->id] = htmlspecialchars($service->name);
        }

        $defaultAttributes = ['class' => 'single-select search form-control'];
        $finalAttributes = array_merge($defaultAttributes, $attributes);

        if ($search) {
            $finalAttributes['onchange'] = 'this.form.submit()';
        } else {
            // Additional behavior if $search is false
            $finalAttributes['class'] .= ' select2';
        }

        return \Form::select($name, $selectOptions, $selected, $finalAttributes);
    }
}


if (!function_exists('categoryDropdown')) {
    function categoryDropdown($name, $selected = null, $attributes = [], $search = false)
    {
        $categories = \App\Models\Admin\Category::all();
        $selectOptions = ['' => 'Select Category'];

        foreach ($categories as $category) {
            $selectOptions[$category->id] = htmlspecialchars($category->name);
        }

        $defaultAttributes = ['class' => 'single-select search form-control'];
        $finalAttributes = array_merge($defaultAttributes, $attributes);

        if ($search) {
            $finalAttributes['onchange'] = 'this.form.submit()';
        } else {
            // Additional behavior if $search is false
            $finalAttributes['class'] .= ' select2';
        }

        return \Form::select($name, $selectOptions, $selected, $finalAttributes);
    }
}


if (!function_exists('servicelink')) {
    function servicelink()
    {
        $services = \App\Models\Admin\Service::all();
        $output = '';

        foreach ($services as $service) {
            $output .= '<li><a href="' . route('service', $service->slug) . '">' . htmlspecialchars($service->name) . '</a></li>';
        }

        return $output;
    }
}



if (!function_exists('collectionDropdown')) {
    function collectionDropdown($name, $selected = null, $attributes = [], $search = false)
    {
        // Fetch all collections from the Collection model
        $collections = \App\Models\Admin\Collection::all();

        // Prepare select options
        $selectOptions = ['' => 'Select Collection'];

        foreach ($collections as $collection) {
            $selectOptions[$collection->id] = htmlspecialchars($collection->name);
        }

        // Set default attributes for the dropdown
        $defaultAttributes = ['class' => 'single-select search form-control'];
        $finalAttributes = array_merge($defaultAttributes, $attributes);

        // Add search behavior
        if ($search) {
            $finalAttributes['onchange'] = 'this.form.submit()';
        } else {
            // Additional behavior if $search is false
            $finalAttributes['class'] .= ' select2';
        }

        // Generate the select dropdown using Laravel Collective
        return \Form::select($name, $selectOptions, $selected, $finalAttributes);
    }
}



if (!function_exists('moodDropdown')) {
    function moodDropdown($name, $selected = null, $attributes = [], $search = false)
    {
        // Fetch all moods from the Mood model
        $moods = \App\Models\Admin\Mood::all();

        // Prepare select options
        $selectOptions = ['' => 'Select Mood'];

        foreach ($moods as $mood) {
            $selectOptions[$mood->id] = htmlspecialchars($mood->mood);
        }

        // Set default attributes for the dropdown
        $defaultAttributes = ['class' => 'single-select search form-control'];
        $finalAttributes = array_merge($defaultAttributes, $attributes);

        // Add search behavior
        if ($search) {
            $finalAttributes['onchange'] = 'this.form.submit()';
        } else {
            $finalAttributes['class'] .= ' select2';
        }

        // Generate the select dropdown using Laravel Collective
        return \Form::select($name, $selectOptions, $selected, $finalAttributes);
    }
}

if (!function_exists('occasionDropdown')) {
    function occasionDropdown($name, $selected = null, $attributes = [], $search = false)
    {
        // Fetch all occasions from the Occasion model
        $occasions = \App\Models\Admin\Occasion::all();

        // Prepare select options
        $selectOptions = ['' => 'Select Occasion'];

        foreach ($occasions as $occasion) {
            $selectOptions[$occasion->id] = htmlspecialchars($occasion->occasion);
        }

        // Set default attributes for the dropdown
        $defaultAttributes = ['class' => 'single-select search form-control'];
        $finalAttributes = array_merge($defaultAttributes, $attributes);

        // Add search behavior
        if ($search) {
            $finalAttributes['onchange'] = 'this.form.submit()';
        } else {
            $finalAttributes['class'] .= ' select2';
        }

        // Generate the select dropdown using Laravel Collective
        return \Form::select($name, $selectOptions, $selected, $finalAttributes);
    }
}



if (!function_exists('productDropdown')) {
    function productDropdown($name, $selected = null, $attributes = [], $search = false)
    {
        // Fetch all products from the Product model
        $products = \App\Models\Admin\Product::all(); // Make sure to use the correct namespace for your Product model

        // Prepare select options
        $selectOptions = ['' => 'Select Product'];

        foreach ($products as $product) {
            $selectOptions[$product->id] = htmlspecialchars($product->name); // Assuming 'name' is the column with the product's name
        }

        // Set default attributes for the dropdown
        $defaultAttributes = ['class' => 'single-select search form-control'];
        $finalAttributes = array_merge($defaultAttributes, $attributes);

        // Add search behavior
        if ($search) {
            $finalAttributes['onchange'] = 'this.form.submit()';
        } else {
            $finalAttributes['class'] .= ' select2';
        }

        // Generate the select dropdown using Laravel Collective
        return \Form::select($name, $selectOptions, $selected, $finalAttributes);
    }
}
