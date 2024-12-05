<?php

namespace App\Livewire;

use App\Models\Student;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithPagination;

class ListStudents extends Component
{
    use WithPagination;
    #[Layout('layouts.app')]
    public $name, $email, $class_id, $section_id;
    public function render()
    {
        return view('livewire.list-students', ['students' => Student::paginate(10)]);
    }
}
