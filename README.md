### WeatherAPI
API Helps you get weather data using IPv4
### How to use?
> Include file !
```php
<?php

include_once "path/to/WeatherAPI/src/weatherapi/Weather.php";
use weatherapi\Weather;
```
> API !
```php
<?php

include_once "path/to/WeatherAPI/src/weatherapi/Weather.php";
use weatherapi\Weather;

$ipv4 = $_SERVER["REMOTE_ADDR"];
$weather = new Weather($ipv4);
//Api Of Weather
$weather->getLat(); //get Latitude
$weather->getLon(); //get Longitude
$weather->getId(); //getId
$weather->getMain(); //Overview of the content of the weather
$weather->getDescription(); //Description for weather
$weather->getBase(); //get Base Weather
$weather->getTemp(); //Take the temperature
$weather->getTempMin(); //Take the min temperature
$weather->getTempMax(); //Take the max temperature
$weather->getPressure(); //get Pressure
$weather->getHumidity(); //get Humidity
$weather->getSeaLevel(); //get sea_level
$weather->getVisibilityLevel(); //get visibility_level
$weather->getWindSpeed(); //get wind_speed
$weather->getAllClouds(); //Number of clouds in the area
$weather->getCountry(); //get country
$weather->getSunrise(); //sunrise
$weather->getSunset(); //sunset
$weather->getTimezone(); //timezone
$weather->getHoursFromTimezone(); //Get hours from timezone
$weather->getMinutesFromTimezone(); //Get minutes from timezone
$weather->getSecondsFromTimezone(); //Get seconds from timezone
$weather->getWeatherArray(); //Get the array containing all the information
```
