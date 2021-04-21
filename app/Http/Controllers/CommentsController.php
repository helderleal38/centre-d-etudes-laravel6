<?php

namespace App\Http\Controllers;

use App\User;
use App\Comment;
use App\Events\CommentEvent;
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
        "comment.required" => "<span style='color:red;'>O comentário é obrigatório.</span>",
        "comment.min" => "<span style='color:red;'>O comentário é muito curto.</span>",
        "comment.max" => "<span style='color:red;'>O comentário é muito longo.</span>",

        "avatar.required" => "<span style='color:red;'>Uma foto é obrigatória.</span>",
        "avatar.image" => "<span style='color:red;'>O ficheiro deve ser uma imagem.</span>",
        "avatar.mimes" => "<span style='color:red;'>O ficheiro deve ser do tipo: jpeg,png,jpg,gif,svg.</span>",
        "avatar.max" => "<span style='color:red;'>O tamanho da imagem deve ser inferior a 2048 kilo-octets.</span>",
      ]);

      if ($validator->fails()) {
        return back()
            ->withErrors($validator)
            ->withInput();
    }

      $avatar = $request->avatar;
      $avatar_name = time() .'_'.$avatar->getClientOriginalName();
      $avatar->move('uploads/avatars/', $avatar_name);

      $comment = Comment::create([
          'comment' => Request('comment'),
          'avatar' => "uploads/avatars/" . $avatar_name,
          'user_id' => auth()->id()
      ]);
      
      $comment_user = Comment::join('users', 'comments.user_id', '=', 'users.id')
          ->select('users.*', 'comments.*')
          ->where('comments.user_id', '=', Auth::user()->id)
          ->firstOrFail();

      $admin = User::where('state', 'administrateur')->first();

      event(new CommentEvent($admin, $comment_user));
      
      return back()
      ->with('success','O teu comentário foi enviado com sucesso. Obrigado! Poderás vê-lo na página inicial do site, após aprovação do administrador.');
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
        return back()->with('info', "O comentário foi apagado com sucesso!");
    }

}
