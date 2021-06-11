@extends('user.app')

@section('title', 'Homepage')

@section('content')
<div class="container my-3">
    <div class="row">
        <h3>Today - {{ date("D jS, M", strtotime("+2 day")) }}</h3>
    </div>
</div>
@stop
