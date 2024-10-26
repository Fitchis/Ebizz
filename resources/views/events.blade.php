<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Events - eBizz</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
</head>
<body>
    @include('navbar') <!-- Include the navbar -->

    <main class="py-10">
        <div class="container mx-auto">
            <h1 class="text-4xl text-center mb-8">Explore Events</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Example Event Card -->
                <div class="bg-white shadow-md rounded-lg p-4">
                    <h2 class="text-xl font-bold">Event Title 1</h2>
                    <p class="text-gray-600">Date: January 15, 2024</p>
                    <p class="text-gray-600">Location: New York City</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet accumsan arcu.</p>
                    <a href="#" class="text-blue-600 hover:underline">View Details</a>
                </div>

                <div class="bg-white shadow-md rounded-lg p-4">
                    <h2 class="text-xl font-bold">Event Title 2</h2>
                    <p class="text-gray-600">Date: February 20, 2024</p>
                    <p class="text-gray-600">Location: Los Angeles</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet accumsan arcu.</p>
                    <a href="#" class="text-blue-600 hover:underline">View Details</a>
                </div>

                <div class="bg-white shadow-md rounded-lg p-4">
                    <h2 class="text-xl font-bold">Event Title 3</h2>
                    <p class="text-gray-600">Date: March 10, 2024</p>
                    <p class="text-gray-600">Location: Chicago</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet accumsan arcu.</p>
                    <a href="#" class="text-blue-600 hover:underline">View Details</a>
                </div>
            </div>
        </div>
    </main>

    <script src="{{ asset('js/app.js') }}"></script> 
</body>
</html>