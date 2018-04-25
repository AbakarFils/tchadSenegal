<?php

namespace App\Http\Controllers\Admin;

use App\Piece;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PieceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pieces =Piece::all();
        return view('admin.piece.index',compact('pieces'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.piece.create');
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
        $piece =new Piece();
        $piece->libelle =$request->libelle;
        $piece->save();
        return redirect()->route('piece.index')
            -> with('successMsg',' Piece sauver avec succès');
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
        $piece= Piece::find($id);
        return view('admin.piece.edit', compact('piece'));
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

        $pieceUpdate=Piece::where('id',$id)
            ->update([
                'libelle' =>$request->input('libelle')
            ]);
        if($pieceUpdate)
        {
            return redirect()->route('piece.index')
                ->with('success','la piece est mise à jour avec succes');
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
