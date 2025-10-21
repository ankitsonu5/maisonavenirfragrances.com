<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{
    public $title;
    public $description;

    /**
     * Create a new component instance.
     *
     * @param string $title
     * @param string $description
     */
    public function __construct($title = null, $description = null)
    {
        $this->title = $title;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('website.layouts.app');
    }
}
