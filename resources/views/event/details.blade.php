<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" rel="stylesheet">
   
    <title>{{ $event['title'] }}</title>
    @vite('resources/css/style.css') 
</head>
<body>
    <div class="container mx-auto py-16 text-center">
        <h1 class="text-4xl font-bold mb-4">{{ $event['title'] }}</h1>
        <p class="text-lg">{{ $event['description'] }}</p>
        <p class="text-lg mt-2">
            <i class="fas fa-calendar-alt"></i>
            {{ $event['date'] }}
        </p>
        <img src="{{ $event['image'] }}" alt="{{ $event['title'] }}" class="w-full h-80 object-cover rounded-lg mb-4">
    </div>


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