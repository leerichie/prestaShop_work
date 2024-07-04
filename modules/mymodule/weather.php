<?php

class Weather
{
    private $apiKey;
    private $city;

    public function __construct($apiKey, $city)
    {
        $this->apiKey = $apiKey;
        $this->city = $city;
    }

    public function getWeather()
    {
        $apiUrl = "http://api.openweathermap.org/data/2.5/weather?q={$this->city}&appid={$this->apiKey}&units=metric";
        $weatherData = file_get_contents($apiUrl);

        if ($weatherData) {
            $weatherData = json_decode($weatherData, true);

            if (isset($weatherData['main']['temp'])) {
                $temperatureC = $weatherData['main']['temp'];
                $temperatureF = $this->convertToFahrenheit($temperatureC);
                $weatherDescription = isset($weatherData['weather'][0]['description']) ? $weatherData['weather'][0]['description'] : null;
                $weatherIcon = isset($weatherData['weather'][0]['icon']) ? $this->getWeatherIconUrl($weatherData['weather'][0]['icon']) : null;

                return [
                    'temperatureC' => $temperatureC,
                    'temperatureF' => $temperatureF,
                    'weatherDescription' => $weatherDescription,
                    'weatherIcon' => $weatherIcon
                ];
            }
        }

        return null;
    }

    private function convertToFahrenheit($celsius)
    {
        return ($celsius * 9/5) + 32;
    }

    private function getWeatherIconUrl($iconCode)
    {
        return "http://openweathermap.org/img/wn/{$iconCode}@4x.png";
    }
}
