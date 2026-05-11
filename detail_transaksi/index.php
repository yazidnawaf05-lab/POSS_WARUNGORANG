<!DOCTYPE html>

<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Manrope:wght@600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "surface-container-lowest": "#ffffff",
                    "on-background": "#0b1c30",
                    "outline-variant": "#bfc9c3",
                    "on-tertiary": "#ffffff",
                    "primary": "#003527",
                    "on-tertiary-container": "#31c98f",
                    "surface": "#f8f9ff",
                    "primary-fixed": "#b0f0d6",
                    "surface-variant": "#d3e4fe",
                    "surface-bright": "#f8f9ff",
                    "on-tertiary-fixed": "#002113",
                    "surface-container-low": "#eff4ff",
                    "inverse-primary": "#95d3ba",
                    "surface-container-highest": "#d3e4fe",
                    "primary-container": "#064e3b",
                    "secondary-fixed": "#dae2fd",
                    "on-tertiary-fixed-variant": "#005236",
                    "on-secondary-fixed-variant": "#3f465c",
                    "on-primary-fixed-variant": "#0b513d",
                    "tertiary-fixed-dim": "#4edea3",
                    "on-primary-container": "#80bea6",
                    "inverse-on-surface": "#eaf1ff",
                    "tertiary": "#003623",
                    "primary-fixed-dim": "#95d3ba",
                    "on-secondary-fixed": "#131b2e",
                    "surface-container-high": "#dce9ff",
                    "error": "#ba1a1a",
                    "tertiary-container": "#004f34",
                    "secondary-container": "#dae2fd",
                    "secondary": "#565e74",
                    "surface-container": "#e5eeff",
                    "surface-dim": "#cbdbf5",
                    "on-surface-variant": "#404944",
                    "on-secondary": "#ffffff",
                    "inverse-surface": "#213145",
                    "background": "#f8f9ff",
                    "on-primary-fixed": "#002117",
                    "on-surface": "#0b1c30",
                    "error-container": "#ffdad6",
                    "outline": "#707974",
                    "on-error-container": "#93000a",
                    "secondary-fixed-dim": "#bec6e0",
                    "tertiary-fixed": "#6ffbbe",
                    "surface-tint": "#2b6954",
                    "on-secondary-container": "#5c647a",
                    "on-primary": "#ffffff",
                    "on-error": "#ffffff"
            },
            "borderRadius": {
                    "DEFAULT": "0.125rem",
                    "lg": "0.25rem",
                    "xl": "0.5rem",
                    "full": "0.75rem"
            },
            "spacing": {
                    "stack-sm": "8px",
                    "stack-md": "16px",
                    "gutter": "24px",
                    "container-max": "1280px",
                    "margin": "32px",
                    "stack-lg": "24px",
                    "section-padding": "120px"
            },
            "fontFamily": {
                    "label-md": ["Inter"],
                    "display-xl": ["Manrope"],
                    "headline-lg": ["Manrope"],
                    "headline-sm": ["Manrope"],
                    "headline-md": ["Manrope"],
                    "body-lg": ["Inter"],
                    "body-md": ["Inter"],
                    "label-sm": ["Inter"]
            },
            "fontSize": {
                    "label-md": ["14px", {"lineHeight": "20px", "letterSpacing": "0.02em", "fontWeight": "500"}],
                    "display-xl": ["60px", {"lineHeight": "72px", "letterSpacing": "-0.02em", "fontWeight": "800"}],
                    "headline-lg": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                    "headline-sm": ["24px", {"lineHeight": "32px", "letterSpacing": "0em", "fontWeight": "600"}],
                    "headline-md": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                    "body-lg": ["18px", {"lineHeight": "28px", "letterSpacing": "0em", "fontWeight": "400"}],
                    "body-md": ["16px", {"lineHeight": "24px", "letterSpacing": "0em", "fontWeight": "400"}],
                    "label-sm": ["12px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600"}]
            }
          },
        },
      }
    </script>
<style>
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            display: inline-block;
            vertical-align: middle;
        }
    </style>
<style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
  </head>
