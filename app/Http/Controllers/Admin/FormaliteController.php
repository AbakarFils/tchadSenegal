<?php

namespace App\Http\Controllers\Admin;

use App\Appartenir;
use App\Formalite;
use App\Formalite_piece;
use App\Piece;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FormaliteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formalites = Formalite::all();
        return view('admin.formalite.index',compact('formalites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view('admin.formalite.create');
    }

    public function addpiece(Request $request)
    {

        $formalite=Formalite::find($request->input('formalite_id'));

        $pieces = Piece::all();
        return view('admin.formalite.add_piece',compact('formalite','pieces'));
    }
    public function attachdocuments(Request $request)
    {

        foreach($request->piece_id as $piece_id)
        {
            $appartenitenir =new Formalite_piece();
            $appartenitenir->formalite_id=$request->formalite_id;
            $appartenitenir->piece_id=$piece_id;
            $appartenitenir->save();
        }
        $formalite= Formalite::find($request->formalite_id);
        return redirect()->route('formalite.show',['formalite'=>$formalite])
            ->with('success','les ou les Do est creée avec succès');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'libelle'=> 'required',
        ]);
        $formalite =new Formalite();
        $formalite->libelle =$request->libelle;
        $formalite->save();
        return redirect()->route('formalite.index')
            -> with('successMsg',' Piece sauver avec succès');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Formalite $formalite)
    {
        $formalite =Formalite::find($formalite->id);
        return view('admin.formalite.show',compact('formalite'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $formalite= Formalite::find($id);
        return view('admin.formalite.edit', compact('formalite'));
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
        $formaliteUpdate=Formalite::where('id',$id)
            ->update([
                'libelle' =>$request->input('libelle')
            ]);
        if($formaliteUpdate)
        {
            return redirect()->route('formalite.index')
                ->with('success','la formalite est mise à jour avec succes');
        }
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
