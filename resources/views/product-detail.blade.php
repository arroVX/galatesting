<!-- Product Detail - Galaksi XII -->
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>{{ $product->name }} - Galaksi XII Merchandise</title>
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
<main class="flex-grow pt-4 pb-[120px] md:pb-lg w-full max-w-7xl mx-auto px-6 md:px-16 py-lg">
    <div class="mb-6">
        <a href="{{ route('merchandise') }}" class="inline-flex items-center gap-2 px-4 py-2 bg-surface-container-low hover:bg-surface-variant border border-outline-variant/30 text-on-surface-variant hover:text-primary transition-all duration-300 rounded-full font-label-md w-fit group shadow-sm hover:shadow-md text-xs sm:text-sm">
            <span class="material-symbols-outlined text-[18px] group-hover:-translate-x-1 transition-transform duration-300">arrow_back</span>
            Kembali ke Toko
        </a>
    </div>

    <div class="flex flex-col lg:flex-row gap-8 lg:gap-16 items-center lg:items-stretch">
        <!-- Product Image (Reference Screen 3 Inspired) -->
        <div class="w-full lg:w-1/2 flex justify-center">
            <div class="w-full max-w-[480px] aspect-[4/5] bg-[#1c1c1e] rounded-3xl overflow-hidden border border-outline-variant/20 shadow-2xl group relative">
                <img id="product-main-img" src="{{ $product->image_url }}" alt="{{ $product->name }}" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500 ease-out">
                
                <!-- Wishlist Round Glass Button (Top Right Ref Screen 3) -->
                <button aria-label="Add to Wishlist" class="absolute top-4 right-4 w-9 h-9 rounded-full bg-white/80 backdrop-blur-md flex items-center justify-center text-on-surface-variant hover:text-red-500 transition-all z-10 shadow-sm" onclick="if(window.showToast) window.showToast('Disimpan ke Favorit!');">
                    <span class="material-symbols-outlined text-[18px]">favorite</span>
                </button>
                
                <!-- Black Price Capsule Tag (Bottom Right Ref Screen 3) -->
                <div class="absolute bottom-4 right-4 bg-black text-white px-4 py-1.5 rounded-full text-sm font-bold shadow-lg z-10">
                    Rp {{ number_format($product->price, 0, ',', '.') }}
                </div>
            </div>
        </div>

        <!-- Product Info (Reference Screen 3 Inspired) -->
        <div class="w-full lg:w-1/2 flex flex-col justify-center text-left">
            
            <div class="mb-2 flex items-center justify-between">
                <span class="inline-block px-3 py-1 bg-surface-container-high border border-outline-variant/40 text-primary rounded-full text-[10px] uppercase tracking-[0.2em] font-bold">{{ $product->category }}</span>
                <span class="px-2.5 py-1 bg-emerald-50 text-emerald-600 text-[10px] font-bold rounded-full uppercase tracking-wider border border-emerald-100">In Stock</span>
            </div>
            
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-primary mb-2 leading-tight tracking-tight">{{ $product->name }}</h1>
            
            <!-- Rating Star Review (Matching Ref Screen 3) -->
            <div class="flex items-center gap-2 mb-6 text-xs text-on-surface-variant">
                <div class="flex items-center text-amber-500 gap-0.5 font-bold">
                    <span class="material-symbols-outlined text-[16px] fill-icon">star</span>
                    <span class="material-symbols-outlined text-[16px] fill-icon">star</span>
                    <span class="material-symbols-outlined text-[16px] fill-icon">star</span>
                    <span class="material-symbols-outlined text-[16px] fill-icon">star</span>
                    <span class="material-symbols-outlined text-[16px] fill-icon">star</span>
                </div>
                <span class="font-bold text-primary">4.8/5</span>
                <span class="opacity-60">(berdasarkan 256 ulasan siswa)</span>
            </div>
            
            <!-- Product Description Card -->
            <div class="mb-8 bg-surface-container-lowest border border-outline-variant/30 rounded-2xl p-5 md:p-6 shadow-sm">
                <h3 class="text-xs font-bold text-primary mb-2 uppercase tracking-wider flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-[16px]">info</span>
                    Detail & Deskripsi
                </h3>
                <p class="text-xs sm:text-sm text-on-surface-variant leading-relaxed opacity-90">
                    {{ $product->description ?? 'Deskripsi produk official merchandise eksklusif GALAKSI XII SMKN 3 Jepara. Didesain dengan material berkualitas tinggi.' }}
                </p>
            </div>

            <!-- Floating Rounded Capsule Action Bar (With both Keranjang & Beli Sekarang) -->
            <div class="fixed bottom-4 left-1/2 -translate-x-1/2 w-[94%] max-w-lg md:static md:translate-x-0 md:w-full bg-[#1c1c1e] text-white p-2 sm:p-2.5 z-40 rounded-full shadow-2xl flex items-center justify-between gap-2 border border-white/15 backdrop-blur-xl">
                
                <!-- Functional Quantity Stepper -->
                <div class="flex items-center justify-center gap-1.5 bg-white/10 backdrop-blur-md rounded-full px-2.5 py-2 text-xs font-bold shrink-0 border border-white/15">
                    <button type="button" class="w-6 h-6 rounded-full bg-white/10 hover:bg-white/30 flex items-center justify-center text-white active:scale-95 transition-all" onclick="let q=document.getElementById('pd-qty-val'); let h1=document.getElementById('pd-qty-hidden-1'); let h2=document.getElementById('pd-qty-hidden-2'); if(parseInt(q.textContent)>1){ let n=parseInt(q.textContent)-1; q.textContent=n; if(h1)h1.value=n; if(h2)h2.value=n; }">
                        <span class="text-sm font-bold">-</span>
                    </button>
                    <span id="pd-qty-val" class="w-5 text-center font-bold text-white text-xs select-none">1</span>
                    <button type="button" class="w-6 h-6 rounded-full bg-white/10 hover:bg-white/30 flex items-center justify-center text-white active:scale-95 transition-all" onclick="let q=document.getElementById('pd-qty-val'); let h1=document.getElementById('pd-qty-hidden-1'); let h2=document.getElementById('pd-qty-hidden-2'); let n=parseInt(q.textContent)+1; q.textContent=n; if(h1)h1.value=n; if(h2)h2.value=n;">
                        <span class="text-sm font-bold">+</span>
                    </button>
                </div>

                <div class="flex items-center gap-2 flex-grow">
                    <!-- Add to Cart Form -->
                    <form id="pd-add-to-cart-form" action="{{ route('cart.add', $product->id) }}" method="POST" class="flex-1">
                        @csrf
                        <input type="hidden" name="quantity" id="pd-qty-hidden-1" value="1">
                        <button type="submit" class="w-full bg-white/15 text-white hover:bg-white/25 border border-white/20 font-bold py-2.5 px-3 rounded-full text-xs transition-all flex items-center justify-center gap-1 active:scale-95 whitespace-nowrap" title="Tambah ke Keranjang">
                            <span class="material-symbols-outlined text-[15px]">shopping_bag</span>
                            <span>+ Keranjang</span>
                        </button>
                    </form>

                    <!-- Buy Now Form (Direct Checkout) -->
                    <form action="{{ route('cart.add', $product->id) }}" method="POST" class="flex-1">
                        @csrf
                        <input type="hidden" name="quantity" id="pd-qty-hidden-2" value="1">
                        <input type="hidden" name="direct_checkout" value="1">
                        <button type="submit" class="w-full bg-white text-[#111113] hover:bg-white/90 font-bold py-2.5 px-3 rounded-full text-xs transition-all shadow-md flex items-center justify-center gap-1 active:scale-95 whitespace-nowrap">
                            <span class="material-symbols-outlined text-[15px]">bolt</span>
                            <span>Beli Sekarang</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Lightbox Fullscreen Modal -->
