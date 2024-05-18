<?php
// ... (Previous PHP code remains unchanged)

// Use your OpenWeatherMap API key here
$apiKey = '146aa96e613e6d5e20b5b81e751c8b12';
$city = 'Erbil'; // Replace with your city

// Fetch weather data from OpenWeatherMap API
$weatherData = json_decode(file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=$city&appid=$apiKey"));
?>
        <div class="mx-auto mt-16 bg-white rounded-lg overflow-hidden w-full lg:w-3/4 xl:w-2/3 2xl:w-1/2 border border-gray-400">
            <div class="px-4 py-2 border-b border-gray-200">
                <h2 class="font-semibold text-gray-800">Weather</h2>
            </div>

            <div class="flex items-center py-4 px-6">
                <?php
                if ($weatherData) {
                    $temperature = round($weatherData->main->temp - 273.15, 1); // Convert temperature from Kelvin to Celsius
                    $description = $weatherData->weather[0]->description;
                    echo '
                        <div class="ml-3">
                            <h3 class="text-gray-900 font-semibold">Current Weather in ' . $city . '</h3>
                            <p class="text-gray-700 mt-1">' . $description . '</p>
                            <p class="text-gray-700 mt-1">Temperature: ' . $temperature . '°C</p>
                        </div>';
                } else {
                    echo '<p>Unable to fetch weather data</p>';
                }
                ?>
            </div>
        </div>
        <?php