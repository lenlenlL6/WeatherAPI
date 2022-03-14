<?php

namespace weatherapi;

class Weather{
  
  private $weather;
  
  public function __construct(string $ipv4){
  $location = json_decode(file_get_contents("http://ipinfo.io/" . $ipv4 . "/json"), true);
  $lat_lon = explode(",", $location["loc"]);
  $weather = json_decode(file_get_contents("http://api.openweathermap.org/data/2.5/weather?lat=" . $lat_lon[0] . "&lon=" . $lat_lon[1] . "&appid=484d1f57101a60bdcd20f4324ad6817b"), true);
  $this->weather = $weather;
  }
  
  public function getLat() : float{
  return $this->weather["coord"]["lat"];
  }
  
  public function getLon() : float{
  return $this->weather["coord"]["lon"];
  }
  
  public function getId() : int{
  return $this->weather["weather"][0]["id"];
  }
  
  public function getMain() : string{
  return $this->weather["weather"][0]["main"];
  }
  
  public function getDescription() : string{
  return $this->weather["weather"][0]["description"];
  }
  
  public function getIcon() : string{
  return $this->weather["weather"][0]["icon"];
  }
  
  public function getBase() : string{
  return $this->weather["base"];
  }
  
  public function getTemp() : float{
  return $this->weather["main"]["temp"];
  }
  
  public function getTempMin() : float{
  return $this->weather["main"]["temp_min"];
  }
  
  public function getTempMax() : float{
  return $this->weather["main"]["temp_max"];
  }
  
  public function getPressure() : int{
  return $this->weather["main"]["pressure"];
  }
  
  public function getHumidity() : int{
  return $this->weather["main"]["humidity"];
  }
  
  public function getSeaLevel() : int{
  return $this->weather["main"]["sea_level"];
  }
  
  public function getVisibilityLevel() : int{
  return $this->weather["visibility"];
  }
  
  public function getWindSpeed() : float{
  return $this->weather["wind"]["speed"];
  }
  
  public function getAllClouds() : int{
  return $this->weather["clouds"]["all"];
  }
  
  public function getCountry() : string{
  return $this->weather["sys"]["country"];
  }
  
  public function getSunrise() : int{
  return $this->weather["sys"]["sunrise"];
  }
  
  public function getSunset() : int{
  return $this->weather["sys"]["sunset"];
  }
  
  public function getTimezone() : int{
  return $this->weather["timezone"];
  }
  
  public function getHoursFromTimezone() : int{
  date_default_timezone_set($this->getTimezone());
  return date("H");
  }
  
  public function getMinutesFromTimezone() : int{
  date_default_timezone_set($this->getTimezone());
  return date("i");
  }
  
  public function getSecondsFromTimezone() : int{
  date_default_timezone_set($this->getTimezone());
  return date("s");
  }
  
  public function getWeatherArray() : array{
  return $this->weather;
  }
}
