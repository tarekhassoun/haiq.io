@extends('user.app')

@section('title', 'Homepage')

@section('content')

<?php
$client = new GuzzleHttp\Client(['verify' => false]);
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

$response = json_decode($response);
echo '<pre>';
var_dump($response->results[0]);
echo '</pre>';

$movies = array();
$movies[] = array(
    'title' => "F9",
    'slug' => "f9",
    'image' => "f9.jpg",
    'rating' => "PG13",
    'date' => "01 Feb, 2022",
);
$movies[] = array(
    'title' => "Black Widow",
    'slug' => "black-widow",
    'image' => "black_widow.jpg",
    'rating' => "PG13",
    'date' => "01 Feb, 2022",
);
$movies[] = array(
    'title' => "Space Jam: A New Legacy",
    'slug' => "space-jam-a-new-legacy",
    'image' => "space_jam_a_new_legacy.jpg",
    'rating' => "PG",
    'date' => "01 Feb, 2022",
);
$movies[] = array(
    'title' => "The Suicide Squad",
    'slug' => "the-suicide-squad",
    'image' => "the_suicide_squad.jpg",
    'rating' => "R",
    'date' => "01 Feb, 2022",
);
$movies[] = array(
    'title' => "Free Guy",
    'slug' => "free-guy",
    'image' => "free_guy.jpg",
    'rating' => "NA",
    'date' => "01 Feb, 2022",
);
$movies[] = array(
    'title' => "Space Jam: A New Legacy",
    'slug' => "space-jam-a-new-legacy",
    'image' => "space_jam_a_new_legacy.jpg",
    'rating' => "PG",
    'date' => "01 Feb, 2022",
);
$movies[] = array(
    'title' => "F9",
    'slug' => "f9",
    'image' => "f9.jpg",
    'rating' => "PG13",
    'date' => "01 Feb, 2022",
);
$movies[] = array(
    'title' => "Black Widow",
    'slug' => "black-widow",
    'image' => "black_widow.jpg",
    'rating' => "PG13",
    'date' => "01 Feb, 2022",
);
$movies[] = array(
    'title' => "Space Jam: A New Legacy",
    'slug' => "space-jam-a-new-legacy",
    'image' => "space_jam_a_new_legacy.jpg",
    'rating' => "PG",
    'date' => "01 Feb, 2022",
);
$movies[] = array(
    'title' => "The Suicide Squad",
    'slug' => "the-suicide-squad",
    'image' => "the_suicide_squad.jpg",
    'rating' => "R",
    'date' => "01 Feb, 2022",
);
$movies[] = array(
    'title' => "Free Guy",
    'slug' => "free-guy",
    'image' => "free_guy.jpg",
    'rating' => "NA",
    'date' => "01 Feb, 2022",
);
$movies[] = array(
    'title' => "Space Jam: A New Legacy",
    'slug' => "space-jam-a-new-legacy",
    'image' => "space_jam_a_new_legacy.jpg",
    'rating' => "PG",
    'date' => "01 Feb, 2022",
);

$tvs = array();
$tvs[] = array(
    'title' => "Mare of Easttown",
    'slug' => "mare-of-easttown",
    'image' => "mare_of_easttown.jpg",
    'date' => "01 Feb, 2022",
);
$tvs[] = array(
    'title' => "The Handmaid's Tale",
    'slug' => "the-handmaids-tale",
    'image' => "the_handmaids_tale.jpg",
    'date' => "01 Feb, 2022",
);
$tvs[] = array(
    'title' => "M.O.D.O.K.",
    'slug' => "modok",
    'image' => "modok.jpg",
    'date' => "01 Feb, 2022",
);
$tvs[] = array(
    'title' => "The Boys",
    'slug' => "the-boys",
    'image' => "the_boys.jpg",
    'date' => "01 Feb, 2022",
);
$tvs[] = array(
    'title' => "Stranger Things",
    'slug' => "stranger-things",
    'image' => "stranger_things.jpg",
    'date' => "01 Feb, 2022",
);
$tvs[] = array(
    'title' => "Loki",
    'slug' => "loki",
    'image' => "loki.jpg",
    'date' => "01 Feb, 2022",
);
$tvs[] = array(
    'title' => "Mare of Easttown",
    'slug' => "mare-of-easttown",
    'image' => "mare_of_easttown.jpg",
    'date' => "01 Feb, 2022",
);
$tvs[] = array(
    'title' => "The Handmaid's Tale",
    'slug' => "the-handmaids-tale",
    'image' => "the_handmaids_tale.jpg",
    'date' => "01 Feb, 2022",
);
$tvs[] = array(
    'title' => "M.O.D.O.K.",
    'slug' => "modok",
    'image' => "modok.jpg",
    'date' => "01 Feb, 2022",
);
$tvs[] = array(
    'title' => "The Boys",
    'slug' => "the-boys",
    'image' => "the_boys.jpg",
    'date' => "01 Feb, 2022",
);
$tvs[] = array(
    'title' => "Stranger Things",
    'slug' => "stranger-things",
    'image' => "stranger_things.jpg",
    'date' => "01 Feb, 2022",
);
$tvs[] = array(
    'title' => "Loki",
    'slug' => "loki",
    'image' => "loki.jpg",
    'date' => "01 Feb, 2022",
);

