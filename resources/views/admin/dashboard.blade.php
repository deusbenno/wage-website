<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WAGE Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            font-family: system-ui, sans-serif;
        }
    </style>
</head>

<body class="bg-[#f4f7f5]">

<div class="min-h-screen flex">

    <!-- SIDEBAR -->
    <aside class="w-72 bg-[#064e3b] text-white flex flex-col shadow-xl">

        <!-- Logo -->
        <div class="px-6 py-6 text-2xl font-bold border-b border-green-800">
            🌿 WAGE ADMIN
        </div>

        <!-- Menu -->
        <nav class="flex-1 px-4 py-6 space-y-2 text-sm">

            <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-lg bg-green-700 font-semibold">
                📊 Dashboard
            </a>

            <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-green-800 transition">
                👥 Users
            </a>

            <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-green-800 transition">
                📦 Products
            </a>

            <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-green-800 transition">
                🧾 Orders
            </a>

            <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-green-800 transition">
                💬 Feedback
            </a>

            <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-green-800 transition">
                📈 Analytics
            </a>

            <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-green-800 transition">
                ⚙️ Settings
            </a>

        </nav>
        <!-- LOGOUT -->
<form method="POST" action="{{ route('logout') }}" class="px-4 py-4">
    @csrf

    <button type="submit"
        class="w-full flex items-center justify-center gap-2 px-4 py-3 rounded-lg bg-red-600 hover:bg-red-700 transition font-semibold text-white">
        🚪 Logout
    </button>
</form>

        <!-- Footer -->
        <div class="px-6 py-4 border-t border-green-800 text-xs text-green-200">
            © 2026 WAGE System
        </div>

    </aside>

    <!-- MAIN AREA -->
    <div class="flex-1 flex flex-col">

        <!-- TOP BAR -->
        <header class="bg-white shadow px-6 py-4 flex justify-between items-center">

            <h1 class="text-xl font-bold text-gray-800">
                Admin Dashboard
            </h1>

            <div class="flex items-center gap-3">
                <span class="text-sm text-gray-500">Welcome, Admin</span>
                <div class="w-10 h-10 rounded-full bg-green-700"></div>
            </div>

        </header>

        <!-- CONTENT -->
        <main class="p-6 space-y-6">

            <!-- STATS -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">

                <div class="bg-white p-6 rounded-xl shadow">
                    <p class="text-gray-500 text-sm">Users</p>
                    <h2 class="text-2xl font-bold text-green-700">1,240</h2>
                </div>

                <div class="bg-white p-6 rounded-xl shadow">
                    <p class="text-gray-500 text-sm">Products</p>
                    <h2 class="text-2xl font-bold text-green-700">320</h2>
                </div>

                <div class="bg-white p-6 rounded-xl shadow">
                    <p class="text-gray-500 text-sm">Orders</p>
                    <h2 class="text-2xl font-bold text-green-700">89</h2>
                </div>

                <div class="bg-white p-6 rounded-xl shadow">
                    <p class="text-gray-500 text-sm">Revenue</p>
                    <h2 class="text-2xl font-bold text-green-700">$12.4K</h2>
                </div>

            </div>

            <!-- CHART -->
            <div class="bg-white p-6 rounded-xl shadow">

                <h2 class="text-lg font-semibold mb-4 text-gray-700">
                    Performance Overview
                </h2>

                <div class="h-72 border-2 border-dashed rounded-lg flex items-center justify-center text-gray-400">
                    📊 Chart Area (Chart.js later)
                </div>

            </div>

            <!-- TABLE -->
            <div class="bg-white p-6 rounded-xl shadow">

                <h2 class="text-lg font-semibold mb-4 text-gray-700">
                    Recent Activity
                </h2>

                <div class="overflow-x-auto">
                    <table class="w-full text-sm">

                        <thead class="text-left border-b">
                            <tr>
                                <th class="py-2">User</th>
                                <th>Action</th>
                                <th>Status</th>
                                <th>Date</th>
                            </tr>
                        </thead>

                        <tbody class="text-gray-600">

                            <tr class="border-b">
                                <td class="py-3">John Doe</td>
                                <td>Placed Order</td>
                                <td class="text-green-600 font-semibold">Success</td>
                                <td>Today</td>
                            </tr>

                            <tr class="border-b">
                                <td class="py-3">Mary Jane</td>
                                <td>Sent Feedback</td>
                                <td class="text-yellow-600 font-semibold">Pending</td>
                                <td>Yesterday</td>
                            </tr>

                        </tbody>

                    </table>
                </div>

            </div>

        </main>

    </div>

</div>

</body>
</html>