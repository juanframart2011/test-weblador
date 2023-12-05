<?php

namespace App\Livewire;

use App\Models\Project;
use Livewire\Component;

class ProjectList extends Component
{
    public $projects;

    public function render()
    {
        $this->projects = Project::Where("is_active",true)->get();
        return view('livewire.project-list');
    }
}
