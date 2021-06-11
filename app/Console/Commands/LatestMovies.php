<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use GuzzleHttp\Client;

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
        $response = $client
            ->request(
                    "GET",
                    env('TMDB_API_URL') . "movie/upcoming",
                    ['query' => [
                        "api_key" => env('TMDB_API_KEY'),
                        "language" => "en-US",
                        "page" => "1"
                    ]]
            )
            ->getBody()->getContents();
    }
}



