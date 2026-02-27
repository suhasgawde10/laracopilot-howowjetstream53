<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password — LexCore Legal</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-[#1F365C] to-[#0a1220] min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-white rounded-2xl mb-4 shadow-lg">
                <i class="fas fa-balance-scale text-[#1F365C] text-2xl"></i>
            </div>
            <h1 class="text-3xl font-extrabold text-white">LexCore</h1>
            <p class="text-gray-300 text-sm mt-1">Legal Advisory — Password Recovery</p>
        </div>
        <div class="bg-white rounded-2xl shadow-2xl p-8">
            <h2 class="text-2xl font-bold text-[#1F365C] mb-1">Forgot Password</h2>
            <p class="text-gray-500 text-sm mb-6">Enter your email address to receive reset instructions.</p>
            @if($errors->any())
                <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg mb-4 text-sm">
                    <i class="fas fa-exclamation-circle mr-2"></i>{{ $errors->first() }}
                </div>
            @endif
            @if(session('info'))
                <div class="bg-blue-50 border border-blue-200 text-blue-700 px-4 py-3 rounded-lg mb-4 text-sm">
                    <i class="fas fa-info-circle mr-2"></i>{{ session('info') }}
                </div>
            @endif
            <form action="{{ route('admin.forgot-password.post') }}" method="POST">
                @csrf
                <div class="mb-6">
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Email Address</label>
                    <div class="relative">
                        <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"><i class="fas fa-envelope"></i></span>
                        <input type="email" name="email" value="{{ old('email') }}" required
                            class="w-full border border-gray-300 rounded-lg pl-10 pr-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#1F365C] text-sm"
                            placeholder="Enter your email">
                    </div>
                </div>
                <button type="submit" class="w-full bg-[#1F365C] text-white py-3 rounded-lg font-semibold hover:bg-[#152540] transition text-sm">
                    <i class="fas fa-paper-plane mr-2"></i>Send Reset Instructions
                </button>
                <div class="text-center mt-4">
                    <a href="{{ route('admin.login') }}" class="text-[#1F365C] text-sm hover:underline"><i class="fas fa-arrow-left mr-1"></i>Back to Login</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
