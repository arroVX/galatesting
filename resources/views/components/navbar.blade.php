<!-- Shared TopNavBar Component -->
@include('components.firebase-config')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style>
    /* Stacked Card Notification Design (Website Theme Colors) */
    .swal-stacked-popup {
        background: #FFFFFF !important;
        border: 1px solid #E4E2E2 !important;
        border-radius: 32px !important;
        /* The stacked card effect via box-shadow using website's primary color (Black) */
        box-shadow: 0 12px 0 0 #000000, 0 30px 60px rgba(0,0,0,0.15) !important;
        margin-bottom: 24px !important; /* Space for the shadow */
        padding: 24px 16px !important;
    }
    .swal-stacked-title {
        color: #000000 !important;
        font-family: 'Libre Caslon Text', serif !important;
        font-weight: 700 !important;
        font-size: 24px !important;
        text-align: center !important;
    }
    .swal-stacked-text {
        color: #444748 !important; /* on-surface-variant */
        font-family: 'DM Sans', sans-serif !important;
        font-size: 14px !important;
        text-align: center !important;
        margin-bottom: 20px !important;
    }
</style>
<script>
    window.Swal = Swal.mixin({
        customClass: {
            popup: 'swal-stacked-popup',
            title: 'swal-stacked-title',
            htmlContainer: 'swal-stacked-text',
            confirmButton: 'bg-black hover:bg-neutral-800 text-white font-bold py-3.5 px-8 rounded-full text-sm transition-all active:scale-95 mx-2 shadow-sm',
            cancelButton: 'bg-[#f5f3f3] hover:bg-[#e4e2e2] text-[#1b1c1c] border border-[#c4c7c7] font-bold py-3.5 px-8 rounded-full text-sm transition-all active:scale-95 mx-2 shadow-sm',
            icon: 'border-none'
        },
        buttonsStyling: false,
        backdrop: `rgba(255,255,255,0.7)`,
        confirmButtonColor: undefined
    });
</script>
<div class="w-full flex justify-center sticky top-4 md:top-8 z-50 mb-4 md:mb-8 px-3 sm:px-6 md:px-16">
<header class="w-full max-w-7xl bg-white/95 backdrop-blur-md border border-[#e4e2e2] rounded-full px-3.5 sm:px-5 md:px-6 py-2 md:py-3 shadow-md flex justify-between items-center transition-all duration-300" id="global-header">
<div class="flex items-center gap-2 sm:gap-4">
<!-- Brand -->
<a class="flex items-center shrink-0 hover:scale-105 transition-transform duration-200" href="{{ url('/') }}">
    <img src="{{ asset('images/logo.png') }}" alt="Galaksi XII Logo" class="h-7 sm:h-9 md:h-12 w-auto object-contain">
</a>
<!-- Badge -->
<div class="hidden md:flex items-center gap-2 bg-surface-container border border-outline-variant px-3 py-1.5 rounded-full hover:border-primary/50 transition-colors">
    <div class="w-2 h-2 rounded-full bg-primary animate-pulse"></div>
    <span class="text-[11px] font-bold text-on-surface tracking-widest uppercase" id="nav-clock">JEPARA</span>
