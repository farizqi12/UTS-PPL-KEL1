<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
</head>

<body class="min-h-screen flex flex-col">
    <!-- Navigation -->
    <nav class="flex justify-between items-center bg-gray-800 text-white px-4 py-3">
        <div class="flex items-center gap-4">
            <button id="sidebar-toggle" class="md:hidden bg-gray-700 hover:bg-gray-600 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-400 transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <span class="sr-only">Toggle sidebar</span>
            </button>
            <div class="text-lg font-bold tracking-wide">
            <a href="{{ url('/') }}" class="hover:text-blue-400 transition">YourLogo</a>
            </div>
        </div>
        <div class="flex gap-4">
            <form action="{{ route('logout') }}" method="POST" class="flex items-center">
                @csrf
                <button type="submit" class="text-white hover:text-gray-300">Logout</button>
            </form>
        </div>
    </nav>

    <!-- Main Content Area -->
    <div class="flex flex-col md:flex-row flex-1">
        <!-- Sidebar - Responsive and Accessible -->
        <aside class="bg-gray-100 w-full md:w-64 flex-shrink-0 border-r border-gray-200">
            <nav id="sidebar-content" class="hidden md:block py-6 px-4 space-y-6 md:space-y-8">
            <div>
                <h2 class="text-lg font-semibold text-gray-700 mb-4">Menu</h2>
                <ul class="space-y-2">
                <li>
                    <a href="#" class="flex items-center gap-2 px-3 py-2 rounded hover:bg-blue-100 text-gray-700 transition">
                    <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0h6"></path></svg>
                    Dashboard
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center gap-2 px-3 py-2 rounded hover:bg-blue-100 text-gray-700 transition">
                    <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M8 17l4 4 4-4m-4-5v9"></path></svg>
                    Reports
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center gap-2 px-3 py-2 rounded hover:bg-blue-100 text-gray-700 transition">
                    <svg class="w-5 h-5 text-yellow-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 8v4l3 3"></path></svg>
                    Activity
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center gap-2 px-3 py-2 rounded hover:bg-blue-100 text-gray-700 transition">
                    <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7"></path></svg>
                    Settings
                    </a>
                </li>
                </ul>
            </div>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 bg-white p-4 overflow-auto">
            <h1 class="text-2xl font-bold mb-4">Dashboard</h1>
            <p>Welcome to the dashboard!</p>

            <!-- Responsive Card Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mt-4">
                <div class="bg-blue-100 p-4 rounded shadow hover:shadow-md transition-shadow">
                    <h2 class="font-semibold">Card 1</h2>
                    <p>Content for card 1.</p>
                </div>
                <div class="bg-green-100 p-4 rounded shadow hover:shadow-md transition-shadow">
                    <h2 class="font-semibold">Card 2</h2>
                    <p>Content for card 2.</p>
                </div>
                <div class="bg-yellow-100 p-4 rounded shadow hover:shadow-md transition-shadow">
                    <h2 class="font-semibold">Card 3</h2>
                    <p>Content for card 3.</p>
                </div>
            </div>
        </main>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center py-3">
        <p>&copy; 2023 Your Company. All rights reserved.</p>
    </footer>

    <script>
        // Toggle sidebar on mobile
        document.getElementById('sidebar-toggle').addEventListener('click', function() {
            const sidebar = document.getElementById('sidebar-content');
            sidebar.classList.toggle('hidden');
        });
    </script>
</body>

</html>
