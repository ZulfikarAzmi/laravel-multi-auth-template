{{-- resources/views/user/dashboard.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800">

    <div class="min-h-screen flex flex-col items-center justify-center">
        <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md text-center">
            <h1 class="text-2xl font-bold text-blue-600 mb-4">User Dashboard</h1>
            <p class="text-gray-700 mb-6">
                Welcome, <span class="font-semibold">{{ Auth::user()->name }}</span>
            </p>

            {{-- Tombol Logout --}}
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button 
                    type="submit" 
                    class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition">
                    Logout
                </button>
            </form>
        </div>
    </div>

</body>
</html>
