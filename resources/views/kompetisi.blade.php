<!-- Kompetisi - Galaksi XII -->
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>GALAKSI XII - {{ $sportName }} Competition</title>
<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect">
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;500;700&amp;family=Libre+Caslon+Text:ital,wght@0,400;0,700;1,400&amp;display=swap" rel="stylesheet">
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
                      "margin-desktop": "64px",
                      "xl": "80px",
                      "gutter": "24px",
                      "md": "24px",
                      "lg": "48px",
                      "margin-mobile": "16px",
                      "xs": "4px",
                      "base": "8px"
              },
              "fontFamily": { "sans": ["DM Sans", "sans-serif"], "serif": ["Libre Caslon Text", "serif"], "headline-lg-mobile": ["Libre Caslon Text"], "headline-md": ["Libre Caslon Text"], "label-md": ["DM Sans"], "display-lg": ["Libre Caslon Text"], "body-md": ["DM Sans"], "body-lg": ["DM Sans"], "label-sm": ["DM Sans"], "headline-lg": ["Libre Caslon Text"] },
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
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@include('components.page-transition')
<style>
    .bracket-scroll::-webkit-scrollbar { height: 6px; }
    .bracket-scroll::-webkit-scrollbar-track { background: #f5f3f3; border-radius: 4px; }
    .bracket-scroll::-webkit-scrollbar-thumb { background: #c4c7c7; border-radius: 4px; }
    .bracket-scroll::-webkit-scrollbar-thumb:hover { background: #747878; }
    .bracket-line-vertical { position: absolute; right: -24px; width: 1px; background-color: #c4c7c7; }
    .bracket-line-horizontal { position: absolute; right: -24px; top: 50%; width: 24px; height: 1px; background-color: #c4c7c7; }
</style>
</head>
<body class="bg-background text-on-background font-body-md antialiased selection:bg-primary selection:text-on-primary min-h-screen flex flex-col overflow-x-hidden">
@include('components.navbar')

@php
    $sportEmoji = '🏀';
    if ($sport == 'futsal') {
        $sportEmoji = '⚽';
    } elseif ($sport == 'voli') {
        $sportEmoji = '🏐';
    }
@endphp

<!-- Main Content Canvas -->
<main class="w-full max-w-7xl mx-auto px-6 md:px-16 py-6 md:py-10 flex-grow relative">

<!-- Page Header (Nature Green Reference Inspired) -->
<section class="mb-10 fade-in relative" style="animation-delay: 0.1s;">
    
    <!-- Hero Green Card Banner -->
    <div class="relative w-full rounded-3xl bg-gradient-to-br from-[#1b3419] via-[#244222] to-[#122411] text-white p-6 sm:p-10 shadow-2xl overflow-hidden mb-8">
        
        <!-- Large Watermark Typography in Background -->
        <div class="absolute inset-0 flex items-center justify-center pointer-events-none select-none opacity-10 overflow-hidden">
            <span class="font-bold text-[80px] sm:text-[130px] md:text-[180px] leading-none tracking-tighter text-white uppercase text-center font-display-lg whitespace-nowrap">
                LEAGUE
            </span>
        </div>

        <!-- Header Content -->
        <div class="relative z-10 flex flex-col md:flex-row justify-between items-start md:items-end gap-6">
            <div class="max-w-2xl">
                <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/15 px-4 py-1.5 rounded-full mb-4">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                    <span class="text-[11px] sm:text-xs font-bold uppercase tracking-widest text-white/90">LIGA OLAHRAGA • GALAKSI XII</span>
                </div>
                <h1 class="font-headline-md text-3xl sm:text-5xl md:text-6xl font-bold tracking-tight text-white mb-3 leading-tight flex items-center gap-3">
                    <span>Liga {{ $sportName }}</span>
                    <span class="inline-block text-3xl sm:text-5xl animate-bounce filter drop-shadow">{{ $sportEmoji }}</span>
                </h1>
                <p class="font-body-md text-sm sm:text-base text-white/75 leading-relaxed">
                    Turnamen cabang {{ $sportName }} dalam festival Gala Aksi Siswa peringatan HUT SMKN 3 Jepara. Saksikan & dukung tim favoritmu hingga babak final!
                </p>
            </div>

            <!-- Sport Selector Pill Chips (Ref Screen 1 Top Chips) -->
            <div class="flex flex-wrap gap-2.5 z-10 w-full md:w-auto">
                <a href="{{ route('kompetisi', 'basket') }}" class="px-5 py-2.5 rounded-full text-xs font-bold transition-all shadow-md flex items-center gap-2 {{ $sport == 'basket' ? 'bg-white text-[#1b3419]' : 'bg-white/15 text-white hover:bg-white/25 backdrop-blur-md border border-white/15' }}">
                    <span>Basketball</span>
                    <span>🏀</span>
                </a>
                <a href="{{ route('kompetisi', 'futsal') }}" class="px-5 py-2.5 rounded-full text-xs font-bold transition-all shadow-md flex items-center gap-2 {{ $sport == 'futsal' ? 'bg-white text-[#1b3419]' : 'bg-white/15 text-white hover:bg-white/25 backdrop-blur-md border border-white/15' }}">
                    <span>Futsal</span>
                    <span>⚽</span>
                </a>
                <a href="{{ route('kompetisi', 'voli') }}" class="px-5 py-2.5 rounded-full text-xs font-bold transition-all shadow-md flex items-center gap-2 {{ $sport == 'voli' ? 'bg-white text-[#1b3419]' : 'bg-white/15 text-white hover:bg-white/25 backdrop-blur-md border border-white/15' }}">
                    <span>Volleyball</span>
                    <span>🏐</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Navigation Tabs (Pill Toggle Style) -->
<div class="flex gap-2 mb-6 overflow-x-auto scrollbar-hide fade-in relative z-10" id="tab-nav-buttons">
    <button data-tab="bracket" class="tab-nav-btn px-6 py-3 rounded-full text-xs font-bold bg-[#1b3419] text-white shadow-md focus:outline-none whitespace-nowrap transition-all">
        🏆 Bagan Pertandingan (Bracket)
    </button>
    <button data-tab="rules" class="tab-nav-btn px-6 py-3 rounded-full text-xs font-medium bg-surface-container-low text-on-surface-variant border border-outline-variant/30 hover:bg-surface-container focus:outline-none whitespace-nowrap transition-all">
        📜 Info & Peraturan
    </button>
    <button data-tab="schedule" class="tab-nav-btn px-6 py-3 rounded-full text-xs font-medium bg-surface-container-low text-on-surface-variant border border-outline-variant/30 hover:bg-surface-container focus:outline-none whitespace-nowrap transition-all">
        📅 Jadwal Harian
    </button>
</div>

<!-- Tab Panel 1: Tournament Bracket Section (Floating White Card Ref Screen 1) -->
<section id="tab-panel-bracket" class="tab-panel block bg-surface-container-lowest border border-outline-variant/30 rounded-3xl p-6 md:p-10 shadow-xl fade-in relative overflow-hidden">
<!-- Atmospheric Background Texture & Floating Ambient Balls -->
<div class="absolute inset-0 pointer-events-none opacity-5 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-primary via-transparent to-transparent"></div>
<div class="absolute -top-4 left-6 text-6xl opacity-15 animate-ball-float select-none pointer-events-none" style="animation-duration: 6s;">
    {{ $sportEmoji }}
</div>
<div class="absolute bottom-6 right-8 text-7xl opacity-15 animate-ball-float select-none pointer-events-none" style="animation-duration: 8s; animation-delay: 2s;">
    {{ $sportEmoji }}
</div>

<div class="flex justify-between items-center mb-xl relative z-10">
<h2 class="font-headline-md text-headline-md text-primary flex items-center gap-2">
    <span>Playoffs Phase - {{ $sportName }}</span>
    <span class="text-2xl animate-pulse">{{ $sportEmoji }}</span>
</h2>
</div>

<!-- Scrollable Bracket Area -->
<div class="overflow-x-auto bracket-scroll pb-lg relative z-10">
<div class="flex flex-nowrap min-w-[800px] md:min-w-[1000px] gap-xl items-center relative">
<!-- Round 1 (Quarter Finals) -->
<div class="flex flex-col justify-around gap-lg w-64 relative z-10">
<h3 class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-widest text-center mb-md border-b border-outline-variant pb-2">Quarter Finals</h3>
<!-- Match 1 -->
<div class="bg-surface rounded-lg border border-outline-variant p-4 relative group hover:border-primary transition-colors cursor-pointer shadow-sm hover:shadow-md">
<div class="flex justify-between items-center mb-2">
<span class="font-label-sm text-label-sm text-on-surface-variant">M1 • Oct 15</span>
<span class="font-label-sm text-label-sm bg-surface-container-low px-2 py-0.5 rounded text-secondary">Final</span>
</div>
<div class="flex justify-between items-center py-1">
<div class="flex items-center gap-2">
<div class="w-6 h-6 rounded-full bg-primary flex items-center justify-center text-on-primary font-label-sm text-[10px]">TG</div>
<span class="font-body-md text-body-md font-medium text-primary">Tim Garuda</span>
</div>
<span class="font-body-md text-body-md font-bold">78</span>
</div>
<div class="h-px w-full bg-outline-variant my-1"></div>
<div class="flex justify-between items-center py-1 opacity-60">
<div class="flex items-center gap-2">
<div class="w-6 h-6 rounded-full bg-surface-container-high flex items-center justify-center text-on-surface-variant font-label-sm text-[10px]">TE</div>
<span class="font-body-md text-body-md">Tim Elang</span>
</div>
<span class="font-body-md text-body-md">64</span>
</div>
<div class="bracket-line-horizontal"></div>
</div>
<!-- Match 2 -->
<div class="bg-surface rounded-lg border border-outline-variant p-4 relative group hover:border-primary transition-colors cursor-pointer shadow-sm hover:shadow-md mt-lg">
<div class="flex justify-between items-center mb-2">
<span class="font-label-sm text-label-sm text-on-surface-variant">M2 • Oct 15</span>
<span class="font-label-sm text-label-sm bg-surface-container-low px-2 py-0.5 rounded text-secondary">Final</span>
</div>
<div class="flex justify-between items-center py-1 opacity-60">
<div class="flex items-center gap-2">
<div class="w-6 h-6 rounded-full bg-surface-container-high flex items-center justify-center text-on-surface-variant font-label-sm text-[10px]">TM</div>
<span class="font-body-md text-body-md">Tim Macan</span>
</div>
<span class="font-body-md text-body-md">52</span>
</div>
<div class="h-px w-full bg-outline-variant my-1"></div>
<div class="flex justify-between items-center py-1">
<div class="flex items-center gap-2">
<div class="w-6 h-6 rounded-full bg-primary flex items-center justify-center text-on-primary font-label-sm text-[10px]">TS</div>
<span class="font-body-md text-body-md font-medium text-primary">Tim Singa</span>
</div>
<span class="font-body-md text-body-md font-bold">58</span>
</div>
<div class="bracket-line-horizontal"></div>
<div class="bracket-line-vertical" style="top: -120px; height: 180px;"></div>
</div>
</div>
<!-- Round 2 (Semi Finals) -->
<div class="flex flex-col justify-around gap-lg w-64 relative z-10">
<h3 class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-widest text-center mb-md border-b border-outline-variant pb-2">Semi Finals</h3>
<div class="bg-surface rounded-lg border border-primary p-4 relative group shadow-sm ring-1 ring-primary/10">
<div class="flex justify-between items-center mb-2">
<span class="font-label-sm text-label-sm text-on-surface-variant">M3 • Oct 18</span>
<span class="font-label-sm text-label-sm bg-primary/10 text-primary font-bold px-2 py-0.5 rounded">Live</span>
</div>
<div class="flex justify-between items-center py-1">
<div class="flex items-center gap-2">
<div class="w-6 h-6 rounded-full bg-primary flex items-center justify-center text-on-primary font-label-sm text-[10px]">TG</div>
<span class="font-body-md text-body-md font-medium text-primary">Tim Garuda</span>
</div>
<span class="font-body-md text-body-md font-bold">72</span>
</div>
<div class="h-px w-full bg-outline-variant my-1"></div>
<div class="flex justify-between items-center py-1 opacity-60">
<div class="flex items-center gap-2">
<div class="w-6 h-6 rounded-full bg-surface-container-high flex items-center justify-center text-on-surface-variant font-label-sm text-[10px]">TS</div>
<span class="font-body-md text-body-md">Tim Singa</span>
</div>
<span class="font-body-md text-body-md">68</span>
</div>
<div class="bracket-line-horizontal"></div>
</div>
</div>
<!-- Round 3 (Finals) -->
<div class="flex flex-col justify-center gap-lg w-64 relative z-10">
<h3 class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-widest text-center mb-md border-b border-outline-variant pb-2">Finals</h3>
<div class="bg-surface rounded-lg border-2 border-primary p-5 relative group shadow-lg">
<div class="flex justify-between items-center mb-2">
<span class="font-label-sm text-label-sm text-on-surface-variant">Grand Final • Oct 20</span>
<span class="font-label-sm text-label-sm bg-primary text-on-primary px-2 py-0.5 rounded font-bold">Upcoming</span>
</div>
<div class="flex justify-between items-center py-2">
<div class="flex items-center gap-2">
<div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center text-on-primary font-label-sm text-xs font-bold">TG</div>
<span class="font-body-lg text-body-lg font-bold text-primary">Tim Garuda</span>
</div>
<span class="font-body-lg text-body-lg font-bold text-primary">-</span>
</div>
<div class="h-px w-full bg-outline-variant my-2"></div>
<div class="flex justify-between items-center py-2">
<div class="flex items-center gap-2">
<div class="w-8 h-8 rounded-full bg-surface-container-high flex items-center justify-center text-on-surface-variant font-label-sm text-xs font-bold">TBD</div>
<span class="font-body-lg text-body-lg text-on-surface-variant">Winner M4</span>
</div>
<span class="font-body-lg text-body-lg text-on-surface-variant">-</span>
</div>
</div>
</div>
</div>
<!-- Signature Dark Green Bottom Sheet (Nature Green Ref Inspired) -->
<div class="mt-8 bg-gradient-to-r from-[#1b3419] via-[#244222] to-[#122411] text-white rounded-3xl p-5 sm:p-6 flex flex-col sm:flex-row items-center justify-between gap-4 shadow-xl border border-white/10 relative z-10">
    <div class="flex items-center gap-3">
        <div class="w-10 h-10 rounded-2xl bg-white/15 flex items-center justify-center text-white shrink-0">
            <span class="material-symbols-outlined text-[22px]">emoji_events</span>
        </div>
        <div>
            <h4 class="font-bold text-sm text-white">Grand Final Liga {{ $sportName }}</h4>
            <p class="text-xs text-white/70">Saksikan pertandingan puncaknya secara live di SMKN 3 Jepara</p>
        </div>
    </div>
    
    <a href="{{ route('merchandise') }}" class="w-full sm:w-auto bg-white text-[#1b3419] hover:bg-white/90 font-bold px-6 py-3 rounded-full text-xs transition-all shadow flex items-center justify-center gap-2 active:scale-95">
        <span>Beli Merchandise Official</span>
        <div class="flex items-center text-[#1b3419]/40 tracking-[0.2em] font-bold text-xs select-none">
            &gt;&gt;&gt;
        </div>
    </a>
</div>
</section>

<!-- Tab Panel 2: Info & Rules Section -->
<section id="tab-panel-rules" class="tab-panel hidden bg-surface-container-lowest border border-outline-variant rounded-xl p-md md:p-xl shadow-sm fade-in relative overflow-hidden">
    <div class="flex items-center gap-3 mb-6 pb-4 border-b border-outline-variant">
        <span class="text-3xl">📋</span>
        <div>
            <h2 class="font-headline-md text-2xl text-primary font-bold">Info &amp; Peraturan Pertandingan {{ $sportName }}</h2>
            <p class="font-body-md text-on-surface-variant text-sm">Ketentuan umum dan regulasi teknis untuk seluruh peserta Liga {{ $sportName }} Galaksi XII SMKN 3 Jepara.</p>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Card 1: Ketentuan Umum -->
        <div class="bg-surface rounded-2xl p-6 border border-outline-variant shadow-sm">
            <div class="flex items-center gap-3 mb-4 text-primary">
                <span class="material-symbols-outlined text-2xl">gavel</span>
                <h3 class="font-headline-md text-xl font-bold">Ketentuan Umum Peserta</h3>
            </div>
            <ul class="space-y-3 font-body-md text-sm text-on-surface-variant">
                <li class="flex items-start gap-2">
                    <span class="material-symbols-outlined text-emerald-500 text-lg shrink-0">check_circle</span>
                    <span>Setiap tim wajib mendaftarkan susunan pemain resmi (pemain utama &amp; cadangan) dan 1 official pelatih.</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="material-symbols-outlined text-emerald-500 text-lg shrink-0">check_circle</span>
                    <span>Seluruh pemain merupakan siswa aktif berstatus pelajar dan wajib membawa Kartu Tanda Pelajar (KTP/KTS) saat registrasi ulang.</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="material-symbols-outlined text-emerald-500 text-lg shrink-0">check_circle</span>
                    <span>Toleransi keterlambatan kehadiran di lapangan maksimal 10 menit dari jadwal tanding. Lebih dari itu dinyatakan WO.</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="material-symbols-outlined text-emerald-500 text-lg shrink-0">check_circle</span>
                    <span>Semua peserta wajib menjunjung tinggi nilai sportivitas dan mematuhi instruksi wasit pertandingan.</span>
                </li>
            </ul>
        </div>

        <!-- Card 2: Regulasi Teknis Olahraga -->
        <div class="bg-surface rounded-2xl p-6 border border-outline-variant shadow-sm">
            <div class="flex items-center gap-3 mb-4 text-primary">
                <span class="material-symbols-outlined text-2xl">timer</span>
                <h3 class="font-headline-md text-xl font-bold">Regulasi Teknis {{ $sportName }}</h3>
            </div>
            <ul class="space-y-3 font-body-md text-sm text-on-surface-variant">
                @if($sport == 'basket')
                <li class="flex items-start gap-2">
                    <span class="material-symbols-outlined text-amber-500 text-lg shrink-0">sports_basketball</span>
                    <span>Durasi Pertandingan: 4 x 10 Menit (Waktu bersih 2 menit terakhir di Kuarter 4).</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="material-symbols-outlined text-amber-500 text-lg shrink-0">sports_basketball</span>
                    <span>Aturan Foul &amp; Timeout: 5 x Personal Foul disqualification, 2 x Timeout per babak (1 menit).</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="material-symbols-outlined text-amber-500 text-lg shrink-0">sports_basketball</span>
                    <span>Pakaian: Wajib mengenakan jersey bernomor punggung seragam &amp; sepatu basket non-marking.</span>
                </li>
                @elseif($sport == 'futsal')
                <li class="flex items-start gap-2">
                    <span class="material-symbols-outlined text-emerald-500 text-lg shrink-0">sports_soccer</span>
                    <span>Durasi Pertandingan: 2 x 15 Menit kotor dengan istirahat 5 menit antar babak.</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="material-symbols-outlined text-emerald-500 text-lg shrink-0">sports_soccer</span>
                    <span>Aturan Fouls: Akumulasi 5 x Foul dalam 1 babak menghasilkan penalti titik kedua (10 meter).</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="material-symbols-outlined text-emerald-500 text-lg shrink-0">sports_soccer</span>
                    <span>Perlengkapan: Wajib mengenakan pelindung tulang kering (shin guard) &amp; sepatu futsal sol karet flat.</span>
                </li>
                @else
                <li class="flex items-start gap-2">
                    <span class="material-symbols-outlined text-blue-500 text-lg shrink-0">sports_volleyball</span>
                    <span>Sistem Skor: Rally Point 25 Poin (Best of 3 Sets / 2 set kemenangan).</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="material-symbols-outlined text-blue-500 text-lg shrink-0">sports_volleyball</span>
                    <span>Rotasi &amp; Substitution: Maksimal 6 x pergantian pemain per set, posisi Libero wajib mengenakan jersey berbeda.</span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="material-symbols-outlined text-blue-500 text-lg shrink-0">sports_volleyball</span>
                    <span>Tinggi Net: Standar PBVSI (Putra 2.43m / Putri 2.24m).</span>
                </li>
                @endif
            </ul>
        </div>
    </div>
</section>

<!-- Tab Panel 3: Daily Schedule Section -->
<section id="tab-panel-schedule" class="tab-panel hidden bg-surface-container-lowest border border-outline-variant rounded-xl p-md md:p-xl shadow-sm fade-in relative overflow-hidden">
    <div class="flex items-center gap-3 mb-6 pb-4 border-b border-outline-variant">
        <span class="text-3xl">📅</span>
        <div>
            <h2 class="font-headline-md text-2xl text-primary font-bold">Jadwal Harian (Daily Schedule) Liga {{ $sportName }}</h2>
            <p class="font-body-md text-on-surface-variant text-sm">Jadwal lengkap jam tanding &amp; venue babak penyisihan hingga final di SMKN 3 Jepara.</p>
        </div>
    </div>

    <!-- Match Schedule List -->
    <div class="space-y-4">
        <!-- Match 1 -->
        <div class="bg-surface rounded-2xl p-5 border border-outline-variant flex flex-col md:flex-row justify-between items-center gap-4 hover:border-primary transition-colors">
            <div class="flex items-center gap-4 w-full md:w-auto">
                <div class="bg-surface-container-high px-4 py-2 rounded-xl text-center shrink-0">
                    <span class="block text-xs text-on-surface-variant font-bold">15 OKT</span>
                    <span class="block text-sm font-bold text-primary">08:30 WIB</span>
                </div>
                <div>
                    <span class="text-xs font-semibold text-secondary uppercase tracking-wider">Quarter Final • Match 1</span>
                    <h4 class="font-headline-md text-lg font-bold text-primary">Tim Garuda vs Tim Elang</h4>
                    <span class="text-xs text-on-surface-variant">Lapangan Utama SMKN 3 Jepara</span>
                </div>
            </div>
            <div class="flex items-center gap-3 w-full md:w-auto justify-end">
                <span class="px-3.5 py-1.5 bg-emerald-100 text-emerald-700 text-xs font-bold rounded-full">Selesai (78 - 64)</span>
            </div>
        </div>

        <!-- Match 2 -->
        <div class="bg-surface rounded-2xl p-5 border border-outline-variant flex flex-col md:flex-row justify-between items-center gap-4 hover:border-primary transition-colors">
            <div class="flex items-center gap-4 w-full md:w-auto">
                <div class="bg-surface-container-high px-4 py-2 rounded-xl text-center shrink-0">
                    <span class="block text-xs text-on-surface-variant font-bold">15 OKT</span>
                    <span class="block text-sm font-bold text-primary">10:45 WIB</span>
                </div>
                <div>
                    <span class="text-xs font-semibold text-secondary uppercase tracking-wider">Quarter Final • Match 2</span>
                    <h4 class="font-headline-md text-lg font-bold text-primary">Tim Macan vs Tim Singa</h4>
                    <span class="text-xs text-on-surface-variant">Lapangan Utama SMKN 3 Jepara</span>
                </div>
            </div>
            <div class="flex items-center gap-3 w-full md:w-auto justify-end">
                <span class="px-3.5 py-1.5 bg-emerald-100 text-emerald-700 text-xs font-bold rounded-full">Selesai (52 - 58)</span>
            </div>
        </div>

        <!-- Match 3 -->
        <div class="bg-surface rounded-2xl p-5 border-2 border-primary/30 flex flex-col md:flex-row justify-between items-center gap-4 hover:border-primary transition-colors">
            <div class="flex items-center gap-4 w-full md:w-auto">
                <div class="bg-primary text-on-primary px-4 py-2 rounded-xl text-center shrink-0">
                    <span class="block text-xs font-bold opacity-80">18 OKT</span>
                    <span class="block text-sm font-bold">13:30 WIB</span>
                </div>
                <div>
                    <span class="text-xs font-semibold text-primary uppercase tracking-wider">Semi Final • Live Today</span>
                    <h4 class="font-headline-md text-lg font-bold text-primary">Tim Garuda vs Tim Singa</h4>
                    <span class="text-xs text-on-surface-variant">Gor Olahraga SMKN 3 Jepara</span>
                </div>
            </div>
            <div class="flex items-center gap-3 w-full md:w-auto justify-end">
                <span class="px-3.5 py-1.5 bg-primary text-on-primary text-xs font-bold rounded-full animate-pulse">Sedang Berlangsung (Live)</span>
            </div>
        </div>

        <!-- Match 4 -->
        <div class="bg-surface rounded-2xl p-5 border border-outline-variant flex flex-col md:flex-row justify-between items-center gap-4 hover:border-primary transition-colors">
            <div class="flex items-center gap-4 w-full md:w-auto">
                <div class="bg-surface-container-high px-4 py-2 rounded-xl text-center shrink-0">
                    <span class="block text-xs text-on-surface-variant font-bold">20 OKT</span>
                    <span class="block text-sm font-bold text-primary">15:00 WIB</span>
                </div>
                <div>
                    <span class="text-xs font-semibold text-secondary uppercase tracking-wider">Grand Final • Championship</span>
                    <h4 class="font-headline-md text-lg font-bold text-primary">Pemenang M3 vs Winner M4</h4>
                    <span class="text-xs text-on-surface-variant">Gor Olahraga SMKN 3 Jepara</span>
                </div>
            </div>
            <div class="flex items-center gap-3 w-full md:w-auto justify-end">
                <span class="px-3.5 py-1.5 bg-surface-container-high text-secondary text-xs font-bold rounded-full">Mendatang (Upcoming)</span>
            </div>
        </div>
    </div>
</section>

<!-- League Documentation & Highlights Section (Reference Inspired) -->
<section class="mt-12 mb-8 fade-in">
    <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8 text-left">
        <div>
            <div class="inline-flex items-center gap-2 bg-[#1b3419]/10 text-[#1b3419] px-3.5 py-1 rounded-full text-xs font-bold uppercase tracking-wider mb-2">
                <span class="material-symbols-outlined text-[16px]">photo_camera</span>
                Dokumentasi & Galeri Liga
            </div>
            <h2 class="text-2xl sm:text-4xl font-bold font-headline-md text-primary leading-tight">
                Momen Terbaik Pertandingan
            </h2>
            <p class="text-xs sm:text-sm text-on-surface-variant max-w-xl mt-1 opacity-80">
                Koleksi foto aksi lapangan, selebrasi tim juara, dan semangat para supporter di Liga Olahraga GALAKSI XII.
            </p>
        </div>

        <div class="flex items-center gap-2 overflow-x-auto scrollbar-hide shrink-0">
            <span class="text-xs font-bold text-[#1b3419] bg-[#1b3419]/10 px-3.5 py-1.5 rounded-full">Koleksi Terupdate</span>
        </div>
    </div>

    <!-- Documentation Cards Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        
        <!-- Card 1: Basketball Final -->
        <div class="bg-surface-container-lowest rounded-3xl p-3 border border-outline-variant/30 shadow-sm hover:shadow-xl transition-all duration-300 group flex flex-col">
            <div class="relative aspect-[16/10] w-full rounded-2xl overflow-hidden bg-slate-900 mb-3">
                <img src="https://images.unsplash.com/photo-1546519638-68e109498ffc?auto=format&fit=crop&w=800&q=80" alt="Dokumentasi Basket" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent"></div>
                <span class="absolute top-3 left-3 bg-amber-500 text-black text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider shadow">
                    🏀 Basket Final
                </span>
                <span class="absolute bottom-3 right-3 text-white/90 text-[11px] font-medium backdrop-blur-md bg-black/40 px-2.5 py-0.5 rounded-full">
                    15 Okt 2026
                </span>
            </div>
            <div class="px-2 pb-2 flex flex-col flex-grow">
                <h3 class="font-bold text-base text-primary mb-1 group-hover:text-emerald-700 transition-colors">
                    Sengit! Final Turnamen Basketball Putra
                </h3>
                <p class="text-xs text-on-surface-variant opacity-80 line-clamp-2 leading-relaxed mb-4">
                    Pertandingan sengit antara Tim Garuda dan Tim Elang memperebutkan piala bergilir Galaksi XII dengan skor akhir 78-64.
                </p>
                <div class="mt-auto flex items-center justify-between pt-2 border-t border-outline-variant/20 text-[11px] text-on-surface-variant font-medium">
                    <span class="flex items-center gap-1">
                        <span class="material-symbols-outlined text-[14px]">location_on</span>
                        GOR SMKN 3 Jepara
                    </span>
                    <span class="text-emerald-600 font-bold">42 Foto Dok.</span>
                </div>
            </div>
        </div>

        <!-- Card 2: Futsal Derby -->
        <div class="bg-surface-container-lowest rounded-3xl p-3 border border-outline-variant/30 shadow-sm hover:shadow-xl transition-all duration-300 group flex flex-col">
            <div class="relative aspect-[16/10] w-full rounded-2xl overflow-hidden bg-slate-900 mb-3">
                <img src="https://images.unsplash.com/photo-1574629810360-7efbbe195018?auto=format&fit=crop&w=800&q=80" alt="Dokumentasi Futsal" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent"></div>
                <span class="absolute top-3 left-3 bg-emerald-600 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider shadow">
                    ⚽ Futsal Derby
                </span>
                <span class="absolute bottom-3 right-3 text-white/90 text-[11px] font-medium backdrop-blur-md bg-black/40 px-2.5 py-0.5 rounded-full">
                    16 Okt 2026
                </span>
            </div>
            <div class="px-2 pb-2 flex flex-col flex-grow">
                <h3 class="font-bold text-base text-primary mb-1 group-hover:text-emerald-700 transition-colors">
                    Aksi Memukau Babak Perempat Final Futsal
                </h3>
                <p class="text-xs text-on-surface-variant opacity-80 line-clamp-2 leading-relaxed mb-4">
                    Sorak sorai penonton memadati tribun lapangan futsal saat tendangan penalti penentu mengantar Tim Harimau ke semifinal.
                </p>
                <div class="mt-auto flex items-center justify-between pt-2 border-t border-outline-variant/20 text-[11px] text-on-surface-variant font-medium">
                    <span class="flex items-center gap-1">
                        <span class="material-symbols-outlined text-[14px]">location_on</span>
                        Lapangan Futsal Utama
                    </span>
                    <span class="text-emerald-600 font-bold">58 Foto Dok.</span>
                </div>
            </div>
        </div>

        <!-- Card 3: Volleyball Match -->
        <div class="bg-surface-container-lowest rounded-3xl p-3 border border-outline-variant/30 shadow-sm hover:shadow-xl transition-all duration-300 group flex flex-col">
            <div class="relative aspect-[16/10] w-full rounded-2xl overflow-hidden bg-slate-900 mb-3">
                <img src="https://images.unsplash.com/photo-1612872087720-bb876e2e67d1?auto=format&fit=crop&w=800&q=80" alt="Dokumentasi Voli" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent"></div>
                <span class="absolute top-3 left-3 bg-blue-600 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider shadow">
                    🏐 Voli Putri
                </span>
                <span class="absolute bottom-3 right-3 text-white/90 text-[11px] font-medium backdrop-blur-md bg-black/40 px-2.5 py-0.5 rounded-full">
                    17 Okt 2026
                </span>
            </div>
            <div class="px-2 pb-2 flex flex-col flex-grow">
                <h3 class="font-bold text-base text-primary mb-1 group-hover:text-emerald-700 transition-colors">
                    Smash Tajam Di Pertandingan Voli Putri
                </h3>
                <p class="text-xs text-on-surface-variant opacity-80 line-clamp-2 leading-relaxed mb-4">
                    Momen spektakuler spike dan defense apik dari tim voli putri saat mengamankan tempat di babak puncak.
                </p>
                <div class="mt-auto flex items-center justify-between pt-2 border-t border-outline-variant/20 text-[11px] text-on-surface-variant font-medium">
                    <span class="flex items-center gap-1">
                        <span class="material-symbols-outlined text-[14px]">location_on</span>
                        Outdoor Court SMKN 3
                    </span>
                    <span class="text-emerald-600 font-bold">35 Foto Dok.</span>
                </div>
            </div>
        </div>

        <!-- Card 4: Supporter Festivities -->
        <div class="bg-surface-container-lowest rounded-3xl p-3 border border-outline-variant/30 shadow-sm hover:shadow-xl transition-all duration-300 group flex flex-col">
            <div class="relative aspect-[16/10] w-full rounded-2xl overflow-hidden bg-slate-900 mb-3">
                <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?auto=format&fit=crop&w=800&q=80" alt="Dokumentasi Supporter" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent"></div>
                <span class="absolute top-3 left-3 bg-purple-600 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider shadow">
                    🎉 Supporter Award
                </span>
                <span class="absolute bottom-3 right-3 text-white/90 text-[11px] font-medium backdrop-blur-md bg-black/40 px-2.5 py-0.5 rounded-full">
                    17 Okt 2026
                </span>
            </div>
            <div class="px-2 pb-2 flex flex-col flex-grow">
                <h3 class="font-bold text-base text-primary mb-1 group-hover:text-emerald-700 transition-colors">
                    Kreativitas Chants & koreografi Tribun
                </h3>
                <p class="text-xs text-on-surface-variant opacity-80 line-clamp-2 leading-relaxed mb-4">
                    Semangat membara dari ratusan supporter sekolah yang membawa spanduk dan koreografi megah di setiap pertandingan.
                </p>
                <div class="mt-auto flex items-center justify-between pt-2 border-t border-outline-variant/20 text-[11px] text-on-surface-variant font-medium">
                    <span class="flex items-center gap-1">
                        <span class="material-symbols-outlined text-[14px]">location_on</span>
                        Tribun Stadion SMKN 3
                    </span>
                    <span class="text-emerald-600 font-bold">64 Foto Dok.</span>
                </div>
            </div>
        </div>

    </div>
</section>

</main>

<script>
    document.querySelectorAll('.tab-nav-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            document.querySelectorAll('.tab-nav-btn').forEach(b => {
                b.classList.remove('text-primary', 'border-b-2', 'border-primary', 'font-bold');
                b.classList.add('text-on-surface-variant');
            });
            this.classList.remove('text-on-surface-variant');
            this.classList.add('text-primary', 'border-b-2', 'border-primary', 'font-bold');

            const targetTab = this.getAttribute('data-tab');
            document.querySelectorAll('.tab-panel').forEach(panel => {
                panel.classList.add('hidden');
                panel.classList.remove('block');
            });

            const activePanel = document.getElementById('tab-panel-' + targetTab);
            if (activePanel) {
                activePanel.classList.remove('hidden');
                activePanel.classList.add('block');
            }
        });
    });
</script>

<!-- Footer -->
@include('components.footer')
</body>
</html>
