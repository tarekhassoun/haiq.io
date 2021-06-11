
<header class="container-fluid py-2">
    <div class="row">
        <div class="col-2">
            <a href="{{ route('homepage') }}">
                <img src="{{ asset('images/logo.png') }}" height="60" width="150" />
            </a>
        </div>

        <div class="col-5 py-2">
            <input type="text" placeholder="search" name="search_term" id="search-bar" />
        </div>

        <div class="col-5 pt-3 d-flex justify-content-end">
            <a class="mx-4" onclick="changeSiteColorMode()"><i id="theme-icon" class="fas fa-{{ $fa_icon }}"></i></a>
            <a class="mx-4" href="{{ route('calendar') }}"><i class="fas fa-calendar"></i></a>
            <a class="mx-4" href="">Login</a>
        </div>
    </div>
</header>

<div class="container-fluid header-dates">
    <div class="row">
        <a href="{{ date('Y-m-d') }}" class="col-4 text-center py-3 date-item">Today</a>
        <a href="{{ date('Y-m-d', strtotime('+1 day')) }}" class="col-2 text-center py-3 date-item">Tomorrow</a>
        <a href="{{ date('Y-m-d', strtotime('+2 day')) }}" class="col-2 text-center py-3 date-item">{{ date("D jS, M", strtotime("+2 day")) }}</a>
        <a href="{{ date('Y-m-d', strtotime('+3 day')) }}" class="col-2 text-center py-3 date-item">{{ date("D jS, M", strtotime("+3 day")) }}</a>
        <a href="{{ date('Y-m-d', strtotime('+4 day')) }}" class="col-2 text-center py-3 date-item">{{ date("D jS, M", strtotime("+4 day")) }}</a>
    </div>
</div>