<body class="bg-background text-on-background font-body-md selection:bg-primary-fixed selection:text-on-primary-fixed">
<!-- TopAppBar Shell -->
<header class="fixed top-0 left-0 w-full z-50 flex justify-between items-center px-6 h-16 bg-white/80 dark:bg-slate-950/80 backdrop-blur-md shadow-sm border-b border-slate-100 dark:border-slate-800">
<div class="flex items-center gap-4">
<div class="w-10 h-10 rounded-full overflow-hidden bg-surface-container border border-outline-variant">
<img alt="User Profile" data-alt="A professional headshot of a friendly Indonesian man in his 30s, dressed in a neat casual outfit. The lighting is soft and natural, emphasizing a warm and welcoming atmosphere. The background is a clean, minimalist corporate office with subtle greenery, maintaining a high-end light-mode aesthetic consistent with the Emerald Green brand palette." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCzzjsB1JzGmT0wayrSrJX6XmykjJqhcd--PwauhkkhLxPG8PE7T5ab3IgxJy4ocJErGEA6egVCV8YZ-aveeC7EUwHHfFTVMJwrk0vXd_OfjQTyzleJtkvWib6juUWWhFlSRlGHQXij__8lDY1IX26nhv1jJEOsThzNBqpU6WhMniCAJWp6UEdfpa0o1yJXa3KZpBIlUtm2Z0ZE_igLHpxpRIZfL9rgKEtY3nP50ScyesZipIWKLuStaDSwWRKgfreAoqB1KCmOuRk"/>
</div>
<span class="text-xl font-bold text-emerald-900 dark:text-emerald-50 tracking-tighter font-headline-sm">WarungModern</span>
</div>
<div class="flex items-center gap-6">
<nav class="hidden md:flex gap-8 items-center">
<a class="font-manrope font-semibold text-lg tracking-tight text-emerald-900 dark:text-emerald-50 font-bold hover:bg-slate-50 dark:hover:bg-slate-900 transition-colors px-2 py-1 rounded" href="#">Home</a>
<a class="font-manrope font-semibold text-lg tracking-tight text-slate-500 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-900 transition-colors px-2 py-1 rounded" href="#">Orders</a>
<a class="font-manrope font-semibold text-lg tracking-tight text-slate-500 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-900 transition-colors px-2 py-1 rounded" href="#">Promos</a>
</nav>
<button class="material-symbols-outlined text-emerald-900 dark:text-emerald-50 p-2 hover:bg-slate-50 dark:hover:bg-slate-900 transition-colors rounded-full" data-icon="shopping_cart">shopping_cart</button>
</div>
</header>
<main class="pt-16 pb-32">
<!-- Hero Section -->
<section class="relative w-full py-section-padding px-margin overflow-hidden">
<div class="max-w-container-max mx-auto grid grid-cols-1 md:grid-cols-12 gap-gutter items-center">
<div class="md:col-span-6 space-y-stack-lg z-10">
<div class="inline-flex items-center gap-2 bg-emerald-50 text-on-tertiary-fixed-variant px-4 py-2 rounded-full border border-primary-fixed">
<span class="material-symbols-outlined text-[18px]" data-icon="verified" data-weight="fill" style="font-variation-settings: 'FILL' 1;">verified</span>
<span class="font-label-sm text-label-sm uppercase tracking-widest">Kelezatan Tradisional Modern</span>
</div>
<h1 class="font-display-xl text-display-xl text-primary leading-tight">Selamat Datang di WarungModern.</h1>
<p class="font-body-lg text-body-lg text-secondary max-w-xl">
                        Nikmati cita rasa autentik Nusantara yang disajikan dengan standar kualitas modern. Kami menghadirkan kehangatan masakan rumah langsung ke meja Anda.
                    </p>
