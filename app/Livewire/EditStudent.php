<?php

namespace App\Livewire;

use App\Models\Classes;
use App\Models\Section;
use App\Models\Student;
use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Livewire\Forms\UpdateStudentForm;

class EditStudent extends Component
{
    public Student $student;
    public UpdateStudentForm $form;
    // #[Validate('required|email|unique:students,email')]
    public $email;
    public $class_id;

    public function mount()
    {
        $this->form->setStudent($this->student);
        $this->fill($this->student->only(['class_id', 'email']));
    }

    public function update()
    {
        $this->validate([
            'email' => 'required|email|unique:students,email,' . $this->student->id,
            'class_id' => 'required',
        ]);
        $this->form->updateStudent($this->class_id, $this->email);

        return $this->redirect(route('students.index'), navigate: true);
    }
    public function updatedClassId($value)
    {
        $this->form->setSections($value);
        $this->sections = Section::where('class_id', $value)->get();
    }
    public function render()
    {
        return view('livewire.edit-student', ['classes' => Classes::all()]);
    }
}
