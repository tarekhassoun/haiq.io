@extends('user.app')

@section('title', $movie->title)

@section('content')
<?php
    $vid_img = $movie->images()->where("type", "poster")->first();

    if (!is_null($vid_img)) {
        $this_v_img = "https://image.tmdb.org/t/p/original" . $vid_img->image;
    } else {
        $this_v_img = "https://www.fillmurray.com/g/200/300";
    }
?>

<div class="container my-4">
    <div class="row">
        <div class="col-3">
            <img src="{{ $this_v_img }}" class="w-100" />
        </div>
        <div class="col-9">
            <div class="row">
                <h3>{{ $movie->title }}</h3>
            </div>
            @if (!empty($movie->original_title) and $movie->original_title != $movie->title)
            <div class="row">
                <h3>{{ $movie->original_title }}</h3>
            </div>
            @endif
            <div class="row">
                <i>{{ date("l jS F, Y", strtotime($movie->release_date)) }}</i>
            </div>
            <div class="row my-4">
                <p>{{ $movie->overview }}</p>
            </div>
            <div class="row my-4">
                <span id="" class="btn watch"><i class="fas fa-eye"></i> Watch</span>
            </div>
        </div>
    </div>
</div>
@stop