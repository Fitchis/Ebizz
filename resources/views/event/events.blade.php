<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Events - eBizz</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" rel="stylesheet"> 
    @vite('resources/css/style.css') 
    @vite('resources/css/app.css') 
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'poppins', sans-serif;
        }
        .event-card {
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .event-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .event-card h2 {
            color: rgb(30 64 175);
        }
        .event-card p {
            color: #6c757d;
        }
        .header-title {
            font-size: 2.5rem;
            color:rgb(30 64 175);
            margin-top: 20px;
            margin-bottom: 40px;
        }
        .view-details {
            background-color: rgb(30 64 175);
            color: white;
            margin-top: 15px; /* Increase margin-top for more space above the button */
    border-radius: 20px;
    padding: 10px 16px;
    transition: background-color 0.3s, transform 0.3s;
    display: inline-block; /* Ensure button is treated as a block for margin */
        }
        .view-details:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    @include('navbar') <!-- Include the navbar -->

    <main class="py-10">
        <div class="container mx-auto">
            <h1 class="header-title text-center font-bold mt-20">Explore Events</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Example Event Card -->
                <div class="event-card p-4">
                    <h2 class="text-xl font-bold">Event Title 1</h2>
                    <p>Date: January 15, 2024</p>
                    <p>Location: New York City</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet accumsan arcu.</p>
                    <a href="#" class="view-details">View Details</a>
                </div>

                <div class="event-card p-4">
                    <h2 class="text-xl font-bold">Event Title 2</h2>
                    <p>Date: February 20, 2024</p>
                    <p>Location: Los Angeles</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet accumsan arcu.</p>
                    <a href="#" class="view-details">View Details</a>
                </div>

                <div class="event-card p-4">
                    <h2 class="text-xl font-bold">Event Title 3</h2>
                    <p>Date: March 10, 2024</p>
                    <p>Location: Chicago</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet accumsan arcu.</p>
                    <a href="#" class="view-details">View Details</a>
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