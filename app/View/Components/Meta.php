<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Meta extends Component
{

    public $meta;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($meta)
    {
        $this->meta = $meta;
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render(): View|Closure|string
    {
        $meta_default = config('custom.front.default_meta_title');

        return view('front.components.meta', get_defined_vars());
    }
}