<div id="image-lightbox-modal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/80 backdrop-blur-md p-4 transition-all duration-300">
    <div class="relative max-w-4xl max-h-[90vh] w-full flex flex-col items-center">
        <button id="close-lightbox" class="absolute -top-12 right-0 text-white bg-white/20 hover:bg-white/40 p-2 rounded-full backdrop-blur-md transition-all">
            <span class="material-symbols-outlined text-2xl">close</span>
        </button>
        <img id="lightbox-img" src="{{ $product->image_url }}" alt="{{ $product->name }}" class="max-w-full max-h-[85vh] object-contain rounded-2xl shadow-2xl scale-95 transition-transform duration-300">
    </div>
</div>

<script>
    const productImg = document.getElementById('product-main-img');
    const lightboxModal = document.getElementById('image-lightbox-modal');
    const lightboxImg = document.getElementById('lightbox-img');
    const closeLightboxBtn = document.getElementById('close-lightbox');

    if (productImg) {
        productImg.addEventListener('click', () => {
            lightboxModal.classList.remove('hidden');
            lightboxModal.classList.add('flex');
            setTimeout(() => {
                lightboxImg.classList.remove('scale-95');
                lightboxImg.classList.add('scale-100');
            }, 10);
        });
    }

    function closeLightbox() {
        lightboxImg.classList.remove('scale-100');
        lightboxImg.classList.add('scale-95');
        setTimeout(() => {
            lightboxModal.classList.remove('flex');
            lightboxModal.classList.add('hidden');
        }, 200);
    }

    if (closeLightboxBtn) closeLightboxBtn.addEventListener('click', closeLightbox);
    if (lightboxModal) {
        lightboxModal.addEventListener('click', (e) => {
            if (e.target === lightboxModal) closeLightbox();
        });
    }
</script>

<!-- Footer -->
@include('components.footer')

<script>
    // AJAX Add to Cart for seamless toast notification
    document.addEventListener('DOMContentLoaded', function() {
        const addCartForms = document.querySelectorAll('form[action*="/cart/add/"]');
        addCartForms.forEach(form => {
            // Only intercept forms that do NOT have direct_checkout
            if (!form.querySelector('input[name="direct_checkout"]')) {
                form.addEventListener('submit', async function(e) {
                    e.preventDefault();
                    const submitBtn = form.querySelector('button[type="submit"]');
                    if (submitBtn) submitBtn.disabled = true;

                    try {
                        const response = await fetch(form.action, {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                'Accept': 'application/json',
                                'X-Requested-With': 'XMLHttpRequest'
                            },
                            body: new FormData(form)
                        });

                        const data = await response.json();
                        if (data.success && window.showToast) {
                            window.showToast(data.message, 'success', {
                                cartCount: data.totalItems || data.cartCount,
                                totalPrice: data.totalPriceFormatted
                            });
                        }
                    } catch (err) {
                        form.submit(); // fallback to normal submit if ajax fails
                    } finally {
                        if (submitBtn) submitBtn.disabled = false;
                    }
                });
            }
        });
    });

    // Session Flash Toast Trigger
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
