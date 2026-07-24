<!-- Merchandise - Galaksi XII -->
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>GALAKSI XII - Official Merchandise</title>
<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;500;700&family=Libre+Caslon+Text:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/index.css') }}">

<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script>document.documentElement.classList.remove('dark');</script>
<script id="tailwind-config">
    tailwind.config = {
        darkMode: false,
        theme: {
            extend: {
                colors: {
                    "surface-container-lowest": "#ffffff",
                    "primary": "#000000",
                    "surface": "#fbf9f8",
                    "background": "#fbf9f8"
                },
                fontFamily: {
                    "sans": ["DM Sans", "sans-serif"],
                    "serif": ["Libre Caslon Text", "serif"],
                    "headline-md": ["Libre Caslon Text", "serif"]
                }
            }
        }
    }
</script>
@include('components.page-transition')
</head>
<body class="bg-[#fbf9f8] text-[#1b1c1c] font-sans antialiased min-h-screen flex flex-col selection:bg-black selection:text-white">
@include('components.navbar')

<!-- Main Content -->
<main class="flex-grow pt-2 pb-16 w-full max-w-7xl mx-auto px-4 sm:px-6 md:px-12">
    
    <!-- Title & Description -->
    <div class="mb-8">
        <h1 class="text-3xl md:text-4xl font-bold font-headline-md text-black tracking-tight mb-2">
            Official Merchandise
        </h1>
        <p class="text-xs sm:text-sm text-gray-500 max-w-2xl leading-relaxed">
            Koleksi suvenir & produk official merchandise eksklusif Gala Aksi Siswa (GALAKSI XII) SMKN 3 Jepara edisi HUT & Dies Natalis.
        </p>
    </div>

    <!-- Filter & Search Controls Row -->
    <div class="flex flex-col md:flex-row items-stretch md:items-center justify-between gap-4 mb-8">
        <!-- Category Filter Pills (Left) -->
        <div class="flex items-center gap-2 overflow-x-auto pb-1 scrollbar-hide" id="category-filters">
            <button data-filter="all" class="filter-btn whitespace-nowrap px-5 py-2 rounded-full bg-black text-white text-xs font-bold shadow-sm transition-all">
                Semua Produk
            </button>
            <button data-filter="aksesoris" class="filter-btn whitespace-nowrap px-5 py-2 rounded-full bg-[#f0ecec] text-gray-700 border border-gray-200/60 text-xs font-medium hover:bg-gray-200 transition-all">
                Aksesoris & Stiker
            </button>
            <button data-filter="apparel" class="filter-btn whitespace-nowrap px-5 py-2 rounded-full bg-[#f0ecec] text-gray-700 border border-gray-200/60 text-xs font-medium hover:bg-gray-200 transition-all">
                Topi & Tas
            </button>
            <button data-filter="perlengkapan" class="filter-btn whitespace-nowrap px-5 py-2 rounded-full bg-[#f0ecec] text-gray-700 border border-gray-200/60 text-xs font-medium hover:bg-gray-200 transition-all">
                Perlengkapan
            </button>
        </div>

        <!-- Search Bar (Right) -->
        <div class="relative w-full md:w-[300px]">
            <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-gray-400 text-[18px]">search</span>
            <input type="text" id="merchandise-search" placeholder="Cari produk merchandise..." class="w-full bg-white border border-gray-200/80 rounded-full pl-10 pr-4 py-2 text-xs text-gray-800 placeholder:text-gray-400 focus:outline-none focus:border-black focus:ring-2 focus:ring-black/5 transition-all shadow-sm">
        </div>
    </div>

    <!-- Product Grid (4 Columns Desktop) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5 sm:gap-6" id="product-grid">
        @foreach($products as $product)
            @php
                $cat = 'aksesoris';
                $nameLower = strtolower($product->name);
                if (str_contains($nameLower, 'topi') || str_contains($nameLower, 'totebag') || str_contains($nameLower, 'kaos') || str_contains($nameLower, 'baju')) {
                    $cat = 'apparel';
                } elseif (str_contains($nameLower, 'tumbler') || str_contains($nameLower, 'notebook') || str_contains($nameLower, 'buku') || str_contains($nameLower, 'botol')) {
                    $cat = 'perlengkapan';
                }
                $displayCat = strtoupper($product->category ?? $cat);
                if (str_contains(strtolower($displayCat), 'apparel') || str_contains($nameLower, 'topi') || str_contains($nameLower, 'totebag')) $displayCat = 'APPAREL';
                elseif (str_contains(strtolower($displayCat), 'lengkap') || str_contains($nameLower, 'tumbler') || str_contains($nameLower, 'notebook')) $displayCat = 'PERLENGKAPAN';
                else $displayCat = 'AKSESORIS';
            @endphp
            
            <div onclick="if(!event.target.closest('form') && !event.target.closest('button')){ window.location.href='{{ route('product.detail', $product->id) }}'; }" 
                 data-category="{{ $cat }}" 
                 data-name="{{ strtolower($product->name) }}" 
                 class="product-card group bg-white rounded-3xl p-3.5 border border-gray-200/60 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col justify-between cursor-pointer">
                
                <!-- Product Image Container -->
                <div>
                    <div class="relative aspect-square w-full rounded-2xl overflow-hidden bg-[#f7f5f5] mb-3 flex items-center justify-center p-2">
                        <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="object-cover w-full h-full rounded-xl group-hover:scale-105 transition-transform duration-300 ease-out" />
                        
                        <!-- Floating Heart Favorite Button (Top Right) -->
                        <button type="button" aria-label="Add to Wishlist" class="absolute top-2.5 right-2.5 w-8 h-8 rounded-full bg-white/90 backdrop-blur-md flex items-center justify-center text-gray-400 hover:text-red-500 hover:scale-110 transition-all shadow-sm" onclick="event.preventDefault(); event.stopPropagation(); if(window.showToast) window.showToast('Disimpan ke Favorit!');">
                            <span class="material-symbols-outlined text-[17px]">favorite</span>
                        </button>
                    </div>

                    <!-- Category & Title -->
                    <span class="text-[10px] font-bold text-gray-400 tracking-widest uppercase block mb-1">
                        {{ $displayCat }}
                    </span>
                    <h3 class="font-headline-md font-bold text-sm md:text-base text-gray-900 mb-3 leading-snug line-clamp-1">
                        {{ $product->name }}
                    </h3>
                </div>

                <!-- Price & Buy Button Footer -->
                <div class="flex items-center justify-between pt-2 border-t border-gray-100">
                    <div>
                        <span class="text-[10px] text-gray-400 block leading-none mb-0.5">Mulai dari</span>
                        <span class="font-headline-md font-bold text-sm md:text-base text-gray-900">
                            Rp {{ number_format($product->price, 0, ',', '.') }}
                        </span>
                    </div>

                    <form action="{{ route('cart.add', $product->id) }}" method="POST" class="shrink-0" onsubmit="event.stopPropagation();">
                        @csrf
                        <button type="submit" class="bg-black text-white px-3.5 py-1.5 rounded-full text-xs font-bold flex items-center gap-1.5 hover:bg-neutral-800 active:scale-95 transition-all shadow-sm">
                            <span class="material-symbols-outlined text-[14px]">shopping_bag</span> Beli
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>

