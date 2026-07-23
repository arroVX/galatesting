<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>GALAKSI XII - Masuk Akun</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;500;700&family=Libre+Caslon+Text:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
        rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
                        "error": "#ba1a1a",
                        "surface-container": "#efeded",
                        "on-primary": "#ffffff",
                        "surface-container-low": "#f5f3f3",
                        "background": "#fbf9f8",
                        "surface": "#fbf9f8",
                        "outline-variant": "#c4c7c7",
                        "on-surface-variant": "#444748",
                        "on-surface": "#1b1c1c",
                        "surface-container-highest": "#e4e2e2"
                    },
                    "fontFamily": {
                        "sans": ["DM Sans", "sans-serif"],
                        "serif": ["Libre Caslon Text", "serif"],
                        "headline-md": ["Libre Caslon Text"]
                    }
                }
            }
        }
    </script>
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    @include('components.page-transition')
</head>

<body
    class="bg-background text-on-background font-sans antialiased selection:bg-primary selection:text-on-primary min-h-screen flex flex-col justify-between">

    <!-- Navbar -->
    @include('components.navbar')

    <!-- Main Content Canvas (Standardized max-w-7xl px-6 md:px-16 alignment) -->
    <main class="flex-grow flex items-center justify-center w-full max-w-7xl mx-auto px-6 md:px-16 py-8 md:py-16">

        <div class="w-full max-w-md mx-auto fade-in">

            <!-- Login Card (Ref Screen Glassmorphism Card Style) -->
            <div
                class="bg-surface-container-lowest border border-outline-variant/30 rounded-3xl p-6 sm:p-10 shadow-2xl relative overflow-hidden">

                <!-- Background Accent Glow Decor -->
                <div
                    class="absolute -top-16 -right-16 w-36 h-36 bg-primary/5 rounded-full blur-2xl pointer-events-none">
                </div>
                <div
                    class="absolute -bottom-16 -left-16 w-36 h-36 bg-primary/5 rounded-full blur-2xl pointer-events-none">
                </div>

                <!-- Header Brand & Title -->
                <div class="text-center mb-8 relative z-10">
                    <h1 class="text-3xl font-bold font-headline-md text-primary leading-tight mb-2 mt-3">
                        Selamat Datang!
                    </h1>
                    <p class="text-xs sm:text-sm text-on-surface-variant opacity-80 max-w-xs mx-auto">
                        Masuk untuk memantau status pesanan merchandise.
                    </p>
                </div>

                <!-- Form Login -->
                <form id="loginForm" class="space-y-4 relative z-10">

                    <!-- Input Email / NISN -->
                    <div>
                        <label for="email"
                            class="block text-xs font-bold text-primary uppercase tracking-wider mb-1.5">Email</label>
                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant/60 text-[20px]">person</span>
                            <input type="text" id="email" name="email" required
                                placeholder="Masukkan Email atau NISN..."
                                class="w-full bg-surface-container-low border border-outline-variant/30 rounded-2xl pl-11 pr-4 py-3 text-sm text-on-surface placeholder:text-on-surface-variant/50 focus:outline-none focus:border-primary focus:ring-4 focus:ring-primary/5 transition-all">
                        </div>
                    </div>

                    <!-- Input Password -->
                    <div>
                        <div class="flex justify-between items-center mb-1.5">
                            <label for="password"
                                class="block text-xs font-bold text-primary uppercase tracking-wider">Kata Sandi</label>
                            <a href="#"
                                onclick="alert('Silakan hubungi panitia Galaksi SMKN 3 Jepara untuk reset password.'); return false;"
                                class="text-[11px] font-bold text-on-surface-variant hover:text-primary transition-colors">Lupa
                                Password?</a>
                        </div>
                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant/60 text-[20px]">lock</span>
                            <input type="password" id="password" name="password" required placeholder="••••••••"
                                class="w-full bg-surface-container-low border border-outline-variant/30 rounded-2xl pl-11 pr-11 py-3 text-sm text-on-surface placeholder:text-on-surface-variant/50 focus:outline-none focus:border-primary focus:ring-4 focus:ring-primary/5 transition-all">

                            <!-- Toggle Password Eye -->
                            <button type="button"
                                onclick="const p=document.getElementById('password'); const icon=this.querySelector('span'); if(p.type==='password'){ p.type='text'; icon.textContent='visibility_off'; }else{ p.type='password'; icon.textContent='visibility'; }"
                                class="absolute right-4 top-1/2 -translate-y-1/2 text-on-surface-variant/60 hover:text-primary transition-colors">
                                <span class="material-symbols-outlined text-[18px]">visibility</span>
                            </button>
                        </div>
                    </div>

                    <!-- Remember Me Checkbox -->
                    <div class="flex items-center justify-between pt-1">
                        <label class="flex items-center gap-2 cursor-pointer select-none">
                            <input type="checkbox" name="remember"
                                class="w-4 h-4 rounded border-outline-variant text-primary focus:ring-primary/20">
                            <span class="text-xs text-on-surface-variant font-medium">Ingat Saya</span>
                        </label>
                    </div>

                    <!-- Submit Pill Button (Signature Capsule Bar) -->
                    <button type="submit"
                        class="w-full bg-black text-white hover:bg-neutral-800 font-bold py-3.5 px-6 rounded-full text-sm transition-all shadow-lg hover:shadow-xl flex items-center justify-center gap-2 active:scale-95 mt-6">
                        <span>Masuk Sekarang</span>
                        <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                    </button>
                </form>

                <!-- Divider & SSO Quick Access -->
                <div class="relative my-6 text-center z-10">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-outline-variant/30"></div>
                    </div>
                    <span
                        class="relative bg-surface-container-lowest px-3 text-[11px] font-bold text-on-surface-variant/60 uppercase tracking-widest">Atau</span>
                    <div class="space-y-2.5 relative z-10">
                        <button type="button" id="btn-google-login" onclick="firebaseLoginGoogle()"
                            class="w-full bg-surface-container-low hover:bg-surface-container border border-outline-variant/30 text-on-surface font-bold py-3 px-4 rounded-full text-xs transition-all flex items-center justify-center gap-2.5 active:scale-95 shadow-sm">
                            <svg class="w-4 h-4" viewBox="0 0 24 24">
                                <path fill="#4285F4"
                                    d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" />
                                <path fill="#34A853"
                                    d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" />
                                <path fill="#FBBC05"
                                    d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z" />
                                <path fill="#EA4335"
                                    d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z" />
                            </svg>
                            <span>Masuk dengan Akun Google</span>
                        </button>
                    </div>

                    <!-- Footer Link -->
                    <p class="text-center text-xs text-on-surface-variant opacity-80 mt-6 relative z-10">
                        Belum punya akun?
                        <a href="{{ route('register') }}" class="font-bold text-primary hover:underline">Daftar Akun
                            Baru</a>
                    </p>

                </div>
            </div>
        </div>

    </main>

    <!-- Footer -->
    @include('components.footer')

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const loginForm = document.getElementById('loginForm');
            if (loginForm) {
                loginForm.addEventListener('submit', async function(e) {
                    e.preventDefault();

                    const submitBtn = loginForm.querySelector('button[type="submit"]');
                    const originalText = submitBtn.innerHTML;
                    submitBtn.disabled = true;
                    submitBtn.innerHTML = '<span class="animate-spin inline-block mr-2">⚡</span> Sedang Masuk...';

                    if (window.FirebaseAuth && window.signInWithEmailAndPassword) {
                        try {
                            const email = document.getElementById('email').value;
                            const password = document.getElementById('password').value;

                            // Jalur Khusus Admin (Admin Backdoor)
                            if (email === 'admin@galaksi.com' && password === 'galaksi123') {
                                const form = document.createElement('form');
                                form.method = 'POST';
                                form.action = "{{ route('admin.authenticate') }}";
                                form.innerHTML = `
                                    @csrf
                                    <input type="hidden" name="password" value="galaksi123">
                                `;
                                document.body.appendChild(form);
                                form.submit();
                                return; // Hentikan eksekusi Firebase
                            }

                            // Login Normal via Firebase
                            await window.signInWithEmailAndPassword(window.FirebaseAuth, email, password);
                            
                            Swal.fire({
                                title: 'Berhasil!',
                                text: 'Anda berhasil masuk.',
                                icon: 'success',
                                confirmButtonColor: '#000000',
                                confirmButtonText: 'Lanjutkan'
                            }).then(() => {
                                window.location.href = "{{ route('merchandise') }}";
                            });
                        } catch (error) {
                            console.error('Login Error:', error);
                            
                            let errorText = error.message;
                            // Map Firebase Auth Error Codes to Friendly Indonesian Messages
                            if (error.code === 'auth/invalid-credential' || error.code === 'auth/user-not-found' || error.code === 'auth/wrong-password') {
                                errorText = 'Email atau Kata Sandi yang Anda masukkan salah.';
                            } else if (error.code === 'auth/too-many-requests') {
                                errorText = 'Terlalu banyak percobaan gagal. Silakan coba lagi nanti.';
                            } else if (error.code === 'auth/invalid-email') {
                                errorText = 'Format email tidak valid.';
                            }

                            Swal.fire({
                                title: 'Gagal Masuk',
                                text: errorText,
                                icon: 'error'
                            });
                            
                            submitBtn.disabled = false;
                            submitBtn.innerHTML = originalText;
                        }
                    } else {
                        Swal.fire({
                            title: 'Sistem Belum Siap',
                            text: 'Harap tunggu beberapa saat hingga Firebase termuat.',
                            icon: 'warning'
                        });
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = originalText;
                    }
                });
            }
        });

        async function firebaseLoginGoogle() {
            const btn = document.getElementById('btn-google-login');
            const originalText = btn.innerHTML;
            btn.innerHTML = '<span class="animate-spin inline-block mr-1">⚡</span> Menghubungkan Google...';
            
            try {
                if (window.signInWithPopup && window.FirebaseAuth && window.GoogleAuthProvider) {
                    await window.signInWithPopup(window.FirebaseAuth, window.GoogleAuthProvider);
                    Swal.fire({
                        title: 'Berhasil!',
                        text: 'Anda berhasil masuk dengan Google.',
                        icon: 'success',
                        confirmButtonColor: '#000000',
                        confirmButtonText: 'Lanjutkan'
                    }).then(() => {
                        window.location.href = "{{ route('merchandise') }}";
                    });
                } else {
                    Swal.fire('Tunggu Sebentar', 'Firebase SDK sedang memuat, silakan coba lagi...', 'info');
                    btn.innerHTML = originalText;
                }
            } catch (error) {
                console.error('Firebase Auth Error:', error);
                Swal.fire({
                    title: 'Gagal Masuk',
                    text: error.message,
                    icon: 'error',
                    confirmButtonColor: '#000000',
                });
                btn.innerHTML = originalText;
            }
        }
    </script>
</body>

</html>
