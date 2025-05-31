<?php

namespace Onoma\EnyeGenerator\Http\Livewire;

use Livewire\Attributes\Modelable;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class Field extends Component
{
    #[Modelable]
    public $child_val = '';
    public string $type = 'text';
    public string $placeholder = '';

    public $enye;

    public $model;

    public $value = '';


    public function mount($model = null)
    {
        $this->model = $model;
    }

    public function updatedValue($val)
    {
        $this->dispatch('updateModel', $this->model, $val);
    }

    public function upperCaseEnye()
    {
        $this->child_val = $this->child_val . 'Ñ';
        $this->updatedValue($this->child_val);
    }

    public function lowerCaseEnye()
    {
        $this->child_val = $this->child_val . 'ñ';
        $this->updatedValue($this->child_val);
    }

    public function render()
    {
        return view('enye::livewire.field');
    }
}
