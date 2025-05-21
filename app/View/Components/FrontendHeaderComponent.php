<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Image;

class FrontendHeaderComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $websitelogo_file_path = NULL;
    public function __construct()
    {
        $websitelogo = Image::where('image_section', 'logo')->first();
        $this->websitelogo_file_path = $websitelogo ? $websitelogo->file_path : null;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.frontend-header-component');
    }
}
