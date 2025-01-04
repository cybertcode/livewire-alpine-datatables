<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\Section;
use App\Models\Student;
use Livewire\Attributes\Validate;

class UpdateStudentForm extends Form
{
    public ?Student $student;

    // #[Validate('required')]
    public $name;
    public $email;

    // #[Validate('required')]
    public $section_id;
    public $sections = [];
    public function setStudent(Student $student)
    {
        $this->student = $student;

        $this->fill($student->only(['name', 'email', 'section_id']));
        $this->sections = Section::where('class_id', $student->class_id)->get();
    }
    public function updateStudent($class_id)
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students,email,' . $this->student->id,
            'section_id' => 'required',
        ]);
        $this->student->update([
            'name' => $this->name,
            'email' => $this->email,
            'class_id' => $class_id,
            'section_id' => $this->section_id,
        ]);
    }
    public function setSections($class_id)
    {
        $this->sections = Section::where('class_id', $class_id)->get();
    }
}
