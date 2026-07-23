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
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": { "surface-container-lowest": "#ffffff", "tertiary": "#000000", "surface-bright": "#fbf9f8", "secondary-container": "#e9decf", "primary": "#000000", "on-error-container": "#93000a", "on-secondary-fixed-variant": "#4c463b", "error-container": "#ffdad6", "on-primary-fixed": "#1c1b1b", "error": "#ba1a1a", "inverse-on-surface": "#f2f0f0", "on-background": "#1b1c1c", "surface-container": "#efeded", "on-primary": "#ffffff", "on-tertiary-container": "#848480", "tertiary-fixed": "#e4e2dd", "surface-container-low": "#f5f3f3", "inverse-surface": "#303031", "on-tertiary-fixed": "#1b1c19", "on-tertiary-fixed-variant": "#474744", "background": "#fbf9f8", "surface": "#fbf9f8", "on-tertiary": "#ffffff", "tertiary-fixed-dim": "#c8c6c2", "outline-variant": "#c4c7c7", "on-secondary-fixed": "#201b12", "surface-variant": "#e4e2e2", "surface-dim": "#dbdad9", "on-secondary-container": "#696255", "outline": "#747878", "on-primary-fixed-variant": "#474746", "inverse-primary": "#c8c6c5", "on-secondary": "#ffffff", "on-surface-variant": "#444748", "on-error": "#ffffff", "surface-tint": "#5f5e5e", "secondary-fixed-dim": "#cfc5b6", "tertiary-container": "#1b1c19", "surface-container-highest": "#e4e2e2", "primary-fixed": "#e5e2e1", "secondary": "#655d51", "on-primary-container": "#858383", "surface-container-high": "#e9e8e7", "primary-container": "#1c1b1b", "on-surface": "#1b1c1c", "secondary-fixed": "#ece1d2", "primary-fixed-dim": "#c8c6c5" },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "sm": "12px",
                        "md": "24px",
                        "margin-desktop": "64px",
                        "xs": "4px",
                        "margin-mobile": "16px",
                        "base": "8px",
                        "gutter": "24px",
                        "xl": "80px",
                        "lg": "48px"
                    },
                    "fontFamily": { "sans": ["DM Sans", "sans-serif"], "serif": ["Libre Caslon Text", "serif"], "headline-lg-mobile": ["Libre Caslon Text"], "headline-md": ["Libre Caslon Text"], "label-md": ["DM Sans"], "display-lg": ["Libre Caslon Text"], "body-md": ["DM Sans"], "body-lg": ["DM Sans"], "label-sm": ["DM Sans"], "headline-lg": ["Libre Caslon Text"] },
                    "fontSize": {
                        "headline-md": ["24px", { "lineHeight": "1.3", "fontWeight": "400" }],
                        "headline-lg-mobile": ["28px", { "lineHeight": "1.2", "fontWeight": "400" }],
                        "headline-lg": ["32px", { "lineHeight": "1.2", "fontWeight": "400" }],
                        "display-lg": ["48px", { "lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "400" }],
                        "body-md": ["16px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "body-lg": ["18px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "label-sm": ["12px", { "lineHeight": "1.4", "letterSpacing": "0.05em", "fontWeight": "500" }],
                        "label-md": ["14px", { "lineHeight": "1.4", "letterSpacing": "0.02em", "fontWeight": "500" }]
                    }
                }
            }
        }
    </script>
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@include('components.page-transition')
</head>
<body class="bg-background text-on-background font-body-md antialiased min-h-screen flex flex-col pb-safe selection:bg-primary selection:text-on-primary">
@include('components.navbar')

<!-- Main Content Canvas -->
<main class="flex-grow pt-4 pb-[80px] md:pb-lg w-full max-w-7xl mx-auto">
<!-- Category Header, Search & Filters (Reference Screen 2 Inspired) -->
<section class="px-6 md:px-16 py-md">
<div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-6">
    <div>
        <h1 class="text-3xl md:text-5xl font-bold font-headline-md text-primary leading-tight">
            Official Merchandise,
        </h1>
        <p class="text-lg md:text-2xl italic font-serif text-on-surface-variant/80 mt-0.5">
            Handpicked for you.
        </p>
    </div>
    <!-- Search Bar with Black Filter Icon (Matching Ref Screen 2) -->
    <div class="flex items-center gap-2.5 w-full md:w-auto">
        <div class="relative flex-grow md:w-[320px]">
            <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant/60 text-[20px]">search</span>
            <input type="text" id="merchandise-search" placeholder="Cari produk merchandise..." class="w-full bg-surface-container-low border border-outline-variant/30 rounded-full pl-11 pr-4 py-3 text-body-md text-on-surface placeholder:text-on-surface-variant/50 focus:outline-none focus:border-primary focus:ring-4 focus:ring-primary/5 transition-all shadow-sm">
        </div>
        <button class="w-12 h-12 rounded-full bg-black text-white flex items-center justify-center shrink-0 shadow hover:bg-neutral-800 transition-all active:scale-95">
            <span class="material-symbols-outlined text-[20px]">tune</span>
        </button>
    </div>
