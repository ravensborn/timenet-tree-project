<?php

namespace App\Livewire;

use App\Models\Tree;
use Livewire\Component;
use Livewire\WithPagination;

class TreeList extends Component
{

    use WithPagination;

    public function mount(): void
    {
    }

    public function render()
    {

        $trees =  Tree::query()->orderBy('id','asc')->paginate(9);
        return view('livewire.tree-list', [
            'trees' => $trees
        ])->extends('components.layouts.app');
    }
}
