<!-- Cart - Galaksi XII -->
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>GALAKSI XII - Keranjang Belanja</title>
<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;500;700&family=Libre+Caslon+Text:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                "colors": { "surface-container-lowest": "#ffffff", "tertiary": "#000000", "surface-bright": "#fbf9f8", "secondary-container": "#e9decf", "primary": "#000000", "on-error-container": "#93000a", "on-secondary-fixed-variant": "#4c463b", "error-container": "#ffdad6", "on-primary-fixed": "#1c1b1b", "error": "#ba1a1a", "inverse-on-surface": "#f2f0f0", "on-background": "#1b1c1c", "surface-container": "#efeded", "on-primary": "#ffffff", "on-tertiary-container": "#848480", "tertiary-fixed": "#e4e2dd", "surface-container-low": "#f5f3f3", "inverse-surface": "#303031", "on-tertiary-fixed": "#1b1c19", "on-tertiary-fixed-variant": "#474744", "background": "#fbf9f8", "surface": "#fbf9f8", "on-tertiary": "#ffffff", "tertiary-fixed-dim": "#c8c6c2", "outline-variant": "#c4c7c7", "on-secondary-fixed": "#201b12", "surface-variant": "#e4e2e2", "surface-dim": "#dbdad9", "on-secondary-container": "#696255", "outline": "#747878", "on-primary-fixed-variant": "#474746", "inverse-primary": "#c8c6c5", "on-secondary": "#ffffff", "on-surface-variant": "#444748", "on-error": "#ffffff", "surface-tint": "#5f5e5e", "secondary-fixed-dim": "#cfc5b6", "tertiary-container": "#1b1c19", "surface-container-highest": "#e4e2e2", "primary-fixed": "#e5e2e1", "secondary": "#655d51", "on-primary-container": "#858383", "surface-container-high": "#e9e8e7", "primary-container": "#1c1b1b", "on-surface": "#1b1c1c", "secondary-fixed": "#ece1d2", "primary-fixed-dim": "#c8c6c5" },
                "borderRadius": { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                "spacing": { "sm": "12px", "md": "24px", "margin-desktop": "64px", "xs": "4px", "margin-mobile": "16px", "base": "8px", "gutter": "24px", "xl": "80px", "lg": "48px" },
                "fontFamily": { "sans": ["DM Sans", "sans-serif"], "serif": ["Libre Caslon Text", "serif"], "headline-lg-mobile": ["Libre Caslon Text"], "headline-md": ["Libre Caslon Text"], "label-md": ["DM Sans"], "display-lg": ["Libre Caslon Text"], "body-md": ["DM Sans"], "body-lg": ["DM Sans"], "label-sm": ["DM Sans"], "headline-lg": ["Libre Caslon Text"] },
                "fontSize": {
                    "headline-md": ["24px", { "lineHeight": "1.3", "fontWeight": "400" }],
                    "headline-lg-mobile": ["28px", { "lineHeight": "1.2", "fontWeight": "400" }],
                    "headline-lg": ["32px", { "lineHeight": "1.2", "fontWeight": "400" }],
                    "body-md": ["16px", { "lineHeight": "1.6", "fontWeight": "400" }],
                    "label-sm": ["12px", { "lineHeight": "1.4", "letterSpacing": "0.05em", "fontWeight": "500" }],
                    "label-md": ["14px", { "lineHeight": "1.4", "letterSpacing": "0.02em", "fontWeight": "500" }]
                }
            }
        }
    }
</script>
<style>
    body { min-height: max(884px, 100dvh); }
    .pb-safe { padding-bottom: env(safe-area-inset-bottom, 16px); }
</style>
@include('components.page-transition')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body class="bg-background text-on-background font-body-md antialiased min-h-screen flex flex-col pb-safe selection:bg-primary selection:text-on-primary">
@include('components.navbar')

