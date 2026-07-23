<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>GALAKSI XII - Daftar Akun Pengguna</title>
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

        <div class="w-full max-w-lg mx-auto fade-in">

            <!-- Register Card -->
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
                <div class="text-center mb-6 relative z-10">


                    <h1 class="text-3xl font-bold font-headline-md text-primary leading-tight mb-1 mt-5">
                        Daftar Akun Baru
                    </h1>
                    <p class="text-xs sm:text-sm text-on-surface-variant opacity-80 max-w-xs mx-auto">
                        Buat akun untuk mempermudah transaksi &amp; partisipasi acara Galaksi XII.
                    </p>
                </div>

                <!-- Form Register -->
                <form id="registerForm" class="space-y-4 relative z-10">

                    <!-- Input Nama Lengkap -->
                    <div>
                        <label for="name"
                            class="block text-xs font-bold text-primary uppercase tracking-wider mb-1">Nama
                            Lengkap</label>
                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant/60 text-[18px]">badge</span>
                            <input type="text" id="name" name="name" required
                                placeholder="Contoh: Salsabilla Rahma"
                                class="w-full bg-surface-container-low border border-outline-variant/30 rounded-2xl pl-11 pr-4 py-2.5 text-sm text-on-surface placeholder:text-on-surface-variant/50 focus:outline-none focus:border-primary focus:ring-4 focus:ring-primary/5 transition-all">
                        </div>
                    </div>

                    <!-- Input Email / NISN -->
                    <div>
                        <label for="email"
                            class="block text-xs font-bold text-primary uppercase tracking-wider mb-1">Email</label>
                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant/60 text-[18px]">mail</span>
                            <input type="text" id="email" name="email" required
                                placeholder="joyopanjoyo@gmail.com"
                                class="w-full bg-surface-container-low border border-outline-variant/30 rounded-2xl pl-11 pr-4 py-2.5 text-sm text-on-surface placeholder:text-on-surface-variant/50 focus:outline-none focus:border-primary focus:ring-4 focus:ring-primary/5 transition-all">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <!-- Input Kelas -->
                        <div>
                            <label for="school_class"
                                class="block text-xs font-bold text-primary uppercase tracking-wider mb-1">Kelas /
                                Jurusan</label>
                            <div class="relative">
                                <span
                                    class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant/60 text-[18px]">school</span>
                                <input type="text" id="school_class" name="school_class" placeholder="XI AKL 1"
                                    class="w-full bg-surface-container-low border border-outline-variant/30 rounded-2xl pl-11 pr-4 py-2.5 text-sm text-on-surface placeholder:text-on-surface-variant/50 focus:outline-none focus:border-primary focus:ring-4 focus:ring-primary/5 transition-all">
                            </div>
                        </div>

                        <!-- Input WhatsApp -->
                        <div>
                            <label for="whatsapp"
                                class="block text-xs font-bold text-primary uppercase tracking-wider mb-1">No.
                                WhatsApp</label>
                            <div class="relative">
                                <span
                                    class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant/60 text-[18px]">call</span>
                                <input type="tel" id="whatsapp" name="whatsapp" placeholder="08123456789"
                                    class="w-full bg-surface-container-low border border-outline-variant/30 rounded-2xl pl-11 pr-4 py-2.5 text-sm text-on-surface placeholder:text-on-surface-variant/50 focus:outline-none focus:border-primary focus:ring-4 focus:ring-primary/5 transition-all">
                            </div>
                        </div>
                    </div>

                    <!-- Input Password -->
                    <div>
                        <label for="password"
                            class="block text-xs font-bold text-primary uppercase tracking-wider mb-1">Kata
                            Sandi</label>
                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant/60 text-[18px]">lock</span>
                            <input type="password" id="password" name="password" required
                                placeholder="Minimal 4 karakter"
                                class="w-full bg-surface-container-low border border-outline-variant/30 rounded-2xl pl-11 pr-4 py-2.5 text-sm text-on-surface placeholder:text-on-surface-variant/50 focus:outline-none focus:border-primary focus:ring-4 focus:ring-primary/5 transition-all">
                        </div>
                    </div>

                    <!-- Input Konfirmasi Password -->
                    <div>
                        <label for="password_confirmation"
                            class="block text-xs font-bold text-primary uppercase tracking-wider mb-1">Konfirmasi Kata
                            Sandi</label>
                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant/60 text-[18px]">lock_reset</span>
                            <input type="password" id="password_confirmation" name="password_confirmation" required
                                placeholder="Ketik ulang kata sandi"
                                class="w-full bg-surface-container-low border border-outline-variant/30 rounded-2xl pl-11 pr-4 py-2.5 text-sm text-on-surface placeholder:text-on-surface-variant/50 focus:outline-none focus:border-primary focus:ring-4 focus:ring-primary/5 transition-all">
                        </div>
                    </div>

                    <!-- Terms & Conditions Checkbox -->
                    <div class="flex items-center gap-2 pt-1">
                        <input type="checkbox" required id="terms" name="terms"
                            class="w-4 h-4 rounded border-outline-variant text-primary focus:ring-primary/20">
                        <label for="terms"
                            class="text-xs text-on-surface-variant font-medium cursor-pointer select-none">
                            Saya menyetujui ketentuan &amp; privasi Galaksi XII
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit"
                        class="w-full bg-black text-white hover:bg-neutral-800 font-bold py-3.5 px-6 rounded-full text-sm transition-all shadow-lg hover:shadow-xl flex items-center justify-center gap-2 active:scale-95 mt-4">
                        <span>Daftar Akun Sekarang</span>
                        <span class="material-symbols-outlined text-[18px]">how_to_reg</span>
                    </button>
                </form>

                <!-- Footer Link -->
                <p class="text-center text-xs text-on-surface-variant opacity-80 mt-6 relative z-10">
                    Sudah memiliki akun?
                    <a href="{{ route('login') }}" class="font-bold text-primary hover:underline">Masuk Di Sini</a>
                </p>

            </div>
        </div>

    </main>

    <!-- Footer -->
    @include('components.footer')

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const regForm = document.getElementById('registerForm');
            if (regForm) {
                regForm.addEventListener('submit', async function(e) {
                    e.preventDefault(); // Stop page navigation!

                    const submitBtn = regForm.querySelector('button[type="submit"]');
                    if(submitBtn) {
                        submitBtn.disabled = true;
                        submitBtn.innerHTML = '<span class="animate-spin inline-block mr-2">⚡</span> Memproses Pendaftaran...';
                    }

                    if (window.FirebaseAuth && window.FirebaseDB && window.createUserWithEmailAndPassword && window.collection && window.addDoc) {
                        try {
                            const name = document.getElementById('name').value;
                            const email = document.getElementById('email').value;
                            const school_class = document.getElementById('school_class').value;
                            const whatsapp = document.getElementById('whatsapp').value;
                            const password = document.getElementById('password').value;
                            const password_confirmation = document.getElementById('password_confirmation').value;

                            if(password !== password_confirmation) {
                                Swal.fire({
                                    title: 'Perhatian',
                                    text: 'Konfirmasi kata sandi tidak cocok!',
                                    icon: 'warning',
                                    confirmButtonColor: '#000000',
                                });
                                if(submitBtn) {
                                    submitBtn.disabled = false;
                                    submitBtn.innerHTML = '<span>Daftar Akun Sekarang</span><span class="material-symbols-outlined text-[18px]">how_to_reg</span>';
                                }
                                return;
                            }

                            // 1. Create User Auth
                            const userCredential = await window.createUserWithEmailAndPassword(window.FirebaseAuth, email, password);
                            
                            // 2. Save User Profile to Firestore (Without awaiting to speed up redirect)
                            window.addDoc(window.collection(window.FirebaseDB, 'users'), {
                                uid: userCredential.user.uid,
                                name: name,
                                email: email,
                                school_class: school_class,
                                whatsapp: whatsapp,
                                created_at: new Date().toISOString()
                            }).catch(e => console.warn('Sync Profile', e));

                            // 3. Success Redirect with SweetAlert
                            Swal.fire({
                                title: 'Pendaftaran Berhasil!',
                                text: 'Selamat datang di Galaksi XII.',
                                icon: 'success',
                                confirmButtonColor: '#000000',
                                confirmButtonText: 'Lanjutkan'
                            }).then(() => {
                                window.location.href = "{{ route('merchandise') }}";
                            });
                            
                        } catch (err) {
                            console.error('Firebase Error:', err);
                            Swal.fire({
                                title: 'Pendaftaran Gagal',
                                text: err.message,
                                icon: 'error',
                                confirmButtonColor: '#000000',
                            });
                            if(submitBtn) {
                                submitBtn.disabled = false;
                                submitBtn.innerHTML = '<span>Daftar Akun Sekarang</span><span class="material-symbols-outlined text-[18px]">how_to_reg</span>';
                            }
                        }
                    } else {
                        Swal.fire({
                            title: 'Sistem Belum Siap',
                            text: 'Harap tunggu beberapa saat hingga Firebase termuat.',
                            icon: 'warning',
                            confirmButtonColor: '#000000',
                        });
                    }
                });
            }
        });
    </script>
</body>
</html>
