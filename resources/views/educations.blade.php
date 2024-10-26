<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education Library</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
</head>
<body>
    @include('navbar') 
    <main class="bg-blue-100">
        <section class="relative">
            <img alt="Marketing background image" class="w-full h-96 object-cover" src="https://storage.googleapis.com/a1aa/image/F320bJ0OBgI9JZR0E2qfFrY0CqtgBFC8TXrvjASfP8wfKnUnA.jpg" />
            <div class="absolute inset-0 bg-blue-900 bg-opacity-50 flex flex-col justify-center items-center text-center text-white px-4">
                <h1 class="text-4xl font-bold mb-4">Education Library</h1>
                <p class="max-w-3xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
            </div>
        </section>

        <section class="container mx-auto py-12 px-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach($educations as $education)
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <div class="bg-black p-4 text-white">
                            <img alt="{{ $education->title }}" class="w-full h-32 object-cover" src="{{ $education->image_url }}" />
                            <h2 class="text-xl font-bold">{{ $education->title }}</h2>
                            <h3 class="text-lg text-green-400">{{ $education->category }}</h3>
                        </div>
                        <div class="p-4">
                            <p class="text-gray-700">{{ $education->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </main>

    <script src="{{ asset('js/app.js') }}"></script> 
</body>
</html>