<!-- Main Content -->
<main class="flex-grow pt-[80px] pb-[160px] md:pb-lg w-full max-w-7xl mx-auto px-6 md:px-16 py-lg">
    <!-- Back Button -->
    <div class="mb-8">
        <a href="{{ route('merchandise') }}" class="inline-flex items-center gap-2 px-4 py-2 bg-surface-container-low hover:bg-surface-variant border border-outline-variant/30 text-on-surface-variant hover:text-primary transition-all duration-300 rounded-full font-label-md w-fit group shadow-sm hover:shadow-md">
            <span class="material-symbols-outlined text-[18px] group-hover:-translate-x-1 transition-transform duration-300">arrow_back</span>
            Kembali ke Toko
        </a>
    </div>

    <div class="flex flex-col gap-xl">
        <header class="mb-md">
            <h1 class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-headline-lg text-primary mb-xs">Keranjang Belanja</h1>
            <p class="font-body-md text-body-md text-on-surface-variant">Tinjau produk yang ingin Anda beli sebelum checkout.</p>
        </header>

        <div class="flex flex-col lg:flex-row gap-xl">
            <!-- Cart Items (Left) -->
            <div class="w-full lg:w-2/3 flex flex-col gap-lg">
                @php $totalPrice = 0; @endphp
                @forelse($cart as $id => $item)
                    @php $totalPrice += $item['price'] * $item['quantity']; @endphp
                    <div class="bg-surface-container-lowest rounded-2xl p-md shadow-sm border border-outline-variant/30 flex flex-col md:flex-row gap-md items-center hover:shadow-md transition-all duration-300 group" id="cart-item-{{ $id }}">
                        <!-- Product Image -->
                        <div class="w-24 h-24 md:w-28 md:h-28 bg-surface-variant rounded-xl overflow-hidden shrink-0">
                            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" alt="{{ $item['name'] }}" src="{{ $item['image_url'] }}">
                        </div>
                        <!-- Product Info -->
                        <div class="flex-grow w-full">
                            <p class="text-[11px] font-bold text-secondary uppercase tracking-widest mb-1 opacity-70">{{ $item['category'] ?? 'Merchandise' }}</p>
                            <h3 class="font-label-md text-label-md text-primary mb-1 text-base font-semibold">{{ $item['name'] }}</h3>
                            <p class="font-label-md text-primary font-bold text-lg">Rp {{ number_format($item['price'], 0, ',', '.') }}</p>
                        </div>
                        <!-- Quantity & Delete -->
                        <div class="flex items-center gap-4 w-full md:w-auto justify-between md:justify-end mt-2 md:mt-0">
                            <!-- Quantity Stepper (AJAX) -->
                            <div class="flex items-center bg-surface-container-low border border-outline-variant rounded-xl overflow-hidden shadow-sm">
                                <button type="button"
                                    class="qty-btn w-10 h-10 flex items-center justify-center text-on-surface-variant hover:text-primary hover:bg-surface-variant transition-colors"
                                    data-id="{{ $id }}" data-action="decrease" data-price="{{ $item['price'] }}">
                                    <span class="material-symbols-outlined text-[18px]">remove</span>
                                </button>
                                <span class="qty-display w-10 text-center font-label-md text-primary font-bold" id="qty-{{ $id }}">{{ $item['quantity'] }}</span>
                                <button type="button"
                                    class="qty-btn w-10 h-10 flex items-center justify-center text-on-surface-variant hover:text-primary hover:bg-surface-variant transition-colors"
                                    data-id="{{ $id }}" data-action="increase" data-price="{{ $item['price'] }}">
                                    <span class="material-symbols-outlined text-[18px]">add</span>
                                </button>
                            </div>
                            <!-- Subtotal per Item -->
                            <div class="hidden md:block text-right min-w-[90px]">
                                <p class="text-[11px] text-on-surface-variant mb-0.5">Subtotal</p>
                                <p class="font-label-md text-primary font-bold item-subtotal" id="subtotal-{{ $id }}">Rp {{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }}</p>
                            </div>
                            <!-- Remove Button (AJAX) -->
                            <button type="button"
                                class="remove-btn p-2 text-on-surface-variant hover:text-error transition-colors rounded-full hover:bg-error/10"
                                data-id="{{ $id }}" title="Hapus">
                                <span class="material-symbols-outlined">delete</span>
                            </button>
                        </div>
                    </div>
                @empty
                    <div class="bg-surface-container-lowest rounded-2xl p-xl shadow-sm border border-outline-variant/30 text-center py-20">
                        <span class="material-symbols-outlined text-7xl text-on-surface-variant mb-4 block">shopping_cart</span>
                        <h3 class="font-headline-md text-headline-md text-primary mb-2">Keranjang Kosong</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-8">Anda belum menambahkan produk ke dalam keranjang.</p>
                        <a href="{{ route('merchandise') }}" class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-primary text-on-primary rounded-full font-label-md hover:bg-inverse-surface transition-colors shadow-md">
                            <span class="material-symbols-outlined text-[18px]">storefront</span>
                            Mulai Belanja
                        </a>
                    </div>
                @endforelse
            </div>

            <!-- Order Summary (Right) -->
            @if(count($cart) > 0)
            <div class="w-full lg:w-1/3">
                <!-- Mobile Fixed Bottom Action Bar / Desktop Sticky Top -->
                <div class="fixed md:static bottom-0 left-0 w-full md:w-auto bg-surface-container-lowest md:bg-surface-container-lowest rounded-t-3xl md:rounded-2xl p-4 md:p-lg shadow-[0_-4px_25px_-5px_rgba(0,0,0,0.1)] md:shadow-sm border-t md:border border-outline-variant/30 z-40 md:z-auto md:sticky md:top-[100px]">
                    <h2 class="hidden md:block font-headline-md text-headline-md text-primary mb-lg border-b border-outline-variant/30 pb-sm">Ringkasan</h2>
                    <div class="space-y-1 md:space-y-3 mb-3 md:mb-xl flex md:block justify-between items-center md:items-stretch">
                        <div class="flex flex-col md:flex-row md:justify-between items-start md:items-center">
                            <span class="font-body-md text-[13px] md:text-body-md text-on-surface-variant md:block">Subtotal (<span class="cart-count-display">{{ count($cart) }}</span> Item)</span>
                            <span class="hidden md:block font-label-md text-label-md text-primary font-bold cart-total-display">Rp {{ number_format($totalPrice, 0, ',', '.') }}</span>
                        </div>
                        <div class="flex flex-col md:flex-row md:justify-between items-start md:items-center md:pt-2 md:border-t border-outline-variant/20">
                            <span class="hidden md:block font-label-md text-primary font-bold">Total</span>
                            <span class="font-label-md text-primary text-[16px] md:text-xl font-bold cart-total-display leading-tight">Rp {{ number_format($totalPrice, 0, ',', '.') }}</span>
                        </div>
                    </div>
                    <a href="{{ route('checkout') }}" class="w-full bg-primary text-on-primary rounded-xl py-3.5 md:py-4 px-6 flex items-center justify-center gap-2 hover:bg-inverse-surface transition-colors duration-300 font-label-md text-[14px] md:text-label-md shadow-lg text-center font-bold tracking-wide">
                        Lanjut Checkout
                        <span class="material-symbols-outlined text-[18px] md:text-[20px]">arrow_forward</span>
                    </a>
                    <p class="hidden md:block text-center text-[11px] text-on-surface-variant mt-4 leading-relaxed opacity-70">
                        <span class="material-symbols-outlined text-[13px] align-middle mr-0.5">lock</span>
                        Transaksi Anda 100% aman & terpercaya
                    </p>
                </div>
            </div>
            @endif
        </div>
    </div>
