<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - GALAKSI XII</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
        rel="stylesheet">
    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            font-family: 'DM Sans', sans-serif;
            background: #F6F4F0;
        }

        /* Hide scrollbar for Chrome, Safari and Opera */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        /* Custom Shapes for Blur */
        .blur-shape-yellow {
            background: radial-gradient(circle, rgba(253, 224, 71, 1) 0%, rgba(253, 224, 71, 0.8) 40%, rgba(253, 224, 71, 0) 70%);
        }

        .blur-shape-red {
            background: radial-gradient(circle, rgba(248, 113, 113, 1) 0%, rgba(248, 113, 113, 0.8) 40%, rgba(248, 113, 113, 0) 70%);
        }

        /* Nav item active */
        .nav-item.active {
            background-color: #1a1a1a;
            color: #fde047;
        }

        .nav-item:not(.active) {
            color: #9ca3af;
        }

        .nav-item:not(.active):hover {
            color: #4b5563;
            background-color: #f3f4f6;
        }
    </style>
</head>

<body class="h-screen overflow-hidden flex flex-col md:flex-row bg-[#F6F4F0] md:p-5 md:gap-5">

    <!-- Sidebar / Bottom Nav -->
    <aside
        class="fixed md:static bottom-0 left-0 w-full md:w-[80px] h-[70px] md:h-full bg-white md:rounded-[2.5rem] rounded-t-[2rem] md:rounded-b-[2.5rem] flex md:flex-col items-center justify-center md:justify-start md:py-8 shadow-[0_-8px_30px_rgb(0,0,0,0.04)] md:shadow-[0_8px_30px_rgb(0,0,0,0.04)] z-50 shrink-0 px-2 md:px-0">
        <!-- Logo (Hidden on mobile) -->
        <div class="hidden md:block mb-10 group cursor-pointer" onclick="window.location.href='{{ url('/') }}'">
            <div
                class="w-10 h-10 bg-black text-white flex items-center justify-center font-bold text-lg rounded-t-xl rounded-bl-xl rounded-br-sm group-hover:rotate-12 transition-transform duration-300">
                G
            </div>
        </div>

        <!-- Menu & Logout -->
        <div
            class="flex md:flex-col w-full md:w-full md:px-3 h-full md:h-auto items-center justify-evenly md:justify-start gap-0 md:gap-4 flex-grow">
            <button onclick="switchTab('dashboard')" id="btn-dashboard"
                class="nav-item active w-12 h-12 rounded-full flex items-center justify-center transition-all duration-300">
                <span class="material-symbols-outlined text-[24px]"
                    style="font-variation-settings: 'FILL' 1;">dashboard</span>
            </button>
            <button onclick="switchTab('orders')" id="btn-orders"
                class="nav-item w-12 h-12 rounded-full flex items-center justify-center transition-all duration-300 relative">
                <span class="material-symbols-outlined text-[24px]">receipt_long</span>
                <span id="order-badge"
                    class="absolute top-0 right-0 w-3 h-3 bg-red-500 border-2 border-white rounded-full hidden"></span>
            </button>
            <button onclick="switchTab('products')" id="btn-products"
                class="nav-item w-12 h-12 rounded-full flex items-center justify-center transition-all duration-300">
                <span class="material-symbols-outlined text-[24px]">storefront</span>
            </button>

            <!-- Logout -->
            <a href="{{ route('admin.logout') }}" onclick="return confirmAdminLogout(event);"
                class="w-12 h-12 rounded-full flex items-center justify-center text-gray-400 hover:text-red-500 hover:bg-red-50 transition-all duration-300 md:mt-auto"
                title="Keluar Admin">
                <span class="material-symbols-outlined text-[24px]">logout</span>
            </a>
        </div>
    </aside>

    <!-- Main Content Area -->
    <main class="flex-1 overflow-y-auto no-scrollbar pb-[90px] md:pb-10 pt-4 md:pt-0 px-4 md:px-0 md:pr-2">

        <!-- Header -->
        <header class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6 md:mb-8 gap-4 px-2">
            <div class="flex justify-between items-center w-full md:w-auto">
                <div>
                    <h1 class="text-2xl md:text-3xl font-bold tracking-tight">Haloo admin merch galagala 👋</h1>
                    <p class="text-gray-500 text-xs md:text-sm mt-1">Cek pesanan disini!</p>
                </div>
            </div>

            <div class="flex items-center gap-3">
                <div class="relative hidden md:block">
                    <span
                        class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 text-[20px]">search</span>
                    <input type="text" placeholder="Search data..."
                        class="bg-white border-none rounded-full py-3.5 pl-12 pr-6 text-sm font-medium focus:ring-2 focus:ring-yellow-400 outline-none shadow-[0_2px_15px_rgb(0,0,0,0.02)] w-64">
                </div>
                <a href="{{ route('admin.products.create') }}"
                    class="bg-[#1a1a1a] hover:bg-black text-white px-6 py-3.5 rounded-full text-sm font-bold shadow-[0_4px_15px_rgb(0,0,0,0.1)] transition-all">
                    + Add Product
                </a>
            </div>
        </header>

        <!-- Dynamic Views -->
        <!-- VIEW: DASHBOARD (Overview) -->
        <div id="view-dashboard" class="block space-y-6">

            <!-- Top Cards Row -->
            <div class="px-2">

                <!-- Beige Stats Card (Abstract Blur) -->
                <div
                    class="bg-[#D3CEBA] rounded-[2rem] p-8 relative overflow-hidden flex flex-col justify-between min-h-[300px]">
                    <!-- Blurs -->
                    <div class="absolute -right-10 -bottom-10 w-[300px] h-[300px] blur-shape-yellow mix-blend-overlay">
                    </div>
                    <div class="absolute right-[20%] top-[20%] w-[200px] h-[200px] blur-shape-red mix-blend-overlay">
                    </div>
                    <div
                        class="absolute right-[10%] md:right-[20%] top-[10%] w-[120px] h-[120px] bg-[#1a1a1a] rounded-full flex items-center justify-center flex-col shadow-lg z-10 text-white transform -rotate-12">
                        <span class="text-lg font-bold" id="stat-total-orders">0</span>
                        <span class="text-[10px]">Total Orders</span>
                    </div>

                    <div class="relative z-10">
                        <h2 class="text-xl font-bold text-[#3d3a2e]">Your Store<br>Results for Today</h2>
                    </div>

                    <div class="relative z-10 flex gap-6 text-[#5c5746] text-sm mt-auto font-medium">
                        <div class="flex items-center gap-2">
                            <span class="w-4 h-1.5 rounded-full bg-yellow-400 shadow-sm"></span> Products Active
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-4 h-1.5 rounded-full bg-red-400 shadow-sm"></span> Orders Pending
                        </div>
                    </div>
                </div>
            </div>

            <!-- List Preview Row -->
            <div class="px-2">
                <div class="bg-white rounded-[2rem] p-5 md:p-8 shadow-[0_8px_30px_rgb(0,0,0,0.02)]">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-lg font-bold">Recent Orders (Realtime)</h2>
                        <button onclick="switchTab('orders')"
                            class="w-8 h-8 bg-black text-white rounded-full flex items-center justify-center hover:bg-neutral-800 transition-colors">
                            <span class="material-symbols-outlined text-[18px]">add</span>
                        </button>
                    </div>

                    <div id="preview-orders" class="space-y-4">
                        <!-- Filled by JS -->
                        <div class="text-center text-sm text-gray-400 py-4"><span
                                class="animate-spin inline-block material-symbols-outlined align-middle">refresh</span>
                            Loading Firebase...</div>
                    </div>
                </div>
            </div>

        </div>

        <!-- VIEW: ORDERS -->
        <div id="view-orders" class="hidden px-2 space-y-6">
            <div class="bg-white rounded-[2rem] p-5 md:p-8 shadow-[0_8px_30px_rgb(0,0,0,0.02)] min-h-[500px]">
                <div class="flex justify-between items-center mb-8">
                    <h2 class="text-2xl font-bold">All Orders</h2>
                    <div
                        class="flex items-center gap-2 text-xs font-bold text-green-600 bg-green-50 px-3 py-1.5 rounded-full">
                        <span class="relative flex h-2 w-2"><span
                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span><span
                                class="relative inline-flex rounded-full h-2 w-2 bg-green-500"></span></span>
                        Live
                    </div>
                </div>

                <div id="orders-list" class="space-y-4">
                    <!-- Orders injected here -->
                </div>
            </div>
        </div>

        <!-- VIEW: PRODUCTS -->
        <div id="view-products" class="hidden px-2 space-y-6">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-2xl font-bold">Merchandise Catalog</h2>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                @foreach ($products as $product)
                    <div
                        class="bg-white rounded-[2rem] p-4 shadow-[0_8px_30px_rgb(0,0,0,0.02)] group hover:shadow-lg transition-all duration-300 flex flex-col">
                        <div
                            class="bg-[#F6F4F0] rounded-[1.5rem] p-4 flex-shrink-0 aspect-square mb-4 relative overflow-hidden">
                            <img src="{{ $product->image_url }}"
                                class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <h3 class="font-bold text-sm line-clamp-1 px-1">{{ $product->name }}</h3>
                        <p class="text-xs text-gray-500 mb-4 px-1">Rp {{ number_format($product->price, 0, ',', '.') }}
                        </p>

                        <div class="mt-auto flex gap-2">
                            <a href="{{ route('admin.products.edit', $product->id) }}"
                                class="flex-1 bg-[#f3f4f6] hover:bg-gray-200 text-black text-xs font-bold py-2.5 rounded-full text-center transition-colors">Edit</a>
                            <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST"
                                class="flex-1"
                                onsubmit="return confirmDeleteProduct(this, '{{ addslashes($product->name) }}');">
                                @csrf
                                <button type="submit"
                                    class="w-full bg-red-50 hover:bg-red-100 text-red-600 text-xs font-bold py-2.5 rounded-full transition-colors">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
            @if ($products->isEmpty())
                <div class="bg-white rounded-[2rem] p-12 text-center text-gray-400">
                    <span class="material-symbols-outlined text-4xl mb-2">inventory_2</span>
                    <p class="font-medium text-sm">No products found. Add some!</p>
                </div>
            @endif
        </div>

    </main>

    <!-- Navigation Logic -->
    <script>
        function switchTab(tab) {
            document.getElementById('view-dashboard').classList.add('hidden');
            document.getElementById('view-orders').classList.add('hidden');
            document.getElementById('view-products').classList.add('hidden');

            document.querySelectorAll('.nav-item').forEach(el => {
                el.classList.remove('active');
                // Reset icons to outlined (unless they are filled by default)
                let icon = el.querySelector('.material-symbols-outlined');
                if (icon) icon.style.fontVariationSettings = "'FILL' 0";
            });

            document.getElementById('view-' + tab).classList.remove('hidden');

            let activeBtn = document.getElementById('btn-' + tab);
            activeBtn.classList.add('active');
            let activeIcon = activeBtn.querySelector('.material-symbols-outlined');
            if (activeIcon) activeIcon.style.fontVariationSettings = "'FILL' 1";
        }

        function formatDate(isoString) {
            if (!isoString) return '-';
            const d = new Date(isoString);
            return d.toLocaleDateString('id-ID', {
                day: 'numeric',
                month: 'short'
            }) + ', ' + d.toLocaleTimeString('id-ID', {
                hour: '2-digit',
                minute: '2-digit'
            });
        }
    </script>

    <!-- Firebase JS Setup for Orders -->
    @include('components.firebase-config')
    <script>
        <!-- Firebase JS Setup for Orders 
        -->
        @include('components.firebase-config')
    <script>
        function loadAdminOrders() {
            const fullList = document.getElementById('orders-list');
            const previewList = document.getElementById('preview-orders');
            const statTotal = document.getElementById('stat-total-orders');
            const statPending = document.getElementById('stat-pending-orders');

            function renderOrders(docs) {
                if (!fullList || !previewList) return;
                fullList.innerHTML = '';
                previewList.innerHTML = '';

                if (!docs || docs.length === 0) {
                    const emptyHtml =
                        `<div class="p-6 text-center text-gray-400 font-medium text-sm">Belum ada pesanan masuk.</div>`;
                    fullList.innerHTML = emptyHtml;
                    previewList.innerHTML = emptyHtml;
                    if (statTotal) statTotal.innerText = '0';
                    if (statPending) statPending.innerText = '0';
                    return;
                }

                docs.sort((a, b) => new Date(b.created_at || 0) - new Date(a.created_at || 0));

                if (statTotal) statTotal.innerText = docs.length + '+';
                if (statPending) statPending.innerText = docs.length;
                const orderBadge = document.getElementById('order-badge');
                if (orderBadge) orderBadge.classList.remove('hidden');

                docs.forEach((data, index) => {
                    const itemCount = Object.keys(data.items || {}).length;

                    const subject = encodeURIComponent(`Galaksi XII Order - ${data.customer_name}`);
                    const body = encodeURIComponent(
                        `Hi ${data.customer_name},\n\nWe received your order.\nTotal items: ${itemCount}\n\nThanks!`
                        );
                    const mailtoLink = data.customer_email ?
                        `mailto:${data.customer_email}?subject=${subject}&body=${body}` :
                        `mailto:?subject=${subject}&body=${body}`;

                    let itemsPillsHtml = '';
                    if (data.items) {
                        Object.values(data.items).forEach(item => {
                            itemsPillsHtml += `
                                <div class="flex items-center gap-2 bg-white border border-gray-200 rounded-full p-1 pr-3 shadow-sm shrink-0">
                                    <img src="${item.image_url || 'https://via.placeholder.com/32?text=Img'}" class="w-8 h-8 rounded-full object-cover bg-gray-50 border border-gray-100" onerror="this.src='https://via.placeholder.com/32?text=Img'">
                                    <div class="flex flex-col">
                                        <span class="text-[10px] font-bold text-gray-800 leading-tight truncate max-w-[120px]">${item.name}</span>
                                        <span class="text-[9px] text-gray-500 font-medium">Qty: ${item.quantity}</span>
                                    </div>
                                </div>
                            `;
                        });
                    }

                    // Premium List Item Design (Mobile Responsive)
                    const orderHtml = `
                        <div class="bg-white md:bg-transparent p-4 hover:bg-[#F6F4F0] rounded-2xl border border-gray-100 md:border-transparent transition-all flex flex-col xl:flex-row xl:items-center justify-between gap-3 group shadow-sm md:shadow-none">
                            <div class="flex items-center justify-between xl:w-1/4 shrink-0">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 md:w-12 md:h-12 bg-gray-100 rounded-full flex items-center justify-center text-gray-500 shrink-0">
                                        <span class="material-symbols-outlined text-[18px] md:text-[20px]">person</span>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-sm text-gray-900 leading-snug">${data.customer_name || 'Guest'}</h4>
                                        <p class="text-xs text-gray-500 font-medium">Kelas: ${data.school_class || '-'} • WA: ${data.whatsapp_number || '-'}</p>
                                    </div>
                                </div>
                                <span class="text-[10px] text-gray-400 font-medium sm:hidden">${formatDate(data.created_at)}</span>
                            </div>
                            
                            <!-- Items List -->
                            <div class="flex-1 flex overflow-x-auto no-scrollbar gap-2 py-1 items-center">
                                ${itemsPillsHtml}
                            </div>

                            <div class="flex items-center gap-3 md:gap-6 justify-between xl:justify-end xl:w-1/4 shrink-0 pt-2 md:pt-0 border-t md:border-0 border-gray-50">
                                <div class="text-right hidden sm:block">
                                    <p class="text-xs font-bold text-gray-700">${itemCount} Items</p>
                                    <p class="text-[10px] text-gray-400 font-medium">${formatDate(data.created_at)}</p>
                                </div>
                                <div class="flex items-center gap-1.5 flex-wrap">
                                    <span class="bg-gray-100 text-gray-600 px-2.5 py-1 rounded-full text-[10px] font-bold">${data.payment_method || 'BCA'}</span>
                                    ${data.payment_status === 'Lunas' 
                                        ? '<span class="bg-green-100 text-green-700 px-2.5 py-1 rounded-full text-[10px] font-bold flex items-center gap-1"><span class="w-1.5 h-1.5 rounded-full bg-green-500"></span> Lunas</span>'
                                        : '<span class="bg-red-100 text-red-700 px-2.5 py-1 rounded-full text-[10px] font-bold flex items-center gap-1"><span class="w-1.5 h-1.5 rounded-full bg-red-500"></span> Belum Lunas</span>'
                                    }
                                </div>
                                
                                <div class="flex items-center gap-1.5">
                                    <button onclick="togglePaymentStatus('${data.id}', '${data.payment_status}', '${(data.customer_name || 'Guest').replace(/'/g, "\\'")}')" class="w-8 h-8 rounded-full ${data.payment_status === 'Lunas' ? 'bg-green-500 text-white border-green-600 hover:bg-green-600' : 'bg-white border border-gray-200 text-gray-400 hover:text-green-500 hover:border-green-500'} flex items-center justify-center transition-colors shrink-0" title="${data.payment_status === 'Lunas' ? 'Batalkan Lunas' : 'Tandai Lunas'}">
                                        <span class="material-symbols-outlined text-[16px]">${data.payment_status === 'Lunas' ? 'check_circle' : 'payments'}</span>
                                    </button>
                                    <button onclick="showOrderDetails('${data.id}')" class="w-8 h-8 rounded-full bg-white border border-gray-200 flex items-center justify-center text-gray-400 hover:text-black hover:border-black transition-colors shrink-0" title="Lihat Detail">
                                        <span class="material-symbols-outlined text-[16px]">visibility</span>
                                    </button>
                                    <a href="${mailtoLink}" class="w-8 h-8 rounded-full bg-white border border-gray-200 flex items-center justify-center text-gray-400 hover:text-black hover:border-black transition-colors shrink-0" title="Kirim Email">
                                        <span class="material-symbols-outlined text-[16px]">mail</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    `;

                    fullList.insertAdjacentHTML('beforeend', orderHtml);
                    if (index < 3) {
                        previewList.insertAdjacentHTML('beforeend', orderHtml);
                    }
                });

                window.allOrders = docs;
            }

            // 1. Listen to Firestore
            if (window.FirebaseDB && window.collection && window.onSnapshot) {
                const ordersRef = window.collection(window.FirebaseDB, 'orders');
                window.onSnapshot(ordersRef, (snapshot) => {
                    const docs = [];
                    snapshot.forEach(doc => {
                        docs.push({
                            id: doc.id,
                            ...doc.data()
                        });
                    });

                    if (docs.length > 0) {
                        renderOrders(docs);
                    } else {
                        // Fallback to RTDB if Firestore is empty
                        loadFromRTDB();
                    }
                }, (err) => {
                    console.warn("Firestore listener error, falling back to RTDB:", err);
                    loadFromRTDB();
                });
            } else {
                loadFromRTDB();
            }

            // 2. Fallback to Realtime Database
            function loadFromRTDB() {
                if (window.FirebaseRTDB && window.ref && window.onValue) {
                    const rtdbOrdersRef = window.ref(window.FirebaseRTDB, 'orders');
                    window.onValue(rtdbOrdersRef, (snapshot) => {
                        const data = snapshot.val();
                        const docs = [];
                        if (data) {
                            Object.keys(data).forEach(key => {
                                docs.push({
                                    id: key,
                                    ...data[key]
                                });
                            });
                        }
                        renderOrders(docs);
                    });
                }
            }
        }

        if (window.FirebaseDB || window.FirebaseRTDB) {
            loadAdminOrders();
        } else {
            window.addEventListener('firebase-ready', loadAdminOrders);
        }

        // Fungsi Modal Detail Pesanan
        window.showOrderDetails = function(id) {
            if (!window.allOrders) return;
            const order = window.allOrders.find(o => o.id === id);
            if (!order) return;

            let itemsListHtml = '';
            let totalAmount = 0;
            if (order.items) {
                Object.values(order.items).forEach(item => {
                    const subtotal = (item.price || 0) * (item.quantity || 1);
                    totalAmount += subtotal;
                    itemsListHtml += `
                        <div class="flex items-center gap-3 py-2 border-b border-gray-100 last:border-0">
                            <img src="${item.image_url}" class="w-10 h-10 rounded-lg object-cover bg-gray-50 border border-gray-200">
                            <div class="flex-1 text-left">
                                <p class="text-sm font-bold text-gray-800 line-clamp-1">${item.name}</p>
                                <p class="text-xs text-gray-500">Rp ${new Intl.NumberFormat('id-ID').format(item.price || 0)} x ${item.quantity}</p>
                            </div>
                            <div class="text-right font-bold text-sm text-gray-900">
                                Rp ${new Intl.NumberFormat('id-ID').format(subtotal)}
                            </div>
                        </div>
                    `;
                });
            }

            Swal.fire({
                title: 'Detail Pesanan',
                html: `
                    <div class="text-left space-y-4">
                        <div class="bg-gray-50 p-4 rounded-xl text-sm space-y-2 border border-gray-200">
                            <div class="flex justify-between"><span class="text-gray-500">Nama</span> <span class="font-bold">${order.customer_name || '-'}</span></div>
                            <div class="flex justify-between"><span class="text-gray-500">Kelas</span> <span class="font-bold">${order.school_class || '-'}</span></div>
                            <div class="flex justify-between"><span class="text-gray-500">WhatsApp</span> <span class="font-bold">${order.whatsapp_number || '-'}</span></div>
                            <div class="flex justify-between"><span class="text-gray-500">Email</span> <span class="font-bold">${order.customer_email || '-'}</span></div>
                            <div class="flex justify-between"><span class="text-gray-500">Tanggal</span> <span class="font-bold">${formatDate(order.created_at)}</span></div>
                        </div>
                        
                        <div>
                            <h4 class="font-bold text-sm text-gray-900 mb-2 border-b pb-1">Daftar Barang</h4>
                            <div class="max-h-40 overflow-y-auto pr-1">
                                ${itemsListHtml}
                            </div>
                        </div>
                        
                        <div class="bg-yellow-50 p-4 rounded-xl border border-yellow-100 mb-4">
                            <div class="flex justify-between text-sm mb-1"><span class="text-yellow-700">Pembayaran</span> <span class="font-bold text-yellow-900">${order.payment_method || '-'}</span></div>
                            <div class="flex justify-between text-sm mb-2"><span class="text-yellow-700">Pengambilan</span> <span class="font-bold text-yellow-900">${order.delivery_method || '-'}</span></div>
                            <div class="flex justify-between text-lg mt-2 pt-2 border-t border-yellow-200"><span class="font-bold text-yellow-900">Total Harga</span> <span class="font-black text-black">Rp ${new Intl.NumberFormat('id-ID').format(totalAmount)}</span></div>
                        </div>

                        ${(order.payment_receipt_url && (order.payment_receipt_url.startsWith('http') || order.payment_receipt_url.startsWith('data:image'))) ? `
                                <div>
                                    <h4 class="font-bold text-sm text-gray-900 mb-2 border-b pb-1">Bukti Transfer</h4>
                                    <div onclick="openImageLightbox('${order.payment_receipt_url.replace(/'/g, "\\'")}')" class="cursor-pointer block rounded-xl overflow-hidden border border-gray-200 hover:border-black transition-all bg-gray-50 flex items-center justify-center relative group/img shadow-sm hover:shadow-md">
                                        <img src="${order.payment_receipt_url}" class="w-full object-contain max-h-48">
                                        <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover/img:opacity-100 transition-opacity">
                                            <span class="material-symbols-outlined text-white text-3xl">zoom_in</span>
                                        </div>
                                    </div>
                                </div>
                            ` : `
                                <div class="bg-gray-50 text-gray-500 text-center text-xs font-medium p-4 rounded-xl border border-dashed border-gray-200">
                                    ${order.payment_receipt_url ? `Bukti: ${order.payment_receipt_url}` : 'Bukti transfer tidak dilampirkan.'}
                                </div>
                            `}
                    </div>
                `,
                width: 'auto',
                showCloseButton: true,
                showConfirmButton: false,
                customClass: {
                    popup: 'rounded-[2.5rem] p-5 md:p-6 w-[92vw] max-w-lg'
                }
            });
        };

        // Lightbox Pop-up untuk melihat gambar bukti transfer ukuran penuh
        window.openImageLightbox = function(imageUrl) {
            if(!imageUrl) return;
            if (window.Swal) {
                Swal.fire({
                    title: 'Bukti Transfer Pembayaran',
                    imageUrl: imageUrl,
                    imageAlt: 'Foto Bukti Transfer',
                    showConfirmButton: true,
                    confirmButtonText: 'Tutup',
                    customClass: {
                        popup: 'rounded-[2rem] p-6 max-w-2xl',
                        image: 'max-h-[75vh] w-full object-contain rounded-2xl border border-gray-100 my-4 shadow-sm',
                        confirmButton: 'bg-black hover:bg-neutral-800 text-white font-bold py-3 px-8 rounded-full text-xs transition-all shadow-md'
                    },
                    buttonsStyling: false
                });
            }
        };

        // Confirm Delete Product
        window.confirmDeleteProduct = function(form, productName) {
            if (window.Swal) {
                Swal.fire({
                    title: 'Hapus Produk?',
                    text: `Apakah Anda yakin ingin menghapus produk "${productName}"? Tindakan ini tidak dapat dibatalkan.`,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Ya, Hapus Produk',
                    cancelButtonText: 'Batal',
                    customClass: {
                        confirmButton: 'bg-red-600 hover:bg-red-700 text-white font-bold py-3 px-6 rounded-full text-xs transition-all mx-1 shadow-sm',
                        cancelButton: 'bg-gray-100 hover:bg-gray-200 text-gray-800 font-bold py-3 px-6 rounded-full text-xs transition-all mx-1 shadow-sm',
                        popup: 'rounded-[2rem] p-6'
                    },
                    buttonsStyling: false
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
                return false;
            }
            return confirm(`Hapus produk "${productName}"?`);
        };

        // Confirm Admin Logout
        window.confirmAdminLogout = function(e) {
            e.preventDefault();
            const logoutUrl = e.currentTarget.href;
            if (window.Swal) {
                Swal.fire({
                    title: 'Keluar Dashboard?',
                    text: 'Apakah Anda yakin ingin keluar dari sesi Admin Dashboard?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Ya, Keluar',
                    cancelButtonText: 'Batal',
                    customClass: {
                        confirmButton: 'bg-red-600 hover:bg-red-700 text-white font-bold py-3 px-6 rounded-full text-xs transition-all mx-1 shadow-sm',
                        cancelButton: 'bg-gray-100 hover:bg-gray-200 text-gray-800 font-bold py-3 px-6 rounded-full text-xs transition-all mx-1 shadow-sm',
                        popup: 'rounded-[2rem] p-6'
                    },
                    buttonsStyling: false
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = logoutUrl;
                    }
                });
                return false;
            }
            window.location.href = logoutUrl;
            return false;
        };

        // Fungsi Update Status Pembayaran (Dengan Konfirmasi)
        window.togglePaymentStatus = function(orderId, currentStatus, customerName) {
            const newStatus = currentStatus === 'Lunas' ? 'Belum Lunas' : 'Lunas';
            const actionText = newStatus === 'Lunas' ? 'menandai LUNAS' : 'membatalkan status LUNAS';

            if (window.Swal) {
                Swal.fire({
                    title: 'Ubah Status Pembayaran?',
                    text: `Apakah Anda yakin ingin ${actionText} untuk pesanan atas nama "${customerName || 'Pelanggan'}"?`,
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonText: 'Ya, Ubah Status',
                    cancelButtonText: 'Batal',
                    customClass: {
                        confirmButton: 'bg-black hover:bg-neutral-800 text-white font-bold py-3 px-6 rounded-full text-xs transition-all mx-1 shadow-sm',
                        cancelButton: 'bg-gray-100 hover:bg-gray-200 text-gray-800 font-bold py-3 px-6 rounded-full text-xs transition-all mx-1 shadow-sm',
                        popup: 'rounded-[2rem] p-6'
                    },
                    buttonsStyling: false
                }).then(async (result) => {
                    if (result.isConfirmed) {
                        try {
                            const orderRef = window.doc(window.FirebaseDB, 'orders', orderId);
                            await window.updateDoc(orderRef, {
                                payment_status: newStatus
                            });

                            Swal.fire({
                                toast: true,
                                position: 'top-end',
                                icon: 'success',
                                title: `Status berhasil diubah menjadi ${newStatus}`,
                                showConfirmButton: false,
                                timer: 3000,
                                customClass: {
                                    popup: 'rounded-xl'
                                }
                            });
                        } catch (e) {
                            console.error(e);
                            Swal.fire('Error', 'Gagal mengubah status', 'error');
                        }
                    }
                });
            }
        };
    </script>

    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                if (window.Swal) {
                    Swal.fire({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        title: @json(session('success')),
                        showConfirmButton: false,
                        timer: 3500,
                        customClass: {
                            popup: 'rounded-xl font-headline-md'
                        }
                    });
                }
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                if (window.Swal) {
                    Swal.fire({
                        toast: true,
                        position: 'top-end',
                        icon: 'error',
                        title: @json(session('error')),
                        showConfirmButton: false,
                        timer: 4000,
                        customClass: {
                            popup: 'rounded-xl font-headline-md'
                        }
                    });
                }
            });
        </script>
    @endif
</body>

</html>
