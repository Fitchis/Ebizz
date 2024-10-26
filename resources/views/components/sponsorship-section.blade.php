@vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/style.css'])

<section class="w-full text-center mt-16 bg-blue-900 py-12">
    <h2 class="text-3xl font-bold text-white mb-8" data-aos="fade-up">
        Sponsorship and Partnership
    </h2>
    <div class="sponsor-container" data-aos="fade-up">
        <div class="sponsor-content gap-10">
            <img
                src="https://placehold.co/100x100?text=Sponsor+1"
                alt="Sponsor 1"
                class="w-20 h-20 mx-2"
                data-aos="zoom-in"
                data-aos-delay="100"
            />
            <img
                src="https://placehold.co/100x100?text=Sponsor+2"
                alt="Sponsor 2"
                class="w-20 h-20 mx-2"
                data-aos="zoom-in"
                data-aos-delay="200"
            />
            <img
                src="https://placehold.co/100x100?text=Sponsor+3"
                alt="Sponsor 3"
                class="w-20 h-20 mx-2"
                data-aos="zoom-in"
                data-aos-delay="300"
            />
            <img
                src="https://placehold.co/100x100?text=Sponsor+4"
                alt="Sponsor 4"
                class="w-20 h-20 mx-2"
                data-aos="zoom-in"
                data-aos-delay="400"
            />
            <img
                src="https://placehold.co/100x100?text=Sponsor+5"
                alt="Sponsor 5"
                class="w-20 h-20 mx-2"
                data-aos="zoom-in"
                data-aos-delay="500"
            />
            <img
                src="https://placehold.co/100x100?text=Sponsor+6"
                alt="Sponsor 6"
                class="w-20 h-20 mx-2"
                data-aos="zoom-in"
                data-aos-delay="600"
            />
        </div>
    </div>
    
    <!-- Include AOS CSS and JS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>
    <script>
        AOS.init();
    </script>
</section>


<script src="https://cdn.tailwindcss.com">
</script>
 <script src="{{ asset('js/app.js') }}"></script>