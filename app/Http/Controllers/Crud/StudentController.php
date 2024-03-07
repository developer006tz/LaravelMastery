<?php

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $data = [];

    public function __construct()
    {
        $this->data['page_title']  = 'Students';
    }

    public function create()
    {
        return view('student.create',$this->data);
    }

    public function store(Request $request)
    {
        try {
            Student::create($request->all());
            return redirect()->route('student.create')->with('success','student-created-successfull');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }
    }
}
