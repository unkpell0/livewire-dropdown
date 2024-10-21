<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\SubCategory;
use Livewire\Attributes\Title;

class Home extends Component
{
    public $category = 'choose';

    public function getSubcategories()
    {
        return SubCategory::whereCategoryId($this->category)->orderBy('name')->get();
    }

    public function categories()
    {
        return Category::orderBy('name')->get();
    }

    #[Title('Home')]
    public function render()
    {
        return view('livewire.home', [
            'categories' => $this->categories(),
            'subcategories' => $this->getSubcategories(),
        ]);
    }
}