</div>

<!-- Horizontal Scrollable Chips (Matching Ref Screen 2) -->
<div class="flex overflow-x-auto gap-2.5 pb-2 -mx-6 px-6 md:mx-0 md:px-0 scrollbar-hide" id="category-filters">
    <button data-filter="all" class="filter-btn whitespace-nowrap px-6 py-2.5 rounded-full bg-black text-white text-xs font-bold transition-all shadow-md">Semua</button>
    <button data-filter="aksesoris" class="filter-btn whitespace-nowrap px-6 py-2.5 rounded-full bg-surface-container-low text-on-surface-variant border border-outline-variant/30 text-xs font-medium hover:bg-surface-container transition-all">Aksesoris & Stiker</button>
    <button data-filter="apparel" class="filter-btn whitespace-nowrap px-6 py-2.5 rounded-full bg-surface-container-low text-on-surface-variant border border-outline-variant/30 text-xs font-medium hover:bg-surface-container transition-all">Topi & Tas</button>
    <button data-filter="perlengkapan" class="filter-btn whitespace-nowrap px-6 py-2.5 rounded-full bg-surface-container-low text-on-surface-variant border border-outline-variant/30 text-xs font-medium hover:bg-surface-container transition-all">Perlengkapan</button>
</div>
</section>

<!-- Product Grid (Reference Screen 2 Inspired 2-Column Layout) -->
<section class="px-6 md:px-16 py-sm">
<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6" id="product-grid">
@foreach($products as $product)
    @php
        $cat = 'aksesoris';
        $nameLower = strtolower($product->name);
        if (str_contains($nameLower, 'topi') || str_contains($nameLower, 'totebag')) {
            $cat = 'apparel';
        } elseif (str_contains($nameLower, 'tumbler') || str_contains($nameLower, 'notebook')) {
            $cat = 'perlengkapan';
        }
    @endphp
    <div onclick="if(!event.target.closest('form') && !event.target.closest('button')){ window.location.href='{{ route('product.detail', $product->id) }}'; }" data-category="{{ $cat }}" data-name="{{ strtolower($product->name) }}" class="product-card group block cursor-pointer transition-all duration-300 hover:-translate-y-1.5 reveal">
        <!-- Card Container -->
        <div class="relative flex flex-col h-full bg-surface-container-lowest rounded-3xl p-2.5 md:p-3.5 border border-outline-variant/20 shadow-sm hover:shadow-xl transition-all duration-300">
            
            <!-- Image Section with Black Price Capsule Badge (Ref Screen 2) -->
            <div class="relative aspect-[4/5] w-full rounded-2xl overflow-hidden bg-surface-container-low mb-3 isolate animate-pulse">
                <img alt="{{ $product->name }}" class="object-cover w-full h-full transform group-hover:scale-105 transition-transform duration-500 ease-out opacity-0 transition-opacity duration-300" src="{{ $product->image_url }}" onload="this.classList.remove('opacity-0'); this.parentElement.classList.remove('animate-pulse');" />
                
                <!-- Wishlist Round Glass Button (Top Right Ref Screen 2) -->
                <button aria-label="Add to Wishlist" class="absolute top-2.5 right-2.5 w-8 h-8 rounded-full bg-white/80 backdrop-blur-md flex items-center justify-center text-on-surface-variant hover:text-red-500 transition-all z-10 shadow-sm" onclick="event.preventDefault(); event.stopPropagation(); if(window.showToast) window.showToast('Disimpan ke Favorit!');">
                    <span class="material-symbols-outlined text-[16px]">favorite</span>
                </button>
                
                <!-- Black Price Capsule Tag (Bottom Right Ref Screen 2) -->
                <div class="absolute bottom-2.5 right-2.5 bg-black text-white px-3 py-1 rounded-full text-[11px] font-bold shadow-md z-10">
                    Rp {{ number_format($product->price, 0, ',', '.') }}
                </div>
            </div>
            
            <!-- Info Section -->
            <div class="flex flex-col flex-grow px-1.5">
                <div class="flex justify-between items-start gap-2 mb-1.5">
                    <h3 class="font-headline-sm text-[15px] leading-tight text-primary font-bold line-clamp-2">
                        {{ $product->name }}
                    </h3>
                    <div class="flex items-center gap-0.5 mt-0.5 bg-surface-container-low px-1.5 py-0.5 rounded-md">
                        <span class="material-symbols-outlined text-[12px] text-amber-400 fill-amber-400">star</span>
                        <span class="text-[10px] font-bold text-on-surface-variant">4.8</span>
                    </div>
                </div>
                
                <!-- Category & Quick Add Row -->
                <div class="flex items-center justify-between mt-auto pt-2 border-t border-outline-variant/20">
                    <span class="text-[11px] font-medium text-on-surface-variant/60 uppercase tracking-wider">{{ $product->category ?? $cat }}</span>
                    
                    <form action="{{ route('cart.add', $product->id) }}" method="POST" class="shrink-0" onsubmit="event.stopPropagation();">
                        @csrf
                        <button type="submit" class="w-8 h-8 rounded-full bg-primary text-on-primary flex items-center justify-center hover:scale-105 active:scale-95 transition-all shadow-md hover:shadow-lg hover:bg-inverse-surface">
                            <span class="material-symbols-outlined text-[16px]">add_shopping_cart</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
