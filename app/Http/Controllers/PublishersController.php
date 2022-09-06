<?php

namespace App\Http\Controllers;

use App\Publishers;
use Illuminate\Http\Request;

class PublishersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('publishers.index', [
            'publishers' => Publishers::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('publishers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = validator($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ])->validate();

        $publishers = new Publishers($validatedData);
        $publishers->save();

        return redirect(route('publishers.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Publishers  $publishers
     * @return \Illuminate\Http\Response
     */
    public function show(Publishers $publishers)
    {
        return view('publishers.show', [
            'publishers' => $publishers,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Publishers  $publishers
     * @return \Illuminate\Http\Response
     */
    public function edit(Publishers $publishers)
    {
        return view('publishers.edit', [
            'publishers' => $publishers,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Publishers  $publishers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publishers $publishers)
    {
        $validatedData = validator($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ])->validate();

        $publishers->name = $validatedData['name'];
        $publishers->description = $validatedData['description'];
        $publishers->save();

        return redirect(route('publishers.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Publishers  $publishers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publishers $publishers)
    {
        $publishers->delete();
        return redirect(route('publishers.index'));
    }
}
