<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login — LexCore Legal</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-[#1F365C] to-[#0a1220] min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <!-- Logo -->
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-white rounded-2xl mb-4 shadow-lg">
                <i class="fas fa-balance-scale text-[#1F365C] text-2xl"></i>
            </div>
            <h1 class="text-3xl font-extrabold text-white">LexCore</h1>
            <p class="text-gray-300 text-sm mt-1">Legal Advisory — Admin Panel</p>
        </div>

        <!-- Login Card -->
        <div class="bg-white rounded-2xl shadow-2xl p-8">
            <h2 class="text-2xl font-bold text-[#1F365C] mb-1">Welcome Back</h2>
            <p class="text-gray-500 text-sm mb-6">Sign in to access the admin panel</p>

            @if($errors->any())
                <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg mb-4 text-sm">
                    <i class="fas fa-exclamation-circle mr-2"></i>{{ $errors->first() }}
                </div>
            @endif

            @if(session('success'))
                <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg mb-4 text-sm">
                    <i class="fas fa-check-circle mr-2"></i>{{ session('success') }}
                </div>
            @endif

            <form action="{{ route('admin.login.post') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Email Address</label>
                    <div class="relative">
                        <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"><i class="fas fa-envelope"></i></span>
                        <input type="email" name="email" value="{{ old('email') }}" required
                            class="w-full border border-gray-300 rounded-lg pl-10 pr-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#1F365C] text-sm"
                            placeholder="admin@legaladvisory.com">
                    </div>
                </div>
                <div class="mb-6">
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Password</label>
                    <div class="relative">
                        <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"><i class="fas fa-lock"></i></span>
                        <input type="password" name="password" required
                            class="w-full border border-gray-300 rounded-lg pl-10 pr-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#1F365C] text-sm"
                            placeholder="Enter your password">
                    </div>
                </div>
                <button type="submit" class="w-full bg-[#1F365C] text-white py-3 rounded-lg font-semibold hover:bg-[#152540] transition text-sm">
                    <i class="fas fa-sign-in-alt mr-2"></i>Sign In
                </button>
                <div class="text-center mt-4">
                    <a href="{{ route('admin.forgot-password') }}" class="text-[#1F365C] text-sm hover:underline">Forgot your password?</a>
                </div>
            </form>
        </div>

        <!-- Test Credentials -->
        <div class="mt-6 bg-white/10 rounded-xl p-5 text-sm text-white">
            <p class="font-bold mb-3 text-yellow-300"><i class="fas fa-key mr-2"></i>Test Credentials</p>
            <div class="space-y-2">
                <div class="bg-white/10 rounded-lg p-2">
                    <p><span class="font-semibold">Admin:</span> admin@legaladvisory.com / admin123</p>
                </div>
                <div class="bg-white/10 rounded-lg p-2">
                    <p><span class="font-semibold">Manager:</span> manager@legaladvisory.com / manager123</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
