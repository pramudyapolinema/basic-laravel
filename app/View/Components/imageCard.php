<?php

namespace App\View\Components;

use Illuminate\View\Component;

class imageCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $image, $title;
    
    public function __construct($image, $title)
    {
        $this->image        = $image;
        $this->title        = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.image-card');
    }
}