</div>
</div>
<!-- Navigation Links (Desktop) -->
<nav class="hidden lg:flex items-center gap-8">
    @if(Request::is('admin*'))
        <a href="{{ route('admin.dashboard') }}" class="font-label-md text-label-md transition-all duration-200 hover:-translate-y-0.5 {{ Request::is('admin') ? 'text-primary border-b-2 border-primary pb-1 font-bold' : 'text-on-surface-variant hover:text-primary' }}">Dashboard Admin</a>
        <a href="{{ route('admin.logout') }}" class="font-label-md text-label-md text-red-500 hover:text-red-700 transition-all duration-200 font-bold">Keluar Admin</a>
    @else
        <a href="{{ url('/') }}" class="font-label-md text-label-md transition-all duration-200 hover:-translate-y-0.5 {{ Request::is('/') ? 'text-primary border-b-2 border-primary pb-1 font-bold' : 'text-on-surface-variant hover:text-primary' }}">Beranda</a>
        <a href="{{ route('kompetisi') }}" class="font-label-md text-label-md transition-all duration-200 hover:-translate-y-0.5 {{ Request::is('kompetisi*') ? 'text-primary border-b-2 border-primary pb-1 font-bold' : 'text-on-surface-variant hover:text-primary' }}">Kompetisi</a>
        <a href="{{ route('merchandise') }}" class="font-label-md text-label-md transition-all duration-200 hover:-translate-y-0.5 {{ Request::is('merchandise*') ? 'text-primary border-b-2 border-primary pb-1 font-bold' : 'text-on-surface-variant hover:text-primary' }}">Merchandise</a>
        <a href="{{ route('checkout') }}" class="font-label-md text-label-md transition-all duration-200 hover:-translate-y-0.5 {{ Request::is('checkout') ? 'text-primary border-b-2 border-primary pb-1 font-bold' : 'text-on-surface-variant hover:text-primary' }}">Cek Pesanan</a>
        @if(session('is_admin'))
        <a href="{{ route('admin.dashboard') }}" class="font-label-md text-label-md transition-all duration-200 hover:-translate-y-0.5 text-red-500 hover:text-red-600 font-bold">Dashboard Admin</a>
        @endif
    @endif
</nav>
<!-- Trailing Actions (Cart & Dedicated Login Button) -->
<div class="flex items-center gap-1.5 sm:gap-2.5">

@if(!Request::is('admin*'))
    <!-- Cart Icon Button -->
    <a href="{{ route('cart.index') }}" aria-label="shopping_bag" class="flex items-center justify-center w-9 h-9 sm:w-10 sm:h-10 rounded-xl bg-surface-container-low border border-outline-variant text-secondary hover:text-primary hover:bg-surface-container-high hover:scale-105 active:scale-95 transition-all relative">
    <span class="material-symbols-outlined text-[18px] sm:text-[20px]" style="font-variation-settings: 'FILL' 0;">shopping_bag</span>
    @if(session('cart') && count(session('cart')) > 0)
    <span class="absolute -top-1 -right-1 bg-primary text-on-primary text-[10px] font-bold rounded-full w-4 h-4 flex items-center justify-center cart-badge-bounce">{{ count(session('cart')) }}</span>
    @endif
    </a>

    <!-- Dedicated Login / User Button (Desktop & Mobile) -->
    <div id="navbar-auth-container" class="relative group">
        <!-- Default Loading State (Spinner) -->
        <div class="inline-flex items-center gap-1.5 px-3 sm:px-4 py-1.5 sm:py-2 bg-surface-container-high border border-outline-variant text-on-surface-variant font-bold rounded-full text-xs">
            <span class="animate-spin inline-block w-3.5 h-3.5 sm:w-4 sm:h-4 border-2 border-current border-t-transparent text-primary rounded-full" role="status" aria-label="loading"></span>
        </div>
    </div>
@else
    <!-- Admin Badge -->
    <div class="flex items-center gap-1.5 px-3 sm:px-4 py-1.5 sm:py-2 bg-red-50 border border-red-100 text-red-600 font-bold rounded-full text-xs">
        <span class="material-symbols-outlined text-[15px] sm:text-[16px]">admin_panel_settings</span> <span class="hidden sm:inline">Administrator</span>
    </div>
@endif

<!-- Mobile Menu Toggle -->
<button id="mobile-menu-btn" class="lg:hidden flex items-center justify-center w-9 h-9 sm:w-10 sm:h-10 rounded-xl bg-surface-container-low border border-outline-variant text-secondary hover:text-primary hover:bg-surface-container-high transition-all ml-0.5" aria-label="Buka Menu">
<span class="material-symbols-outlined text-[18px] sm:text-[20px]">menu</span>
</button>
</div>
</header>
</div>

