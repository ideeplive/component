<?php

namespace App\View\Components;

use Illuminate\View\Component;

class card extends Component
{
    public $title;
    public $subTitle;
    public $description;
    
    public function __construct($title, $subTitle, $description)
    {
        $this->title = $title;
        $this->subTitle = $subTitle;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card');
    }
    public function addNumber($a){
        return $a/2;
    }
}