<div class="flex flex-wrap gap-stack-md pt-stack-sm">
<button class="px-8 py-4 bg-primary text-on-primary font-label-md text-label-md rounded-xl hover:brightness-110 transition-all shadow-lg active:scale-95">Pesan Sekarang</button>
<button class="px-8 py-4 bg-transparent border border-outline text-primary font-label-md text-label-md rounded-xl hover:bg-primary/5 transition-all active:scale-95">Lihat Menu</button>
</div>
</div>
<div class="md:col-span-6 relative h-[500px]">
<div class="absolute inset-0 bg-primary-fixed-dim/20 rounded-[40px] rotate-3 -z-10"></div>
<div class="w-full h-full rounded-[40px] overflow-hidden shadow-2xl">
<img alt="Indonesian Signature Dish" class="w-full h-full object-cover" data-alt="A premium close-up of gourmet Indonesian Nasi Goreng served on a rustic ceramic plate. The rice is golden-brown, topped with a perfectly fried sunny-side-up egg, fresh cucumber slices, and vibrant red chili garnishes. The lighting is sophisticated and warm, highlighting the textures of the food. The scene is set in a modern, minimalist dining environment with an elegant emerald green and slate-navy accent palette." src="https://lh3.googleusercontent.com/aida-public/AB6AXuB7URUNqYSPQJi-R_FLXqu_iHkwMOtQ1iFQHpGm0A23Gk9uhxL9bsOJEAaUFxlKLAW-yT5PyqQlgHRksDL0WXHF6Qoirglvb7I0gvTy8DpOv_PXiuy3NKywxyhgGrDQPzbNW6VRgy0GcOx0ur3ZvkhVKsReh6IlPxg5VrfV4Ds0eotMI1AWFhawm5VjQhqYUFXkhllAjbn_oWzOpo53pSdtshoZzSxnFI-V_AlsA63XTVXhURgfsosDGR-J2v9WKlcLRDJWIDdOJnY"/>
</div>
<!-- Floating Badge -->
<div class="absolute -bottom-6 -left-6 bg-white p-6 rounded-2xl shadow-xl border border-slate-100 flex items-center gap-4">
<div class="bg-primary-fixed p-3 rounded-full">
<span class="material-symbols-outlined text-primary" data-icon="star" data-weight="fill" style="font-variation-settings: 'FILL' 1;">star</span>
</div>
<div>
<p class="font-headline-sm text-headline-sm text-primary">4.9/5.0</p>
<p class="font-label-sm text-label-sm text-secondary">Kepuasan Pelanggan</p>
</div>
</div>
</div>
</div>
</section>
<!-- Kategori (Categories) Horizontal Scroll -->
<section class="py-stack-lg bg-surface">
<div class="max-w-container-max mx-auto px-margin">
<div class="flex items-center justify-between mb-stack-md">
<h2 class="font-headline-md text-headline-md text-primary">Pilih Kategori</h2>
<a class="text-primary font-label-md text-label-md hover:underline" href="#">Lihat Semua</a>
</div>
<div class="flex gap-stack-md overflow-x-auto no-scrollbar pb-4 -mx-margin px-margin">
<!-- Category Item -->
<button class="flex flex-col items-center gap-3 min-w-[100px] group transition-all">
<div class="w-20 h-20 rounded-full bg-white flex items-center justify-center shadow-sm border border-slate-100 group-hover:border-primary group-hover:shadow-md transition-all">
<span class="material-symbols-outlined text-primary text-3xl" data-icon="lunch_dining">lunch_dining</span>
</div>
<span class="font-label-md text-label-md text-secondary group-hover:text-primary transition-colors">Semua</span>
</button>
<button class="flex flex-col items-center gap-3 min-w-[100px] group">
<div class="w-20 h-20 rounded-full bg-primary flex items-center justify-center shadow-lg shadow-primary/20">
<span class="material-symbols-outlined text-on-primary text-3xl" data-icon="rice_bowl">rice_bowl</span>
</div>
<span class="font-label-md text-label-md text-primary font-bold">Nasi</span>
</button>
<button class="flex flex-col items-center gap-3 min-w-[100px] group transition-all">
<div class="w-20 h-20 rounded-full bg-white flex items-center justify-center shadow-sm border border-slate-100 group-hover:border-primary group-hover:shadow-md transition-all">
<span class="material-symbols-outlined text-primary text-3xl" data-icon="restaurant_menu">restaurant_menu</span>
</div>
<span class="font-label-md text-label-md text-secondary group-hover:text-primary transition-colors">Sate</span>
</button>
<button class="flex flex-col items-center gap-3 min-w-[100px] group transition-all">
<div class="w-20 h-20 rounded-full bg-white flex items-center justify-center shadow-sm border border-slate-100 group-hover:border-primary group-hover:shadow-md transition-all">
<span class="material-symbols-outlined text-primary text-3xl" data-icon="local_bar">local_bar</span>
</div>
<span class="font-label-md text-label-md text-secondary group-hover:text-primary transition-colors">Minuman</span>
</button>
<button class="flex flex-col items-center gap-3 min-w-[100px] group transition-all">
<div class="w-20 h-20 rounded-full bg-white flex items-center justify-center shadow-sm border border-slate-100 group-hover:border-primary group-hover:shadow-md transition-all">
<span class="material-symbols-outlined text-primary text-3xl" data-icon="cookie">cookie</span>
</div>
<span class="font-label-md text-label-md text-secondary group-hover:text-primary transition-colors">Cemilan</span>
</button>
<button class="flex flex-col items-center gap-3 min-w-[100px] group transition-all">
<div class="w-20 h-20 rounded-full bg-white flex items-center justify-center shadow-sm border border-slate-100 group-hover:border-primary group-hover:shadow-md transition-all">
<span class="material-symbols-outlined text-primary text-3xl" data-icon="bakery_dining">bakery_dining</span>
</div>
<span class="font-label-md text-label-md text-secondary group-hover:text-primary transition-colors">Roti</span>
</button>
</div>
</div>
</section>
<!-- Promo Banner -->
<section class="py-stack-lg">
<div class="max-w-container-max mx-auto px-margin">
<div class="relative bg-primary-container rounded-[32px] p-10 md:p-16 overflow-hidden flex flex-col md:flex-row items-center gap-stack-lg">
<!-- Background Pattern -->
<div class="absolute top-0 right-0 w-1/2 h-full bg-white/5 skew-x-12"></div>
<div class="flex-1 relative z-10 text-center md:text-left">
<span class="inline-block bg-tertiary-container text-tertiary-fixed font-label-sm text-label-sm px-4 py-1 rounded-full mb-6 uppercase tracking-[0.2em]">Promo Terbatas</span>
<h2 class="font-headline-lg text-headline-lg text-on-tertiary leading-tight mb-4">Diskon 50% Untuk Menu Pilihan!</h2>
<p class="font-body-lg text-body-lg text-on-primary-container/80 mb-8 max-w-lg">Gunakan kode promo <span class="font-bold text-white">MODERNMAKAN</span> untuk pembelian pertama Anda melalui aplikasi.</p>
<button class="px-10 py-4 bg-white text-primary font-label-md text-label-md rounded-xl hover:bg-slate-50 transition-all font-bold">Klaim Sekarang</button>
</div>
<div class="w-full md:w-1/3 relative z-10">
<img alt="Promo Food" class="rounded-3xl shadow-2xl border-4 border-white/20 transform md:rotate-3" data-alt="A vibrant, healthy salad bowl with roasted vegetables and grains, presented in a minimalist and clean composition. The lighting is bright and high-key, creating an energetic and fresh feeling. The colors are dominated by fresh greens and earthy tones, perfectly complementing the emerald green primary branding of the warung. The style is modern corporate minimalist." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA1qFLJhRaXwW7E5gIT51P4h-aa-b3v_ROuDrTH-BEg8EKy8xePokUVEUutZT1lOFaB2WD786XG5UxNpcaQY_6TNtZssHPpai3jAoXH6fxPFho2aH2Zq3mhaEQBC2plowH2PDR6wYfIZhIGR76EIJG6notD8UG3YdqYlc1-M9uzbB6ZqI-xi7TTX7zqzAwAz1ZNa0TdnHO7skL5I9i2XaGfJsTEe5rXXnF9ozQp9ruRit43me0Qo48hFuYyYWSQLYO_Wkz-0DXSftk"/>
</div>
</div>
</div>
</section>
<!-- Rekomendasi Spesial Section -->
<section class="py-stack-lg">
<div class="max-w-container-max mx-auto px-margin">
<div class="flex flex-col md:flex-row items-baseline justify-between mb-12 gap-4">
<div>
<h2 class="font-headline-md text-headline-md text-primary">Rekomendasi Spesial</h2>
<p class="font-body-md text-body-md text-secondary mt-2">Menu terbaik pilihan Chef kami untuk Anda hari ini.</p>
</div>
<div class="flex gap-stack-sm">
<button class="w-12 h-12 rounded-full border border-outline flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-all">
<span class="material-symbols-outlined" data-icon="chevron_left">chevron_left</span>
</button>
<button class="w-12 h-12 rounded-full border border-outline flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-all">
<span class="material-symbols-outlined" data-icon="chevron_right">chevron_right</span>
</button>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
<!-- Food Card 1 -->
<div class="bg-white rounded-[24px] overflow-hidden shadow-[0px_4px_20px_rgba(15,23,42,0.05)] border border-slate-100 hover:shadow-xl transition-all group">
<div class="h-64 overflow-hidden relative">
<div class="absolute top-4 left-4 z-10 bg-white/90 backdrop-blur-md px-3 py-1 rounded-lg">
<span class="font-label-sm text-label-sm text-primary flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]" data-icon="local_fire_department" data-weight="fill" style="font-variation-settings: 'FILL' 1;">local_fire_department</span> Terlaris
                                </span>
