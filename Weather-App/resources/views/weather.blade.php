<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather App</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-200 h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded shadow-md w-96">
        <h1 class="text-2xl font-semibold mb-4">Weather App</h1>
        <h3 class="text-1xl mb-2"> Enter City Name</h3>

        <div class="flex items-center mb-4">
            <input type="text" id="city" placeholder="Enter city name"
                class="flex-1 appearance-none rounded border border-gray-300 py-2 px-4 bg-white focus:outline-none focus:border-gray-500">
            <button onclick="fetchWeather()"
                class="ml-4 bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded focus:outline-none focus:ring focus:ring-blue-500">Fetch</button>
        </div>
        <div id="weather-info" class="text-gray-700"></div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        function fetchWeather() {
            var city = $('#city').val();
            $.ajax({
                type: 'POST',
                url: '{{ route('fetch.weather') }}',
                data: {
                    '_token': '{{ csrf_token() }}',
                    'city': city
                },
                success: function (data) {
                    // Extract and display useful information
                    var weatherInfo = 'Temperature: ' + data.main.temp + '°C<br>';
                    weatherInfo += 'Weather: ' + data.weather[0].description + '<br>';
                    weatherInfo += 'Humidity: ' + data.main.humidity + '%';
                    // Clear existing content and update with new weather information
                    $('#weather-info').html('');
                    $('#weather-info').html(weatherInfo);
                }
            });
        }

        // Trigger fetchWeather function when Enter key is pressed
        $('#city').keypress(function (event) {
            if (event.keyCode === 13) {
                fetchWeather();
            }
            // Hide weather info when input field changes
            $('#weather-info').html('');
        });

        // Hide weather info when input field changes
        $('#city').on('input', function () {
            $('#weather-info').html('');
        });
    </script>
</body>

</html>
