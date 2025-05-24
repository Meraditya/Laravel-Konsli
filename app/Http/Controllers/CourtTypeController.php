<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\court_type;

class CourtTypeController extends Controller
{
    public function index(){
        $types = CourtType::all();
        return $types;
        return view('mcourt_type');
    }

    public function store(){
        return view('service');
    }

    public function create(){
        return view('master');
    }

    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

   
