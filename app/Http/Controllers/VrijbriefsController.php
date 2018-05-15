<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vrijbrief;
use App\User;

class VrijbriefsController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vrij = Vrijbrief::all();
        return view('vrijbrief.index')->with('vrij',$vrij);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vrijbrief.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'begindatum' => 'required',
            'einddatum' => 'required',
        ]);

        $vrijbrief = new Vrijbrief;
        $vrijbrief->BeginDatum = $request->input('begindatum');
        $vrijbrief->EindDatum = $request->input('einddatum');
        $vrijbrief->PersID = auth()->user()->PersID;
        $vrijbrief->save();

        return redirect('/vrijbrief');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $brief = Vrijbrief::find($id);
        return view('vrijbrief.show')->with('brief',$brief);
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
    public function destroy($id)
    {
        //
    }
}
