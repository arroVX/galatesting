<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($product) ? 'Edit Produk' : 'Tambah Produk' }} - Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Libre+Caslon+Text:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: 'DM Sans', sans-serif; background: #fbf9f8; }
        h1, h2 { font-family: 'Libre Caslon Text', serif; }
    </style>
</head>
<body class="min-h-screen p-6">
    <div class="max-w-2xl mx-auto">
        
        <div class="flex items-center gap-4 mb-8">
            <a href="{{ route('admin.dashboard') }}" class="w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-sm border border-gray-200 hover:bg-gray-50 transition-colors">
                <span class="material-symbols-outlined text-black">arrow_back</span>
            </a>
            <h1 class="text-3xl font-bold text-black">{{ isset($product) ? 'Edit Produk' : 'Tambah Produk' }}</h1>
        </div>

        <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-8">
            @if ($errors->any())
                <div class="bg-red-50 text-red-600 text-sm p-4 rounded-xl mb-6 border border-red-100">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ isset($product) ? route('admin.products.update', $product->id) : route('admin.products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">Nama Produk</label>
                    <input type="text" name="name" value="{{ old('name', $product->name ?? '') }}" required class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-black outline-none" placeholder="Contoh: Totebag Galaksi">
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Harga (Rp)</label>
                        <input type="number" name="price" value="{{ old('price', $product->price ?? '') }}" required min="0" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-black outline-none" placeholder="Contoh: 50000">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Kategori</label>
                        <select name="category" required class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-black outline-none">
                            <option value="apparel" {{ (old('category', $product->category ?? '') == 'apparel') ? 'selected' : '' }}>Apparel</option>
                            <option value="aksesoris" {{ (old('category', $product->category ?? '') == 'aksesoris') ? 'selected' : '' }}>Aksesoris</option>
                            <option value="perlengkapan" {{ (old('category', $product->category ?? '') == 'perlengkapan') ? 'selected' : '' }}>Perlengkapan</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">Foto Produk</label>
                    @if(isset($product) && $product->image_url)
                        <div class="mb-3">
                            <img src="{{ $product->image_url }}" class="h-32 object-contain bg-gray-100 rounded-lg p-2">
                        </div>
                    @endif
                    <input type="file" name="image" accept="image/*" {{ isset($product) ? '' : 'required' }} class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-bold file:bg-gray-100 file:text-black hover:file:bg-gray-200 cursor-pointer">
                    <p class="text-xs text-gray-400 mt-2">Format: JPG, PNG, WEBP (Max: 2MB). {{ isset($product) ? 'Biarkan kosong jika tidak ingin mengubah gambar.' : '' }}</p>
                </div>

                <div class="pt-4">
                    <button type="submit" class="w-full bg-black hover:bg-neutral-800 text-white font-bold py-4 rounded-xl text-sm transition-all shadow-md">
                        {{ isset($product) ? 'Simpan Perubahan' : 'Tambahkan Produk' }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
