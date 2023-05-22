<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;

use function GuzzleHttp\Promise\all;

class StudentCrud extends Component
{
    public $fname, $lname, $phone, $gender, $studentData, $student_id;
    public $updateStudent = false;

    public function rest()
    {
        $this->fname = "";
        $this->lname = "";
        $this->phone = "";
        $this->gender = "";
    }
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
        $this->rest();
    }
    public function Edit($id)
    {
        $this->updateStudent = true;
        $editStudents = Student::findorFail($id);

        $this->student_id = $id;
        $this->fname = $editStudents->firstname;
        $this->lname = $editStudents->lastname;
        $this->phone = $editStudents->phone_no;
        $this->gender = $editStudents->gender;
    }
    //     public function Update($id)
    //     {
    //         Student::create([
    //             'firstname' => $this->fname,
    //             'lastname' => $this->lname,
    //             'phone_no' => $this->phone,
    //             'gender' => $this->gender,
    //         ]);
    //         $this->rest();
    //     }
}
