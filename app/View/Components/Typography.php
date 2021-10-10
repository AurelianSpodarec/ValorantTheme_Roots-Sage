<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Typography extends Component
{


    // TODO: Add error handling
    // TODO: Add Icon Support
    // TODO: Ass 'href'


    public $style;
    public $class;
    public $message;


    public $variant = [
        'h1'         => '',
        'h2'         => '',
        'h3'         => '',
        'h4'         => '',
        'h5'         => '',
        'h6'         => '',
        'subtitle1'  => '',
        'subtitle2'  => '',
        'body1'      => '',
        'body2'      => ''
    ];

 
    public $disabled;


    public function __construct(
        $variant = 'body1',

        $style = null,
        $class = null,
        $message = null
    )
    {
        $this->variant = $this->variant[$variant] ?? $this->variant['body1'];

        $this->style = $style;
        $this->class = $class;
        $this->message = $message;
    }

    public function render()
    {
        return $this->view('components.typography');
    }
}