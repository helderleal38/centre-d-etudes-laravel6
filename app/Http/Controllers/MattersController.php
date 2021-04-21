<?php

namespace App\Http\Controllers;

use App\Matter;
use Illuminate\Http\Request;
use App\Http\Requests\MatterRequest;

class MattersController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      $matters = Matter::All();
      return view('administration.administrateur.matters.mattersList', compact('matters'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view('administration.administrateur.matters.create');
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
      "matter" => "required|regex:/^[\pL\s\-\']{5,20}+$/u",
      "title" => "required|regex:/^[0-9\pL\s\-\'\?\!]{5,50}+$/u",
      "content" => "required|max:500",
      "image" => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
      "hourPrice" => "required|digits_between:1,3",
      "yearReduction" => "required|digits_between:1,3",
      "extraReduction" => "required|digits_between:1,3",
    ], [
      "matter.required" => "<span style='color:red;'>Este campo é de preenchimento obrigatório.</span>",
      "matter.regex" => "<span style='color:red;'>Este campo deve conter caracteres válidos.</span>",

      "title.required" => "<span style='color:red;'>Este campo é de preenchimento obrigatório.</span>",
      "title.regex" => "<span style='color:red;'>Este campo deve conter caracteres válidos.</span>",

      "content.required" => "<span style='color:red;'>Este campo é de preenchimento obrigatório.</span>",
      "content.max" => "<span style='color:red;'>Este campo não deve ultrapassar 500 caractéres.</span>",

      "image.required" => "<span style='color:red;'>Uma imagem é obrigatória.</span>",
      "image.image" => "<span style='color:red;'>Este ficheiro não é uma imagem</span>",
      "image.mimes" => "<span style='color:red;'>A imagem dve ser do tipo: jpeg,png,jpg,gif,svg.</span>",
      "image.max" => "<span style='color:red;'>O tamanho da imagem deve ser inferior a 2048 kilo-octets.</span>",

      "hourPrice.required" => "<span style='color:red;'>Este campo é de preenchimento obrigatório.</span>",
      "hourPrice.digits_between" => "<span style='color:red;'>Este campo deve conter entre 1 et 3 chiffres.</span>",

      "yearReduction.required" => "<span style='color:red;'>Este campo é de preenchimento obrigatório.</span>",
      "yearReduction.digits_between" => "<span style='color:red;'>Este campo deve conter entre 1 et 3 chiffres.</span>",

      "extraReduction.required" => "<span style='color:red;'>Este campo é de preenchimento obrigatório.</span>",
      "extraReduction.digits_between" => "<span style='color:red;'>Este campo deve conter entre 1 et 3 chiffres.</span>",
    ]);

    if ($validator->fails()) {
      return redirect()->route('matter_create')
              ->withErrors($validator)
              ->withInput();
    }

    $image = $request->image;
    $image_name = time() .'_'.$image->getClientOriginalExtension();
    $image->move('uploads/matters/', $image_name);
    Matter::create([
      'matter' => Request('matter'),
      'title' => Request('title'),
      'content' => Request('content'),
      'image' => "uploads/matters/" . $image_name,
      'hourPrice' => Request('hourPrice'),
      'yearReduction' => Request('yearReduction'),
      'extraReduction' => Request('extraReduction')
    ]);
    
    return back()
            ->with('success','A disciplina foi adicionada com sucesso !');
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
    public function edit(Matter $matter)
    {
        return view('administration.administrateur.matters.edit', compact('matter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Matter $matter)
    {
      $validator = Validator($request->all(), [
        "matter" => "required|regex:/^[\pL\s\-\']{5,20}+$/u",
        "title" => "required|regex:/^[0-9\pL\s\-\'\?\!]{5,50}+$/u",
        "content" => "required|max:500",
        "image" => "image|mimes:jpeg,png,jpg,gif,svg|max:2048",
        "hourPrice" => "required|digits_between:1,3",
        "yearReduction" => "required|digits_between:1,3",
        "extraReduction" => "required|digits_between:1,3",
      ], [
        "matter.required" => "<span style='color:red;'>Este campo é de preenchimento obrigatório.</span>",
        "matter.regex" => "<span style='color:red;'>Este campo deve conter caracteres válidos.</span>",

        "title.required" => "<span style='color:red;'>Este campo é de preenchimento obrigatório.</span>",
        "title.regex" => "<span style='color:red;'>Este campo deve conter caracteres válidos.</span>",

        "content.required" => "<span style='color:red;'>Este campo é de preenchimento obrigatório.</span>",
        "content.max" => "<span style='color:red;'>Este campo não deve ultrapassar 500 caractéres.</span>",

        "image.image" => "<span style='color:red;'>Este ficheiro não é uma imagem</span>",
        "image.mimes" => "<span style='color:red;'>A imagem dve ser do tipo: jpeg,png,jpg,gif,svg.</span>",
        "image.max" => "<span style='color:red;'>O tamanho da imagem deve ser inferior a 2048 kilo-octets.</span>",

        "hourPrice.required" => "<span style='color:red;'>Este campo é de preenchimento obrigatório.</span>",
        "hourPrice.digits_between" => "<span style='color:red;'>Este campo deve conter entre 1 et 3 chiffres.</span>",

        "yearReduction.required" => "<span style='color:red;'>Este campo é de preenchimento obrigatório.</span>",
        "yearReduction.digits_between" => "<span style='color:red;'>Este campo deve conter entre 1 et 3 chiffres.</span>",

        "extraReduction.required" => "<span style='color:red;'>Este campo é de preenchimento obrigatório.</span>",
        "extraReduction.digits_between" => "<span style='color:red;'>Este campo deve conter entre 1 et 3 chiffres.</span>",
      ]);

      if ($validator->fails()) {
          return back()
              ->withErrors($validator,);
      }

      if($request->image){
        $image = $request->image;
        $image_name = time() .'_'.$image->getClientOriginalExtension();
        $image->move('uploads/matters/', $image_name);
        
        $matter->update([
          'matter' => Request('matter'),
          'title' => Request('title'),
          'content' => Request('content'),
          'image' => "uploads/matters/" . $image_name,
          'hourPrice' => Request('hourPrice'),
          'yearReduction' => Request('yearReduction'),
          'extraReduction' => Request('extraReduction')
        ]);
      }else{
        $matter->update([
          'matter' => Request('matter'),
          'title' => Request('title'),
          'content' => Request('content'),
          'hourPrice' => Request('hourPrice'),
          'yearReduction' => Request('yearReduction'),
          'extraReduction' => Request('extraReduction')
        ]);
      }
      return back()
            ->with('success', "A disciplina foi modificada com sucesso");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matter $matter)
    {
        $matter->delete();
        return back()->with('success', "A disciplina foi apagada com sucesso !");
    }
}
