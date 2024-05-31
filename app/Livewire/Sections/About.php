<?php

namespace App\Livewire\Sections;

use Livewire\Component;

class About extends Component
{

    public $experience = 8;
    public $projects = 15;
    public $clients = 65;
    public function render()
    {
        return view('livewire.sections.about');
    }
}
