<?php

namespace App\Http\Livewire;

use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;


class CreateAnnouncement extends Component
{
    public $title;
    public $description;
    public $price;
    public $category;

    protected $rules = [
        'title' => 'required|min:4',
        'description' => 'required|min:8',
        'price' => 'required|numeric',
        'category' => 'required'

    ];

    public function save()
    {
        $this->validate();
        $category = Category::find($this->category);
        $announcement = $category->announcements()->create([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
        ]);
        Auth::user()->announcements()->save($announcement);

        session()->flash('success', 'Annuncio inserito correttamente');
        $this->cleanform();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function cleanform()
    {
        $this->title = '';
        $this->description = '';
        $this->price = '';
    }



    public function render()
    {
        return view('livewire.create-announcement');
    }
}
