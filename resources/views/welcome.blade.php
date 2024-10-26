<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>eBizz</title>
    @vite('resources/js/app.js') 
    {{-- @vite('resources/sass/app.scss')  --}}
    @vite('resources/css/style.css') 
    @vite('resources/css/app.css') 
</head>
<body>
    @include('navbar')
    <main>
        <section class="text-center py-16 font-poppins" data-aos="fade-down">
            <h1 class="text-6xl font-bold text-blue-700 mt-20">eBizz</h1>
        </section>
        <section class="bg-blue-900 text-white py-16" data-aos="fade-up">
            <div class="container mx-auto">
                <div class="relative">
                    <img alt="Modern building with glass windows" class="w-full h-64 object-cover rounded-lg" height="400" src="https://storage.googleapis.com/a1aa/image/ghuQThqw3O6VKVo42LoQbJth2KO5WQCee6mpRkWSIZ2p7RqTA.jpg" width="1200"/>
                    <div class="absolute inset-0 flex flex-col justify-center items-center bg-black bg-opacity-50 rounded-lg">
                        <p class="text-lg mb-4 p-10">Platform digital berbasis aplikasi yang membantu mahasiswa menemukan, berpartisipasi, dan mengelola acara kampus, mulai dari kegiatan organisasi, acara seni, kompetisi, hingga event komunitas</p>
                        <a class="btn bg-blue-600 text-white py-2 px-4 rounded-full transition duration-300 ease-in-out hover:bg-blue-700 hover:scale-105" href="{{ route('events.index') }}">Explore Events</a>
                    </div>
                </div>
            </div>
        </section>
        {{-- Body section --}}
        <section class="bg-blue-900 text-white py-16">
            <div class="container mx-auto text-center" data-aos="zoom-in">
                <h2 class="text-3xl font-bold mb-4">Upcoming Events</h2>
                <p class="mb-8">Jangan ketinggalan event-event yang akan datang. Pilihlah sesuai dengan minat Anda</p>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    <a href="{{ route('event.details', ['id' => 1]) }}" class="bg-white text-black rounded-lg p-4 flex flex-col transition-transform transform hover:scale-105 shadow-lg hover:shadow-xl" data-aos="flip-left">
                        <img alt="Event 1" class="w-full h-32 object-cover rounded-lg mb-3" src="https://storage.googleapis.com/a1aa/image/8OlJHc2RHIbsLRfz0f5eQc6vP2fmsuh4zT2AhhfLVSf56eI1JA.jpg" />
                        <h3 class="text-lg font-semibold text-center">Baparekraf Developer Day</h3>
                        <p class="text-sm text-center text-gray-600">Sponsorship Kementerian Pariwisata dan Ekonomi Kreatif Republik Indonesia</p>
                        <p class="text-sm mt-1 text-center text-gray-500"><i class="fas fa-calendar-alt"></i> Date: 03, Oktober 2024</p>
                    </a>
                    <a href="{{ route('event.details', ['id' => 2]) }}" class="bg-white text-black rounded-lg p-4 flex flex-col transition-transform transform hover:scale-105 shadow-lg hover:shadow-xl" data-aos="flip-left">
                        <img alt="Event 2" class="w-full h-32 object-cover rounded-lg mb-3" src="https://storage.googleapis.com/a1aa/image/6qHHXX3hByrtKpDqNULTRRRd2s86lgEmVPea6YZjsN639I1JA.jpg" />
                        <h3 class="text-lg font-semibold text-center">Dicoding Scholarship</h3>
                        <p class="text-sm text-center text-gray-600">Sponsorship Kementerian Pariwisata dan Ekonomi Kreatif Republik Indonesia</p>
                        <p class="text-sm mt-1 text-center text-gray-500"><i class="fas fa-calendar-alt"></i> Date: 03, Oktober 2024</p>
                    </a>
                    <a href="{{ route('event.details', ['id' => 3]) }}" class="bg-white text-black rounded-lg p-4 flex flex-col transition-transform transform hover:scale-105 shadow-lg hover:shadow-xl" data-aos="flip-left">
                        <img alt="Event 3" class="w-full h-32 object-cover rounded-lg mb-3" src="https://storage.googleapis.com/a1aa/image/jvRVhlryi8o1GxZCyUOr2ScfHUBTsQIOvjy8criGNyS09I1JA.jpg" />
                        <h3 class="text-lg font-semibold text-center">Upwork</h3>
                        <p class="text-sm text-center text-gray-600">Sponsorship Kementerian Pariwisata dan Ekonomi Kreatif Republik Indonesia</p>
                        <p class="text-sm mt-1 text-center text-gray-500"><i class="fas fa-calendar-alt"></i> Date: 03, Oktober 2024</p>
                    </a>
                    <a href="{{ route('event.details', ['id' => 4]) }}" class="bg-white text-black rounded-lg p-4 flex flex-col transition-transform transform hover:scale-105 shadow-lg hover:shadow-xl" data-aos="flip-left">
                        <img alt="Event 4" class="w-full h-32 object-cover rounded-lg mb-3" src="https://storage.googleapis.com/a1aa/image/GB8Z97J4MVamOlO5OVt43L1Ol3OUCwBUBFgy3eBNfVfZ3jUnA.jpg" />
                        <h3 class="text-lg font-semibold text-center">Baparekraf Developer Day</h3>
                        <p class="text-sm text-center text-gray-600">Sponsorship Kementerian Pariwisata dan Ekonomi Kreatif Republik Indonesia</p>
                        <p class="text-sm mt-1 text-center text-gray-500"><i class="fas fa-calendar-alt"></i> Date: 03, Oktober 2024</p>
                    </a>
                </div>
            </div>
            {{-- carousel --}}
            <div class="carousel-container  my-5 p-3 rounded " data-aos="fade-up">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="200">
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
            </div>   
            <x-sponsorship-section />
        </section>
    </main>
    @include('footer')  
       
       
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
