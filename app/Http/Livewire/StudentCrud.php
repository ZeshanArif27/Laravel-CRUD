<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;

use function GuzzleHttp\Promise\all;

class StudentCrud extends Component
{
    public $fname, $lname, $phone, $gender, $studentData, $student_id, $search;
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
        $this->studentData = Student::where('firstname', 'like', '%' . $this->search . '%')
            ->Orwhere('lastname', 'like', '%' . $this->search . '%')
            ->get();

        return view('livewire.student-crud');
    }
    protected $updateQueryString = ['search'];

    public function mount()
    {
        $this->search = request('search', $this->search);
    }

    public function Insert()
    {
        $this->validate([
            'fname' => 'required|min:3',
            'lname' => 'required|min:3',
            'phone' => 'required|regex:/([0-9\s\-\+\(\)]*)$/|min:11|max:14',
            'gender' => 'required',
        ]);
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
    public function Update()
    {
        $this->validate([
            'fname' => 'required|min:3',
            'lname' => 'required|min:3',
            'phone' => 'required|regex:/([0-9\s\-\+\(\)]*)$/|min:11|max:14',
            'gender' => 'required',
        ]);
        $Studentupdate = Student::findorFail($this->student_id);
        $Studentupdate->Update([
            'firstname' => $this->fname,
            'lastname' => $this->lname,
            'phone_no' => $this->phone,
            'gender' => $this->gender,
        ]);
        $this->rest();
        $this->updateStudent = false;
    }
    public function Delete($id)
    {
        if ($id) {
            $deleteStudents = Student::where('id', $id);
            $deleteStudents->delete();
        }
    }
}
