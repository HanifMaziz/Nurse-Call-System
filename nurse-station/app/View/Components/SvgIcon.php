<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\File;

class SvgIcon extends Component
{
    public $path;

    /**
     * Create a new component instance.
     *
     * @param string $path Path to the SVG file in the public directory.
     */
    public function __construct($path)
    {
        $this->path = $path;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        // Load the SVG content from the public path
        $svgPath = public_path('icons/' . $this->path);
        if (File::exists($svgPath)) {
            return File::get($svgPath);
        }

        // Return an empty string if the file doesn't exist
        return '';
    }
}