$musics = array();
$musics[] = array(
    'title' => "Olivia Rodrigo",
    'slug' => "olivia-rodrigo",
    'image' => "olivia_rodrigo.jpg",
);
$musics[] = array(
    'title' => "Drake",
    'slug' => "drake",
    'image' => "drake.jpg",
);
$musics[] = array(
    'title' => "Eminem",
    'slug' => "eminem",
    'image' => "eminem.jpg",
);
$musics[] = array(
    'title' => "Polo G",
    'slug' => "polo-g",
    'image' => "polo_g.jpg",
);
$musics[] = array(
    'title' => "J. Cole",
    'slug' => "j-cole",
    'image' => "j_cole.jpg",
);
$musics[] = array(
    'title' => "Taylor Swift",
    'slug' => "taylor-swift",
    'image' => "taylor_swift.jpg",
);
$musics[] = array(
    'title' => "Eminem",
    'slug' => "eminem",
    'image' => "eminem.jpg",
);
$musics[] = array(
    'title' => "Polo G",
    'slug' => "polo-g",
    'image' => "polo_g.jpg",
);

$sports = array();
$sports[] = array(
    "sport" => "golf",
    "icon" => "fa-golf-ball",
    "competition" => "LPGA",
    "logo" => "lpga.png",
    "type" => "multi",
    "event" => "Women's British Open",
    "date" => "01 Feb, 2022", 
);
$sports[] = array(
    "sport" => "basketball",
    "icon" => "fa-basketball-ball",
    "competition" => "NBA",
    "logo" => "nba.png",
    "type" => "vs",
    "competitors" => array("LA Lakers", "Raptors"),
    "competitors_image" => array("lalakers.png", "raptors.png"),
    "date" => "01 Feb, 2022", 
);
$sports[] = array(
    "sport" => "boxing",
    "icon" => "fa-boxing-glove",
    "competition" => "none",
    "type" => "vs",
    "competitors" => array("Jake LaMotta", "Sugar Ray"),
    "date" => "01 Feb, 2022", 
);

?>

