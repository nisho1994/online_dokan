<?php

namespace App\Http\Controllers;

use App\Toy;
use Illuminate\Http\Request;

class ToysController extends Controller
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
     * @param  \App\Toys  $toys
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Toys  $toys
     * @return \Illuminate\Http\Response
     */
    public function edit(Toys $toys)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Toys  $toys
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Toys $toys)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Toys  $toys
     * @return \Illuminate\Http\Response
     */
    public function destroy(Toys $toys)
    {
        //
    }
    public function show( )
    {
      return view('toyList');
    }
    public function show1()
    {
              $t = Toy::all()[0];
           return view('toyDetails', compact('t'));
    }
    public function show2()
    {
      $t = Toy::all()[1];
      return view('toyDetails', compact('t'));
    }
}
