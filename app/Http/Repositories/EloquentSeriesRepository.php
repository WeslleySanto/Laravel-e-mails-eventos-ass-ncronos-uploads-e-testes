<?php

namespace App\Http\Repositories;

use App\Serie;
use App\Season;
use App\Episode;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\SeriesFormRequest;
use App\Http\Repositories\SeriesRepository;


class EloquentSeriesRepository implements SeriesRepository
{
     public function add(SeriesFormRequest $request): Serie
     {
        return DB::transaction(function () use ($request) {
            $serie = Serie::create($request->all());

            $seasons = [];

            for ($i = 1; $i <= $request->seasonQty; $i++){
                $seasons[] = [
                    'series_id' => $serie->id,
                    'numero' => $i
                ];

            }

            Season::insert($seasons);

            $episodes = [];

            foreach ($serie->temporadas as $season) {
                for ($j = 1; $j <= $request->episodePerSeason; $j++) {
                    $episodes[] = [
                        'season_id' => $season->id,
                        'numero' => $j
                    ];
                }
            }

            Episode::insert($episodes);

            return $serie;
        });
     }
}