<!-- Mobile Navigation Drawer / Overlay -->
<div id="mobile-menu-drawer" class="fixed inset-0 z-[100] hidden transition-opacity duration-300 opacity-0 pointer-events-none">
    <!-- Backdrop Blur Overlay -->
    <div id="mobile-menu-backdrop" class="absolute inset-0 bg-black/60 backdrop-blur-sm"></div>
    
    <!-- Drawer Panel -->
    <div class="relative w-full max-w-sm ml-auto h-full bg-[#fbf8f8] shadow-2xl flex flex-col p-6 transform translate-x-full transition-transform duration-300 ease-out" id="mobile-menu-panel">
        <!-- Drawer Header -->
        <div class="flex items-center justify-between border-b border-outline-variant/30 pb-4 mb-6">
            <div class="flex items-center gap-3">
                <img src="{{ asset('images/logo.png') }}" alt="Galaksi XII Logo" class="h-9 w-auto object-contain">
                <span class="font-bold text-sm text-primary tracking-wider uppercase">Menu</span>
            </div>
            <button id="mobile-menu-close" class="w-10 h-10 rounded-full bg-surface-container-low flex items-center justify-center text-on-surface-variant hover:text-primary transition-colors">
                <span class="material-symbols-outlined text-[22px]">close</span>
            </button>
        </div>

        <!-- Navigation Links -->
        <div class="flex flex-col gap-2 flex-grow">
            @if(Request::is('admin*'))
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-4 py-3.5 rounded-xl font-medium text-base {{ Request::is('admin') ? 'bg-primary text-on-primary font-bold shadow-md' : 'text-on-surface-variant hover:bg-surface-container-low hover:text-primary' }} transition-all">
                    <span class="material-symbols-outlined text-[22px]">admin_panel_settings</span>
                    Dashboard Admin
                </a>
                <a href="{{ route('admin.logout') }}" class="flex items-center gap-3 px-4 py-3.5 rounded-xl font-medium text-base text-red-600 hover:bg-red-50 hover:text-red-700 transition-all font-bold">
                    <span class="material-symbols-outlined text-[22px]">logout</span>
                    Keluar Admin
                </a>
            @else
                <a href="{{ url('/') }}" class="flex items-center gap-3 px-4 py-3.5 rounded-xl font-medium text-base {{ Request::is('/') ? 'bg-primary text-on-primary font-bold shadow-md' : 'text-on-surface-variant hover:bg-surface-container-low hover:text-primary' }} transition-all">
                    <span class="material-symbols-outlined text-[22px]">home</span>
                    Beranda
                </a>
                <a href="{{ route('kompetisi') }}" class="flex items-center gap-3 px-4 py-3.5 rounded-xl font-medium text-base {{ Request::is('kompetisi*') ? 'bg-primary text-on-primary font-bold shadow-md' : 'text-on-surface-variant hover:bg-surface-container-low hover:text-primary' }} transition-all">
                    <span class="material-symbols-outlined text-[22px]">emoji_events</span>
                    Kompetisi
                </a>
                <a href="{{ route('merchandise') }}" class="flex items-center gap-3 px-4 py-3.5 rounded-xl font-medium text-base {{ Request::is('merchandise*') ? 'bg-primary text-on-primary font-bold shadow-md' : 'text-on-surface-variant hover:bg-surface-container-low hover:text-primary' }} transition-all">
                    <span class="material-symbols-outlined text-[22px]">storefront</span>
                    Merchandise
                </a>
                <a href="{{ route('checkout') }}" class="flex items-center gap-3 px-4 py-3.5 rounded-xl font-medium text-base {{ Request::is('checkout') ? 'bg-primary text-on-primary font-bold shadow-md' : 'text-on-surface-variant hover:bg-surface-container-low hover:text-primary' }} transition-all">
                    <span class="material-symbols-outlined text-[22px]">payments</span>
                    Cek Pesanan
                </a>
                <a href="{{ route('login') }}" class="flex items-center gap-3 px-4 py-3.5 rounded-xl font-medium text-base {{ Request::is('login') ? 'bg-primary text-on-primary font-bold shadow-md' : 'text-on-surface-variant hover:bg-surface-container-low hover:text-primary' }} transition-all">
                    <span class="material-symbols-outlined text-[22px]">account_circle</span>
                    Masuk Akun
                </a>
                <a href="{{ route('cart.index') }}" class="flex items-center justify-between px-4 py-3.5 rounded-xl font-medium text-base {{ Request::is('cart*') ? 'bg-primary text-on-primary font-bold shadow-md' : 'text-on-surface-variant hover:bg-surface-container-low hover:text-primary' }} transition-all">
                    <div class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-[22px]">shopping_bag</span>
                        Keranjang Belanja
                    </div>
                    @if(session('cart') && count(session('cart')) > 0)
                    <span class="bg-error text-on-error text-xs font-bold px-2 py-0.5 rounded-full">{{ count(session('cart')) }}</span>
                    @endif
                </a>
                @if(session('is_admin'))
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-4 py-3.5 rounded-xl font-medium text-base text-red-600 hover:bg-red-50 hover:text-red-700 transition-all font-bold">
                    <span class="material-symbols-outlined text-[22px]">admin_panel_settings</span>
                    Dashboard Admin
                </a>
                @endif
            @endif
        </div>

        <!-- Drawer Footer -->
        <div class="border-t border-outline-variant/30 pt-4 mt-auto">
            <p class="text-xs text-on-surface-variant/70 text-center font-medium">GALAKSI XII SMKN 3 Jepara</p>
        </div>
    </div>
