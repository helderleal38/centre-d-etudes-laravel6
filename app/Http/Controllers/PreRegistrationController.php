<?php

namespace App\Http\Controllers;

use App\User;
use App\Matter;
use App\PreRegistration;
use App\Events\StudentEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PreRegistrationRequest;

class PreRegistrationController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $auth = auth()->user()->id;
        $pre_registration = PreRegistration::where('pre_registrations.user_id', '=', $auth)
        ->select('pre_registrations.*')  
        ->get();
        
        return view('administration.students.student', compact('pre_registration'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function PreRegistrationList()
    {
        $pre_registrations = PreRegistration::join('users', 'pre_registrations.user_id', '=', 'users.id')
        ->select('pre_registrations.*', 'users.firstname', 'users.name', 'users.email')     
        ->get();
        return view('administration.administrateur.students.pre_registrations_list', array('pre_registrations' => $pre_registrations)); 
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $matters = Matter::all();
        return view('administration.students.actions.new_pre_registrations', compact('matters'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PreRegistrationRequest $request)
    {
        
        $pre_registrations = PreRegistration::create([
            'scoolName' => Request('scoolName'), 
            'year' => Request('year'), 
            'matter' => Request('matter'), 
            'responsible' => Request('responsible'), 
            'address' => Request('address'),
            'phoneNumber' => Request('phoneNumber'),
            'user_id'=>auth()->id()
        ]);

        $student_user = PreRegistration::join('users', 'pre_registrations.user_id', '=', 'users.id')
        ->select('pre_registrations.*', 'users.*')
        ->where('pre_registrations.user_id', '=', Auth::user()->id)     
        ->firstOrFail();

        $admin = User::where('state', 'administrateur')->firstOrFail();

        event(new StudentEvent($admin, $student_user));

        return back()->with('success', "Votre pré-inscription à bien étè envoyé. Vous allez être contacté au plus vite ! 
        <br>Faites une nouvelle pré-inscription si vous souhaité un deuxiéme cours");
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
    public function edit(PreRegistration $pre_registration) 
    {
        
        $auth = auth()->user()->id;
        $pre_registration = PreRegistration::where('pre_registrations.user_id', '=', $auth)
        ->select('pre_registrations.*')  
        ->firstOrFail();
        return view('administration.students.actions.pre_registrations_edit', compact('pre_registration'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PreRegistration $pre_registration)
    {
        $pre_registration->update($request->all());
        return back()->with('success', "Fiche de pré-inscription modifié avec success !");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PreRegistration $pre_registration)
    {
        $pre_registration->delete();
        return back()->with('success', "La pré-inscription a bien été supprimé.");
    }
}
