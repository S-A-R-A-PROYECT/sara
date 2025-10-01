<?php

namespace App\Livewire\Students;

use Livewire\Attributes\Layout;
use Livewire\Component;



#[Layout('templates.students')]
class Main extends Component
{
    public function render()
    {
        return view('students.main');
    }
}
