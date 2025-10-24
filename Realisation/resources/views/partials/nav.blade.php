 <nav class="fixed w-full top-0 z-50 transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <a href="{{ route('home') }}"
                    class="text-2xl font-bold bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent hover:scale-105 transition-transform duration-300">
                    &lt;/&gt;
                </a>
                <div class="hidden md:flex items-center space-x-1">
                    <a href="{{ route('home') }}"
                        class="nav-link px-4 py-2 text-gray-300 hover:text-cyan-400 font-medium transition-colors duration-300 {{ request()->routeIs('home') ? 'text-cyan-400' : '' }}">Home</a>
                    <a href="{{ route('projects') }}"
                        class="nav-link px-4 py-2 text-gray-300 hover:text-cyan-400 font-medium transition-colors duration-300 {{ request()->routeIs('projects') ? 'text-cyan-400' : '' }}">Projects</a>
                    <a href="{{ route('about') }}"
                        class="nav-link px-4 py-2 text-gray-300 hover:text-cyan-400 font-medium transition-colors duration-300 {{ request()->routeIs('about') ? 'text-cyan-400' : '' }}">About</a>
                </div>
                <button class="md:hidden text-gray-300 hover:text-cyan-400 transition-colors" id="mobile-menu-button">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div id="mobile-menu" class="md:hidden hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 flex flex-col items-center">
                <a href="{{ route('home') }}"
                    class="text-gray-300 hover:text-cyan-400 block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('home') ? 'text-cyan-400' : '' }}">Home</a>
                <a href="{{ route('projects') }}"
                    class="text-gray-300 hover:text-cyan-400 block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('projects') ? 'text-cyan-400' : '' }}">Projects</a>
                <a href="{{ route('about') }}"
                    class="text-gray-300 hover:text-cyan-400 block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('about') ? 'text-cyan-400' : '' }}">About</a>
            </div>
        </div>
    </nav>

    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function () {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });

        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 0) {
                navbar.classList.add('bg-gray-800', 'shadow-lg');
            } else {
                navbar.classList.remove('bg-gray-800', 'shadow-lg');
            }
        });
    </script>