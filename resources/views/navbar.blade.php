<header class="bg-white shadow-md">
    <div class="container mx-auto flex justify-between items-center py-4 px-6">
     <div class="text-2xl font-bold text-blue-600">
      eBizz
     </div>
     <nav class="space-x-6">
        <a class="text-gray-600 hover:text-blue-600" href="{{ route('events.index') }}">
            Explore Events
        </a>
        <a class="text-gray-600 hover:text-blue-600" href="#">
            Create Event
        </a>
        <a class="text-gray-600 hover:text-blue-600" href="{{ route('educations.index') }}">
            Education Library
        </a>
        <a class="text-gray-600 hover:text-blue-600" href="#">
            Sponsorship
        </a>
    </nav>
     <div class="w-10 h-10 rounded-full bg-gray-300">
     </div>
    </div>
   </header>

   <script src="https://cdn.tailwindcss.com">
  </script>
   <script src="{{ asset('js/app.js') }}"></script>