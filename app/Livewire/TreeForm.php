<?php

namespace App\Livewire;

use App\Models\Tree;
use Livewire\Component;
use Livewire\WithFileUploads;

class TreeForm extends Component
{

    use WithFileUploads;

    public $name;
    public $description;
    public $maintenance_instructions;
    public $stock;
    public $price;
    public $image;

    protected $rules = [
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'maintenance_instructions' => 'required|string',
        'stock' => 'required|integer',
        'price' => 'required|integer',
        'image' => 'required|image|max:1024', // 1MB Max
    ];

    public function save(): void
    {
        $this->validate();

        $tree = Tree::create([
            'name' => $this->name,
            'description' => $this->description,
            'maintenance_instructions' => $this->maintenance_instructions,
            'stock' => $this->stock,
            'price' => $this->price,
        ]);


        if ($this->image) {
            $name = time() . uniqid();
            $tree->addMedia($this->image)
                ->usingName($name)
                ->usingFileName($name  . '.' . $this->image->extension())
                ->toMediaCollection('cover');
        }

        session()->flash('message', 'Tree successfully added.');

        $this->dispatch('scroll');

        $this->reset();
    }

    public function render(): \Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        return view('livewire.tree-form')->extends('components.layouts.app');
    }
}
