<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sponsorship Opportunities - eBizz</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" rel="stylesheet"> 
    @vite('resources/css/style.css') 
    @vite('resources/css/app.css') 
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
        }
        .sponsorship-card {
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            display: flex;
            flex-direction: column; /* Stack children vertically */
            justify-content: space-between; /* Space between children */
            height: 100%; /* Allow cards to take full height */
        }
        .sponsorship-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .sponsorship-card h2 {
            color: rgb(30 64 175);
            margin-bottom: 10px; /* Add some space below the title */
        }
        .sponsorship-card p {
            color: #6c757d;
            margin-bottom: 10px; /* Add some space below the paragraph */
        }
        .header-title {
            font-size: 2.5rem;
            color: rgb(30 64 175);
            margin-top: 20px;
            margin-bottom: 40px;
        }
        .view-details {
            background-color: rgb(30 64 175);
            color: white;
            margin-top: 15px;
            border-radius: 20px;
            padding: 10px 16px;
            transition: background-color 0.3s, transform 0.3s;
            display: inline-block;
            text-align: center; /* Center the text */
        }
        .view-details:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }
        /* Grid layout for cards */
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); /* Responsive grid */
            gap: 1.5rem; /* Space between cards */
        }
    </style>
</head>
<body>
    @include('navbar') <!-- Include the navbar -->

    <main class="py-10">
        <div class="container mx-auto">
            <h1 class="header-title text-center font-bold mt-20">Sponsorship Opportunities</h1>
            <div class="grid">
                <!-- Sponsorship Card 1 -->
                <div class="sponsorship-card p-4">
                    <h2 class="text-xl font-bold">Bronze Package</h2>
                    <p>Price: $500</p>
                    <p>Benefits:</p>
                    <ul class="list-disc list-inside text-gray-700 mb-4">
                        <li>Logo display on event website</li>
                        <li>Recognition on social media</li>
                    </ul>
                    <a href="#" class="view-details">View Details</a>
                </div>

                <!-- Sponsorship Card 2 -->
                <div class="sponsorship-card p-4">
                    <h2 class="text-xl font-bold">Silver Package</h2>
                    < p>Price: $1,000</p>
                    <p>Benefits:</p>
                    <ul class="list-disc list-inside text-gray-700 mb-4">
                        <li>Logo display on event website</li>
                        <li>Recognition on social media</li>
                        <li>Verbal recognition during the event</li>
                    </ul>
                    <a href="#" class="view-details">View Details</a>
                </div>

                <!-- Sponsorship Card 3 -->
                <div class="sponsorship-card p-4">
                    <h2 class="text-xl font-bold">Gold Package</h2>
                    <p>Price: $2,500</p>
                    <p>Benefits:</p>
                    <ul class="list-disc list-inside text-gray-700 mb-4">
                        <li>Logo display on event website</li>
                        <li>Recognition on social media</li>
                        <li>Verbal recognition during the event</li>
                        <li>Exclusive sponsorship of a specific event segment</li>
                    </ul>
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
</body>
</html>