<?php

namespace App\Http\Controllers;

use App\Games;
use App\Publishers;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('games.index', [
            'games' => Games::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('games.create', [
            'publishers' => Publishers::all(),
        ]);
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
            'id_publisher' => 'required|integer',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ])->validate();

        $games = new Games($validatedData);

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/image'), $filename);
            $games['image'] = $filename;
        }

        $games->save();

        return redirect(route('games.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Games  $games
     * @return \Illuminate\Http\Response
     */
    public function show(Games $games)
    {
        return view('games.show', [
            'games' => $games,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Games  $games
     * @return \Illuminate\Http\Response
     */
    public function edit(Games $games)
    {
        return view('games.edit', [
            'games' => $games,
            'publishers' => Publishers::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Games  $games
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Games $games)
    {
        $validatedData = validator($request->all(), [
            'id_publisher' => 'required|integer',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ])->validate();

        $games->id_publisher = $validatedData['id_publisher'];
        $games->name = $validatedData['name'];
        $games->description = $validatedData['description'];

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/image'), $filename);
            $games['image'] = $filename;
        }
        
        $games->save();

        return redirect(route('games.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Games  $games
     * @return \Illuminate\Http\Response
     */
    public function destroy(Games $games)
    {
        $games->delete();
        return redirect(route('games.index'));
    }
}
