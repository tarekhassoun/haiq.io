<?php

$cats = array();

$cats["Movies"] = array();
$cats["Movies"]["icon"] = "film";
$cats["Movies"]["sub_cats"] = array(
    "Comedy"  => array("icon" => "laugh-squint"),
    "Drama"   => array("icon" => "theater-masks"),
    "Horror"  => array("icon" => "hockey-mask"),
    "Rom-Com" => array("icon" => "heart"),
    "Sci-Fi"  => array("icon" => "alien"),
);

$cats["TV"] = array();
$cats["TV"]["icon"] = "tv-retro";
$cats["TV"]["sub_cats"] = array(
    "Apple TV+" => array("icon" => ""),
    "Disney+"   => array("icon" => ""),
    "Hulu"      => array("icon" => ""),
    "Netflix"   => array("icon" => ""),
);

$cats["Sport"] = array();
$cats["Sport"]["icon"] = "volleyball-ball";
$cats["Sport"]["sub_cats"] = array(
    "American Football" => array("icon" => "football-ball"),
    "Auto Racing"       => array("icon" => "flag-checkered"),
    "Boxing"            => array("icon" => "boxing-glove"),
    "Football"          => array("icon" => "futbol"),
);


$cats["Games"] = array();
$cats["Games"]["icon"] = "gamepad";
$cats["Games"]["sub_cats"] = array(
    "American Football" => array("icon" => "football-ball"),
    "Auto Racing"       => array("icon" => "flag-checkered"),
    "Boxing"            => array("icon" => "boxing-glove"),
    "Football"          => array("icon" => "futbol"),
);

$cats["Music"] = array();
$cats["Music"]["icon"] = "music";
$cats["Music"]["sub_cats"] = array(
    "Albums" => array("icon" => "record-vinyl"),
);

$cats["Politics"] = array();
$cats["Politics"]["icon"] = "users";
$cats["Politics"]["sub_cats"] = array(
    "Elections" => array("icon" => "box-ballot"),
);

$cats["Books"] = array();
$cats["Books"]["icon"] = "book";
$cats["Books"]["sub_cats"] = array(
    "Novels" => array("icon" => ""),
    "Comics" => array("icon" => ""),
    "Manga"  => array("icon" => ""),
);

// $cats["Products"] = array();
// $cats["Products"]["icon"] = "mobile-alt";
// $cats["Products"]["sub_cats"] = array("1");

// $cats["Business"] = array();
// $cats["Business"]["icon"] = "briefcase";
// $cats["Business"]["sub_cats"] = array("1");


?>

<aside class="sidebar">
    <header>
        <a href="/">
            haiq.io
        </a>
    </header>

    <nav class="sidebar-nav">
        <ul>
            @foreach ($cats as $cat => $values)
                <li>
                    <a><i class="fas fa-{{ $values['icon'] }}"></i> <span>{{ $cat }}</span></a>
                    <ul class="nav-flyout">
                        @foreach ($values["sub_cats"] as $sub => $va)
                            <li>
                                <a href="#"><i class="fas fa-{{ $va['icon'] }}"></i> {{ $sub }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ul>
    </nav>
</aside>
