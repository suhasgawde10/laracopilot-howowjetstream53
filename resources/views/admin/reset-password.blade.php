<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password — LexCore Legal</title>
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
            <p class="text-gray-300 text-sm mt-1">Legal Advisory — Set New Password</p>
        </div>
        <div class="bg-white rounded-2xl shadow-2xl p-8">
            <h2 class="text-2xl font-bold text-[#1F365C] mb-1">Reset Password</h2>
            <p class="text-gray-500 text-sm mb-6">Enter your new password below.</p>
            @if($errors->any())
                <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg mb-4 text-sm">
                    @foreach($errors->all() as $error)
                        <p><i class="fas fa-exclamation-circle mr-1"></i>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <form action="{{ route('admin.reset-password.post') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Email Address</label>
                    <input type="email" name="email" value="{{ session('email') }}" required
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#1F365C] text-sm">
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-semibold text-gray-700 mb-1">New Password</label>
                    <input type="password" name="password" required minlength="6"
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#1F365C] text-sm"
                        placeholder="Minimum 6 characters">
                </div>
                <div class="mb-6">
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Confirm New Password</label>
                    <input type="password" name="password_confirmation" required minlength="6"
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#1F365C] text-sm"
                        placeholder="Repeat new password">
                </div>
                <button type="submit" class="w-full bg-[#1F365C] text-white py-3 rounded-lg font-semibold hover:bg-[#152540] transition text-sm">
                    <i class="fas fa-key mr-2"></i>Reset Password
                </button>
                <div class="text-center mt-4">
                    <a href="{{ route('admin.login') }}" class="text-[#1F365C] text-sm hover:underline"><i class="fas fa-arrow-left mr-1"></i>Back to Login</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
