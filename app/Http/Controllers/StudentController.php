<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=Student::latest('id')->get();
        return view('students.index',['students'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses=Course::all();
       return view('students.create',['courses'=>$courses]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $request->validate([
            'name' => ['required','max:255'],
            'birth' => ['required'],
            'email'=>['required','email','unique:students,email'],
            'nrc'=>['required','regex:/^([0-9]{1,2})\/([a-z]{3})\([N]\)[0-9]{6}$/','unique:students,NRC'],
            'courses'=>['required']
        ]);
        $student=Student::create([
            'name' => $request->name,
            'date_of_birth'=>$request->birth,
            'email'=>$request->email,
            'NRC'=>$request->nrc
        ]);
        $student->courses()->attach($request->courses);
        $request->session()->flash('success','You have successfully added new record!');
        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student=Student::find($id);
        $courses=Course::all();
        return view('students.edit',['student'=>$student,'courses'=>$courses]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $student=Student::find($id);
        $request->validate([
            'name' => ['required','max:255'],
            'birth' => ['required'],
            'email'=>['required','email'],
            'nrc'=>['required','regex:/^([0-9]{1,2})\/([a-z]{3})\([N]\)[0-9]{6}$/'],
            'courses'=>['required']
        ]);
       Student::where('id',$id)->update([
            'name' => $request->name,
            'date_of_birth'=>$request->birth,
            'email'=>$request->email,
            'NRC'=>$request->nrc
        ]);
        $student->courses()->sync($request->courses);
        $request->session()->flash('success','You have successfully updated!');
        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $student=Student::find($id);

        $student->courses()->detach();
        $student->delete();
        $request->session()->flash('danger','Successfully Delected!');
        return redirect()->route('students.index');
    }
    
}
