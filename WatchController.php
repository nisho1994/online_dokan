<?php

namespace App\Http\Controllers;

use App\Watch;
use Illuminate\Http\Request;

class WatchController extends Controller
{

    public function index()
    {
        $watch = Watch::all();
        return view('watchList', compact('watch'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }



    public function edit(Watch $watch)
    {
        //
    }

    public function update(Request $request, Watch $watch)
    {
        //
    }



    public function destroy(Watch $watch)
    {
        //
    }

    public function show( )
    {
      return view('watchList');

    }
    public function show1()
    {
              $w = Watch::all()[0];
           return view('watchDetails', compact('w'));
    }
    public function show2()
    {
      $w = Watch::all()[1];
      return view('watchDetails', compact('w'));
    }

}
