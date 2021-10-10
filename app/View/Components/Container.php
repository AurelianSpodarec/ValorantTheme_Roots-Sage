<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Container extends Component
{


    public $style;
    public $class;
    public $message;


    public $maxWidth = [
        'xs'         => '',
        'sm'         => '',
        'md'         => '',
        'lg'         => '',
        'xl'         => '',
        'false'         => ''
    ];


    public function __construct(
        $maxWidth = null,
        $style = null,
        $class = null,
        $message = null
    )
    {
        $this->maxWidth = $this->$maxWidth[$maxWidth] ?? $this->$maxWidth['md'];

        $this->style = $style;
        $this->class = $class;
        $this->message = $message;
    }

    public function render()
    {
        return $this->view('components.container');
    }
}