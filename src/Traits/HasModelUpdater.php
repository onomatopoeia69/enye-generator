<?php 

 namespace Onoma\EnyeGenerator\Traits;

 use Livewire\Attributes\On;

 trait HasModelUpdater
{
    #[On('updateModel')]
    public function updateModel($property, $value)
    {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }
}

