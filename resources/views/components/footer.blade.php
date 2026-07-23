<footer class="w-full bg-surface-container-low dark:bg-surface-container-highest mt-auto relative overflow-hidden border-t border-outline-variant/20">
    <!-- Decorative Glow -->
    <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-full max-w-3xl h-32 bg-primary/5 blur-[80px] rounded-full pointer-events-none"></div>
    
    <div class="px-6 md:px-16 pt-16 pb-8 max-w-7xl mx-auto relative z-10">
        <div class="flex flex-col md:flex-row justify-between items-center md:items-start gap-12 mb-12">
            <!-- Brand & Tagline -->
            <div class="flex flex-col items-center md:items-start text-center md:text-left">
                <a href="{{ url('/') }}" class="inline-block group mb-4">
                    <img src="{{ asset('images/logo.png') }}" alt="Galaksi XII Logo" class="h-20 md:h-28 w-auto object-contain group-hover:scale-105 transition-transform duration-300">
                </a>
                <p class="font-body-md text-on-surface-variant max-w-[320px] leading-relaxed">
                    Merayakan kreativitas, sportivitas, dan potensi tak terbatas bersama SMKN 3 Jepara.
                </p>
            </div>

            <!-- Quick Links -->
            <div class="flex flex-col items-center md:items-start">
                <h3 class="font-label-md text-primary mb-6 uppercase tracking-[0.15em]">Tautan Cepat</h3>
                <div class="flex flex-col gap-4">
                    <a class="text-body-md font-body-md text-on-surface-variant hover:text-primary hover:translate-x-2 transition-all duration-300 flex items-center gap-2 group" href="{{ url('/') }}">
                        <span class="w-1.5 h-1.5 bg-primary rounded-full opacity-0 group-hover:opacity-100 transition-opacity"></span>
                        Beranda
                    </a>
                    <a class="text-body-md font-body-md text-on-surface-variant hover:text-primary hover:translate-x-2 transition-all duration-300 flex items-center gap-2 group" href="{{ route('kompetisi') }}">
                        <span class="w-1.5 h-1.5 bg-primary rounded-full opacity-0 group-hover:opacity-100 transition-opacity"></span>
                        Kompetisi
                    </a>
                    <a class="text-body-md font-body-md text-on-surface-variant hover:text-primary hover:translate-x-2 transition-all duration-300 flex items-center gap-2 group" href="{{ route('merchandise') }}">
                        <span class="w-1.5 h-1.5 bg-primary rounded-full opacity-0 group-hover:opacity-100 transition-opacity"></span>
                        Merchandise
                    </a>
                </div>
            </div>
            
            <!-- Socials & Contact -->
            <div class="flex flex-col items-center md:items-start">
                <h3 class="font-label-md text-primary mb-6 uppercase tracking-[0.15em]">Terhubung</h3>
                <div class="flex gap-4">
                    <a href="#" class="w-11 h-11 rounded-full bg-surface-container hover:bg-primary hover:text-on-primary border border-outline-variant/30 flex items-center justify-center transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
                        <span class="material-symbols-outlined text-[20px]">public</span>
                    </a>
                    <a href="#" class="w-11 h-11 rounded-full bg-surface-container hover:bg-primary hover:text-on-primary border border-outline-variant/30 flex items-center justify-center transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
                        <span class="material-symbols-outlined text-[20px]">share</span>
                    </a>
                    <a href="#" class="w-11 h-11 rounded-full bg-surface-container hover:bg-primary hover:text-on-primary border border-outline-variant/30 flex items-center justify-center transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
                        <span class="material-symbols-outlined text-[20px]">mail</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="w-full pt-8 border-t border-outline-variant/30 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-label-sm font-label-sm text-on-surface-variant text-center md:text-left">
                &copy; {{ date('Y') }} GALAKSI XII SMKN 3 Jepara. Hak cipta dilindungi.
            </p>
        </div>
    </div>
</footer>

<!-- Global Dynamic Toast Container -->
<div id="global-toast-container" class="fixed bottom-6 md:bottom-8 left-1/2 -translate-x-1/2 z-[100] pointer-events-none" style="width: max-content; max-width: 92vw;"></div>

<script>
    // Global Snackbar Toast — centered bottom, cart-style
    window.showToast = function(message, type = 'success', extra = {}) {
        const container = document.getElementById('global-toast-container');
        if (!container) return;

        // Remove existing toasts
        container.innerHTML = '';

        const toast = document.createElement('div');
        // Removed transform/opacity classes from className
        toast.className = 'pointer-events-auto flex items-center gap-4 px-6 py-4 rounded-2xl shadow-2xl';

        if (type === 'success') {
            toast.style.cssText = 'background: #1b1c1c; color: #ffffff; min-width: 320px; transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1); transform: translateY(2rem) scale(0.95); opacity: 0;';
        } else {
            toast.style.cssText = 'background: #93000a; color: #ffffff; min-width: 320px; transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1); transform: translateY(2rem) scale(0.95); opacity: 0;';
        }

        // Build inner content
        const cartCount = extra.cartCount || extra.totalItems || '';
        const totalPrice = extra.totalPrice || extra.totalPriceFormatted || '';

        if (cartCount && totalPrice && cartCount !== '0' && cartCount !== 0) {
            // Cart-style snackbar (like the reference image)
            toast.innerHTML = `
                <div class="flex-grow min-w-0 text-left">
                    <p class="font-semibold text-[15px] leading-snug text-white">${cartCount} Barang di Keranjang Saya</p>
                    <p class="text-[13px] opacity-80 mt-0.5 text-white/80">${totalPrice}</p>
                </div>
                <div class="relative shrink-0">
                    <span class="material-symbols-outlined text-[28px] text-white" style="font-variation-settings: 'FILL' 1;">shopping_cart</span>
                    <span class="absolute -top-1.5 -right-1.5 w-5 h-5 bg-white text-[#1b1c1c] text-[10px] font-bold rounded-full flex items-center justify-center shadow">${cartCount}</span>
                </div>
            `;
        } else {
            // Generic snackbar
            const iconName = type === 'success' ? 'check_circle' : 'error';
            toast.innerHTML = `
                <span class="material-symbols-outlined text-[24px] shrink-0 text-white" style="font-variation-settings: 'FILL' 1;">${iconName}</span>
                <span class="font-semibold text-[14px] flex-grow text-left text-white">${message}</span>
            `;
        }

        container.appendChild(toast);

        // Force reflow to ensure the starting styles are applied before animating
        toast.offsetHeight;

        // Animate in
        requestAnimationFrame(() => {
            toast.style.transform = 'translateY(0) scale(1)';
            toast.style.opacity = '1';
        });

        // Auto remove after 3.5s
        setTimeout(() => {
            toast.style.transform = 'translateY(2rem) scale(0.95)';
            toast.style.opacity = '0';
            setTimeout(() => toast.remove(), 500);
        }, 3500);
    };
</script>
