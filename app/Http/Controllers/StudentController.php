<?php

namespace App\Http\Controllers;

use App\Articles;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // /students
    public function index()
    {
        $students = Student::all();
        return view('pages.student', compact('students'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // create student object
        $s = new Student();
        $s->name = $request->name;
        $s->class = $request->class;
        $s->section = $request->section;
        $s->address = $request->address;
        $s->contact = $request->contact;
        $s->save();
        return redirect('students');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student $student
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $content = Articles::find($id);
        return view('pages/article', $content)->with('contents', $content);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('pages.edit_student', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Student $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $student = Student::find($id);

        if (!$student) {
            return redirect('students');
        }
        $student->name = $request['name'];
        $student->class = $request['class'];
        $student->section = $request['section'];
        $student->address = $request['address'];
        $student->contact = $request['contact'];
        $student->save();
        return redirect('students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $studObj = Student::find($id);
        $studObj->delete();
        return redirect('students');

    }
}
