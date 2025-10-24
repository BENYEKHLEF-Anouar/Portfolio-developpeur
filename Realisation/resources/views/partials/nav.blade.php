<nav class="fixed w-full top-0 z-50 transition-all duration-300 mb-4" id="navbar">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">


            <a href="{{ route('home') }}"
                class="text-2xl font-bold bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent hover:scale-110 transition-transform duration-300">
                &lt;/&gt;
            </a>

            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}"
                    class="nav-link px-4 py-2 text-gray-300 hover:text-cyan-400 font-medium transition-all duration-300 relative group {{ request()->routeIs('home') ? 'text-cyan-400' : '' }}">
                    Home
                    <span class="absolute bottom-0 left-0 w-full h-0.5 bg-gradient-to-r from-cyan-400 to-blue-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 {{ request()->routeIs('home') ? 'scale-x-100' : '' }}"></span>
                </a>
                <a href="{{ route('projects') }}"
                    class="nav-link px-4 py-2 text-gray-300 hover:text-cyan-400 font-medium transition-all duration-300 relative group {{ request()->routeIs('projects') ? 'text-cyan-400' : '' }}">
                    Projects
                    <span class="absolute bottom-0 left-0 w-full h-0.5 bg-gradient-to-r from-cyan-400 to-blue-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 {{ request()->routeIs('projects') ? 'scale-x-100' : '' }}"></span>
                </a>
                <a href="{{ route('about') }}"
                    class="nav-link px-4 py-2 text-gray-300 hover:text-cyan-400 font-medium transition-all duration-300 relative group {{ request()->routeIs('about') ? 'text-cyan-400' : '' }}">
                    About
                    <span class="absolute bottom-0 left-0 w-full h-0.5 bg-gradient-to-r from-cyan-400 to-blue-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 {{ request()->routeIs('about') ? 'scale-x-100' : '' }}"></span>
                </a>
            </div>

            <button class="md:hidden text-gray-300 hover:text-cyan-400 transition-colors duration-300 focus:outline-none focus:ring-2 focus:ring-cyan-400 rounded-lg p-2" 
                    id="mobile-menu-button"
                    aria-label="Toggle mobile menu">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden bg-gray-800/95 backdrop-blur-lg border-t border-white/10">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="{{ route('home') }}"
                class="text-gray-300 hover:text-cyan-400 hover:bg-gray-700/50 block px-4 py-3 rounded-lg text-base font-medium transition-all duration-300 {{ request()->routeIs('home') ? 'text-cyan-400 bg-gray-700/50' : '' }}">
                Home
            </a>
            <a href="{{ route('projects') }}"
                class="text-gray-300 hover:text-cyan-400 hover:bg-gray-700/50 block px-4 py-3 rounded-lg text-base font-medium transition-all duration-300 {{ request()->routeIs('projects') ? 'text-cyan-400 bg-gray-700/50' : '' }}">
                Projects
            </a>
            <a href="{{ route('about') }}"
                class="text-gray-300 hover:text-cyan-400 hover:bg-gray-700/50 block px-4 py-3 rounded-lg text-base font-medium transition-all duration-300 {{ request()->routeIs('about') ? 'text-cyan-400 bg-gray-700/50' : '' }}">
                About
            </a>
        </div>
    </div>
</nav>

<script>
    document.getElementById('mobile-menu-button').addEventListener('click', function () {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });

    window.addEventListener('scroll', function() {
        const navbar = document.getElementById('navbar');
        if (window.scrollY > 20) {
            navbar.classList.add('bg-gray-900/95', 'backdrop-blur-lg', 'shadow-lg', 'border-b', 'border-white/10');
        } else {
            navbar.classList.remove('bg-gray-900/95', 'backdrop-blur-lg', 'shadow-lg', 'border-b', 'border-white/10');
        }
    });
</script>