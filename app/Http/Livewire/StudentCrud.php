<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;

use function GuzzleHttp\Promise\all;

class StudentCrud extends Component
{
    public $fname, $lname, $phone, $gender, $studentData;
    public function render()
    {
        $this->studentData = Student::all();
        return view('livewire.student-crud');
    }
    public function Insert()
    {
        Student::create([
            'firstname' => $this->fname,
            'lastname' => $this->lname,
            'phone_no' => $this->phone,
            'gender' => $this->gender,
        ]);
    }
}
