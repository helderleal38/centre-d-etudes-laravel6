<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::join('users', 'comments.user_id', '=', 'users.id')
        ->select('comments.*', 'users.firstname', 'users.name')     
        ->get();
        return view('administration.administrateur.comments.index', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //dd(Auth::user()->state);
        if(Auth::user()->state === 'eleve'){
            return view('administration.students.actions.commentStudent');
        }else{
            return view('administration.teatchers.actions.commentTeatcher');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator($request->all(), [
            "comment" => "required|min:20|max:300",
            "avatar" => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
        ], [
            "comment.required" => "<span style='color:red;'>Le commentaire est obligatoire</span>",
            "comment.min" => "<span style='color:red;'>Commentaire trop court</span>",
            "comment.max" => "<span style='color:red;'>Commentaire trop long</span>",

            "avatar.required" => "<span style='color:red;'>Un avatar est obligatoire</span>",
            "avatar.image" => "<span style='color:red;'>Ce champ doit être une image.</span>",
            "avatar.mimes" => "<span style='color:red;'>Le fichier doit être de type: jpeg,png,jpg,gif,svg.</span>",
            "avatar.max" => "<span style='color:red;'>La taille de l'image doit être inférieure à 2048 kilo-octets.</span>",
        ]);

        if($validator->fails())
        {
            return back()
            ->with([
                "errors" => $validator->errors,
            ]);
        }

        // dd($request->avatar);
        $avatar = $request->avatar;
        $avatar_name = time() .'_'.$avatar->getClientOriginalExtension();
        $avatar->move('uploads/avatars/', $avatar_name);
        Comment::create([
            'comment' => Request('comment'),
            'avatar' => "uploads/avatars/" . $avatar_name,
            'user_id' => auth()->id()
        ]);
        return back()
        ->with('success','Votre commentaire a bien étè envoyé. Il va etre visible sur le site aprés la validation de l\'administrateur');
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
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return back()->with('info', "Ce commentaire a bien étè supprimé");
    }

}
