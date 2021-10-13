<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Container extends Component
{

    public $style;
    public $class;
    public $message;


    public $container = [
        'xs'         => 'a',
        'sm'         => 'b',
        'md'         => 'c',
        'lg'         => 'd',
        'xl'         => 'e',
        'false'         => 'f'
    ];


    public function __construct(
        $style = null,
        $class = null,
        $container = 'md',
        $message = null
    )
    {
        $this->container = $this->container[$container] ?? $this->container['md'];

        $this->style = $style;
        $this->class = $class;
        $this->message = $message;
    }

    public function render()
    {
        return $this->view('components.container');
    }
}