<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-50 antialiased">
    <div class="min-h-screen flex items-center justify-center p-4">

        <div class="w-full max-w-md bg-white p-8 rounded-2xl shadow-xl border border-gray-100">

            <div class="text-center mb-8">
                <h2 class="text-3xl font-extrabold text-gray-900">Welcome Back</h2>
                <p class="text-gray-500 mt-2">Please enter your details</p>
            </div>

            <form action="login" method="POST" class="space-y-5">
                @csrf

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">User Name</label>
                    <input type="email" name="email" required
                        placeholder="Enter your email"
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input type="password" name="password" required
                        placeholder="••••••••"
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all">
                </div>

                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-lg shadow-md transition-colors duration-200">
                    Sign In
                </button>
            </form>

            <p class="text-center text-sm text-gray-600 mt-6">
                Don't have an account?
                <a href="{{url('/register')}}" class="text-blue-600 hover:underline font-medium">Create one</a>
            </p>
        </div>
    </div>
</body>

</html>