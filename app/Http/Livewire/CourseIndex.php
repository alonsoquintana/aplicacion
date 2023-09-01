<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Course;
use App\Models\Category;
use App\Models\Level;

class CourseIndex extends Component
{

    public $category_id = 1;
    public $level_id = 2;

    public function render()
    {

        $categories = Category::all();
        $levels = Level::all();

        $courses = Course::where('status', 3)->latest('id')->paginate(8);

        return view('livewire.course-index', compact('courses', 'categories', 'levels'));
    }
}
