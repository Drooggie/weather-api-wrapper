<?php

if (! function_exists('weatherUrl')) {

    function weatherUrl($location, $key)
    {
        return "https://weather.visualcrossing.com/VisualCrossingWebServices/rest/services/timeline/$location?unitGroup=us&key=$key&lang=ru";
    }
}
