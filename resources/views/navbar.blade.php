<header class="bg-white shadow-md font-poppins fixed top-0 left-0 right-0 z-50">
    <div class="container mx-auto flex justify-between items-center py-4 px-6">
        <!-- Hamburger Menu -->
        <button id="mobile-menu-button" class="md:hidden flex items-center justify-center w-10 h-10 rounded-full bg-gray-300 focus:outline-none hover:bg-gray-400 transition duration-200">
            <i class="fas fa-bars"></i>
        </button>

        <div class="text-2xl font-bold text-blue-600">
            <a href="{{ url('/') }}" class="px-4 py-2 rounded-md">eBizz</a>
        </div>

        <nav class="hidden md:flex font-bold space-x-8 text-blue-800 text-lg">
            <a class="px-4 py-2 rounded-md hover:bg-blue-800 hover:text-white transition-colors duration-300" href="{{ route('events.index') }}">
                Explore Events
            </a>
            {{-- <a class="px-4 py-2 rounded-md hover:bg-blue-800 hover:text-white transition-colors duration-300" href="#">
                Create Event
            </a> --}}
            <a class="px-4 py-2 rounded-md hover:bg-blue-800 hover:text-white transition-colors duration-300" href="{{ route('educations.index') }}">
                Education Library
            </a>
            <a class="px-4 py-2 rounded-md hover:bg-blue-800 hover:text-white transition-colors duration-300" href="#">
                Sponsorship
            </a>
        </nav>

        <div class="relative inline-block text-left">
            <div>
                <button type="button" class="flex items-center justify-center w-10 h-10 rounded-full bg-gray-300 focus:outline-none hover:bg-gray-400 transition duration-200" id="profile-button" aria-expanded="true" aria-haspopup="true">
                    <i class="fas fa-user"></i>
                </button>
            </div>
            <!-- Dropdown Menu -->
            <div id="dropdown-menu" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-50 hidden">
                <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="profile-button">
                    <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">
                        <i class="fas fa-user mr-2"></i> Profile
                    </a>
                    {{-- <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">
                        <i class="fas fa-cog mr-2"></i> Settings
                    </a> --}}
                    <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">
                        <i class="fas fa-sign-out-alt mr-2"></i> Logout
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Off-Canvas Menu -->
    <div id="offcanvas-menu" class="fixed inset-0 z-40 bg-gray-800 bg-opacity-75 transition-opacity transform translate-x-full md:hidden" style="display: none;">
        <div class="absolute left-0 top-0 w-64 h-full bg-white shadow-lg">
            <div class="flex justify-between items-center p-4">
                <h2 class="text-lg font-bold text-blue-600">Menu</h2>
                <button id="close-menu-button" class="text-gray-600 hover:text-gray-900">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <nav class="flex flex-col font-bold space-y-2 text-blue-800 text-lg px-4 py-2">
                <a class="px-4 py-2 rounded-md hover:bg-blue-800 hover:text-white transition-colors duration-300" href="{{ route('events.index') }}">
                    Explore Events
                </a>
                {{-- <a class="px-4 py-2 rounded-md hover:bg-blue-800 hover:text-white transition-colors duration -300" href="#">
                    Create Event
                </a> --}}
                <a class="px-4 py-2 rounded-md hover:bg-blue-800 hover:text-white transition-colors duration-300" href="{{ route('educations.index') }}">
                    Education Library
                </a>
                <a class="px-4 py-2 rounded-md hover:bg-blue-800 hover:text-white transition-colors duration-300" href="#">
                    Sponsorship
                </a>
            </nav>
        </div>
    </div>
</header>
<script src="https://cdn.tailwindcss.com"></script>
<script src="{{ asset('js/app.js') }}"></script>