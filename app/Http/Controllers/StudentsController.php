<?php

namespace App\Http\Controllers;

use App\Matter;
use App\Student;
use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $auth = auth()->user()->id;
        $studentId = Student::where('students.user_id', '=', $auth)
        ->select('students.*')  
        ->get();
        return view('administration.students.student', compact('studentId'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function studentsList()
    {
        $students = Student::join('users', 'students.user_id', '=', 'users.id')
        ->select('students.*', 'users.firstname', 'users.name', 'users.email')     
        ->get();
        return view('administration.administrateur.students.students_list', array('students' => $students)); 
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $matters = Matter::all();
        return view('administration.students.actions.newStudent', compact('matters'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentRequest $request)
    {
        Student::create([
            'scoolName' => Request('scoolName'), 
            'year' => Request('year'), 
            'matter' => Request('matter'), 
            'responsible' => Request('responsible'), 
            'address' => Request('address'),
            'phoneNumber' => Request('phoneNumber'),
            'user_id'=>auth()->id()
        ]);
        return back()->width('success', "Votre pré-inscription à bien étè envoyé.<br>Vous allez être contacté au plus vite !");
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
    public function edit(Student $studentId)
    {
        
        $auth = auth()->user()->id;
        $studentId = Student::where('students.user_id', '=', $auth)
        ->select('students.*')  
        ->get();
        return view('administration.students.actions.editStudent', compact('studentId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $studentId)
    {
        $studentId->update($request->all());
        return back()->with('success', "Fiche de pré-inscription modifié avec success !");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return back()->with('success', "L'élève a bien été supprimé dans la table des élèves, mais sont compte est toujours active sur le site.");
    }
}
