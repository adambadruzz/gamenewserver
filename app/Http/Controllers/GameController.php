<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
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
    public function readAll(){
        return Game::all();
    }

    public function readGameNewsAll()
    {
       return DB::table('games')->join('authors', 'games.author_id', '=', 'authors.id_author')->select('games.*','authors.author_name')->get();
    }

    public function readGameNewsType($type)
    {
       return DB::table('games')->join('authors', 'games.author_id', '=', 'authors.id_author')
       ->select('games.*','authors.author_name')->where('platform', '=', $type)->get();
    }

    public function create()
    {
        $game = new Game();
        $game->cover = $request->cover;
        $game->game_name = $request->comic_name;
        $game->short_description = $request->episode;
        $game->platform = $request->status;
        $game->description = $request->type;
        $game->author_id = $request->author_id;

        $game->save();
        return "Data added successfully";
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
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_game)
    {
        $game = Game::find($id_game);
        $game->cover = $request->cover;
        $game->game_name = $request->comic_name;
        $game->short_description = $request->episode;
        $game->platform = $request->status;
        $game->description = $request->type;
        $game->author_id = $request->author_id;

        $game->save();
        return "Data updated successfully";
    }

    public function delete($id_game)
    {
        $game = Game::find($id_game);
        $game->delete();
        return "Data deleted successfully";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        //
    }
}
