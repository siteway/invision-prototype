<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Project;

class ProjectList extends Component
{
    use WithPagination;

    public $search = '';

    // Reset pagination when search changes
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.project-list', [
            'projects' => Project::where('name', 'like', '%' . $this->search . '%')
                ->orWhere('slug', 'like', '%' . $this->search . '%')
                ->paginate(9)
        ]);
    }
}