</div>
<img alt="Sate Kambing Muda" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="A gourmet presentation of Sate Kambing Muda (Young Lamb Satay) on a long dark plate. The meat is perfectly charred and glistening with sweet soy sauce glaze, accompanied by sliced shallots, bird's eye chilies, and tomato wedges. The background is a blurred high-end restaurant interior with warm ambient lighting and emerald green decorative elements." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAScBdjrVfTGOoM0VLmm9Mdzu7vOi6F_h--zFGVvdkQ6YuEESGSNrQUu120UNS9NvAeqzLS6dwWcsKgxS-pwda8N-sSPl60LJ8Nzov4RoxZZkgy628KYen4xnbEgpY4N86rDeT8QrgtWzd52BEFdapf1Tj6NgzFxRxSglqX2bPGWav3_ZH-rjp-fuf5yM5Zly8BTNlc1cBk98illzDBRn2j2kZ0N2Lu3z042n-IrH78IComLBjkTfZrAUoK11l2U0op2ybRIzkunaE"/>
</div>
<div class="p-8">
<div class="flex justify-between items-start mb-2">
<h3 class="font-headline-sm text-headline-sm text-primary">Sate Kambing Muda</h3>
<span class="font-headline-sm text-headline-sm text-primary-container">Rp 45rb</span>
</div>
<p class="font-body-md text-body-md text-secondary mb-6 line-clamp-2">Daging kambing pilihan yang empuk dibakar dengan bumbu kacang khas racikan rahasia.</p>
<div class="flex items-center justify-between pt-6 border-t border-slate-50">
<div class="flex items-center gap-1">
<span class="material-symbols-outlined text-yellow-500 text-[18px]" data-icon="star" data-weight="fill" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="font-label-md text-label-md text-on-background">4.8</span>
<span class="font-label-md text-label-md text-secondary ml-1">(120+)</span>
</div>
<button class="w-10 h-10 rounded-full bg-primary-fixed text-primary flex items-center justify-center hover:bg-primary hover:text-white transition-all">
<span class="material-symbols-outlined" data-icon="add">add</span>
</button>
</div>
</div>
</div>
<!-- Food Card 2 -->
<div class="bg-white rounded-[24px] overflow-hidden shadow-[0px_4px_20px_rgba(15,23,42,0.05)] border border-slate-100 hover:shadow-xl transition-all group">
<div class="h-64 overflow-hidden relative">
<img alt="Nasi Goreng Spesial" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="A top-down view of Nasi Goreng Spesial served with prawns, chicken pieces, and a side of traditional shrimp crackers (krupuk). The dish is plated elegantly with a garnish of cilantro and lime. The image captures the rich textures and golden-orange colors of the rice against a clean, light stone surface, maintaining a professional corporate food photography style." src="https://lh3.googleusercontent.com/aida-public/AB6AXuB_VISePyyRS-ZLyGfInI0-ofMVJgtkRUNFfigbwhhWUudM0igV8o0MUOFYaFA5Suv5dAey9gIgX9D4tl1NKh-7fn8X7eQR9QNhxrT0E2kYbjnSh4PBnxJM-RQwZ3Dn68FvpXuHL2jz-FrZKPd2DU2NHAa3CG_4dcHpmTVsXGuti9D9EmNa67EE2JY6RTRoqXF09cMrx3juQITiXfljV1A94CZEwHUCnywXeteRgGCIxB_xDEOQ8lcm7k3E0WSzK_qimbvTzYVJl9o"/>
</div>
<div class="p-8">
<div class="flex justify-between items-start mb-2">
<h3 class="font-headline-sm text-headline-sm text-primary">Nasi Goreng Spesial</h3>
<span class="font-headline-sm text-headline-sm text-primary-container">Rp 38rb</span>
</div>
<p class="font-body-md text-body-md text-secondary mb-6 line-clamp-2">Nasi goreng dengan bumbu rempah pilihan, lengkap dengan telur mata sapi, ayam suwir, dan udang.</p>
<div class="flex items-center justify-between pt-6 border-t border-slate-50">
<div class="flex items-center gap-1">
<span class="material-symbols-outlined text-yellow-500 text-[18px]" data-icon="star" data-weight="fill" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="font-label-md text-label-md text-on-background">4.9</span>
<span class="font-label-md text-label-md text-secondary ml-1">(250+)</span>
</div>
<button class="w-10 h-10 rounded-full bg-primary-fixed text-primary flex items-center justify-center hover:bg-primary hover:text-white transition-all">
<span class="material-symbols-outlined" data-icon="add">add</span>
</button>
</div>
</div>
</div>
<!-- Food Card 3 -->
<div class="bg-white rounded-[24px] overflow-hidden shadow-[0px_4px_20px_rgba(15,23,42,0.05)] border border-slate-100 hover:shadow-xl transition-all group">
<div class="h-64 overflow-hidden relative">
<div class="absolute top-4 left-4 z-10 bg-emerald-500 text-white px-3 py-1 rounded-lg">
<span class="font-label-sm text-label-sm flex items-center gap-1">Baru</span>
</div>
<img alt="Es Campur Modern" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="A visually appealing display of Es Campur Modern, featuring colorful jellies, jackfruit slices, and young coconut meat in a tall, elegant glass. The ice is finely shaved and topped with a swirl of sweetened condensed milk and rose syrup. The background is a clean, bright, and airy cafe setting with soft natural light, reflecting the high-end minimalist brand identity." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDnCov46hRBUdYcahejJI3Z2x5-GztyyqDt_OXO0mdtilPO5zy04Z7gw71Ecc03-2kbXR3oSrS71_IJOz3Y1rGb4csbWRtrH_Y9yOesIYLwRGx1XjijdJ84HTM70-RIoc5qCsLwjvue2Tme7xBsKgl7rzqmLJv2D_Hm3XKYwB6oPCHMLPyYl9DtVimr20Ms7CoMxnOfBa5YdYiTqgbkke_JF9HCs1xRb6MbPJgdsmZb5I9djQyDZCVg5PBGMjvGB7tQ8yWjELfYVxk"/>
</div>
<div class="p-8">
<div class="flex justify-between items-start mb-2">
<h3 class="font-headline-sm text-headline-sm text-primary">Es Campur Modern</h3>
<span class="font-headline-sm text-headline-sm text-primary-container">Rp 25rb</span>
</div>
<p class="font-body-md text-body-md text-secondary mb-6 line-clamp-2">Minuman segar dengan campuran buah tropis, agar-agar, dan susu kental manis yang melimpah.</p>
<div class="flex items-center justify-between pt-6 border-t border-slate-50">
<div class="flex items-center gap-1">
<span class="material-symbols-outlined text-yellow-500 text-[18px]" data-icon="star" data-weight="fill" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="font-label-md text-label-md text-on-background">4.7</span>
<span class="font-label-md text-label-md text-secondary ml-1">(80+)</span>
</div>
<button class="w-10 h-10 rounded-full bg-primary-fixed text-primary flex items-center justify-center hover:bg-primary hover:text-white transition-all">
<span class="material-symbols-outlined" data-icon="add">add</span>
</button>
</div>
</div>
</div>
</div>
</div>
</section>
</main>
<!-- BottomNavBar Shell -->
<nav class="fixed bottom-0 left-0 w-full z-50 flex justify-around items-center px-4 py-3 pb-safe bg-white dark:bg-slate-950 shadow-[0_-4px_20px_rgba(15,23,42,0.05)] border-t border-slate-100 dark:border-slate-800 md:hidden">
<a class="flex flex-col items-center justify-center text-emerald-900 dark:text-emerald-400 font-bold bg-emerald-50/50 dark:bg-emerald-900/20 rounded-lg py-1 px-3 Active: scale-90 transition-transform duration-150" href="#">
<span class="material-symbols-outlined" data-icon="home">home</span>
<span class="font-manrope text-[10px] font-medium uppercase tracking-widest">Home</span>
</a>
<a class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 py-1 px-3 hover:text-emerald-800 dark:hover:text-emerald-300 transition-colors" href="#">
<span class="material-symbols-outlined" data-icon="receipt_long">receipt_long</span>
<span class="font-manrope text-[10px] font-medium uppercase tracking-widest">Orders</span>
</a>
<a class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 py-1 px-3 hover:text-emerald-800 dark:hover:text-emerald-300 transition-colors" href="#">
<span class="material-symbols-outlined" data-icon="sell">sell</span>
<span class="font-manrope text-[10px] font-medium uppercase tracking-widest">Promos</span>
</a>
<a class="flex flex-col items-center justify-center text-slate-400 dark:text-slate-500 py-1 px-3 hover:text-emerald-800 dark:hover:text-emerald-300 transition-colors" href="#">
<span class="material-symbols-outlined" data-icon="person">person</span>
<span class="font-manrope text-[10px] font-medium uppercase tracking-widest">Profile</span>
</a>
</nav>
<!-- Desktop Footer Placeholder for completeness -->
<footer class="hidden md:block bg-surface-container py-12">
<div class="max-w-container-max mx-auto px-margin grid grid-cols-4 gap-8">
<div class="col-span-2">
<span class="text-xl font-bold text-emerald-900 tracking-tighter mb-4 block">WarungModern</span>
<p class="text-secondary max-w-sm">Membawa tradisi kuliner Indonesia ke era digital dengan kemudahan akses dan kualitas terbaik.</p>
</div>
<div>
<h4 class="font-bold text-primary mb-4">Layanan</h4>
<ul class="space-y-2 text-secondary">
<li><a class="hover:text-primary" href="#">Bantuan</a></li>
<li><a class="hover:text-primary" href="#">Syarat &amp; Ketentuan</a></li>
<li><a class="hover:text-primary" href="#">Kebijakan Privasi</a></li>
</ul>
</div>
<div>
<h4 class="font-bold text-primary mb-4">Hubungi Kami</h4>
<ul class="space-y-2 text-secondary">
<li>yazidnawaf05@gmail.com</li>
<li>0822-****-****</li>
<li>Malang, Indonesia</li>
</ul>
</div>
</div>
<div class="max-w-container-max mx-auto px-margin mt-12 pt-8 border-t border-outline-variant flex justify-between items-center text-label-sm text-secondary">
<p>© 2026 WA. Semua Hak Dilindungi.</p>
<div class="flex gap-4">
<span class="material-symbols-outlined" data-icon="language">language</span>
<span>Bahasa Indonesia</span>
</div>
</div>
</footer>
</body></html>