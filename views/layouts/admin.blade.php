<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow-lg">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex space-x-7">
                    <div>
                        <a href="#" class="flex items-center py-4 px-2">
                            <span class="font-semibold text-gray-500 text-lg">Admin Dashboard</span>
                        </a>
                    </div>
                    <div class="hidden md:flex items-center space-x-1">
                        <a href="{{ route('admin.categories.index') }}" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Categories</a>
                        <a href="{{ route('admin.products.index') }}" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Products</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mx-auto mt-6 px-4">
        @yield('content')
    </div>
</body>
</html>