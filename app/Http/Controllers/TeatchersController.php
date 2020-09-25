<?php

namespace App\Http\Controllers;

use App\Teatcher;
use Illuminate\Http\Request;

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
        return view('administration.teatchers.actions.newTeatcher');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file;
        $userId = auth()->id();
        // $userName = auth()->getName();
        // dd($userName);
        // $file_complete_name = time() .'_'. $userId . '_' . $userName . '.' .$file->getClientOriginalExtension();
        $file_complete_name = time() .'_'. $userId . '.' .$file->getClientOriginalExtension();
        $file->move('uploads/files/', $file_complete_name);

        Teatcher::create([
            'phoneNumber' => Request('phoneNumber'),
            'scoolLevel' => Request('scoolLevel'),
            'matter' => Request('matter'),
            'cv' => "uploads/files/" . $file_complete_name,
            'user_id'=>auth()->id()
        ]);
        
        return redirect()->Route('teatchers_index');
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
