<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class FindBooks extends Component
{

    public $categories;
    public $category_id = 1;
    public $books;

    public function mount()
    {
        $this->categories = Category::pluck('name', 'id');
        $this->books();
    }

    public function books()
    {
        $this->books = Category::find($this->category_id)->books()->pluck('name');
    }

    public function render()
    {
        return view('livewire.find-books');
    }
}
