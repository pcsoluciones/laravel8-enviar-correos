<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public $miColor;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($color = 'yellow')
    {
        $this->miColor=$color;  // Esta propiedad va a poder ser accedida en la vista.
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert');
    }

    public function prueba(){
        if ($this->miColor == "red"){
            return "Esta es una alerta de peligro";
        }
    }
}
