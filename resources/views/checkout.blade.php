<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>GALAKSI XII - Checkout & Ringkasan Pesanan</title>
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
                    "colors": {
                        "surface-container-lowest": "#ffffff",
                        "tertiary": "#000000",
                        "surface-bright": "#fbf9f8",
                        "secondary-container": "#e9decf",
                        "primary": "#000000",
                        "on-error-container": "#93000a",
                        "on-secondary-fixed-variant": "#4c463b",
                        "error-container": "#ffdad6",
                        "on-primary-fixed": "#1c1b1b",
                        "error": "#ba1a1a",
                        "inverse-on-surface": "#f2f0f0",
                        "on-background": "#1b1c1c",
                        "surface-container": "#efeded",
                        "on-primary": "#ffffff",
                        "on-tertiary-container": "#848480",
                        "tertiary-fixed": "#e4e2dd",
                        "surface-container-low": "#f5f3f3",
                        "inverse-surface": "#303031",
                        "on-tertiary-fixed": "#1b1c19",
                        "on-tertiary-fixed-variant": "#474744",
                        "background": "#fbf9f8",
                        "surface": "#fbf9f8",
                        "on-tertiary": "#ffffff",
                        "tertiary-fixed-dim": "#c8c6c2",
                        "outline-variant": "#c4c7c7",
                        "on-secondary-fixed": "#201b12",
                        "surface-variant": "#e4e2e2",
                        "surface-dim": "#dbdad9",
                        "on-secondary-container": "#696255",
                        "outline": "#747878",
                        "on-primary-fixed-variant": "#474746",
                        "inverse-primary": "#c8c6c5",
                        "on-secondary": "#ffffff",
                        "on-surface-variant": "#444748",
                        "on-error": "#ffffff",
                        "surface-tint": "#5f5e5e",
                        "secondary-fixed-dim": "#cfc5b6",
                        "tertiary-container": "#1b1c19",
                        "surface-container-highest": "#e4e2e2",
                        "primary-fixed": "#e5e2e1",
                        "secondary": "#655d51",
                        "on-primary-container": "#858383",
                        "surface-container-high": "#e9e8e7",
                        "primary-container": "#1c1b1b",
                        "on-surface": "#1b1c1c",
                        "secondary-fixed": "#ece1d2",
                        "primary-fixed-dim": "#c8c6c5"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "sm": "12px",
                        "margin-desktop": "64px",
                        "xl": "80px",
                        "gutter": "24px",
                        "md": "24px",
                        "lg": "48px",
                        "margin-mobile": "16px",
                        "xs": "4px",
                        "base": "8px"
                    },
                    "fontFamily": {
                        "sans": ["DM Sans", "sans-serif"],
                        "serif": ["Libre Caslon Text", "serif"],
                        "headline-lg-mobile": ["Libre Caslon Text"],
                        "headline-md": ["Libre Caslon Text"],
                        "label-md": ["DM Sans"],
                        "display-lg": ["Libre Caslon Text"],
                        "body-md": ["DM Sans"],
                        "body-lg": ["DM Sans"],
                        "label-sm": ["DM Sans"],
                        "headline-lg": ["Libre Caslon Text"]
                    },
                    "fontSize": {
                        "headline-lg-mobile": [
                            "28px",
                            {
                                "lineHeight": "1.2",
                                "fontWeight": "400"
                            }
                        ],
                        "headline-md": [
                            "24px",
                            {
                                "lineHeight": "1.3",
                                "fontWeight": "400"
                            }
                        ],
                        "label-md": [
                            "14px",
                            {
                                "lineHeight": "1.4",
                                "letterSpacing": "0.02em",
                                "fontWeight": "500"
                            }
                        ],
                        "display-lg": [
                            "48px",
                            {
                                "lineHeight": "1.1",
                                "letterSpacing": "-0.02em",
                                "fontWeight": "400"
                            }
                        ],
                        "body-md": [
                            "16px",
                            {
                                "lineHeight": "1.6",
                                "fontWeight": "400"
                            }
                        ],
                        "body-lg": [
                            "18px",
                            {
                                "lineHeight": "1.6",
                                "fontWeight": "400"
                            }
                        ],
                        "label-sm": [
                            "12px",
                            {
                                "lineHeight": "1.4",
                                "letterSpacing": "0.05em",
                                "fontWeight": "500"
                            }
                        ],
                        "headline-lg": [
                            "32px",
                            {
                                "lineHeight": "1.2",
                                "fontWeight": "400"
                            }
                        ]
                    }
                },
            },
        }
    </script>
    <style>
        body {
            background-color: theme('colors.background');
            color: theme('colors.on-background');
        }

        .soft-shadow {
            box-shadow: 0 10px 40px -10px rgba(0, 0, 0, 0.04);
        }

        .input-focus-ring:focus-within {
            box-shadow: 0 4px 20px -5px rgba(0, 0, 0, 0.05);
            border-color: theme('colors.primary');
        }
    </style>
    @include('components.page-transition')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
</head>

