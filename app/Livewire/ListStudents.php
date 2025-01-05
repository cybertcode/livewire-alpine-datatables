<?php

namespace App\Livewire;

use App\Models\Student;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;

class ListStudents extends Component
{
    use WithPagination;
    // #[Layout('layouts.app')]// en caso no cambiamos el layout en config livewire

    public function render()
    {
        return view('livewire.list-students', ['students' => Student::paginate(10)]);
    }

    public function deleteStudent($student)
    {
        Student::destroy($student);
    }
}
