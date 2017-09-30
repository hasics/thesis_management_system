<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thesis;
use App\Borrower;

class BorrowerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $borrowers = Borrower::orderBy('name')->paginate(5);
        return view('borrower.index')->with(compact('borrowers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Thesis $thesis)
    {
      $theses = $thesis->all();
      // dd($theses);
      return view('borrower.create')->with(compact('theses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $borrower = new Borrower;
      $borrower->create($request->all());
      return redirect('/borrower');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $borrower = Borrower::find($id);
        // dd($borrower);
        return view('borrower.show')->with(compact('borrower'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $borrower = Borrower::find($id);
      return view('borrower.edit')->with(compact('borrower'));
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
      $borrower = Borrower::find($id);
      $borrower->fill($request->all());
      $borrower->save();

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
        //echo 'here';
        // dd($id);
        $borrower = Borrower::find($id);
        $borrower->delete();

        return redirect('/borrower');
    }

    // public function register()
    // {
    //   return view('borrower.register');
    // }

    public function history()
    {
      $borrowers = Borrower::onlyTrashed()
        ->orderBy('deleted_at')
        ->paginate(5);
      return view('borrower.history')->with(compact('borrowers'));
    }
}
