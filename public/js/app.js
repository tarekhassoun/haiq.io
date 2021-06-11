const rgb2hex = (rgb) => `#${rgb.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/).slice(1).map(n => parseInt(n, 10).toString(16).padStart(2, '0')).join('')}`;

function changeSiteColorMode()
{
    var bg_color = rgb2hex($("body").css("background-color"));

    if (bg_color == "#090909") {
        $("body").removeClass("theme-dark");
        $("body").addClass("theme-light");

        $("#theme-icon").removeClass("fa-sun");
        $("#theme-icon").addClass("fa-moon");

        setCookie("hai_theme", "light");
    } else {
        $("body").removeClass("theme-light");
        $("body").addClass("theme-dark");

        $("#theme-icon").addClass("fa-sun");
        $("#theme-icon").removeClass("fa-moon");

        setCookie("hai_theme", "dark");
    }
}

function setCookie (name, value)
{
    var date = new Date();
    date.setTime(date.getTime() + (365*24*60*60*1000));
    var expires = date.toUTCString();
    document.cookie = name + "=" + value + ";expires=" + expires + ";path=/";
}

function getCookie(name)
{
    var cookieArr = document.cookie.split(";");
    
    for (var i = 0; i < cookieArr.length; i++) {
        var cookiePair = cookieArr[i].split("=");
        
        if (name == cookiePair[0].trim()) {
            return decodeURIComponent(cookiePair[1]);
        }
    }
    
    return null;
}
