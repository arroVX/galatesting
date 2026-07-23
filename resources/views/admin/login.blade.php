<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - GALAKSI XII</title>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Libre+Caslon+Text:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: 'DM Sans', sans-serif; background: #fbf9f8; }
        h1, h2 { font-family: 'Libre Caslon Text', serif; }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4">
    <div class="bg-white rounded-3xl shadow-xl p-8 max-w-sm w-full border border-gray-100">
        <div class="text-center mb-6">
            <h1 class="text-2xl font-bold text-black mb-1">Admin Portal</h1>
            <p class="text-sm text-gray-500">Masuk untuk mengelola sistem</p>
        </div>

        @if(session('error'))
            <div class="bg-red-50 text-red-600 text-sm p-3 rounded-xl mb-4 border border-red-100 text-center font-medium">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('admin.authenticate') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-xs font-bold text-gray-700 uppercase tracking-wide mb-1">Kata Sandi</label>
                <input type="password" name="password" required class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-black transition-all" placeholder="••••••••">
            </div>
            
            <button type="submit" class="w-full bg-black hover:bg-neutral-800 text-white font-bold py-3.5 px-4 rounded-xl text-sm transition-all">
                Masuk ke Dashboard
            </button>
        </form>
    </div>
</body>
</html>
