<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thesis;
use App\Supervisor;

class ThesisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q = $request->get('q');
        $theses = Thesis::where('title', 'like', '%'.$q.'%')
          ->orWhere('name', 'like', '%'.$q.'%')
          ->orWhere('faculty', 'like', '%'.$q.'%')
          ->orWhere('matric_no', 'like', '%'.$q.'%')
          ->orderBy('id')->paginate(5);
        // $theses = Thesis::all();
        return view('thesis.index')->with(compact('theses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $supervisors = Supervisor::all();
        return view('thesis.create')->with(compact('supervisors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $thesis = new Thesis;
        $thesis->create($request->all());
        return redirect('/thesis');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $thesis = Thesis::find($id);
        // dd($thesis->toArray());
        return view('thesis.show')->with(compact('thesis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $thesis = Thesis::find($id);
        return view('thesis.edit')->with(compact('thesis'));
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
        $thesis = Thesis::find($id);
        $thesis->fill($request->all());
        $thesis->save();

        return back();
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
