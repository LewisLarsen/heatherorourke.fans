<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CarouselItem extends Component
{
    /**
     * The item image url.
     *
     * @var string
     */
    public $image;

    /**
     * The item name.
     *
     * @var string
     */
    public $name;


    /**
     * The item class.
     *
     * @var string
     */
    public $class;


    /**
     * Create a new component instance.
     *
     * @param $image
     * @param $name
     * @param null $class
     */
    public function __construct($image, $name=null, $class=null)
    {
        $this->image = $image;
        $this->name = $name;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.carousel-item');
    }
}
