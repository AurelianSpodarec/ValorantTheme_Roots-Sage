<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Section extends Component
{


    public $style;
    public $class;
    public $message;


    public $variant = [
        'primary'   => 'button-primary',
        'secondary' => 'button-secondary',
        'teritary'  => 'button-teritary'
    ];

    public $paddingY  = [
        'xs'         => '',
        'sm'         => '',
        'md'         => '',
        'lg'         => '',
        'xl'         => ''
    ];


    public function __construct(
        $variant = 'primary',
        $style = null,
        $class = null,
        $message = null
    )
    {
        $this->variant = $this->variant[$variant] ?? $this->variant['md'];

        $this->style = $style;
        $this->class = $class;
        $this->message = $message;
    }

    public function render()
    {
        return $this->view('components.section');
    }
}