</div>

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
                item.style.display = 'block';
                setTimeout(() => {
                    item.style.opacity = '1';
                    item.style.transform = 'translateY(0) scale(1)';
                }, 50);
            } else {
                item.style.opacity = '0';
                item.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    item.style.display = 'none';
                }, 250);
            }
        });
    }

    document.querySelectorAll('.filter-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            document.querySelectorAll('.filter-btn').forEach(b => {
                b.className = 'filter-btn whitespace-nowrap px-6 py-2.5 rounded-full bg-surface-container-low text-on-surface-variant border border-outline-variant/30 text-label-sm font-medium hover:bg-surface-container hover:text-primary transition-all';
            });
            this.className = 'filter-btn whitespace-nowrap px-6 py-2.5 rounded-full bg-primary text-on-primary text-label-sm font-bold transition-all shadow-md hover:shadow-lg';

            activeFilter = this.getAttribute('data-filter');
            applyFilterAndSearch();
        });
    });

    if (searchInput) {
        searchInput.addEventListener('input', applyFilterAndSearch);
    }

    // AJAX Add to Cart for merchandise cards
    document.addEventListener('DOMContentLoaded', function() {
        const addCartForms = document.querySelectorAll('form[action*="/cart/add"]');
        addCartForms.forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                const url = this.getAttribute('action');
                const formData = new FormData(this);

                fetch(url, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Update cart badge in navbar
                        const badges = document.querySelectorAll('.cart-badge-bounce, [class*="cart-badge"]');
                        badges.forEach(badge => {
                            badge.textContent = data.cartCount;
                            badge.style.display = data.cartCount > 0 ? 'flex' : 'none';
                            // Trigger bounce effect
                            badge.classList.remove('cart-badge-bounce');
                            void badge.offsetWidth; // Reflow to restart animation
                            badge.classList.add('cart-badge-bounce');
                        });

                        // If badge doesn't exist, we might need to create it dynamically in the navbar link
                        const cartLink = document.querySelector('a[href*="/cart"]');
                        if (cartLink && !cartLink.querySelector('.cart-badge-bounce')) {
                            const newBadge = document.createElement('span');
                            newBadge.className = 'absolute -top-1 -right-1 bg-primary text-on-primary text-[10px] font-bold rounded-full w-4 h-4 flex items-center justify-center cart-badge-bounce';
                            newBadge.textContent = data.cartCount;
                            cartLink.appendChild(newBadge);
                        }

                        // Show centered snackbar toast
                        if (window.showToast) {
                            window.showToast(data.message || 'Produk berhasil ditambahkan ke keranjang!', 'success', {
                                cartCount: data.cartCount,
                                totalPrice: data.totalPriceFormatted
                            });
                        }
                    } else {
                        if (window.showToast) window.showToast(data.message || 'Gagal menambahkan produk.', 'error');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    if (window.showToast) window.showToast('Terjadi kesalahan, silakan coba lagi.', 'error');
                });
            });
        });
    });
</script>
</section>
</main>

<!-- Footer -->
@include('components.footer')

<script>
    (function() {
        function triggerSessionToast() {
            if (window.sessionToastShown) return; // Prevent BF-cache replay
            @if (session('success'))
                @php
                    $cartCount = session('cartCount', 0);
                    $cartTotal = session('cartTotal', 0);
                    $formattedTotal = 'Rp ' . number_format((float)$cartTotal, 0, ',', '.');
                @endphp
                if (window.showToast) {
                    window.showToast(@json(session('success')), 'success', {
                        cartCount: @json((string)$cartCount),
                        totalPrice: @json($formattedTotal)
                    });
                }
                window.sessionToastShown = true;
            @endif

            @if (session('error'))
                if (window.showToast) {
                    window.showToast(@json(session('error')), 'error');
                }
                window.sessionToastShown = true;
            @endif
        }

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', triggerSessionToast);
        } else {
            triggerSessionToast();
        }
        
        // Clear flag on actual reload (not BF-cache restore)
        window.addEventListener('beforeunload', () => { window.sessionToastShown = false; });
    })();
</script>

</body>
</html>
