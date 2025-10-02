<?php

namespace App\Livewire\Students;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('templates.students')]
class Chat extends Component
{
    public $chatId = 1;
    public function render()
    {
        return view('students.chat');
    }

    public function toggleChat(int $id)
    {
        if ($this->chatId === $id) {
            return $this->chatId = null;
        }
        return $this->chatId = $id;
    }
}
