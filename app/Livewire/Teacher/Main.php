<?php

namespace App\Livewire\Teacher;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('templates.teachers')]
class Main extends Component
{
    public function render()
    {
        return view('teachers.main');
    }
}
