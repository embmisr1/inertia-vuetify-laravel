<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AttachmentList extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $name;
    public $files;
    public $type;
    public $counter;
    public function __construct($name, $files, $type, $counter)
    {
        $this->name = $name;
        $this->files = $files;
        $this->type = $type;
        $this->counter = $counter;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.attachment-list');
    }
}