<body
    class="bg-background text-on-background font-body-md antialiased min-h-screen flex flex-col selection:bg-primary selection:text-on-primary">
    <!-- TopNavBar -->
    @include('components.navbar')
    <!-- Main Content Canvas -->
    <main class="flex-grow pt-[72px] pb-[80px] md:pb-lg w-full max-w-7xl mx-auto px-6 md:px-16 py-lg">
        <div class="mb-6">
            <a href="{{ route('cart.index') }}"
                class="inline-flex items-center gap-2 px-4 py-2 bg-surface-container-low hover:bg-surface-variant border border-outline-variant/30 text-on-surface-variant hover:text-primary transition-all duration-300 rounded-full font-label-md w-fit group shadow-sm hover:shadow-md">
                <span
                    class="material-symbols-outlined text-[18px] group-hover:-translate-x-1 transition-transform duration-300">arrow_back</span>
                Kembali ke Keranjang
            </a>
        </div>
        <form id="checkoutForm" onsubmit="return false;" class="w-full flex flex-col lg:flex-row gap-xl">
            <!-- Left Column: Checkout Form -->
            <div class="w-full lg:w-2/3 flex flex-col gap-lg">
                <header class="mb-md">
                    <h1
                        class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-headline-lg text-primary mb-xs">
                        Checkout</h1>
                    <p class="font-body-md text-body-md text-on-surface-variant">Lengkapi data diri dan pilih metode
                        pembayaran.</p>
                </header>
                <!-- Personal Data Section -->
                <section
                    class="bg-surface-container-lowest rounded-xl p-md md:p-lg shadow-sm border border-surface-variant">
                    <h2 class="font-headline-md text-headline-md text-primary mb-lg flex items-center gap-sm">
                        <span class="material-symbols-outlined text-secondary">person</span>
                        Data Diri
                    </h2>
                    <div class="flex flex-col gap-md">
                        <!-- Name -->
                        <div class="flex flex-col gap-xs">
                            <label class="font-label-sm text-label-sm text-on-surface-variant ml-1" for="name">Nama
                                Lengkap</label>
                            <input name="name" required
                                class="bg-surface-container-low border border-outline-variant rounded-lg px-4 py-3 font-body-md text-body-md text-on-surface focus:outline-none input-focus-ring transition-all duration-300 placeholder:text-outline-variant"
                                id="name" placeholder="John Doe" type="text">
                        </div>
                        <!-- Email -->
                        <div class="flex flex-col gap-xs">
                            <label class="font-label-sm text-label-sm text-on-surface-variant ml-1" for="email">Alamat Email</label>
                            <input name="email" required
                                class="bg-surface-container-low border border-outline-variant rounded-lg px-4 py-3 font-body-md text-body-md text-on-surface focus:outline-none input-focus-ring transition-all duration-300 placeholder:text-outline-variant"
                                id="email" placeholder="contoh@gmail.com" type="email">
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-md">
                            <!-- Class/School -->
                            <div class="flex flex-col gap-xs">
                                <label class="font-label-sm text-label-sm text-on-surface-variant ml-1"
                                    for="school">Kelas / Asal Sekolah</label>
                                <input name="school" required
                                    class="bg-surface-container-low border border-outline-variant rounded-lg px-4 py-3 font-body-md text-body-md text-on-surface focus:outline-none input-focus-ring transition-all duration-300 placeholder:text-outline-variant"
                                    id="school" placeholder="XII RPL 1 / SMKN 3 Jepara" type="text">
                            </div>
                            <!-- WhatsApp -->
                            <div class="flex flex-col gap-xs">
                                <label class="font-label-sm text-label-sm text-on-surface-variant ml-1"
                                    for="whatsapp">Nomor WhatsApp</label>
                                <input name="whatsapp" required
                                    class="bg-surface-container-low border border-outline-variant rounded-lg px-4 py-3 font-body-md text-body-md text-on-surface focus:outline-none input-focus-ring transition-all duration-300 placeholder:text-outline-variant"
                                    id="whatsapp" placeholder="081234567890" type="tel">
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Delivery Method Section -->
                <section
                    class="bg-surface-container-lowest rounded-xl p-md md:p-lg shadow-sm border border-surface-variant mt-sm">
                    <h2 class="font-headline-md text-headline-md text-primary mb-md flex items-center gap-sm">
                        <span class="material-symbols-outlined text-secondary">local_shipping</span>
                        Pengambilan
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-sm">
                        <label class="cursor-pointer">
                            <input checked="" class="peer sr-only" name="delivery" type="radio" value="pickup">
                            <div
                                class="h-full bg-surface-container-low border border-outline-variant rounded-lg p-md peer-checked:border-primary peer-checked:bg-surface-container-lowest peer-checked:shadow-[0_0_0_1px_black] transition-all duration-200 hover:bg-surface-variant">
                                <div class="flex items-center justify-between mb-sm">
                                    <span class="font-label-md text-label-md text-primary">Ambil di Sekolah</span>
                                    <span
                                        class="material-symbols-outlined text-primary peer-checked:block hidden">check_circle</span>
                                </div>
                                <p class="font-body-md text-body-md text-on-surface-variant text-sm">Aula SMKN 3 Jepara
                                </p>
                            </div>
                        </label>
                        <label class="cursor-pointer">
                            <input class="peer sr-only" name="delivery" type="radio" value="cod">
                            <div
                                class="h-full bg-surface-container-low border border-outline-variant rounded-lg p-md peer-checked:border-primary peer-checked:bg-surface-container-lowest peer-checked:shadow-[0_0_0_1px_black] transition-all duration-200 hover:bg-surface-variant">
                                <div class="flex items-center justify-between mb-sm">
                                    <span class="font-label-md text-label-md text-primary">COD Area Jepara</span>
                                    <span
                                        class="material-symbols-outlined text-primary peer-checked:block hidden">check_circle</span>
                                </div>
                                <p class="font-body-md text-body-md text-on-surface-variant text-sm">Alun-alun Jepara /
                                    Halte SMKN 2 Jepara</p>
                            </div>
                        </label>
                    </div>
                </section>
                <!-- Payment Method Section -->
                <section
                    class="bg-surface-container-lowest rounded-xl p-md md:p-lg shadow-sm border border-surface-variant mt-sm">
                    <h2 class="font-headline-md text-headline-md text-primary mb-md flex items-center gap-sm">
                        <span class="material-symbols-outlined text-secondary">payments</span>
                        Pembayaran
                    </h2>
                    <div class="space-y-sm mt-md">
                        <h3 class="font-label-md text-label-md text-primary mb-sm">Pilih Metode Pembayaran</h3>
                        <div class="flex flex-col gap-sm">
                            <label
                                class="flex items-center gap-3 p-3 border border-outline-variant rounded-lg cursor-pointer hover:bg-surface-variant transition-colors has-[:checked]:border-primary has-[:checked]:bg-primary-container/10">
                                <input type="radio" name="payment_method" value="BCA" required
                                    class="text-primary focus:ring-primary w-5 h-5">
                                <div class="flex flex-col">
                                    <span class="font-label-md text-on-surface">BCA Transfer</span>
                                    <span class="font-body-sm text-on-surface-variant">1234567890 a.n Salsabilla Rahma
                                        Quenzaa</span>
                                </div>
                            </label>
                            <label
                                class="flex items-center gap-3 p-3 border border-outline-variant rounded-lg cursor-pointer hover:bg-surface-variant transition-colors has-[:checked]:border-primary has-[:checked]:bg-primary-container/10">
                                <input type="radio" name="payment_method" value="DANA"
                                    class="text-primary focus:ring-primary w-5 h-5">
                                <div class="flex flex-col">
                                    <span class="font-label-md text-on-surface">DANA / Gopay</span>
                                    <span class="font-body-sm text-on-surface-variant">081234567890 a.n Salsabilla
                                        Rahma Quenzaa</span>
                                </div>
                            </label>
                            <label
                                class="flex items-center gap-3 p-3 border border-outline-variant rounded-lg cursor-pointer hover:bg-surface-variant transition-colors has-[:checked]:border-primary has-[:checked]:bg-primary-container/10">
                                <input type="radio" name="payment_method" value="Cash"
                                    class="text-primary focus:ring-primary w-5 h-5">
                                <div class="flex flex-col">
                                    <span class="font-label-md text-on-surface">Cash / Tunai</span>
                                    <span class="font-body-sm text-on-surface-variant">Bayar langsung (Cash) di
                                        sekolah</span>
                                </div>
                            </label>
                        </div>

                        <!-- Upload Proof -->
                        <div class="flex flex-col gap-xs mt-sm transition-all duration-500 ease-in-out"
                            id="upload-proof-section" style="max-height: 200px; opacity: 1;">
                            <label for="payment_proof"
                                class="font-label-sm text-label-sm text-on-surface-variant ml-1">Upload Bukti Transfer
                                <span class="text-error" id="proof-asterisk">*</span></label>
                            <div
                                class="relative border-2 border-dashed border-outline-variant rounded-lg p-lg text-center bg-surface-container-low hover:bg-surface-variant transition-colors flex flex-col items-center justify-center gap-sm overflow-hidden">
                                <input type="file" name="payment_proof" id="payment_proof" accept="image/*"
                                    class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10">
                                <span class="material-symbols-outlined text-secondary text-3xl">cloud_upload</span>
                                <span class="font-body-md text-body-md text-on-surface-variant"
                                    id="file-name-display">Klik atau drag gambar kesini</span>
                                <span class="font-label-sm text-label-sm text-outline">JPG, PNG max 2MB</span>
                            </div>
                            @error('payment_proof')
                                <span class="font-body-sm text-error ml-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <script>
                            const radioBtns = document.querySelectorAll('input[name="payment_method"]');
                            const uploadSection = document.getElementById('upload-proof-section');
                            const fileInput = document.getElementById('payment_proof');
                            const proofAsterisk = document.getElementById('proof-asterisk');
                            const fileDisplay = document.getElementById('file-name-display');

                            fileInput.addEventListener('change', function() {
                                if (this.files && this.files[0]) {
                                    fileDisplay.textContent = '✅ ' + this.files[0].name;
                                    fileDisplay.classList.add('text-primary', 'font-bold');
                                } else {
                                    fileDisplay.textContent = 'Klik atau drag gambar kesini';
                                    fileDisplay.classList.remove('text-primary', 'font-bold');
                                }
                            });

                            radioBtns.forEach(btn => {
                                btn.addEventListener('change', function() {
                                    const paymentDisplay = document.getElementById('selected-payment-display');
                                    if (paymentDisplay) {
                                        paymentDisplay.textContent = this.value + (this.value === 'Cash' ? ' (COD)' :
                                            ' Transfer');
                                    }

                                    if (this.value === 'Cash') {
                                        uploadSection.style.maxHeight = '0px';
                                        uploadSection.style.opacity = '0';
                                        uploadSection.style.overflow = 'hidden';
                                        fileInput.disabled = true;
                                    } else {
                                        uploadSection.style.maxHeight = '200px';
                                        uploadSection.style.opacity = '1';
                                        uploadSection.style.overflow = 'visible';
                                        fileInput.disabled = false;
                                    }
                                });
                            });

                        </script>
                    </div>
                </section>
            </div>
            <!-- Right Column: Order Summary / Digital Invoice (Sticky) -->
            <div class="w-full lg:w-1/3 relative z-10">
                <div
                    class="bg-surface-container-lowest rounded-2xl shadow-xl border border-outline-variant sticky top-[100px] relative overflow-hidden group">
                    <!-- Subtle Top Accent Bar -->
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-primary"></div>

                    <!-- Decorative Receipt Cutouts -->
                    <div
                        class="absolute -left-3 top-20 w-6 h-6 bg-background rounded-full border-r border-outline-variant shadow-inner z-20">
                    </div>
                    <div
                        class="absolute -right-3 top-20 w-6 h-6 bg-background rounded-full border-l border-outline-variant shadow-inner z-20">
                    </div>

                    <div class="p-6 md:p-8">
                        <!-- Invoice Header -->
                        <div
                            class="flex items-center justify-between border-b-[2px] border-dashed border-outline-variant pb-6 mb-6 pt-1">
                            <div>
                                <span
                                    class="text-[10px] font-bold text-secondary uppercase tracking-[0.2em] block mb-1">Invoice
                                    Pesanan</span>
                                <h2 class="font-headline-md text-2xl text-primary font-bold">Ringkasan</h2>
                            </div>
                            <div
                                class="w-12 h-12 rounded-full bg-primary-container/20 flex items-center justify-center text-primary transform group-hover:scale-110 transition-transform duration-300">
                                <span class="material-symbols-outlined text-[28px]">receipt_long</span>
                            </div>
                        </div>

                        @php
                            $totalPrice = 0;
                        @endphp

                        <!-- Items list -->
                        <div class="flex flex-col gap-4 mb-6 max-h-[320px] overflow-y-auto pr-2 custom-scrollbar">
                            @forelse($cart as $id => $item)
                                @php
                                    $itemTotal = $item['price'] * $item['quantity'];
                                    $totalPrice += $itemTotal;
                                @endphp
                                <div
                                    class="flex gap-4 items-center justify-between relative group/item p-3 rounded-xl bg-surface-container-low/30 hover:bg-surface-container-low transition-colors border border-transparent hover:border-outline-variant/30">
                                    <div
                                        class="w-16 h-16 bg-surface-variant rounded-xl overflow-hidden shrink-0 shadow-sm relative">
                                        <img class="w-full h-full object-cover transform group-hover/item:scale-110 transition-transform duration-500"
                                            alt="{{ $item['name'] }}" src="{{ $item['image_url'] }}">
                                        <div class="absolute inset-0 ring-1 ring-inset ring-black/10 rounded-xl"></div>
                                    </div>
                                    <div class="flex-grow min-w-0 pr-2 flex flex-col justify-center">
                                        <h3
                                            class="font-label-md text-[15px] text-primary font-bold truncate leading-tight">
                                            {{ $item['name'] }}</h3>
                                        <p class="font-body-md text-[13px] text-on-surface-variant mt-1 font-medium">
                                            {{ $item['quantity'] }}x @ Rp
                                            {{ number_format($item['price'], 0, ',', '.') }}</p>
                                    </div>
                                    <div class="text-right shrink-0">
                                        <span class="font-label-md text-[15px] text-primary font-bold">Rp
                                            {{ number_format($itemTotal, 0, ',', '.') }}</span>
                                    </div>
                                    <!-- Remove Item Button (Pure Button, No Form Nesting) -->
                                    <button type="button" onclick="removeCheckoutItem('{{ $id }}', event)"
                                        class="absolute -top-2 -right-2 opacity-0 group-hover/item:opacity-100 transition-all duration-300 translate-y-1 group-hover/item:translate-y-0 w-6 h-6 bg-error text-on-error rounded-full flex items-center justify-center hover:scale-110 hover:bg-red-700 shadow-md z-30"
                                        title="Hapus Barang">
                                        <span class="material-symbols-outlined text-[14px]">close</span>
                                    </button>
                                </div>
                            @empty
                                <div
                                    class="py-10 text-center text-on-surface-variant font-body-md flex flex-col items-center justify-center">
                                    <span
                                        class="material-symbols-outlined text-[48px] text-outline-variant mb-3 opacity-50">shopping_cart</span>
                                    <p>Keranjang Anda masih kosong.</p>
                                    <a href="{{ route('merchandise') }}"
                                        class="text-primary font-bold hover:underline mt-3 inline-block px-4 py-2 bg-primary-container/10 rounded-lg hover:bg-primary-container/20 transition-colors">Mulai
                                        belanja</a>
                                </div>
                            @endforelse
                        </div>

                        <!-- Totals Calculation -->
                        <div
                            class="space-y-4 mb-8 border-t-[2px] border-dashed border-outline-variant pt-6 text-sm relative">
                            <div class="flex justify-between text-on-surface-variant items-center">
                                <span class="font-medium">Subtotal ({{ count($cart) }} Item)</span>
                                <span class="font-semibold text-primary text-[15px]">Rp
                                    {{ number_format($totalPrice, 0, ',', '.') }}</span>
                            </div>

                            <div class="flex justify-between text-on-surface-variant items-center">
                                <span class="font-medium">Metode Pembayaran</span>
                                <span
                                    class="font-semibold text-primary text-[13px] uppercase tracking-wide bg-surface-container-high px-2 py-0.5 rounded"
                                    id="selected-payment-display">BCA Transfer</span>
                            </div>

                            <div class="flex justify-between items-end pt-5 mt-2">
                                <div>
                                    <span
                                        class="block text-[11px] uppercase text-on-surface-variant font-bold tracking-wider mb-1">Total
                                        Tagihan</span>
                                </div>
                                <div class="text-right">
                                    <span
                                        class="font-headline-md text-[32px] leading-none text-primary font-bold tracking-tight">Rp
                                        {{ number_format($totalPrice, 0, ',', '.') }}</span>
                                </div>
                            </div>
                        </div>

                        <!-- CTA -->
                        <div class="mt-6">
                            <button type="submit"
                                class="w-full relative overflow-hidden group bg-primary text-on-primary rounded-xl py-4 px-6 flex items-center justify-center gap-2 transition-all duration-300 font-label-md text-[15px] shadow-lg hover:shadow-xl hover:-translate-y-1">
                                <div
                                    class="absolute inset-0 w-full h-full bg-white/20 translate-y-full group-hover:translate-y-0 transition-transform duration-300 ease-out rounded-xl">
                                </div>
                                <span
                                    class="material-symbols-outlined text-[22px] relative z-10 group-hover:animate-pulse">shopping_cart_checkout</span>
                                <span class="relative z-10 font-bold tracking-wide">Checkout</span>
                            </button>
                            <p
                                class="text-center font-label-sm text-[11px] text-on-surface-variant mt-4 leading-relaxed px-4 opacity-80">
                                <span class="material-symbols-outlined text-[14px] align-middle mr-1">lock</span>
                                Pembayaran Anda 100% aman. Pesanan diproses setelah konfirmasi via WhatsApp.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </form>
    </main>
    <!-- Footer -->
    @include('components.footer')
    <!-- Toast Notification -->
    @if (session('success'))
        <div id="toast-success"
            class="fixed inset-0 flex items-center justify-center z-[100] transition-opacity duration-500 bg-background/60 backdrop-blur-sm p-4">
            <div class="flex flex-col items-center justify-center w-full max-w-sm p-8 text-on-surface bg-surface-container-highest rounded-3xl shadow-2xl border border-outline-variant text-center"
                role="alert">
                <div
                    class="inline-flex items-center justify-center w-20 h-20 mb-6 text-primary bg-primary-container rounded-full">
                    <span class="material-symbols-outlined text-[48px]">check_circle</span>
                </div>
                <h3 class="mb-2 text-2xl font-headline-md text-primary">Berhasil!</h3>
                <div class="text-lg font-body-lg text-on-surface-variant mb-8">{{ session('success') }}</div>
                <button type="button"
                    class="w-full py-3 bg-primary text-on-primary rounded-xl font-label-lg hover:opacity-90 transition-opacity"
                    onclick="document.getElementById('toast-success').remove()" aria-label="Close">
                    Oke, Mengerti
                </button>
            </div>
        </div>
        <script>
            setTimeout(() => {
                const toast = document.getElementById('toast-success');
                if (toast) {
                    toast.style.opacity = '0';
                    setTimeout(() => toast.remove(), 500);
                }
            }, 3000);
        </script>
    @endif

    @if ($errors->any())
        <div id="toast-error"
            class="fixed inset-0 flex items-center justify-center z-[100] transition-opacity duration-500 bg-background/60 backdrop-blur-sm p-4">
            <div class="flex flex-col items-center justify-center w-full max-w-md p-8 text-on-surface bg-surface-container-highest rounded-3xl shadow-2xl border border-error text-center"
                role="alert">
                <div
                    class="inline-flex items-center justify-center w-20 h-20 mb-6 text-error bg-error-container rounded-full">
                    <span class="material-symbols-outlined text-[48px]">error</span>
                </div>
                <h3 class="mb-4 text-2xl font-headline-md text-error">Terdapat Kesalahan</h3>
                <ul
                    class="text-base font-body-md text-on-surface-variant list-disc pl-6 text-left mb-8 w-full max-w-sm mx-auto">
                    @foreach ($errors->all() as $error)
                        <li class="mb-2">{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button"
                    class="w-full py-3 bg-error text-on-error rounded-xl font-label-lg hover:opacity-90 transition-opacity"
                    onclick="document.getElementById('toast-error').remove()" aria-label="Close">
                    Perbaiki
                </button>
            </div>
        </div>
        <script>
            setTimeout(() => {
                const toast = document.getElementById('toast-error');
                if (toast) {
                    toast.style.opacity = '0';
                    setTimeout(() => toast.remove(), 500);
                }
            }, 5000);
        </script>
    @endif
    <!-- Canvas Confetti Library -->
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.9.2/dist/confetti.browser.min.js"></script>

    <script>
        function launchConfetti() {
            if (typeof confetti === 'function') {
                // Multi-burst confetti
                const duration = 2.5 * 1000;
                const animationEnd = Date.now() + duration;
                const defaults = {
                    startVelocity: 30,
                    spread: 360,
                    ticks: 60,
                    zIndex: 9999
                };

                function randomInRange(min, max) {
                    return Math.random() * (max - min) + min;
                }

                const interval = setInterval(function() {
                    const timeLeft = animationEnd - Date.now();
                    if (timeLeft <= 0) {
                        return clearInterval(interval);
                    }
                    const particleCount = 50 * (timeLeft / duration);
                    confetti(Object.assign({}, defaults, {
                        particleCount,
                        origin: {
                            x: randomInRange(0.1, 0.3),
                            y: Math.random() - 0.2
                        }
                    }));
                    confetti(Object.assign({}, defaults, {
                        particleCount,
                        origin: {
                            x: randomInRange(0.7, 0.9),
                            y: Math.random() - 0.2
                        }
                    }));
                }, 250);
            }
        }

        // Validasi Auth State (Proteksi Halaman Cek Pesanan / Checkout)
        window.addEventListener('firebase-ready', () => {
            window.FirebaseAuth.onAuthStateChanged((user) => {
                if (!user) {
                    Swal.fire({
                        title: 'Akses Dibatasi',
                        text: 'Anda harus masuk (login) terlebih dahulu untuk melanjutkan ke halaman ini.',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Masuk Sekarang',
                        cancelButtonText: 'Batal',
                        allowOutsideClick: false,
                        allowEscapeKey: false
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "{{ route('login') }}";
                        } else {
                            window.location.href = "{{ route('merchandise') }}";
                        }
                    });
                } else {
                    // Auto-fill email if logged in
                    const emailInput = document.getElementById('email');
                    if(emailInput && !emailInput.value) {
                        emailInput.value = user.email;
                    }
                }
            });
        });

        // Helper: Remove item from cart in checkout
        window.removeCheckoutItem = function(id, e) {
            if(e) e.preventDefault();
            if(window.Swal) {
                Swal.fire({
                    title: 'Hapus Barang?',
                    text: 'Apakah Anda yakin ingin menghapus barang ini dari ringkasan pesanan?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Ya, Hapus',
                    cancelButtonText: 'Batal',
                    customClass: {
                        confirmButton: 'bg-red-600 text-white font-bold py-2.5 px-5 rounded-full text-xs mx-1 shadow-sm',
                        cancelButton: 'bg-gray-100 text-gray-700 font-bold py-2.5 px-5 rounded-full text-xs mx-1 shadow-sm',
                        popup: 'rounded-3xl p-6'
                    },
                    buttonsStyling: false
                }).then(async (result) => {
                    if(result.isConfirmed) {
                        try {
                            await fetch(`/cart/remove/${id}`, {
                                method: 'POST',
                                headers: {
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                    'Accept': 'application/json'
                                }
                            });
                            window.location.reload();
                        } catch(err) {
                            window.location.reload();
                        }
                    }
                });
            } else {
                fetch(`/cart/remove/${id}`, {
                    method: 'POST',
                    headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' }
                }).then(() => window.location.reload());
            }
        };

        // Attach to checkout form & sync to Firebase Firestore
        function initCheckoutHandler() {
            const checkoutForm = document.getElementById('checkoutForm') || document.querySelector('form');
            if (!checkoutForm || checkoutForm.dataset.bound) return;
            checkoutForm.dataset.bound = "true";

            checkoutForm.addEventListener('submit', async function(e) {
                e.preventDefault(); // Stop instant page navigation so Firebase completes request!
                
                const selectedPayment = document.querySelector('input[name="payment_method"]:checked')?.value;
                const fileInput = document.getElementById('payment_proof');
                if (selectedPayment !== 'Cash' && (!fileInput.files || fileInput.files.length === 0)) {
                    Swal.fire({
                        title: 'Bukti Pembayaran Diperlukan',
                        text: 'Silakan unggah foto bukti transfer / screenshot pembayaran Anda terlebih dahulu.',
                        icon: 'warning',
                        confirmButtonText: 'Oke, Mengerti'
                    });
                    return; // Stop execution
                }

                // Show Center Loading Overlay
                const loadingOverlay = document.getElementById('checkout-loading-overlay');
                const loadingDesc = document.getElementById('loading-overlay-desc');
                if (loadingOverlay) {
                    loadingOverlay.classList.remove('hidden');
                    loadingOverlay.classList.add('flex');
                }

                launchConfetti();

                const submitBtn = checkoutForm.querySelector('button[type="submit"]');
                if (submitBtn) {
                    submitBtn.disabled = true;
                }

                // Check if file is uploaded
                let receiptUrl = '';
                if(fileInput && fileInput.files && fileInput.files[0]) {
                    const file = fileInput.files[0];
                    if (loadingDesc) loadingDesc.textContent = 'Sedang memproses foto bukti pembayaran...';
                    
                    // Always generate Base64 DataURL first as 100% reliable fallback
                    receiptUrl = await new Promise((resolve) => {
                        const reader = new FileReader();
                        reader.onload = (e) => resolve(e.target.result || '');
                        reader.onerror = () => resolve('');
                        reader.readAsDataURL(file);
                    });

                    try {
                        const ext = file.name.split('.').pop();
                        const fileName = `receipts/order_${Date.now()}.${ext}`;
                        
                        if (window.FirebaseStorage && window.storageRef && window.uploadBytes) {
                            const storageReference = window.storageRef(window.FirebaseStorage, fileName);
                            const uploadPromise = window.uploadBytes(storageReference, file);
                            const timeoutPromise = new Promise((_, reject) => 
                                setTimeout(() => reject(new Error('Upload timeout')), 2000)
                            );
                            
                            const snapshot = await Promise.race([uploadPromise, timeoutPromise]);
                            if (window.getDownloadURL && snapshot && snapshot.ref) {
                                const cloudUrl = await window.getDownloadURL(snapshot.ref);
                                if (cloudUrl) receiptUrl = cloudUrl;
                            }
                        }
                    } catch(e) {
                        console.warn('Storage upload fallback to DataURL:', e);
                    }
                }
                
                if (loadingDesc) loadingDesc.textContent = 'Menyimpan data pesanan ke sistem...';

                // Inject Cart Items from Laravel Controller
                const cartItems = @json($cart);

                // Sync Order Data to Firebase Firestore & Realtime Database
                const orderPayload = {
                    customer_name: document.getElementById('name')?.value || '',
                    customer_email: document.getElementById('email')?.value || '',
                    school_class: document.getElementById('school')?.value || '',
                    whatsapp_number: document.getElementById('whatsapp')?.value || '',
                    payment_method: document.querySelector('input[name="payment_method"]:checked')?.value || 'BCA',
                    delivery_method: document.querySelector('input[name="delivery"]:checked')?.value || 'Ambil Sekolah',
                    items: cartItems, // <-- Added cart items
                    status: 'pending',
                    payment_status: 'Belum Lunas', // Default payment status
                    payment_receipt_url: receiptUrl, // Attached uploaded image
                    created_at: new Date().toISOString()
                };

                const syncTasks = [];

                if (window.FirebaseDB && window.collection && window.addDoc) {
                    syncTasks.push(
                        window.addDoc(window.collection(window.FirebaseDB, 'orders'), orderPayload)
                        .then(() => console.log('✅ Firestore Sync'))
                        .catch(err => console.warn('Firestore err', err))
                    );
                }

                if (window.FirebaseRTDB && window.ref && window.push) {
                    const ordersRef = window.ref(window.FirebaseRTDB, 'orders');
                    syncTasks.push(
                        window.push(ordersRef, orderPayload)
                        .then(() => console.log('✅ RTDB Sync'))
                        .catch(err => console.warn('RTDB err', err))
                    );
                }

                // Run both database writes concurrently with a 1.5s max timeout to prevent hanging!
                if(syncTasks.length > 0) {
                    try {
                        const timeoutPromise = new Promise(resolve => setTimeout(resolve, 1500));
                        await Promise.race([Promise.all(syncTasks), timeoutPromise]);
                    } catch(err) {
                        console.warn('Sync warning:', err);
                    }
                }
                
                // Hide Center Loading Overlay
                if (loadingOverlay) {
                    loadingOverlay.classList.add('hidden');
                    loadingOverlay.classList.remove('flex');
                }

                // Reset submit button state
                if (submitBtn) {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = '<span class="material-symbols-outlined text-[22px] relative z-10">shopping_cart_checkout</span><span class="relative z-10 font-bold tracking-wide">Checkout</span>';
                }

                // Populate & Trigger Custom Modal (Matching User Reference Image)
                const modal = document.getElementById('success-modal');
                const modalCard = document.getElementById('success-modal-card');
                const modalOrderId = document.getElementById('modal-order-id');
                const modalOrderDate = document.getElementById('modal-order-date');
                const modalOrderPayment = document.getElementById('modal-order-payment');
                const modalOrderTotal = document.getElementById('modal-order-total');
                const modalWaBtn = document.getElementById('modal-wa-btn');

                if (modal && modalCard) {
                    // Generate Order ID
                    const randomCode = Math.floor(100000 + Math.random() * 900000);
                    if (modalOrderId) modalOrderId.textContent = '#GLX-' + randomCode;

                    // Date
                    const today = new Date();
                    const dateFormatted = today.toLocaleDateString('id-ID', { day: 'numeric', month: 'long', year: 'numeric' });
                    if (modalOrderDate) modalOrderDate.textContent = dateFormatted;

                    // Payment method
                    if (modalOrderPayment) modalOrderPayment.textContent = orderPayload.payment_method + (orderPayload.payment_method === 'Cash' ? ' (COD)' : ' Transfer');

                    // Total Price calculation
                    let totalVal = 0;
                    if (Array.isArray(cartItems)) {
                        totalVal = cartItems.reduce((acc, item) => acc + (item.price * item.quantity), 0);
                    } else if (typeof cartItems === 'object' && cartItems !== null) {
                        Object.values(cartItems).forEach(item => {
                            totalVal += (item.price * item.quantity);
                        });
                    }
                    if (modalOrderTotal) modalOrderTotal.textContent = 'Rp ' + totalVal.toLocaleString('id-ID');

                    // Show Modal with Animation
                    modal.classList.remove('hidden');
                    modal.classList.add('flex');
                    setTimeout(() => {
                        modalCard.classList.remove('scale-95', 'opacity-0');
                        modalCard.classList.add('scale-100', 'opacity-100');
                    }, 10);

                    // WA Button Listener inside Modal (Pure Firebase + Direct WhatsApp)
                    if (modalWaBtn) {
                        modalWaBtn.onclick = function() {
                            modalWaBtn.disabled = true;
                            modalWaBtn.innerHTML = '<span class="animate-spin inline-block mr-2">⚡</span> Mengalihkan ke WhatsApp...';

                            let itemDetailsStr = '';
                            if (Array.isArray(cartItems)) {
                                cartItems.forEach(item => {
                                    itemDetailsStr += `- ${item.name} (${item.quantity}x) : Rp ${(item.price * item.quantity).toLocaleString('id-ID')}\n`;
                                });
                            } else if (typeof cartItems === 'object' && cartItems !== null) {
                                Object.values(cartItems).forEach(item => {
                                    itemDetailsStr += `- ${item.name} (${item.quantity}x) : Rp ${(item.price * item.quantity).toLocaleString('id-ID')}\n`;
                                });
                            }

                            const waNumber = '6285868740035';
                            const proofText = receiptUrl ? `\nBukti Pembayaran: ${receiptUrl}` : '';
                            const text = `Halo Admin Galaksi, saya ingin konfirmasi pesanan:\n\n*Data Pemesan:*\nNama: ${orderPayload.customer_name}\nKelas: ${orderPayload.school_class}\nPengiriman: ${orderPayload.delivery_method}\nPembayaran: *${orderPayload.payment_method}*${proofText}\n\n*Rincian Pesanan:*\n${itemDetailsStr}*Total: Rp ${totalVal.toLocaleString('id-ID')}*\n\nMohon info selanjutnya, terima kasih.`;
                            const waUrl = `https://wa.me/${waNumber}?text=${encodeURIComponent(text)}`;

                            // Clear Session Cart asynchronously
                            fetch('{{ route("cart.clear") }}', {
                                method: 'POST',
                                headers: {
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                    'Accept': 'application/json'
                                }
                            }).catch(e => console.warn('Clear cart err', e));

                            // Redirect to WhatsApp
                            window.location.href = waUrl;
                        };
                    }
                } else {
                    let itemDetailsStr = '';
                    if (Array.isArray(cartItems)) {
                        cartItems.forEach(item => {
                            itemDetailsStr += `- ${item.name} (${item.quantity}x) : Rp ${(item.price * item.quantity).toLocaleString('id-ID')}\n`;
                        });
                    } else if (typeof cartItems === 'object' && cartItems !== null) {
                        Object.values(cartItems).forEach(item => {
                            itemDetailsStr += `- ${item.name} (${item.quantity}x) : Rp ${(item.price * item.quantity).toLocaleString('id-ID')}\n`;
                        });
                    }

                    const waNumber = '6285868740035';
                    const proofText = receiptUrl ? `\nBukti Pembayaran: ${receiptUrl}` : '';
                    const text = `Halo Admin Galaksi, saya ingin konfirmasi pesanan:\n\n*Data Pemesan:*\nNama: ${orderPayload.customer_name}\nKelas: ${orderPayload.school_class}\nPengiriman: ${orderPayload.delivery_method}\nPembayaran: *${orderPayload.payment_method}*${proofText}\n\n*Rincian Pesanan:*\n${itemDetailsStr} Mohon info selanjutnya, terima kasih.`;
                    const waUrl = `https://wa.me/${waNumber}?text=${encodeURIComponent(text)}`;
                    window.location.href = waUrl;
                }
            });
        }

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initCheckoutHandler);
        } else {
            initCheckoutHandler();
        }
    </script>
    <!-- Custom Order Success Modal (Matching Design Reference) -->
    <div id="success-modal" class="fixed inset-0 z-[120] hidden items-center justify-center p-4">
        <!-- Backdrop -->
        <div id="success-modal-backdrop" class="fixed inset-0 bg-black/60 backdrop-blur-sm transition-opacity duration-300"></div>

        <!-- Modal Dialog Card -->
        <div class="relative w-full max-w-sm md:max-w-md bg-white rounded-[32px] p-6 md:p-8 shadow-2xl z-10 text-center transform scale-95 opacity-0 transition-all duration-300 ease-out" id="success-modal-card">
            
            <!-- Top Icon with Aura -->
            <div class="w-20 h-20 rounded-full bg-blue-50 flex items-center justify-center mx-auto mb-6">
                <div class="w-14 h-14 rounded-full bg-blue-600 text-white flex items-center justify-center shadow-lg shadow-blue-500/30">
                    <span class="material-symbols-outlined text-3xl font-bold">check</span>
                </div>
            </div>

            <h3 class="font-bold text-2xl text-gray-900 mb-2 font-headline-md tracking-tight">Pesanan Berhasil!</h3>
            <p class="text-xs text-gray-500 mb-6 leading-relaxed px-2">
                Data pesanan Anda telah tersimpan di sistem. Silakan lanjutkan ke WhatsApp untuk konfirmasi & pembayaran.
            </p>

            <!-- Order Summary Details Card -->
            <div class="bg-gray-50 border border-gray-100 rounded-2xl p-4.5 mb-6 text-left text-xs flex flex-col gap-3">
                <div class="flex justify-between items-center">
                    <span class="text-gray-400 font-medium">Nomor Pesanan</span>
                    <span id="modal-order-id" class="font-bold text-gray-800 tracking-wider">#GLX-88291</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-gray-400 font-medium">Tanggal Pesanan</span>
                    <span id="modal-order-date" class="font-semibold text-gray-700">-</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-gray-400 font-medium">Metode Pembayaran</span>
                    <span id="modal-order-payment" class="font-semibold text-gray-700">-</span>
                </div>
                <div class="border-t border-gray-200/70 pt-2.5 mt-0.5 flex justify-between items-center">
                    <span class="text-gray-600 font-bold">Total Tagihan</span>
                    <span id="modal-order-total" class="font-extrabold text-base text-gray-900">Rp 0</span>
                </div>
            </div>

            <!-- Action Button -->
            <button type="button" id="modal-wa-btn" class="w-full bg-[#090a1a] hover:bg-black text-white font-bold py-4 px-6 rounded-full text-sm transition-all shadow-xl active:scale-95 flex items-center justify-center gap-2">
                <span class="material-symbols-outlined text-lg">chat</span>
                <span>Lanjutkan ke WhatsApp</span>
            </button>
        </div>
    </div>

    <!-- Center Screen Loading Overlay -->
    <div id="checkout-loading-overlay" class="fixed inset-0 z-[150] hidden items-center justify-center bg-black/60 backdrop-blur-md transition-all duration-300">
        <div class="bg-white rounded-[32px] p-8 max-w-xs w-full text-center shadow-2xl flex flex-col items-center justify-center transform scale-100">
            <div class="relative w-16 h-16 mb-4 flex items-center justify-center">
                <div class="w-16 h-16 border-4 border-gray-200 border-t-black rounded-full animate-spin"></div>
                <span class="material-symbols-outlined text-2xl absolute text-black animate-pulse">shopping_bag</span>
            </div>
            <h3 id="loading-overlay-title" class="font-bold text-lg text-gray-900 mb-1 font-headline-md">Memproses Checkout</h3>
            <p id="loading-overlay-desc" class="text-xs text-gray-500 leading-relaxed px-2">Sedang mengunggah & menyinkronkan data pesanan ke sistem...</p>
        </div>
    </div>
</body>

</html>
