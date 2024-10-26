<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>eBizz</title>
    @vite('resources/js/app.js') 
    @vite('resources/css/style.css') 
    @vite('resources/css/app.css') 
</head>
<body>
    @include('navbar')
    <main>
        <section class="text-center py-16 font-poppins">
            <h1 class="text-6xl font-bold text-blue-700 mt-10">
                eBizz
            </h1>
        </section>
        {{-- content section --}}
        <section class="bg-blue-900 text-white py-16">
            <div class="container mx-auto">
                <div class="relative">
                    <img alt="Modern building with glass windows" class="w-full h-64 object-cover rounded-lg" height="400" src="https://storage.googleapis.com/a1aa/image/ghuQThqw3O6VKVo42LoQbJth2KO5WQCee6mpRkWSIZ2p7RqTA.jpg" width="1200"/>
                    <div class="absolute inset-0 flex flex-col justify-center items-center bg-black bg-opacity-50 rounded-lg">
                        <p class="text-lg mb-4 p-10">
                            Platform digital berbasis aplikasi yang membantu mahasiswa menemukan, berpartisipasi, dan mengelola acara kampus, mulai dari kegiatan organisasi, acara seni, kompetisi, hingga event komunitas
                        </p>
                        <a class="btn bg-blue-600 text-white py-2 px-4 hover:bg-blue-800 hover:text-white transition-colors duration-300 rounded-full" href="{{ route('events.index') }}">
                            Telusuri Acara
                        </a>
                    </div>
                </div>
            </div>
        </section>
        {{-- Upcoming events --}}
    <section class="bg-blue-900 text-white py-16">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold mb-4">
            Upcoming Events
        </h2>
        <p class="mb-8">
            Jangan ketinggalan event-event yang akan datang. Pilihlah sesuai dengan minat Anda
        </p>
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-6">
            <a href="{{ route('event.details', ['id' => 1]) }}" class="bg-white text-black rounded-lg p-4 flex flex-col transition-transform transform hover:scale-105">
                <img alt="Event 1" class="w-full h-40 object-cover rounded-lg mb-4" height="200" src="https://storage.googleapis.com/a1aa/image/8OlJHc2RHIbsLRfz0f5eQc6vP2fmsuh4zT2AhhfLVSf56eI1JA.jpg" width="200"/>
                <h3 class="text-lg font-bold text-center">
                    Baparekraf Developer Day
                </h3>
                <p class="text-sm text-center">
                    Sponsorship Kementerian Pariwisata dan Ekonomi Kreatif Republik Indonesia
                </p>
                <p class="text-sm mt-2 text-center">
                    <i class="fas fa-calendar-alt"></i>
                    Date: 03, Oktober 2024
                </p>
            </a>
            <a href="{{ route('event.details', ['id' => 2]) }}" class="bg-white text-black rounded-lg p-4 flex flex-col transition-transform transform hover:scale-105">
                <img alt="Event 2" class="w-full h-40 object-cover rounded-lg mb-4" height="200" src="https://storage.googleapis.com/a1aa/image/6qHHXX3hByrtKpDqNULTRRRd2s86lgEmVPea6YZjsN639I1JA.jpg" width="200"/>
                <h3 class="text-lg font-bold text-center">
                    Dicoding Scholarship
                </h3>
                <p class="text-sm text-center">
                    Sponsorship Kementerian Pariwisata dan Ekonomi Kreatif Republik Indonesia
                </p>
                <p class="text-sm mt-2 text-center">
                    <i class="fas fa-calendar-alt"></i>
                    Date: 03, Oktober 2024
                </p>
            </a>
            <a href="{{ route('event.details', ['id' => 3]) }}" class="bg-white text-black rounded-lg p-4 flex flex-col transition-transform transform hover:scale-105">
                <img alt="Event 3" class="w-full h-40 object-cover rounded-lg mb-4" height="200" src="https://storage.googleapis.com/a1aa/image/jvRVhlryi8o1GxZCyUOr2ScfHUBTsQIOvjy8criGNyS09I1JA.jpg" width="200"/>
                <h3 class="text-lg font-bold text-center">
                    Upwork
                </h3>
                <p class="text-sm text-center">
                    Sponsorship Kementerian Pariwisata dan Ekonomi Kreatif Republik Indonesia
                </p>
                <p class="text-sm mt-2 text-center">
                    <i class="fas fa-calendar-alt"></i>
                    Date: 03, Oktober 2024
                </p>
            </a>
            <a href="{{ route('event.details', ['id' => 4]) }}" class="bg-white text-black rounded-lg p-4 flex flex-col transition-transform transform hover:scale-105">
                <img alt="Event 4" class="w-full h-40 object-cover rounded-lg mb-4" height="200" src="https://storage.googleapis.com/a1aa/image/GB8Z97J4MVamOlO5OVt43L1Ol3OUCwBUBFgy3eBNfVfZ3jUnA.jpg" width="200"/>
                <h3 class="text-lg font-bold text-center">
                    Baparekraf Developer Day
                </h3>
                <p class="text-sm text-center">
                    Sponsorship Kementerian Pariwisata dan Ekonomi Kreatif Republik Indonesia
                </p>
                <p class="text-sm mt-2 text-center">
                    <i class="fas fa-calendar-alt"></i>
                    Date: 03, Oktober 2024
                </p>
            </a>
            <a href="{{ route('event.details', ['id' => 5]) }}" class="bg-white text-black rounded-lg p-4 flex flex-col transition-transform transform hover:scale-105">
                <img alt="Event 5" class="w-full h-40 object-cover rounded-lg mb-4" height="200" src="https://storage.googleapis.com/a1aa/image/vrdyU4Asbs7xDBSO8jZeQJX02cU3FOWWpk4sBfx1waou7RqTA.jpg" width="200"/>
                <h3 class="text-lg font-bold text-center">
                    Baparekraf Developer Day
                </h3>
                <p class="text-sm text-center">
                    Sponsorship Kementerian Pariwisata dan Ekonomi Kreatif Republik Indonesia
                </p>
                <p class="text-sm mt-2 text-center">
                    <i class="fas fa-calendar-alt"></i>
                    Date: 03, Oktober 2024
                </p>
            </a>
        </div>
        <button class="bg-blue-600 text-white py-2 px-4 rounded-full mt-8">
            Selengkapnya
        </button>
    </div>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://storage.googleapis.com/a1aa/image/vrdyU4Asbs7xDBSO8jZeQJX02cU3FOWWpk4sBfx1waou7RqTA.jpg" class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="https://storage.googleapis.com/a1aa/image/GB8Z97J4MVamOlO5OVt43L1Ol3OUCwBUBFgy3eBNfVfZ3jUnA.jpg" class="d-block w-100" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="https://storage.googleapis.com/a1aa/image/jvRVhlryi8o1GxZCyUOr2ScfHUBTsQIOvjy8criGNyS09I1JA.jpg" class="d-block w-100" alt="Slide 3">
            </div>
        </div>
    </div>
    
    <x-sponsorship-section />
    </section>
    </main>
       
    @include('footer')  
       
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