<div class="container">
    <h3 class="row home-section-header mt-3">Movies</h3>
    <div class="row justify-content-center">
        @foreach ($movies as $id => $movie)
        <div class="col-2 mt-1 mb-3 px-1">
            <a
                href="/movie/{{ $movie['slug'] }}"
                class="d-block w-100 single-container movie-container"
                title="{{ $movie['title'] }}"
                style="background-image: url('{{ asset("cdn/movies/" . $movie["image"]) }}');"
            >
                <span class="title">{{ $movie['title'] }}<br>{{ $movie['date'] }}</span>
                <span class="watch" onclick="watch('movie', {{ $movie['slug'] }}); return false;"><i class="fas fa-eye"></i></span>
                <span class="shadow"></span>
            </a>
        </div>
        @endforeach
    </div>
    <a class="btn btn-green my-3 w-100 py-3" href="">All Movies</a>


    <h3 class="row home-section-header mt-3">TV Shows</h3>
    <div class="row justify-content-center">
        @foreach ($tvs as $id => $tv)
        <div class="col-2 mt-1 mb-3 px-1">
            <a
                href="/tv/{{ $tv['slug'] }}"
                class="d-block w-100 single-container tv-container"
                title="{{ $tv['title'] }}"
                style="background-image: url('{{ asset("cdn/tv/" . $tv["image"]) }}');"
            >
                <span class="title">{{ $tv['title'] }}<br>{{ $tv['date'] }}</span>
                <span class="watch" onclick="watch('tv', {{ $tv['slug'] }}); return false;"><i class="fas fa-eye"></i></span>
                <span class="shadow"></span>
            </a>
        </div>
        @endforeach
    </div>
    <a class="btn btn-green my-3 w-100 py-3" href="">All TV Shows</a>


    <h3 class="row home-section-header mt-3">Sports</h3>
    <div class="row justify-content-center">
        <div class="col text-center py-5">
            <a href="">
                <i style="font-size: 45px" class="fas fa-futbol"></i><br><br>Soccer
            </a>
        </div>
        <div class="col text-center py-5">
            <a href="">
                <i style="font-size: 45px" class="fas fa-basketball-ball"></i><br><br>Basketball
            </a>
        </div>
        <div class="col text-center py-5">
            <a href="">
                <i style="font-size: 45px" class="fas fa-football-ball"></i><br><br>American Football
            </a>
        </div>
        <div class="col text-center py-5">
            <a href="">
                <i style="font-size: 45px" class="fas fa-flag-checkered"></i><br><br>Auto Racing
            </a>
        </div>
        <div class="col text-center py-5">
            <a href="">
                <i style="font-size: 45px" class="fas fa-racquet"></i><br><br>Tennis
            </a>
        </div>
        <div class="col text-center py-5">
            <a href="">
                <i style="font-size: 45px" class="fas fa-baseball-ball"></i><br><br>Baseball
            </a>
        </div>
    </div>
    <div class="row mb-3">
        @foreach ($sports as $id => $sport)
        <a href="" class="row py-2 sports-container">
            <div class="col-1 justify-content-center align-items-center d-flex" title="{{ ucwords($sport['sport']) }}">
                <i class="fas {{ $sport['icon'] }}" style="font-size: 23px;"></i>
            </div>
            <div class="col-1 justify-content-center align-items-center d-flex">
                @if ($sport['competition'] != "none")
                <img src="{{ asset('cdn/sports/leagues/' . $sport['logo']) }}" height="50" title="{{ $sport['competition'] }}"/>
                @endif
            </div>
            <div class="col-6 justify-content-center align-items-center d-flex">
                @if ($sport['type'] == "multi")
                    {{ $sport['event'] }}
                @elseif ($sport['type'] == "vs")
                    {{ implode(' vs. ', $sport['competitors']) }}
                @endif
            </div>
            <div class="col-2 justify-content-center align-items-center d-flex">{{ $sport['date'] }}</div>
            <div class="col-2 justify-content-end align-items-center d-flex"><span class="watch" onclick="watch('sports', ''); return false;"><i class="fas fa-eye"></i></span></div>
        </a>
        @endforeach
    </div>
    <a class="btn btn-green my-3 w-100 py-3" href="">All Sports</a>


    <h3 class="row home-section-header mt-3">Music</h3>
    <div class="row justify-content-center">
        @foreach ($musics as $id => $music)
        <div class="col-3 mt-1 mb-3 px-1">
            <a
                href="/music/{{ $music['slug'] }}"
                class="d-block w-100 single-container music-container"
                title="{{ $music['title'] }}"
                style="background-image: url('{{ asset("cdn/music/" . $music["image"]) }}');"
            >
                <span class="title">{{ $music['title'] }}</span>
                <span class="watch" onclick="watch('music', {{ $music['slug'] }}); return false;"><i class="fas fa-eye"></i></span>
                <span class="shadow"></span>
            </a>
        </div>
        @endforeach
    </div>
    <a class="btn btn-green my-3 w-100 py-3" href="">All Music</a>

    <h3 class="row home-section-header mt-5">Our Statistics</h3>
    <div class="row mb-4">
        <div class="col-3 text-center fw-bold py-5 home-stat">
            <i class="fas fa-film"></i><br>
            2,546 Movies
        </div>
        <div class="col-3 text-center fw-bold py-5 home-stat">
            <i class="fas fa-tv-retro"></i><br>
            679 TV Shows
        </div>
        <div class="col-3 text-center fw-bold py-5 home-stat">
            <i class="fas fa-music"></i><br>
            2000 Artist
        </div>
        <div class="col-3 text-center fw-bold py-5 home-stat">
            <i class="fas fa-volleyball-ball"></i><br>
            132 Sporting Events
        </div>
    </div>
</div>
@stop
