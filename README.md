# Enye Generator

**Enye Generator** is a Laravel + Livewire package that provides reusable, dynamic form field components Instead of typing field code manually, just click a button and let Enye insert on the field for you.

---

## Features

-  Reusable Livewire components for common form fields
- Automatically updates Livewire model properties using Livewire events
- Simple and clean integration into existing Laravel + Livewire projects
-  Customizable component views for your UI needs
-  **Generate enye through an interactive UI — no typing needed**

---

## Installation

Install the package via Composer:

```bash
composer require onoma/enye-generator
```
---

## ⚒ Usage 

Step 1: Add the HasModelUpdater Trait
To enable automatic property updates, add this trait to your parent Livewire component:

```bash

use Livewire\Component;
use Onoma\EnyeGenerator\Traits\HasModelUpdater;

class MyFormComponent extends Component
{
    use HasModelUpdater;

    public string $name = '';
    public string $email = '';
}

```

Step 2: Use Enye Field Components in Blade

These components emit events that automatically update the corresponding properties, thanks to the trait.

```bash

  <livewire:field type='{input type}' placeholder='{placeholder name (optional)}' model='{parent model name}' wire:model='{parent model name}' />

```

