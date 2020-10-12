<?php

namespace App\Http\Controllers;

use App\User;
use App\Matter;
use App\Teatcher;
use Illuminate\Http\Request;
use App\Events\TeatcherEvent;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\TeatcherRequest;

class TeatchersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('administration.teatchers.teatcher');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function teatchersList()
    {
        $teatchers = Teatcher::join('users', 'teatchers.user_id', '=', 'users.id')
        ->select('teatchers.*', 'users.firstname', 'users.name', 'users.email')     
        ->get();
        return view('administration.administrateur.teatchers.teatchers_list', array('teatchers' => $teatchers));//return la vue avec les students 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $matters = Matter::all();
        return view('administration.teatchers.actions.newTeatcher', compact('matters'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeatcherRequest $request)
    {
      $cv = $request->cv;
      $userId = auth()->id();
      $cv_complete_name = time() .'_'. $userId . '.' .$cv->getClientOriginalExtension();
      $cv->move('uploads/files/', $cv_complete_name);

      $teatcher = Teatcher::create([
        'phoneNumber' => Request('phoneNumber'),
        'scoolLevel' => Request('scoolLevel'),
        'matter' => Request('matter'),
        'cv' => "uploads/files/" . $cv_complete_name,
        'user_id'=>auth()->id()
      ]);
      
      $teatcher_user = Teatcher::join('users', 'teatchers.user_id', '=', 'users.id')
        ->select('users.*', 'teatchers.*')
        ->where('teatchers.user_id', '=', Auth::user()->id)
        ->firstOrFail();

      $admin = User::where('state', 'administrateur')->first();

      event(new TeatcherEvent($admin, $teatcher_user));

      return back()->with('success', "Votre candidature a bien étè envoyé. On vous contactera au plus vite !");
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teatcher $teatcher)
    {
        $teatcher->delete();
        return back()->with('info', "Le professeur a bien été supprimé dans la table des professeurs, mais sont compte est toujours active sur le site.");

    }
}
