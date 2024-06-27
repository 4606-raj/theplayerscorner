<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Blog;

class AutocompleteSearch extends Component
{
    public $query;
    public $blogs;

    public function mount() {
        $this->query = '';
        $this->blogs = [];
    }

    public function updatedQuery() {
        $this->blogs = Blog::where('title', 'like', '%' . $this->query . '%')->get();
    }

    public function render()
    {
        return view('livewire.autocomplete-search');
    }
}