</main>

<footer class="mt-auto border-t border-gray-200/60 bg-white py-6 text-center text-xs text-gray-400">
    <div class="max-w-7xl mx-auto px-6 flex flex-col sm:flex-row items-center justify-between gap-3">
        <p>&copy; {{ date('Y') }} GALAKSI XII - SMKN 3 Jepara. All rights reserved.</p>
        <div class="flex items-center gap-4 text-gray-500">
            <a href="{{ url('/') }}" class="hover:text-black transition-colors">Beranda</a>
            <a href="{{ route('kompetisi') }}" class="hover:text-black transition-colors">Kompetisi</a>
            <a href="{{ route('merchandise') }}" class="hover:text-black transition-colors">Merchandise</a>
        </div>
    </div>
</footer>

<script>
    let activeFilter = 'all';
    const searchInput = document.getElementById('merchandise-search');
    const items = document.querySelectorAll('.product-card');

    function applyFilterAndSearch() {
        const query = searchInput ? searchInput.value.toLowerCase().trim() : '';

        items.forEach(item => {
            const category = item.getAttribute('data-category');
            const name = item.getAttribute('data-name') || '';

            const matchesCategory = (activeFilter === 'all' || category === activeFilter);
            const matchesSearch = (!query || name.includes(query));

            if (matchesCategory && matchesSearch) {
                item.style.display = 'flex';
                setTimeout(() => {
                    item.style.opacity = '1';
                    item.style.transform = 'translateY(0) scale(1)';
                }, 30);
            } else {
                item.style.opacity = '0';
                item.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    item.style.display = 'none';
                }, 200);
            }
        });
    }

    document.querySelectorAll('.filter-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            document.querySelectorAll('.filter-btn').forEach(b => {
                b.className = 'filter-btn whitespace-nowrap px-5 py-2 rounded-full bg-[#f0ecec] text-gray-700 border border-gray-200/60 text-xs font-medium hover:bg-gray-200 transition-all';
            });
            this.className = 'filter-btn whitespace-nowrap px-5 py-2 rounded-full bg-black text-white text-xs font-bold shadow-sm transition-all';

            activeFilter = this.getAttribute('data-filter');
            applyFilterAndSearch();
        });
    });

    if (searchInput) {
        searchInput.addEventListener('input', applyFilterAndSearch);
    }
</script>
</body>
</html>
