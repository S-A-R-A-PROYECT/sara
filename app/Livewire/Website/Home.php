<?php

namespace App\Livewire\Website;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('templates.general')]
class Home extends Component
{
    public $showModal = false;

    public function render()
    {
        return view('landig-page');
    }

    public function toggleModal()
    {
        $this->showModal = !$this->showModal;
    }
}
