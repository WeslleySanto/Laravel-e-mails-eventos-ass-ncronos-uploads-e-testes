<?php

namespace App\Http\Controllers;

use App\Season;
use App\Episode;
use Illuminate\Http\Request;

class EpisodesController extends Controller
{   

    public function index(Request $request, Season $season) {
        $mensagem = $request->session()->get('mensagem');
        return view('episodes.index')
            ->with('episodes', $season->episodes)
            ->with('mensagem', $mensagem);
    }

    public function update(Request $request, Season $season)
    {
        $watchedEpisodes = $request->episodes;
        $season->episodes->each(function (Episode $episode) use ($watchedEpisodes) {
            $episode->watched = in_array($episode->id, $watchedEpisodes);
        });
        $season->push();

        return redirect()
            ->route('listar_episodes', $season->id)
            ->with('mensagem', "Episódios marcados!");
    }

}

