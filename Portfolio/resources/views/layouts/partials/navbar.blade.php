<header class="bg-gray-800 border-b border-gray-700">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <div class="flex items-center space-x-2">
            <span class="text-blue-500 text-xl">&lt;/&gt;</span>
            <h1 class="text-xl font-bold">Developer X</h1>
        </div>
        <nav class="flex items-center space-x-8">
            <a href="{{ url('/') }}" class="text-gray-300 hover:text-white transition text-sm">Home</a>
            <a href="{{ url('/about') }}" class="text-gray-300 hover:text-white transition text-sm">About</a>
            <a href="{{ url('/blog') }}" class="text-gray-300 hover:text-white transition text-sm">Blog</a>
            <a href="{{ url('/works') }}" class="text-gray-300 hover:text-white transition text-sm">Works</a>
        </nav>
    </div>
</header>