</main>



<!-- Footer -->
@include('components.footer')

<!-- Toast Notifications -->
<script>
    (function() {
        function triggerSessionToast() {
            if (window.sessionToastShown) return; // Prevent BF-cache replay
            @if (session('success'))
                if (window.showToast) window.showToast(@json(session('success')), 'success');
                window.sessionToastShown = true;
            @endif
            @if (session('error'))
                if (window.showToast) window.showToast(@json(session('error')), 'error');
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

<!-- AJAX Cart Handler -->
<script>
    const csrfToken = '{{ csrf_token() }}';

    function formatRupiah(amount) {
        return 'Rp ' + new Intl.NumberFormat('id-ID').format(amount);
    }

    function updateCartSummary(totalPrice, cartCount) {
        const subtotalEl = document.querySelector('[id^="summary-subtotal"]') || document.querySelector('.summary-total');
        if (subtotalEl) subtotalEl.textContent = formatRupiah(totalPrice);

        // Update all summary total displays
        document.querySelectorAll('.cart-total-display').forEach(el => {
            el.textContent = formatRupiah(totalPrice);
        });

        // Update navbar cart badge
        document.querySelectorAll('.cart-badge-bounce, [class*="cart-badge"]').forEach(el => {
            el.textContent = cartCount;
            el.style.display = cartCount > 0 ? 'flex' : 'none';
        });
    }

    // Quantity Update (AJAX)
    document.querySelectorAll('.qty-btn').forEach(btn => {
        btn.addEventListener('click', async function() {
            const id = this.dataset.id;
            const action = this.dataset.action;
            const price = parseFloat(this.dataset.price);

            // Optimistic UI update
            const qtyEl = document.getElementById('qty-' + id);
            const subtotalEl = document.getElementById('subtotal-' + id);
            let currentQty = parseInt(qtyEl.textContent);

            if (action === 'increase') {
                currentQty++;
            } else {
                currentQty--;
            }

            if (currentQty <= 0) {
                // Will be removed by server - animate out
                const cardEl = document.getElementById('cart-item-' + id);
                if (cardEl) {
                    cardEl.style.transition = 'all 0.3s ease';
                    cardEl.style.opacity = '0';
                    cardEl.style.transform = 'scale(0.95)';
                }
            } else {
                qtyEl.textContent = currentQty;
                if (subtotalEl) subtotalEl.textContent = formatRupiah(price * currentQty);
            }

            try {
                const response = await fetch('{{ url("/cart/update") }}/' + id, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken,
                        'Accept': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    body: JSON.stringify({ action: action })
                });

                const data = await response.json();

                if (data.success) {
                    if (data.removed) {
                        // Remove card from DOM
                        const cardEl = document.getElementById('cart-item-' + id);
                        setTimeout(() => {
                            if (cardEl) cardEl.remove();
                            // If cart is empty, reload to show empty state
                            if (data.cartCount === 0) location.reload();
                        }, 300);
                        if (window.showToast) window.showToast('Produk dihapus dari keranjang', 'success');
                    }

                    // Update summary totals
                    document.querySelectorAll('.cart-total-display').forEach(el => {
                        el.textContent = formatRupiah(data.totalPrice);
                    });
                }
            } catch (err) {
                // Fallback: reload page
                location.reload();
            }
        });
    });

    // Remove Item (AJAX)
    document.querySelectorAll('.remove-btn').forEach(btn => {
        btn.addEventListener('click', async function() {
            const id = this.dataset.id;
            const cardEl = document.getElementById('cart-item-' + id);

            // Animate out
            if (cardEl) {
                cardEl.style.transition = 'all 0.3s ease';
                cardEl.style.opacity = '0';
                cardEl.style.transform = 'scale(0.95) translateX(20px)';
            }

            try {
                const response = await fetch('{{ url("/cart/remove") }}/' + id, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken,
                        'Accept': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                });

                const data = await response.json();

                setTimeout(() => {
                    if (cardEl) cardEl.remove();
                    if (data.cartCount === 0) location.reload();

                    // Update totals
                    document.querySelectorAll('.cart-total-display').forEach(el => {
                        el.textContent = formatRupiah(data.totalPrice);
                    });
                }, 300);

                if (window.showToast) window.showToast('Produk dihapus dari keranjang', 'success');
            } catch (err) {
                location.reload();
            }
        });
    });
</script>

</body>
</html>
