<?php

namespace App\Http\Controllers;

use App\Mazo;
use Illuminate\Http\Request;

class MazoController extends Controller
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
        $nivel = new Mazo($request);
        $nivel->saveOrFail();
        return response()->json('The book successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mazo  $mazo
     * @return \Illuminate\Http\Response
     */
    public function show(Mazo $mazo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mazo  $mazo
     * @return \Illuminate\Http\Response
     */
    public function edit(Mazo $mazo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mazo  $mazo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mazo $mazo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mazo  $mazo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mazo $mazo)
    {
        //
    }
}
