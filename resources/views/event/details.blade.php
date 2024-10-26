{{-- resources/views/event/details.blade.php --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $event['title'] }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> <!-- Include your Tailwind CSS -->
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
</body>
</html>