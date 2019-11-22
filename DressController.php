<?php

namespace App\Http\Controllers;

use App\Dress;
use Illuminate\Http\Request;

class DressController extends Controller
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
     * @param  \App\Dress  $dress
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dress  $dress
     * @return \Illuminate\Http\Response
     */
    public function edit(Dress $dress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dress  $dress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dress $dress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dress  $dress
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dress $dress)
    {
        //
    }
    public function show( )
    {
      return view('dressList');

    }
    public function show1()
    {
              $d = Dress::all()[0];
           return view('dressDetails', compact('d'));
    }
    public function show2()
    {
      $d= Dress::all()[1];
      return view('dressDetails', compact('d'));
    }
}