</div>

<script>
    function updateClock() {
        const now = new Date();
        const timeString = now.toLocaleTimeString('en-US', { hour12: false });
        const clockElement = document.getElementById('nav-clock');
        if(clockElement) {
            clockElement.textContent = 'JEPARA ' + timeString;
        }
    }
    setInterval(updateClock, 1000);
    updateClock();

    // Mobile Menu Toggle Script
    document.addEventListener('DOMContentLoaded', function() {
        const btn = document.getElementById('mobile-menu-btn');
        const btnMobile = document.getElementById('mobile-menu-btn-mobile');
        const drawer = document.getElementById('mobile-menu-drawer');
        const panel = document.getElementById('mobile-menu-panel');
        const backdrop = document.getElementById('mobile-menu-backdrop');
        const closeBtn = document.getElementById('mobile-menu-close');

        function openMenu() {
            if(!drawer || !panel) return;
            drawer.classList.remove('hidden');
            // Force reflow
            void drawer.offsetWidth;
            drawer.classList.remove('opacity-0', 'pointer-events-none');
            drawer.classList.add('opacity-100', 'pointer-events-auto');
            panel.classList.remove('translate-x-full');
            panel.classList.add('translate-x-0');
            document.body.style.overflow = 'hidden';
        }

        function closeMenu() {
            if(!drawer || !panel) return;
            drawer.classList.remove('opacity-100', 'pointer-events-auto');
            drawer.classList.add('opacity-0', 'pointer-events-none');
            panel.classList.remove('translate-x-0');
            panel.classList.add('translate-x-full');
            document.body.style.overflow = '';
            setTimeout(() => {
                drawer.classList.add('hidden');
            }, 300);
        }

        if(btn) btn.addEventListener('click', openMenu);
        if(btnMobile) btnMobile.addEventListener('click', openMenu);
        if(closeBtn) closeBtn.addEventListener('click', closeMenu);
        if(backdrop) backdrop.addEventListener('click', closeMenu);
    });

    // Logout Modal Control
    function openLogoutModal() {
        const modal = document.getElementById('logout-modal');
        const card = document.getElementById('logout-modal-card');
        if (!modal || !card) return;
        modal.classList.remove('hidden');
        void modal.offsetWidth;
        modal.classList.remove('opacity-0', 'pointer-events-none');
        modal.classList.add('opacity-100', 'pointer-events-auto');
        card.classList.remove('scale-95');
        card.classList.add('scale-100');
    }

    function closeLogoutModal() {
        const modal = document.getElementById('logout-modal');
        const card = document.getElementById('logout-modal-card');
        if (!modal || !card) return;
        modal.classList.remove('opacity-100', 'pointer-events-auto');
        modal.classList.add('opacity-0', 'pointer-events-none');
        card.classList.remove('scale-100');
        card.classList.add('scale-95');
        setTimeout(() => {
            modal.classList.add('hidden');
        }, 300);
    }
</script>

