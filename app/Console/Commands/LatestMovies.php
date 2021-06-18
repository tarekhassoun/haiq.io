<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use GuzzleHttp\Client;
use App\Models\Movie;
use App\Models\MovieImage;

class LatestMovies extends Command
{
    protected $signature = 'latest:movies';
    protected $description = 'Get the latest movies from the API and store in the datebase';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $client = new Client(['verify' => false]);

        $i = 1;
        $total_pages = 2;
        while ($i <= $total_pages) {
            $response = $client->request(
                    "GET",
                    env('TMDB_API_URL') . "movie/upcoming",
                    ['query' => [
                        "api_key" => env('TMDB_API_KEY'),
                        "language" => "en-US",
                        "page" => $i
                    ]]
            )->getBody()->getContents();

            $response = json_decode($response);
            $total_pages = $response->total_pages;

            foreach ($response->results as $sm) {
                $sma = array();

                $sma['original_title']  = $sm->original_title;
                $sma['tmdb_id']         = $sm->id;
                $sma['release_date']    = $sm->release_date;
                $sma['language']        = $this->getLangFromCode($sm->original_language);
                $sma['overview']        = $sm->overview;
                $sma['tmdb_popularity'] = $sm->popularity;

                /* ["genre_ids"]=>
                    array(2) {
                        [0]=> int(35)
                        [1]=> int(80)
                    } */

                $mov = Movie::updateOrCreate(["title" => $sm->title], $sma);
                $mov->save();

                $img_arr = array(
                    "movie_id" => $mov->id,
                    "type" => "poster",
                );
                $img = MovieImage::updateOrCreate(["image" => $sm->poster_path], $img_arr);
                $img->save();
            }

            $i++;
        }
    }

    private function getLangFromCode($code)
    {
        switch ($code) {
            case 'da': return 'danish';   break;
            case 'en': return 'english';  break;
            case 'es': return 'spanish';  break;
            case 'fr': return 'french';   break;
            case 'it': return 'italian';  break;
            case 'ja': return 'japanese'; break;
            case 'nl': return 'dutch';    break;

            default: return 'other'; break;
        }
    }
}
