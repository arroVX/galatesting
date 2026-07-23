<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>GALAKSI XII - Beranda</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;500;700&amp;family=Libre+Caslon+Text:ital,wght@0,400;0,700;1,400&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <!-- Tailwind Configuration -->
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
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
                }
            }
        }
    </script>
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    @include('components.page-transition')
</head>

<body
    class="bg-background text-on-background font-body-md antialiased selection:bg-primary selection:text-on-primary min-h-screen flex flex-col">
    @include('components.navbar')
    <!-- Main Content Canvas -->
    <main class="w-full flex flex-col items-center flex-grow">

        <!-- Hero Banner Section (Reference Screen 1 Inspired) -->
        <section class="w-full max-w-7xl mx-auto px-6 md:px-16 py-4 md:py-10 fade-in">
            <div
                class="relative w-full rounded-3xl bg-gradient-to-br from-[#1c1c1e] via-[#111113] to-[#0a0a0c] text-white p-6 sm:p-10 md:p-14 overflow-hidden shadow-2xl flex flex-col justify-between min-h-[420px] md:min-h-[500px]">

                <!-- Large Watermark Backdrop Typography (Like "FUN OVA" in Ref) -->
                <div
                    class="absolute inset-0 flex items-center justify-center pointer-events-none select-none overflow-hidden opacity-10">
                    <span
                        class="font-bold text-[85px] sm:text-[140px] md:text-[200px] leading-none tracking-tighter text-white uppercase text-center font-display-lg whitespace-nowrap">
                        GALAKSI
                    </span>
                </div>

                <!-- Top Tag & Sparkle -->
                <div class="relative z-10 flex justify-between items-center mb-10">
                    <div
                        class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/15 px-4 py-1.5 rounded-full">
                        <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                        <span class="text-[11px] sm:text-xs font-bold uppercase tracking-widest text-white/90">GALAKSI
                            XII • SMKN 3 JEPARA</span>
                    </div>
                    <div
                        class="w-9 h-9 rounded-full bg-white/10 backdrop-blur-md flex items-center justify-center text-white/80">
                        <span class="material-symbols-outlined text-[20px]">auto_awesome</span>
                    </div>
                </div>

                <!-- Hero Main Headline -->
                <div class="relative z-10 my-auto text-left max-w-2xl">
                    <h1
                        class="font-headline-md text-3xl sm:text-5xl md:text-6xl font-bold tracking-tight text-white mb-3 leading-tight">
                        Elevate Your Festivity With <span class="italic font-normal font-serif text-white/80">Galaksi
                            XII</span>
                    </h1>
                    <p class="font-body-md text-sm sm:text-base md:text-lg text-white/70 leading-relaxed max-w-lg mb-6">
                        Koleksi official merchandise eksklusif, turnamen liga olahraga, dan selebrasi pentas seni SMKN 3
                        Jepara.
                    </p>
                </div>

                <!-- Signature Capsule Action Bar (Matching Reference Screen 1 Bottom Bar) -->
                <div
                    class="relative z-10 w-full bg-[#2a2a2d]/80 backdrop-blur-xl border border-white/15 rounded-full p-2 flex items-center justify-between shadow-2xl mt-4">
                    <a href="{{ route('merchandise') }}"
                        class="bg-white text-[#111113] hover:bg-white/90 font-bold px-6 py-3 rounded-full text-xs sm:text-sm transition-all shadow flex items-center gap-2 active:scale-95">
                        Beli Merch
                        <span class="material-symbols-outlined text-[16px]">local_mall</span>
                    </a>

                    <div class="flex items-center gap-2 pr-3">
                        <a href="{{ route('kompetisi') }}"
                            class="hidden sm:inline-flex items-center text-xs text-white/80 hover:text-white font-medium mr-2">
                            Lihat Hasil Liga &rarr;
                        </a>
                        <div class="flex items-center text-white/40 tracking-[0.2em] font-bold text-sm select-none">
                            &gt;&gt;&gt;
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <a href="{{ route('cart.index') }}"
            class="bg-surface-container-lowest hover:bg-surface-container-low border border-outline-variant/30 rounded-2xl p-4 flex items-center gap-3.5 shadow-sm hover:shadow-md transition-all group">
            <div
                class="w-10 h-10 rounded-xl bg-primary/5 text-primary flex items-center justify-center shrink-0 group-hover:bg-primary group-hover:text-on-primary transition-colors">
                <span class="material-symbols-outlined text-[22px]">shopping_bag</span>
            </div>
            <div>
                <h4 class="font-bold text-sm text-primary leading-snug">Keranjang</h4>
                <p class="text-[11px] text-on-surface-variant opacity-75">Item Pilihan Anda</p>
            </div>
        </a>
        </div>
        </section>

        <!-- Live Countdown Section -->
        <section class="w-full max-w-7xl mx-auto px-6 md:px-16 py-6 md:py-10 reveal">
            <div
                class="bg-primary text-on-primary rounded-3xl p-6 sm:p-8 md:p-12 shadow-xl flex flex-col lg:flex-row justify-between items-center gap-8 relative overflow-hidden">
                <!-- Background Glow Decor -->
                <div class="absolute -top-24 -right-24 w-72 h-72 bg-white/10 rounded-full blur-3xl pointer-events-none">
                </div>

                <div class="text-center lg:text-left z-10">
                    <div
                        class="inline-flex items-center gap-2 bg-white/10 px-3.5 py-1 rounded-full mb-3 text-[11px] sm:text-xs tracking-wider uppercase font-semibold">
                        <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                        Menuju Pembukaan Galaksi XII
                    </div>
                    <h2 class="font-headline-md text-2xl sm:text-3xl md:text-4xl font-bold mb-2">Pentas Seni & Opening
                        Ceremony</h2>
                    <p class="font-body-md text-white/80 text-sm sm:text-base max-w-md">Persiapkan dirimu untuk
                        selebrasi pentas musik, tarian, liga olahraga, dan bazar siswa terbesar SMKN 3 Jepara!</p>
                </div>

                <!-- Countdown Timer Grid -->
                <div class="grid grid-cols-4 gap-2 sm:gap-3 md:gap-6 z-10 w-full lg:w-auto">
                    <div
                        class="bg-white/10 backdrop-blur-md rounded-2xl p-3 sm:p-4 md:p-6 text-center border border-white/10">
                        <span class="font-display-lg text-2xl sm:text-4xl md:text-5xl font-bold block"
                            id="cd-days">14</span>
                        <span
                            class="text-[9px] sm:text-[11px] md:text-xs uppercase tracking-widest text-white/70 font-semibold">Hari</span>
                    </div>
                    <div
                        class="bg-white/10 backdrop-blur-md rounded-2xl p-3 sm:p-4 md:p-6 text-center border border-white/10">
                        <span class="font-display-lg text-2xl sm:text-4xl md:text-5xl font-bold block"
                            id="cd-hours">08</span>
                        <span
                            class="text-[9px] sm:text-[11px] md:text-xs uppercase tracking-widest text-white/70 font-semibold">Jam</span>
                    </div>
                    <div
                        class="bg-white/10 backdrop-blur-md rounded-2xl p-3 sm:p-4 md:p-6 text-center border border-white/10">
                        <span class="font-display-lg text-2xl sm:text-4xl md:text-5xl font-bold block"
                            id="cd-minutes">45</span>
                        <span
                            class="text-[9px] sm:text-[11px] md:text-xs uppercase tracking-widest text-white/70 font-semibold">Menit</span>
                    </div>
                    <div
                        class="bg-white/10 backdrop-blur-md rounded-2xl p-3 sm:p-4 md:p-6 text-center border border-white/10">
                        <span class="font-display-lg text-2xl sm:text-4xl md:text-5xl font-bold block text-emerald-400"
                            id="cd-seconds">12</span>
                        <span
                            class="text-[9px] sm:text-[11px] md:text-xs uppercase tracking-widest text-white/70 font-semibold">Detik</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Event Highlights Section -->
        <section class="w-full bg-surface-container-low py-16 md:py-20 reveal">
            <div class="max-w-7xl mx-auto px-6 md:px-16">
                <div class="text-center mb-12 md:mb-14">
                    <h2 class="font-headline-md text-3xl md:text-4xl text-primary mb-3">Rangkaian Acara Galaksi XII</h2>
                    <p class="font-body-md text-on-surface-variant max-w-xl mx-auto opacity-85">Kemeriahan HUT & Dies
                        Natalis SMKN 3 Jepara yang menyatukan bakat seni, olahraga, dan kewirausahaan siswa.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">
                    <!-- Card 1 -->
                    <div
                        class="bg-surface-container-lowest rounded-3xl p-6 sm:p-8 border border-outline-variant/30 shadow-sm hover:shadow-lg transition-all flex flex-col items-center text-center group cursor-default">
                        <div
                            class="w-16 h-16 rounded-2xl bg-primary/5 text-primary flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-primary group-hover:text-on-primary transition-all">
                            <span class="material-symbols-outlined text-3xl">sports_basketball</span>
                        </div>
                        <h3 class="font-headline-md text-2xl text-primary mb-3 font-bold">Liga Olahraga</h3>
                        <p class="font-body-md text-on-surface-variant opacity-85 leading-relaxed">Saksikan persaingan
                            ketat dan gengsi antar kelas & sekolah di cabang turnamen Basket, Futsal, dan Voli.</p>
                    </div>
                    <!-- Card 2 -->
                    <div
                        class="bg-surface-container-lowest rounded-3xl p-6 sm:p-8 border border-outline-variant/30 shadow-sm hover:shadow-lg transition-all flex flex-col items-center text-center group cursor-default">
                        <div
                            class="w-16 h-16 rounded-2xl bg-primary/5 text-primary flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-primary group-hover:text-on-primary transition-all">
                            <span class="material-symbols-outlined text-3xl">music_note</span>
                        </div>
                        <h3 class="font-headline-md text-2xl text-primary mb-3 font-bold">Pentas Seni & Tari</h3>
                        <p class="font-body-md text-on-surface-variant opacity-85 leading-relaxed">Ajang ekspresi
                            kreativitas panggung: pertunjukan band musik siswa, tari tradisional/modern, serta
                            penampilan spesial.</p>
                    </div>
                    <!-- Card 3 -->
                    <div
                        class="bg-surface-container-lowest rounded-3xl p-6 sm:p-8 border border-outline-variant/30 shadow-sm hover:shadow-lg transition-all flex flex-col items-center text-center group cursor-default">
                        <div
                            class="w-16 h-16 rounded-2xl bg-primary/5 text-primary flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-primary group-hover:text-on-primary transition-all">
                            <span class="material-symbols-outlined text-3xl">storefront</span>
                        </div>
                        <h3 class="font-headline-md text-2xl text-primary mb-3 font-bold">Bazar & Merchandise</h3>
                        <p class="font-body-md text-on-surface-variant opacity-85 leading-relaxed">Bazar kuliner kreasi
                            siswa & stan produk UMKM, serta merchandise official edisi terbatas Gala Aksi Siswa.</p>
                    </div>
                </div>
            </div>
        </section>n>

        <script>
            // Countdown Timer Script
            const targetDate = new Date().getTime() + (14 * 24 * 60 * 60 * 1000) + (8 * 60 * 60 * 1000);

            function runCountdown() {
                const now = new Date().getTime();
                const diff = targetDate - now;

                if (diff > 0) {
                    const days = Math.floor(diff / (1000 * 60 * 60 * 24));
                    const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
                    const seconds = Math.floor((diff % (1000 * 60)) / 1000);

                    document.getElementById('cd-days').textContent = String(days).padStart(2, '0');
                    document.getElementById('cd-hours').textContent = String(hours).padStart(2, '0');
                    document.getElementById('cd-minutes').textContent = String(minutes).padStart(2, '0');
                    document.getElementById('cd-seconds').textContent = String(seconds).padStart(2, '0');
                }
            }
            setInterval(runCountdown, 1000);
            runCountdown();
        </script>

    </main>

    <!-- Footer -->
    @include('components.footer')
</body>

</html>
