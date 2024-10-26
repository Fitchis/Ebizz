<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Events - eBizz</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" rel="stylesheet">
    @vite('resources/js/app.js') 
    @vite('resources/css/style.css') 
    @vite('resources/css/app.css') 
</head>
</head>
<body>
    @include('navbar') <!-- Include the navbar -->

    <main class="py-10">
        <div class="container mx-auto">
            <h1 class="text-4xl text-center text-blue-700 font-bold mb-4 mt-20">Explore Events</h1>
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

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>