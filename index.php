<?php
/**
 * Created by PhpStorm.
 * User: Brit
 * Date: 4/10/2015
 * Time: 9:46 PM
 *
 */
?>

<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<button id="b">Button</button>

<div id="results"></div>

<script>
    var i=0;
    $("#b").click(get_gps);





    function do_something(lat, long) {
        $("#results").append("<div>Test " + i + "<br/>" + lat + "<br/>" + long + "</div><br/>");
        i++;
    }

    function get_gps()
    {
        if ("geolocation" in navigator) {
            navigator.geolocation.getCurrentPosition(function (position) {
                do_something(position.coords.latitude, position.coords.longitude);
            });
        } else {
            /* geolocation IS NOT available */
        }
    }

</script>