<!-- Logout Confirmation Modal Dialog -->
<div id="logout-modal" class="fixed inset-0 z-[120] hidden transition-opacity duration-300 opacity-0 pointer-events-none flex items-center justify-center p-4">
    <!-- Backdrop -->
    <div id="logout-modal-backdrop" onclick="closeLogoutModal()" class="absolute inset-0 bg-black/60 backdrop-blur-sm"></div>
    
    <!-- Modal Dialog Card -->
    <div class="relative w-full max-w-sm bg-surface-container-lowest border border-outline-variant/40 rounded-3xl p-6 shadow-2xl z-10 text-center transform scale-95 transition-transform duration-300 ease-out" id="logout-modal-card">
        
        <!-- Danger Glow Icon -->
        <div class="w-14 h-14 rounded-full bg-red-100 text-red-600 flex items-center justify-center mx-auto mb-4 border border-red-200 shadow-sm">
            <span class="material-symbols-outlined text-[28px]">logout</span>
        </div>
        
        <h3 class="font-bold text-xl text-primary mb-1 font-headline-md">Konfirmasi Keluar Akun</h3>
        <p class="text-xs text-on-surface-variant opacity-80 mb-6 leading-relaxed">
            Apakah Anda yakin ingin keluar dari akun <strong id="logout-modal-user-name" class="text-primary font-bold capitalize"></strong>?
        </p>

        <div class="flex items-center gap-3">
            <button type="button" onclick="closeLogoutModal()" class="flex-1 bg-surface-container-low hover:bg-surface-container border border-outline-variant/30 text-on-surface font-bold py-2.5 px-4 rounded-full text-xs transition-colors">
                Batal
            </button>
            <button type="button" onclick="handleFirebaseLogout()" class="flex-1 bg-black text-white hover:bg-neutral-800 font-bold py-2.5 px-4 rounded-full text-xs transition-all shadow-md active:scale-95 text-center">
                Ya, Keluar
            </button>
        </div>
    </div>
</div>

<script>
    // Handle Firebase Logout
    async function handleFirebaseLogout() {
        if(window.FirebaseAuth) {
            try {
                await window.FirebaseAuth.signOut();
                closeLogoutModal();
                window.location.href = "{{ url('/') }}";
            } catch (error) {
                console.error("Logout Error", error);
            }
        }
    }

    // Listen to Firebase Auth State
    function initNavbarAuth() {
        if(window.FirebaseAuth) {
            window.FirebaseAuth.onAuthStateChanged((user) => {
                const container = document.getElementById('navbar-auth-container');
                const modalUserName = document.getElementById('logout-modal-user-name');
                if(!container) return;

                if (user) {
                    // Logged In
                    const displayName = user.displayName || user.email.split('@')[0];
                    if(modalUserName) modalUserName.textContent = displayName;
                    
                    container.innerHTML = `
                        <button type="button" onclick="openLogoutModal()" class="inline-flex items-center gap-1 sm:gap-1.5 px-2.5 sm:px-4 py-1.5 sm:py-2 bg-surface-container-high border border-outline-variant text-primary font-bold rounded-full text-xs hover:bg-red-600 hover:text-white transition-all shadow-sm active:scale-95">
                            <span class="material-symbols-outlined text-[16px] sm:text-[17px]">account_circle</span>
                            <span class="hidden sm:inline capitalize max-w-[100px] truncate">${displayName}</span>
                            <span class="material-symbols-outlined text-[13px] sm:text-[14px]">logout</span>
                        </button>
                    `;
                } else {
                    // Logged Out
                    container.innerHTML = `
                        <a href="{{ route('login') }}" class="hidden sm:inline-flex items-center gap-1.5 px-4 py-2 bg-primary text-on-primary font-bold rounded-full text-xs hover:bg-neutral-800 transition-all shadow-sm active:scale-95 {{ Request::is('login') ? 'ring-2 ring-primary ring-offset-2' : '' }}">
                            <span class="material-symbols-outlined text-[17px]">account_circle</span>
                            <span>Masuk</span>
                        </a>
                        <a href="{{ route('login') }}" aria-label="Masuk Akun" class="sm:hidden flex items-center justify-center w-10 h-10 rounded-xl bg-surface-container-low border border-outline-variant text-secondary hover:text-primary active:scale-95 transition-all" title="Masuk Akun">
                            <span class="material-symbols-outlined text-[20px]">account_circle</span>
                        </a>
                    `;
                }
            });
        }
    }

    document.addEventListener('DOMContentLoaded', () => {
        if(window.FirebaseAuth) {
            initNavbarAuth();
        } else {
            window.addEventListener('firebase-ready', initNavbarAuth);
        }
    });
</script>
