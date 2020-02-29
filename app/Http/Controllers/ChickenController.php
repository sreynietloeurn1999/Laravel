<?php

namespace App\Http\Controllers;

use App\Chicken;
use Illuminate\Http\Request;

class ChickenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chicken = Chicken::all();
        // dd($chicken);
        return view('chicken.view',compact('chicken'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('chicken.formAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $chicken = new Chicken;
        $chicken->agg = $request ->agge;
        $chicken ->save();
        return redirect('chicken');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Chicken  $chicken
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $chicken = Chicken::find($id);

        return view('chicken.formEdit',compact('chicken'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Chicken  $chicken
     * @return \Illuminate\Http\Response
     */
    public function edit(Chicken $chicken)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Chicken  $chicken
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $chicken = Chicken::find($id);
        $chicken->agg = $request->agge;
        $chicken->save();
        return redirect('chicken');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Chicken  $chicken
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $chicken = Chicken::find($id);
        $chicken->delete();
        return redirect('chicken');
    }
}
