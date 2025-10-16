<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white">
    <!-- Header -->
    <header class="bg-gray-800 border-b border-gray-700">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <span class="text-blue-500 text-xl">&lt;/&gt;</span>
                <h1 class="text-xl font-bold">Developer X</h1>
            </div>
            <nav class="flex items-center space-x-8">
                <a href="#" class="text-gray-300 hover:text-white transition text-sm">Home</a>
                <a href="#" class="text-gray-300 hover:text-white transition text-sm">About</a>
                <a href="#" class="text-gray-300 hover:text-white transition text-sm">Blog</a>
                <a href="#" class="text-gray-300 hover:text-white transition text-sm">Works</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 border-t border-gray-700 text-center py-6 text-sm text-gray-400">
        <p>&copy; 2025 Dienekes. All rights reserved.</p>
    </footer>
</body>
</html>