<?php

namespace App\Http\Controllers;

use App\Electronic;
use Illuminate\Http\Request;

class ElectronicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Electronics  $electronics
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Electronics  $electronics
     * @return \Illuminate\Http\Response
     */
    public function edit(Electronics $electronics)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Electronics  $electronics
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Electronics $electronics)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Electronics  $electronics
     * @return \Illuminate\Http\Response
     */
    public function destroy(Electronics $electronics)
    {
        //
    }
    public function show( )
    {
      return view('electronicsList');
    }
    public function show1()
    {
              $e = Electronic::all()[0];
           return view('electronicsDetails', compact('e'));
    }
    public function show2()
    {
      $e = Electronic::all()[1];
      return view('electronicsDetails', compact('e'));
    }
}
