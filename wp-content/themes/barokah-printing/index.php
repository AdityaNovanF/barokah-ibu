<?php get_header(); ?>

<!-- Hero Section -->
<section id="home" class="bg-gradient-to-r from-blue-600 to-blue-800 text-white pt-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                    Solusi Percetakan <span class="text-yellow-400">Berkualitas</span> untuk Bisnis Anda
                </h1>
                <p class="text-lg mb-8 text-blue-100">
                    Wujudkan ide kreatif Anda dengan layanan percetakan profesional. Kualitas terbaik, harga terjangkau, dan layanan yang memuaskan.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="https://wa.me/6282144888116" target="_blank" class="bg-yellow-400 text-blue-800 hover:bg-yellow-300 px-8 py-4 rounded-lg font-semibold text-lg transition duration-300 text-center flex items-center justify-center gap-2">
                        <i class="fab fa-whatsapp text-xl"></i>
                        Mulai Cetak
                    </a>
                    <a href="https://wa.me/6282144888116" target="_blank" class="border-2 border-white text-white hover:bg-white hover:text-blue-800 px-8 py-4 rounded-lg font-semibold text-lg transition duration-300 text-center flex items-center justify-center gap-2">
                        <i class="fas fa-phone text-lg"></i>
                        Hubungi Kami
                    </a>
                </div>
            </div>
            <div class="relative">
                <div class="bg-white p-8 rounded-lg shadow-2xl">
                    <img src="https://via.placeholder.com/500x400/4F46E5/FFFFFF?text=PRINTING+MACHINE" alt="Mesin Percetakan" class="w-full h-auto rounded-lg">
                </div>
                <!-- Floating Stats -->
                <div class="absolute -bottom-6 -left-6 bg-yellow-400 text-blue-800 p-4 rounded-lg shadow-lg">
                    <div class="text-2xl font-bold">1000+</div>
                    <div class="text-sm">Proyek Selesai</div>
                </div>
                <div class="absolute -top-6 -right-6 bg-white text-blue-800 p-4 rounded-lg shadow-lg">
                    <div class="text-2xl font-bold">24/7</div>
                    <div class="text-sm">Customer Support</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Mengapa Memilih Kami?</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Dengan pengalaman bertahun-tahun dan teknologi terdepan, kami memberikan layanan percetakan terbaik
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-print text-2xl text-blue-700"></i>
                </div>
                <h3 class="text-xl font-semibold mb-4">Kualitas Premium</h3>
                <p class="text-gray-600">Menggunakan mesin dan bahan berkualitas tinggi untuk hasil yang sempurna dan tahan lama.</p>
            </div>
            
            <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-clock text-2xl text-green-600"></i>
                </div>
                <h3 class="text-xl font-semibold mb-4">Pengerjaan Cepat</h3>
                <p class="text-gray-600">Proses produksi yang efisien dengan waktu pengerjaan yang sesuai deadline Anda.</p>
            </div>
            
            <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                <div class="bg-yellow-100 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-dollar-sign text-2xl text-yellow-500"></i>
                </div>
                <h3 class="text-xl font-semibold mb-4">Harga Kompetitif</h3>
                <p class="text-gray-600">Dapatkan kualitas terbaik dengan harga yang bersaing dan berbagai paket hemat.</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="layanan" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Layanan Kami</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Kami menyediakan berbagai layanan percetakan untuk memenuhi kebutuhan bisnis dan personal Anda
            </p>
        </div>
        
        <!-- Services Horizontal Scroll -->
        <div class="relative">
            <!-- Scroll Container -->
            <div id="servicesScrollContainer" class="overflow-x-auto scrollbar-hide" style="scrollbar-width: none; -ms-overflow-style: none;">
                <div id="servicesScrollTrack" class="flex gap-8 pb-4 items-stretch" style="width: max-content; min-height: 600px;">
                    <!-- Service Card 1 - Cetak A3+ -->
                    <div class="group relative bg-gradient-to-br from-white to-blue-50 backdrop-blur-sm border border-blue-200/30 rounded-2xl overflow-hidden hover:shadow-2xl hover:shadow-blue-500/10 transition-all duration-500 hover:-translate-y-2 flex flex-col h-full flex-none" style="width: 350px;">
                            <!-- Decorative elements -->
                            <div class="absolute top-4 right-4 w-20 h-20 bg-gradient-to-br from-yellow-400/20 to-blue-500/20 rounded-full blur-xl group-hover:scale-150 transition-all duration-700"></div>
                            <div class="absolute -top-2 -left-2 w-16 h-16 bg-gradient-to-br from-blue-500/20 to-yellow-400/20 rounded-full blur-lg group-hover:rotate-45 transition-all duration-500"></div>
                            
                            <div class="relative overflow-hidden bg-gradient-to-br from-blue-600 via-blue-700 to-blue-800 flex items-center justify-center h-52">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/Cetak A3+.jpg" alt="Cetak A3+" class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700 filter group-hover:brightness-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-blue-900/50 via-transparent to-transparent group-hover:from-blue-900/30 transition-all duration-500"></div>
                                <div class="absolute top-3 left-3 bg-yellow-500 text-blue-900 px-3 py-1 rounded-full text-xs font-black shadow-lg">
                                    🎯 BEST QUALITY
                                </div>
                            </div>
                            
                            <div class="p-6 flex flex-col flex-grow relative z-10">
                                <h3 class="text-xl font-bold mb-3 text-gray-800 group-hover:text-blue-700 transition-colors duration-300">Cetak A3+</h3>
                                <p class="text-gray-600 flex-grow leading-relaxed text-sm mb-6">Kualitas cetak premium di berbagai bahan. Ide besar Anda, kami wujudkan!</p>
                                
                                <div class="flex flex-col gap-4 mt-auto">
                                    <div class="flex justify-between items-center">
                                        <div class="flex flex-col">
                                            <span class="text-xs text-gray-500 uppercase tracking-wide font-semibold">Mulai dari</span>
                                            <span class="text-2xl font-black text-blue-700">Rp 20.000</span>
                                        </div>
                                        <div class="bg-gradient-to-r from-yellow-400 to-yellow-500 rounded-full p-3 group-hover:scale-110 transition-all duration-300 shadow-lg">
                                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <button onclick="goToContactForm('cetak-a3')" class="w-full bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white px-6 py-3 rounded-xl font-bold transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105 flex items-center justify-center gap-2">
                                        <span>Pesan Sekarang</span>
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    
                    <!-- Service Card 2 - Cetak Brosur -->
                    <div class="group relative bg-gradient-to-br from-white to-yellow-50 backdrop-blur-sm border border-yellow-200/30 rounded-2xl overflow-hidden hover:shadow-2xl hover:shadow-yellow-500/10 transition-all duration-500 hover:-translate-y-2 flex flex-col h-full flex-none" style="width: 350px;">
                            <!-- Decorative elements -->
                            <div class="absolute top-4 right-4 w-20 h-20 bg-gradient-to-br from-blue-400/20 to-yellow-500/20 rounded-full blur-xl group-hover:scale-150 transition-all duration-700"></div>
                            <div class="absolute -top-2 -left-2 w-16 h-16 bg-gradient-to-br from-yellow-500/20 to-blue-400/20 rounded-full blur-lg group-hover:rotate-45 transition-all duration-500"></div>
                            
                            <div class="relative overflow-hidden bg-gradient-to-br from-blue-600 via-blue-700 to-blue-800 flex items-center justify-center h-52">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/Cetak Brosur.jpg" alt="Cetak Brosur" class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700 filter group-hover:brightness-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-blue-900/50 via-transparent to-transparent group-hover:from-blue-900/30 transition-all duration-500"></div>
                                <div class="absolute top-3 left-3 bg-yellow-500 text-blue-900 px-3 py-1 rounded-full text-xs font-black shadow-lg">
                                    📈 MARKETING
                                </div>
                            </div>
                            
                            <div class="p-6 flex flex-col flex-grow relative z-10">
                                <h3 class="text-xl font-bold mb-3 text-gray-800 group-hover:text-blue-700 transition-colors duration-300">Cetak Brosur</h3>
                                <p class="text-gray-600 mb-6 flex-grow leading-relaxed text-sm">Promosi efektif, harga hemat. Cetak Brosur untuk menjangkau lebih banyak pelanggan!</p>
                                
                                <div class="flex flex-col gap-4">
                                    <div class="flex justify-between items-center">
                                        <div class="flex flex-col">
                                            <span class="text-xs text-gray-500 uppercase tracking-wide font-semibold">Mulai dari</span>
                                            <span class="text-2xl font-black text-blue-700">Rp 7.000</span>
                                        </div>
                                        <div class="bg-gradient-to-r from-yellow-400 to-yellow-500 rounded-full p-3 group-hover:scale-110 transition-all duration-300 shadow-lg">
                                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <button onclick="goToContactForm('cetak-brosur')" class="w-full bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white px-6 py-3 rounded-xl font-bold transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105 flex items-center justify-center gap-2">
                                        <span>Pesan Sekarang</span>
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    
                    <!-- Service Card 3 - Cetak DTF -->
                    <div class="group relative bg-gradient-to-br from-white to-blue-50 backdrop-blur-sm border border-blue-200/30 rounded-2xl overflow-hidden hover:shadow-2xl hover:shadow-blue-500/10 transition-all duration-500 hover:-translate-y-2 flex flex-col h-full flex-none" style="width: 350px;">
                            <!-- Decorative elements -->
                            <div class="absolute top-4 right-4 w-20 h-20 bg-gradient-to-br from-yellow-400/20 to-blue-500/20 rounded-full blur-xl group-hover:scale-150 transition-all duration-700"></div>
                            <div class="absolute -top-2 -left-2 w-16 h-16 bg-gradient-to-br from-blue-500/20 to-yellow-400/20 rounded-full blur-lg group-hover:rotate-45 transition-all duration-500"></div>
                            
                            <div class="relative overflow-hidden bg-gradient-to-br from-blue-600 via-blue-700 to-blue-800 flex items-center justify-center h-52">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/Cetak DTF.jpg" alt="Cetak DTF" class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700 filter group-hover:brightness-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-blue-900/50 via-transparent to-transparent group-hover:from-blue-900/30 transition-all duration-500"></div>
                                <div class="absolute top-3 left-3 bg-yellow-500 text-blue-900 px-3 py-1 rounded-full text-xs font-black shadow-lg">
                                    🔥 HOT TREND
                                </div>
                            </div>
                            
                            <div class="p-6 flex flex-col flex-grow relative z-10">
                                <h3 class="text-xl font-bold mb-3 text-gray-800 group-hover:text-blue-700 transition-colors duration-300">Cetak DTF</h3>
                                <p class="text-gray-600 mb-6 flex-grow leading-relaxed text-sm">Sablon kaos modern. Hasil kuat, detail, anti pecah. Tingkatkan apparel Anda!</p>
                                
                                <div class="flex flex-col gap-4">
                                    <div class="flex justify-between items-center">
                                        <div class="flex flex-col">
                                            <span class="text-xs text-gray-500 uppercase tracking-wide font-semibold">Harga per meter</span>
                                            <span class="text-2xl font-black text-blue-700">Rp 50.000</span>
                                        </div>
                                        <div class="bg-gradient-to-r from-yellow-400 to-yellow-500 rounded-full p-3 group-hover:scale-110 transition-all duration-300 shadow-lg">
                                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <button onclick="goToContactForm('cetak-dtf')" class="w-full bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white px-6 py-3 rounded-xl font-bold transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105 flex items-center justify-center gap-2">
                                        <span>Pesan Sekarang</span>
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    
                    <!-- Service Card 4 - Cetak ID Card -->
                    <div class="group relative bg-gradient-to-br from-white to-blue-50 backdrop-blur-sm border border-blue-200/30 rounded-2xl overflow-hidden hover:shadow-2xl hover:shadow-blue-500/10 transition-all duration-500 hover:-translate-y-2 flex flex-col h-full flex-none" style="width: 350px;">
                            <!-- Decorative elements -->
                            <div class="absolute top-4 right-4 w-20 h-20 bg-gradient-to-br from-yellow-400/20 to-blue-500/20 rounded-full blur-xl group-hover:scale-150 transition-all duration-700"></div>
                            <div class="absolute -top-2 -left-2 w-16 h-16 bg-gradient-to-br from-blue-500/20 to-yellow-400/20 rounded-full blur-lg group-hover:rotate-45 transition-all duration-500"></div>
                            
                            <div class="relative overflow-hidden bg-gradient-to-br from-blue-600 via-blue-700 to-blue-800 flex items-center justify-center h-52">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/Cetak ID Card.jpg" alt="Cetak ID Card" class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700 filter group-hover:brightness-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-blue-900/50 via-transparent to-transparent group-hover:from-blue-900/30 transition-all duration-500"></div>
                                <div class="absolute top-3 left-3 bg-yellow-500 text-blue-900 px-3 py-1 rounded-full text-xs font-black shadow-lg">
                                    ⭐ TERLARIS
                                </div>
                            </div>
                            
                            <div class="p-6 flex flex-col flex-grow relative z-10">
                                <h3 class="text-xl font-bold mb-3 text-gray-800 group-hover:text-blue-700 transition-colors duration-300">Cetak ID Card</h3>
                                <p class="text-gray-600 mb-6 flex-grow leading-relaxed text-sm">Tampil profesional. Cetak ID Card berkualitas, langsung siap pakai!</p>
                                
                                <div class="flex flex-col gap-4">
                                    <div class="flex justify-between items-center">
                                        <div class="flex flex-col">
                                            <span class="text-xs text-gray-500 uppercase tracking-wide font-semibold">Mulai dari</span>
                                            <span class="text-2xl font-black text-blue-700">Rp 15.000</span>
                                        </div>
                                        <div class="bg-gradient-to-r from-yellow-400 to-yellow-500 rounded-full p-3 group-hover:scale-110 transition-all duration-300 shadow-lg">
                                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <button onclick="goToContactForm('cetak-id-card')" class="w-full bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white px-6 py-3 rounded-xl font-bold transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105 flex items-center justify-center gap-2">
                                        <span>Pesan Sekarang</span>
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    
                    <!-- Service Card 5 - Cetak Kalender -->
                    <div class="group relative bg-gradient-to-br from-white to-yellow-50 backdrop-blur-sm border border-yellow-200/30 rounded-2xl overflow-hidden hover:shadow-2xl hover:shadow-yellow-500/10 transition-all duration-500 hover:-translate-y-2 flex flex-col h-full flex-none" style="width: 350px;">
                            <!-- Decorative elements -->
                            <div class="absolute top-4 right-4 w-20 h-20 bg-gradient-to-br from-blue-400/20 to-yellow-500/20 rounded-full blur-xl group-hover:scale-150 transition-all duration-700"></div>
                            <div class="absolute -top-2 -left-2 w-16 h-16 bg-gradient-to-br from-yellow-500/20 to-blue-400/20 rounded-full blur-lg group-hover:rotate-45 transition-all duration-500"></div>
                            
                            <div class="relative overflow-hidden bg-gradient-to-br from-blue-600 via-blue-700 to-blue-800 flex items-center justify-center h-52">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/Cetak Kalender.jpg" alt="Cetak Kalender" class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700 filter group-hover:brightness-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-blue-900/50 via-transparent to-transparent group-hover:from-blue-900/30 transition-all duration-500"></div>
                                <div class="absolute top-3 left-3 bg-yellow-500 text-blue-900 px-3 py-1 rounded-full text-xs font-black shadow-lg">
                                    � CUSTOM
                                </div>
                            </div>
                            
                            <div class="p-6 flex flex-col flex-grow relative z-10">
                                <h3 class="text-xl font-bold mb-3 text-gray-800 group-hover:text-blue-700 transition-colors duration-300">Cetak Kalender</h3>
                                <p class="text-gray-600 mb-6 flex-grow leading-relaxed text-sm">Branding 365 hari! Cetak Kalender Custom untuk promosi atau hadiah.</p>
                                
                                <div class="flex flex-col gap-4">
                                    <div class="flex justify-between items-center">
                                        <div class="flex flex-col">
                                            <span class="text-xs text-gray-500 uppercase tracking-wide font-semibold">Mulai dari</span>
                                            <span class="text-2xl font-black text-blue-700">Rp 6.000</span>
                                        </div>
                                        <div class="bg-gradient-to-r from-yellow-400 to-yellow-500 rounded-full p-3 group-hover:scale-110 transition-all duration-300 shadow-lg">
                                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <button onclick="goToContactForm('cetak-kalender')" class="w-full bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white px-6 py-3 rounded-xl font-bold transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105 flex items-center justify-center gap-2">
                                        <span>Pesan Sekarang</span>
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    
                    <!-- Service Card 6 - PIN Ganci & Tag -->
                    <div class="group relative bg-gradient-to-br from-white to-blue-50 backdrop-blur-sm border border-blue-200/30 rounded-2xl overflow-hidden hover:shadow-2xl hover:shadow-blue-500/10 transition-all duration-500 hover:-translate-y-2 flex flex-col h-full flex-none" style="width: 350px;">
                            <!-- Decorative elements -->
                            <div class="absolute top-4 right-4 w-20 h-20 bg-gradient-to-br from-yellow-400/20 to-blue-500/20 rounded-full blur-xl group-hover:scale-150 transition-all duration-700"></div>
                            <div class="absolute -top-2 -left-2 w-16 h-16 bg-gradient-to-br from-blue-500/20 to-yellow-400/20 rounded-full blur-lg group-hover:rotate-45 transition-all duration-500"></div>
                            
                            <div class="relative overflow-hidden bg-gradient-to-br from-blue-600 via-blue-700 to-blue-800 flex items-center justify-center h-52">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/Cetak PIN Ganci & Tag.jpg" alt="Cetak PIN Ganci & Tag" class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700 filter group-hover:brightness-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-blue-900/50 via-transparent to-transparent group-hover:from-blue-900/30 transition-all duration-500"></div>
                                <div class="absolute top-3 left-3 bg-yellow-500 text-blue-900 px-3 py-1 rounded-full text-xs font-black shadow-lg">
                                    🎨 CREATIVE
                                </div>
                            </div>
                            
                            <div class="p-6 flex flex-col flex-grow relative z-10">
                                <h3 class="text-xl font-bold mb-3 text-gray-800 group-hover:text-blue-700 transition-colors duration-300">PIN Ganci & Tag</h3>
                                <p class="text-gray-600 mb-6 flex-grow leading-relaxed text-sm">Souvenir keren & identitas unik. PIN, Ganci, Name Tag custom, pesan sekarang!</p>
                                
                                <div class="flex flex-col gap-4">
                                    <div class="flex justify-between items-center">
                                        <div class="flex flex-col">
                                            <span class="text-xs text-gray-500 uppercase tracking-wide font-semibold">Mulai dari</span>
                                            <span class="text-2xl font-black text-blue-700">Rp 8.000</span>
                                        </div>
                                        <div class="bg-gradient-to-r from-yellow-400 to-yellow-500 rounded-full p-3 group-hover:scale-110 transition-all duration-300 shadow-lg">
                                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <button onclick="goToContactForm('pin-ganci-tag')" class="w-full bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white px-6 py-3 rounded-xl font-bold transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105 flex items-center justify-center gap-2">
                                        <span>Pesan Sekarang</span>
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    
                    <!-- Service Card 7 - Cetak Undangan -->
                    <div class="group relative bg-gradient-to-br from-white to-yellow-50 backdrop-blur-sm border border-yellow-200/30 rounded-2xl overflow-hidden hover:shadow-2xl hover:shadow-yellow-500/10 transition-all duration-500 hover:-translate-y-2 flex flex-col h-full flex-none" style="width: 350px;">
                            <!-- Decorative elements -->
                            <div class="absolute top-4 right-4 w-20 h-20 bg-gradient-to-br from-blue-400/20 to-yellow-500/20 rounded-full blur-xl group-hover:scale-150 transition-all duration-700"></div>
                            <div class="absolute -top-2 -left-2 w-16 h-16 bg-gradient-to-br from-yellow-500/20 to-blue-400/20 rounded-full blur-lg group-hover:rotate-45 transition-all duration-500"></div>
                            
                            <div class="relative overflow-hidden bg-gradient-to-br from-blue-600 via-blue-700 to-blue-800 flex items-center justify-center h-52">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/Cetak Undangan.jpg" alt="Cetak Undangan" class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700 filter group-hover:brightness-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-blue-900/50 via-transparent to-transparent group-hover:from-blue-900/30 transition-all duration-500"></div>
                                <div class="absolute top-3 left-3 bg-yellow-500 text-blue-900 px-3 py-1 rounded-full text-xs font-black shadow-lg">
                                    � POPULER
                                </div>
                            </div>
                            
                            <div class="p-6 flex flex-col flex-grow relative z-10">
                                <h3 class="text-xl font-bold mb-3 text-gray-800 group-hover:text-blue-700 transition-colors duration-300">Cetak Undangan</h3>
                                <p class="text-gray-600 mb-6 flex-grow leading-relaxed text-sm">Momen spesial, hasil maksimal! Cetak Undangan elegan dan custom. Buat kesan tak terlupakan!</p>
                                
                                <div class="flex flex-col gap-4">
                                    <div class="flex justify-between items-center">
                                        <div class="flex flex-col">
                                            <span class="text-xs text-gray-500 uppercase tracking-wide font-semibold">Mulai dari</span>
                                            <span class="text-2xl font-black text-blue-700">Rp 2.500</span>
                                        </div>
                                        <div class="bg-gradient-to-r from-yellow-400 to-yellow-500 rounded-full p-3 group-hover:scale-110 transition-all duration-300 shadow-lg">
                                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <button onclick="goToContactForm('cetak-undangan')" class="w-full bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white px-6 py-3 rounded-xl font-bold transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105 flex items-center justify-center gap-2">
                                        <span>Pesan Sekarang</span>
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                    <!-- Service Card 8 - Nota & Kupon Undian -->
                    <div class="group relative bg-gradient-to-br from-white to-blue-50 backdrop-blur-sm border border-blue-200/30 rounded-2xl overflow-hidden hover:shadow-2xl hover:shadow-blue-500/10 transition-all duration-500 hover:-translate-y-2 flex flex-col h-full flex-none" style="width: 350px;">
                            <!-- Decorative elements -->
                            <div class="absolute top-4 right-4 w-20 h-20 bg-gradient-to-br from-yellow-400/20 to-blue-500/20 rounded-full blur-xl group-hover:scale-150 transition-all duration-700"></div>
                            <div class="absolute -top-2 -left-2 w-16 h-16 bg-gradient-to-br from-blue-500/20 to-yellow-400/20 rounded-full blur-lg group-hover:rotate-45 transition-all duration-500"></div>
                            
                            <div class="relative overflow-hidden bg-gradient-to-br from-blue-600 via-blue-700 to-blue-800 flex items-center justify-center h-52">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/Nota & Kupon Undian.jpg" alt="Nota & Kupon Undian" class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700 filter group-hover:brightness-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-blue-900/50 via-transparent to-transparent group-hover:from-blue-900/30 transition-all duration-500"></div>
                                <div class="absolute top-3 left-3 bg-yellow-500 text-blue-900 px-3 py-1 rounded-full text-xs font-black shadow-lg">
                                    💼 BISNIS
                                </div>
                            </div>
                            
                            <div class="p-6 flex flex-col flex-grow relative z-10">
                                <h3 class="text-xl font-bold mb-3 text-gray-800 group-hover:text-blue-700 transition-colors duration-300">Nota & Kupon Undian</h3>
                                <p class="text-gray-600 mb-6 flex-grow leading-relaxed text-sm">Atur bisnis dan sukseskan acara. Cetak Nota dan Kupon Undian custom cepat!</p>
                                
                                <div class="flex flex-col gap-4">
                                    <div class="flex justify-between items-center">
                                        <div class="flex flex-col">
                                            <span class="text-xs text-gray-500 uppercase tracking-wide font-semibold">Mulai dari</span>
                                            <span class="text-2xl font-black text-blue-700">Rp 50.000</span>
                                        </div>
                                        <div class="bg-gradient-to-r from-yellow-400 to-yellow-500 rounded-full p-3 group-hover:scale-110 transition-all duration-300 shadow-lg">
                                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4zM18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <button onclick="goToContactForm('nota-kupon-undian')" class="w-full bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white px-6 py-3 rounded-xl font-bold transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105 flex items-center justify-center gap-2">
                                        <span>Pesan Sekarang</span>
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                    <!-- Service Card 9 - Sablon Mug -->
                    <div class="group relative bg-gradient-to-br from-white to-yellow-50 backdrop-blur-sm border border-yellow-200/30 rounded-2xl overflow-hidden hover:shadow-2xl hover:shadow-yellow-500/10 transition-all duration-500 hover:-translate-y-2 flex flex-col h-full flex-none" style="width: 350px;">
                            <!-- Decorative elements -->
                            <div class="absolute top-4 right-4 w-20 h-20 bg-gradient-to-br from-blue-400/20 to-yellow-500/20 rounded-full blur-xl group-hover:scale-150 transition-all duration-700"></div>
                            <div class="absolute -top-2 -left-2 w-16 h-16 bg-gradient-to-br from-yellow-500/20 to-blue-400/20 rounded-full blur-lg group-hover:rotate-45 transition-all duration-500"></div>
                            
                            <div class="relative overflow-hidden bg-gradient-to-br from-blue-600 via-blue-700 to-blue-800 flex items-center justify-center h-52">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/Sablon Mug.jpg" alt="Sablon Mug" class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700 filter group-hover:brightness-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-blue-900/50 via-transparent to-transparent group-hover:from-blue-900/30 transition-all duration-500"></div>
                                <div class="absolute top-3 left-3 bg-yellow-500 text-blue-900 px-3 py-1 rounded-full text-xs font-black shadow-lg">
                                    ☕ MERCHANDISE
                                </div>
                            </div>
                            
                            <div class="p-6 flex flex-col flex-grow relative z-10">
                                <h3 class="text-xl font-bold mb-3 text-gray-800 group-hover:text-blue-700 transition-colors duration-300">Sablon Mug</h3>
                                <p class="text-gray-600 mb-6 flex-grow leading-relaxed text-sm">Hadiah personal dan bermanfaat. Mug custom untuk merchandise atau souvenir terbaik!</p>
                                
                                <div class="flex flex-col gap-4">
                                    <div class="flex justify-between items-center">
                                        <div class="flex flex-col">
                                            <span class="text-xs text-gray-500 uppercase tracking-wide font-semibold">Mulai dari</span>
                                            <span class="text-2xl font-black text-blue-700">Rp 25.000</span>
                                        </div>
                                        <div class="bg-gradient-to-r from-yellow-400 to-yellow-500 rounded-full p-3 group-hover:scale-110 transition-all duration-300 shadow-lg">
                                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <button onclick="goToContactForm('sablon-mug')" class="w-full bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white px-6 py-3 rounded-xl font-bold transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105 flex items-center justify-center gap-2">
                                        <span>Pesan Sekarang</span>
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    
                    <!-- Service Card 10 - Yasin Custom -->
                    <div class="group relative bg-gradient-to-br from-white to-yellow-50 backdrop-blur-sm border border-yellow-200/30 rounded-2xl overflow-hidden hover:shadow-2xl hover:shadow-yellow-500/10 transition-all duration-500 hover:-translate-y-2 flex flex-col h-full flex-none" style="width: 350px;">
                            <!-- Decorative elements -->
                            <div class="absolute top-4 right-4 w-20 h-20 bg-gradient-to-br from-blue-400/20 to-yellow-500/20 rounded-full blur-xl group-hover:scale-150 transition-all duration-700"></div>
                            <div class="absolute -top-2 -left-2 w-16 h-16 bg-gradient-to-br from-yellow-500/20 to-blue-400/20 rounded-full blur-lg group-hover:rotate-45 transition-all duration-500"></div>
                            
                            <div class="relative overflow-hidden bg-gradient-to-br from-blue-600 via-blue-700 to-blue-800 flex items-center justify-center h-52">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/Buku Yasin + Cover.jpg" alt="Yasin Custom" class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700 filter group-hover:brightness-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-blue-900/50 via-transparent to-transparent group-hover:from-blue-900/30 transition-all duration-500"></div>
                                <div class="absolute top-3 left-3 bg-yellow-500 text-blue-900 px-3 py-1 rounded-full text-xs font-black shadow-lg">
                                    � RELIGI
                                </div>
                            </div>
                            
                            <div class="p-6 flex flex-col flex-grow relative z-10">
                                <h3 class="text-xl font-bold mb-3 text-gray-800 group-hover:text-blue-700 transition-colors duration-300">Buku Yasin + Cover</h3>
                                <p class="text-gray-600 mb-6 flex-grow leading-relaxed text-sm">Yasin + Cover Custom dengan desain eksklusif, bahkan bisa pakai foto! Solusi praktis untuk acara peringatan.</p>
                                
                                <div class="flex flex-col gap-4">
                                    <div class="flex justify-between items-center">
                                        <div class="flex flex-col">
                                            <span class="text-xs text-gray-500 uppercase tracking-wide font-semibold">Mulai dari</span>
                                            <span class="text-2xl font-black text-blue-700">Rp 7.000</span>
                                        </div>
                                        <div class="bg-gradient-to-r from-yellow-400 to-yellow-500 rounded-full p-3 group-hover:scale-110 transition-all duration-300 shadow-lg">
                                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <button onclick="goToContactForm('yasin-cover')" class="w-full bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white px-6 py-3 rounded-xl font-bold transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105 flex items-center justify-center gap-2">
                                        <span>Pesan Sekarang</span>
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                    <!-- Service Card 11 - Yasin Tahlil -->
                    <div class="group relative bg-gradient-to-br from-white to-blue-50 backdrop-blur-sm border border-blue-200/30 rounded-2xl overflow-hidden hover:shadow-2xl hover:shadow-blue-500/10 transition-all duration-500 hover:-translate-y-2 flex flex-col h-full flex-none" style="width: 350px;">
                            <!-- Decorative elements -->
                            <div class="absolute top-4 right-4 w-20 h-20 bg-gradient-to-br from-yellow-400/20 to-blue-500/20 rounded-full blur-xl group-hover:scale-150 transition-all duration-700"></div>
                            <div class="absolute -top-2 -left-2 w-16 h-16 bg-gradient-to-br from-blue-500/20 to-yellow-400/20 rounded-full blur-lg group-hover:rotate-45 transition-all duration-500"></div>
                            
                            <div class="relative overflow-hidden bg-gradient-to-br from-blue-600 via-blue-700 to-blue-800 flex items-center justify-center h-52">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/Buku Yasin Kosongan.jpg" alt="Yasin Tahlil" class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700 filter group-hover:brightness-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-blue-900/50 via-transparent to-transparent group-hover:from-blue-900/30 transition-all duration-500"></div>
                                <div class="absolute top-3 left-3 bg-yellow-500 text-blue-900 px-3 py-1 rounded-full text-xs font-black shadow-lg">
                                    � RECOMMENDED
                                </div>
                            </div>
                            
                            <div class="p-6 flex flex-col flex-grow relative z-10">
                                <h3 class="text-xl font-bold mb-3 text-gray-800 group-hover:text-blue-700 transition-colors duration-300">Buku Yasin Kosongan</h3>
                                <p class="text-gray-600 mb-6 flex-grow leading-relaxed text-sm">Yasin Kosongan siap diisi, dengan harga sangat terjangkau. Pilihan hemat dan cepat untuk kebutuhan religi Anda!</p>
                                
                                <div class="flex flex-col gap-4">
                                    <div class="flex justify-between items-center">
                                        <div class="flex flex-col">
                                            <span class="text-xs text-gray-500 uppercase tracking-wide font-semibold">Mulai dari</span>
                                            <span class="text-2xl font-black text-blue-700">Rp 2.700</span>
                                        </div>
                                        <div class="bg-gradient-to-r from-yellow-400 to-yellow-500 rounded-full p-3 group-hover:scale-110 transition-all duration-300 shadow-lg">
                                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <button onclick="goToContactForm('yasin-kosongan')" class="w-full bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white px-6 py-3 rounded-xl font-bold transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105 flex items-center justify-center gap-2">
                                        <span>Pesan Sekarang</span>
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        
        <!-- Custom CSS for horizontal scroll -->
        <style>
        #servicesScrollContainer {
            scrollbar-width: none; /* Firefox */
            -ms-overflow-style: none; /* Internet Explorer 10+ */
            scroll-behavior: smooth;
        }
        
        #servicesScrollContainer::-webkit-scrollbar {
            display: none; /* WebKit */
        }
        
        #servicesScrollTrack {
            transition: transform 0.3s ease;
            align-items: stretch; /* Ensure all cards have same height */
        }
        
        /* Service Cards Alignment */
        #servicesScrollTrack > div {
            height: 580px !important; /* Fixed height for all cards */
            display: flex !important;
            flex-direction: column !important;
        }
        
        /* Content area flex layout */
        #servicesScrollTrack .p-6 {
            display: flex !important;
            flex-direction: column !important;
            flex-grow: 1 !important;
        }
        
        /* Description area grows to fill space */
        #servicesScrollTrack .p-6 p {
            flex-grow: 1 !important;
            margin-bottom: 1.5rem !important;
        }
        
        /* Price and button section stays at bottom */
        #servicesScrollTrack .p-6 > div:last-child {
            margin-top: auto !important;
        }
        
        /* Ensure price row alignment */
        #servicesScrollTrack .flex.justify-between.items-center {
            align-items: flex-end !important;
            margin-bottom: 1rem !important;
        }
        
        /* Consistent button height */
        #servicesScrollTrack button {
            min-height: 48px !important;
        }
        
        /* Title consistent height */
        #servicesScrollTrack h3 {
            min-height: 60px !important;
            display: flex !important;
            align-items: center !important;
        }
        
        /* Drag cursor styles */
        #servicesScrollContainer.grabbing {
            cursor: grabbing !important;
        }
        
        #servicesScrollContainer:active {
            cursor: grabbing !important;
        }
        </style>
        
        <script>
        // Horizontal Scroll Services - Infinite Scroll System
        document.addEventListener('DOMContentLoaded', function() {
            const scrollContainer = document.getElementById('servicesScrollContainer');
            const scrollTrack = document.getElementById('servicesScrollTrack');
            
            if (!scrollContainer || !scrollTrack) {
                console.log('Scroll elements not found');
                return;
            }
            
            // Get all service cards
            const originalCards = Array.from(scrollTrack.children);
            const totalCards = originalCards.length;
            
            console.log('🎯 Original service cards found:', totalCards);
            
            // Create infinite scroll by duplicating cards
            function createInfiniteScroll() {
                // Clear existing content
                scrollTrack.innerHTML = '';
                
                // Clone cards multiple times for infinite effect
                const cloneCount = 3; // Show 3 sets for smooth infinite scrolling
                
                for (let i = 0; i < cloneCount; i++) {
                    originalCards.forEach(card => {
                        const clonedCard = card.cloneNode(true);
                        scrollTrack.appendChild(clonedCard);
                    });
                }
                
                console.log('� Infinite scroll created with', scrollTrack.children.length, 'total cards');
            }
            
            // Initialize infinite scroll
            createInfiniteScroll();
            
            // Smooth auto-scroll functionality
            let isScrolling = false;
            let scrollSpeed = 1; // pixels per frame
            let currentPosition = 0;
            
            // Auto-scroll animation
            function autoScroll() {
                if (!isScrolling) {
                    currentPosition += scrollSpeed;
                    
                    // Get card width + gap (350px + 32px gap)
                    const cardWidth = 350 + 32;
                    const totalWidth = cardWidth * totalCards;
                    
                    // Reset position when we've scrolled through one complete set
                    if (currentPosition >= totalWidth) {
                        currentPosition = 0;
                    }
                    
                    scrollContainer.scrollLeft = currentPosition;
                }
                
                requestAnimationFrame(autoScroll);
            }
            
            // Start auto-scroll
            autoScroll();
            
            // Mouse interaction for pausing scroll
            scrollContainer.addEventListener('mouseenter', function() {
                isScrolling = true;
                console.log('⏸️ Auto-scroll paused - mouse enter');
            });
            
            scrollContainer.addEventListener('mouseleave', function() {
                isScrolling = false;
                console.log('▶️ Auto-scroll resumed - mouse leave');
            });
            
            // Touch/drag support for mobile and desktop
            let isDragging = false;
            let startX = 0;
            let scrollLeft = 0;
            
            // Mouse drag support
            scrollContainer.addEventListener('mousedown', function(e) {
                isDragging = true;
                isScrolling = true; // Pause auto-scroll
                startX = e.pageX - scrollContainer.offsetLeft;
                scrollLeft = scrollContainer.scrollLeft;
                scrollContainer.style.cursor = 'grabbing';
            });
            
            scrollContainer.addEventListener('mousemove', function(e) {
                if (!isDragging) return;
                e.preventDefault();
                const x = e.pageX - scrollContainer.offsetLeft;
                const walk = (x - startX) * 2; // Scroll speed multiplier
                scrollContainer.scrollLeft = scrollLeft - walk;
            });
            
            scrollContainer.addEventListener('mouseup', function() {
                isDragging = false;
                isScrolling = false; // Resume auto-scroll
                scrollContainer.style.cursor = 'grab';
            });
            
            scrollContainer.addEventListener('mouseleave', function() {
                isDragging = false;
                isScrolling = false; // Resume auto-scroll  
                scrollContainer.style.cursor = 'grab';
            });
            
            // Touch support for mobile
            scrollContainer.addEventListener('touchstart', function(e) {
                isDragging = true;
                isScrolling = true; // Pause auto-scroll
                startX = e.touches[0].pageX;
                scrollLeft = scrollContainer.scrollLeft;
            });
            
            scrollContainer.addEventListener('touchmove', function(e) {
                if (!isDragging) return;
                const x = e.touches[0].pageX;
                const walk = (x - startX) * 2;
                scrollContainer.scrollLeft = scrollLeft - walk;
            });
            
            scrollContainer.addEventListener('touchend', function() {
                isDragging = false;
                isScrolling = false; // Resume auto-scroll
            });
            
            // Set grab cursor
            scrollContainer.style.cursor = 'grab';
            
            // Individual card hover to pause scroll and setup button events
            function setupCardHoverEvents() {
                setTimeout(() => {
                    const serviceCards = document.querySelectorAll('.group.relative.bg-gradient-to-br');
                    console.log('🎯 Setting up hover events for', serviceCards.length, 'cards');
                    
                    serviceCards.forEach((card, index) => {
                        card.addEventListener('mouseenter', function() {
                            isScrolling = true; // Pause scroll
                            console.log('⏸️ Scroll paused - hover on card', index + 1);
                        });
                        
                        card.addEventListener('mouseleave', function() {
                            if (!isDragging) {
                                isScrolling = false; // Resume scroll only if not dragging
                                console.log('▶️ Scroll resumed - left card', index + 1);
                            }
                        });
                        
                        // Setup button click events for cloned cards
                        const orderButton = card.querySelector('button[onclick*="goToContactForm"]');
                        if (orderButton) {
                            console.log('🔧 Setting up button event for card', index + 1);
                            orderButton.addEventListener('click', function(e) {
                                e.preventDefault();
                                e.stopPropagation();
                                
                                // Extract service value from onclick attribute
                                const onclickAttr = orderButton.getAttribute('onclick');
                                console.log('🔍 Button onclick attribute:', onclickAttr);
                                const serviceMatch = onclickAttr.match(/goToContactForm\('([^']+)'\)/);
                                if (serviceMatch) {
                                    const serviceValue = serviceMatch[1];
                                    console.log('🎯 Extracted service value:', serviceValue);
                                    window.goToContactForm(serviceValue);
                                } else {
                                    console.warn('⚠️ Could not extract service value from onclick');
                                }
                            });
                        } else {
                            console.warn('⚠️ No order button found in card', index + 1);
                        }
                    });
                }, 100);
            }
            
            // Setup hover events
            setupCardHoverEvents();
            
            console.log('🎯 SUCCESS: Horizontal scroll system initialized');
            console.log('🔄 Infinite scroll with', totalCards, 'unique cards');
            console.log('🖱️ Drag to scroll manually');
            console.log('⏸️ Hover cards to pause auto-scroll');
            console.log('� Touch support enabled for mobile');
        });
        
        // Debug: Check DOM elements after initialization
        setTimeout(() => {
            const contactSection = document.getElementById('kontak');
            const serviceSelect = document.getElementById('contact_service');
            console.log('🔍 DOM DEBUG - Contact section:', contactSection ? 'Found' : 'Not found');
            console.log('🔍 DOM DEBUG - Service select:', serviceSelect ? 'Found' : 'Not found');
            if (serviceSelect) {
                console.log('🔍 DOM DEBUG - Service select options:', serviceSelect.options.length);
                console.log('🔍 DOM DEBUG - Available options:', Array.from(serviceSelect.options).map(opt => opt.value));
            }
            
            // Test function call
            console.log('🧪 Testing goToContactForm function...');
            if (typeof window.goToContactForm === 'function') {
                console.log('✅ goToContactForm function is available');
            } else {
                console.log('❌ goToContactForm function is NOT available');
            }
        }, 3000);
        
        // Add global click listener for service buttons
        document.addEventListener('click', function(e) {
            if (e.target.matches('button[onclick*="goToContactForm"]')) {
                console.log('🎯 Service button clicked via global listener');
                e.preventDefault();
                
                const onclickAttr = e.target.getAttribute('onclick');
                const serviceMatch = onclickAttr.match(/goToContactForm\('([^']+)'\)/);
                if (serviceMatch) {
                    const serviceValue = serviceMatch[1];
                    console.log('🎯 Calling goToContactForm with:', serviceValue);
                    window.goToContactForm(serviceValue);
                }
            }
        });
        
        // Manual test function - you can call this from browser console
        window.testServiceSelection = function(serviceValue) {
            console.log('🧪 Manual test with service:', serviceValue);
            window.goToContactForm(serviceValue);
        };
        
        // Function to go to contact form with pre-selected service - Global scope
        window.goToContactForm = function(serviceValue) {
            console.log('🎯 goToContactForm called with:', serviceValue);
            
            // Scroll to contact section
            const contactSection = document.getElementById('kontak');
            if (contactSection) {
                console.log('✅ Contact section found, scrolling...');
                contactSection.scrollIntoView({ 
                    behavior: 'smooth',
                    block: 'start'
                });
                
                // Wait for scroll to complete, then set the service selection
                setTimeout(() => {
                    console.log('🔍 Looking for element with ID: contact_service');
                    const serviceSelect = document.getElementById('contact_service');
                    console.log('📋 Service select element:', serviceSelect);
                    if (serviceSelect) {
                        // Set the selected value
                        serviceSelect.value = serviceValue;
                        
                        // Trigger change event to update display
                        serviceSelect.dispatchEvent(new Event('change'));
                        
                        // Add visual feedback
                        serviceSelect.style.border = '2px solid #3B82F6';
                        serviceSelect.style.boxShadow = '0 0 0 3px rgba(59, 130, 246, 0.1)';
                        setTimeout(() => {
                            serviceSelect.style.border = '';
                            serviceSelect.style.boxShadow = '';
                        }, 3000);
                        
                        // Focus on the name field to encourage form completion
                        const nameField = document.querySelector('input[name="contact_name"]');
                        if (nameField) {
                            nameField.focus();
                        }
                        
                        console.log('📋 Service selected:', serviceValue);
                    } else {
                        console.warn('⚠️ Service select element not found');
                    }
                }, 800); // Wait for scroll animation to complete
            } else {
                console.warn('⚠️ Contact section not found');
            }
        };
        
        // Fix card heights for proper alignment
        document.addEventListener('DOMContentLoaded', function() {
            const serviceCards = document.querySelectorAll('.group.bg-white.border.border-gray-200');
            serviceCards.forEach(card => {
                // Add flex classes for proper alignment
                card.classList.add('flex', 'flex-col', 'h-full');
                
                // Find the content div and make it flexbox
                const contentDiv = card.querySelector('.p-6');
                if (contentDiv) {
                    contentDiv.classList.add('flex', 'flex-col', 'flex-grow');
                    
                    // Find the description paragraph
                    const description = contentDiv.querySelector('p.text-gray-600');
                    if (description) {
                        description.classList.add('flex-grow');
                    }
                    
                    // Find the footer with price and button
                    const footer = contentDiv.querySelector('.flex.justify-between');
                    if (footer) {
                        footer.classList.add('mt-auto');
                    }
                }
            });
        });

        
        // Convert all WhatsApp links to form buttons
        document.addEventListener('DOMContentLoaded', function() {
            // Service mapping for WhatsApp text to form values
            const serviceMapping = {
                'Mug%20Custom': 'mug-custom',
                'Nota%20dan%20Kupon': 'nota-kupon',
                'Stempel%20Wisuda': 'stempel-wisuda', 
                'Kupon': 'kupon',
                'Cetak%20A3': 'cetak-a3',
                'Brosur': 'brosur',
                'DTF%20Baju': 'dtf-baju',
                'Kalender%20Custom': 'kalender-custom',
                'Mug%20Costum': 'mug-costum',
                'Stempel%20Biasa': 'stempel-biasa',
                'Yasin%20Cover': 'yasin-cover',
                'Yasin%20Kosongan': 'yasin-kosongan',
                'Undangan%20Pernikahan': 'undangan-nikah'
            };
            
            // Find all WhatsApp links in service cards
            const whatsappLinks = document.querySelectorAll('a[href*="wa.me"]');
            whatsappLinks.forEach(link => {
                const href = link.getAttribute('href');
                
                // Extract service name from WhatsApp link
                let serviceValue = '';
                for (const [key, value] of Object.entries(serviceMapping)) {
                    if (href.includes(key)) {
                        serviceValue = value;
                        break;
                    }
                }
                
                if (serviceValue) {
                    // Create button element
                    const button = document.createElement('button');
                    button.className = link.className;
                    button.textContent = link.textContent;
                    button.onclick = () => goToContactForm(serviceValue);
                    
                    // Replace link with button
                    link.parentNode.replaceChild(button, link);
                }
            });
        });
        </script>

        <!-- Additional Services Section -->
        <div class="mt-16 text-center">
            <h3 class="text-2xl font-bold text-gray-800 mb-8">Layanan Lainnya</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                <div class="bg-gray-50 p-4 rounded-lg hover:bg-gray-100 transition duration-300">
                    <div class="text-blue-700 text-2xl mb-2">📄</div>
                    <div class="text-sm font-medium">Banner & Spanduk</div>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg hover:bg-gray-100 transition duration-300">
                    <div class="text-green-600 text-2xl mb-2">📋</div>
                    <div class="text-sm font-medium">Brosur & Flyer</div>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg hover:bg-gray-100 transition duration-300">
                    <div class="text-yellow-500 text-2xl mb-2">💳</div>
                    <div class="text-sm font-medium">Kartu Nama</div>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg hover:bg-gray-100 transition duration-300">
                    <div class="text-red-600 text-2xl mb-2">🏷️</div>
                    <div class="text-sm font-medium">Stiker & Label</div>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg hover:bg-gray-100 transition duration-300">
                    <div class="text-purple-600 text-2xl mb-2">📦</div>
                    <div class="text-sm font-medium">Packaging</div>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg hover:bg-gray-100 transition duration-300">
                    <div class="text-indigo-600 text-2xl mb-2">🎨</div>
                    <div class="text-sm font-medium">Design Grafis</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Section -->
<section id="portfolio" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Portfolio Kami</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Lihat hasil karya terbaik kami yang telah dipercaya oleh berbagai klien
            </p>
        </div>
        
        <!-- Portfolio Filter -->
        <div class="flex flex-wrap justify-center mb-12 gap-4">
            <button class="portfolio-filter active bg-blue-700 text-white px-6 py-3 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105 hover:shadow-lg" data-filter="semua">
                Semua
            </button>
            <?php
            $categories = get_terms(array(
                'taxonomy' => 'portfolio_category',
                'hide_empty' => false // Changed to false to show all categories even if empty
            ));
            
            if (!empty($categories) && !is_wp_error($categories)) {
                foreach ($categories as $category) {
                    printf(
                        '<button class="portfolio-filter bg-gray-200 text-gray-700 hover:bg-gray-300 px-6 py-3 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105 hover:shadow-lg" data-filter="%s">%s</button>',
                        esc_attr($category->slug),
                        esc_html($category->name)
                    );
                }
            } else {
                // Debug: Show if no categories found
                if (current_user_can('administrator')) {
                    echo '<div class="text-sm text-gray-500 px-4 py-2 bg-yellow-100 rounded">No categories found. Categories will be created automatically. Please refresh the page.</div>';
                }
            }
            ?>
        </div>
        
        <!-- Portfolio Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 relative">
            <!-- Loading Indicator -->
            <div id="portfolioLoadingIndicator" class="hidden absolute inset-0 bg-white bg-opacity-75 z-10 flex items-center justify-center">
                <div class="flex items-center space-x-2">
                    <div class="w-4 h-4 bg-blue-600 rounded-full animate-pulse"></div>
                    <div class="w-4 h-4 bg-blue-600 rounded-full animate-pulse" style="animation-delay: 0.1s;"></div>
                    <div class="w-4 h-4 bg-blue-600 rounded-full animate-pulse" style="animation-delay: 0.2s;"></div>
                </div>
            </div>
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            // Show all published portfolio posts (with intelligent image fallback)
            $args = array(
                'post_type' => 'portfolio',
                'posts_per_page' => 6,
                'orderby' => 'date',
                'order' => 'DESC',
                'paged' => $paged,
                'post_status' => 'publish'
            );
            
            $portfolio_query = new WP_Query($args);
            

            
            if ($portfolio_query->have_posts()) :
                while ($portfolio_query->have_posts()) : $portfolio_query->the_post();
                    // Get categories for this portfolio item
                    $categories = get_the_terms(get_the_ID(), 'portfolio_category');
                    $category_classes = '';
                    $category_name = '';
                    if ($categories && !is_wp_error($categories)) {
                        foreach ($categories as $category) {
                            $category_classes .= ' ' . $category->slug;
                            $category_name = $category->name;
                        }
                    }
                    
                    // Get primary category color class with dynamic assignment
                    $color_classes = array(
                        'banner' => 'blue',
                        'brosur' => 'green', 
                        'packaging' => 'yellow',
                        'kartu-nama' => 'purple',
                        'stiker' => 'red',
                        'poster' => 'indigo',
                        'spanduk' => 'pink'
                    );
                    
                    $primary_color = 'blue'; // default color
                    if ($categories && !empty($categories)) {
                        $category_slug = $categories[0]->slug;
                        if (isset($color_classes[$category_slug])) {
                            $primary_color = $color_classes[$category_slug];
                        } else {
                            // Auto-assign colors for new categories
                            $available_colors = array('blue', 'green', 'yellow', 'purple', 'red', 'indigo', 'pink');
                            $color_index = abs(crc32($category_slug)) % count($available_colors);
                            $primary_color = $available_colors[$color_index];
                        }
                    }
            ?>
                    <?php 
                        // Use same image collection system as modal for consistency
                        $post_id = get_the_ID();
                        $post_title = get_the_title();
                        $modal_images = array();
                        
                        // Priority 1: Featured image (multiple sizes) - same as modal
                        if (has_post_thumbnail($post_id)) {
                            $sizes = array('large', 'medium_large', 'medium', 'full');
                            foreach ($sizes as $size) {
                                $img_url = get_the_post_thumbnail_url($post_id, $size);
                                if ($img_url && !in_array($img_url, $modal_images)) {
                                    $modal_images[] = $img_url;
                                }
                            }
                        }
                        
                        // Priority 2: External image URL from meta - same as modal
                        $external_image = get_post_meta($post_id, 'external_image_url', true);
                        if ($external_image && filter_var($external_image, FILTER_VALIDATE_URL)) {
                            $modal_images[] = $external_image;
                        }
                        
                        // Priority 3: Images from content - same as modal (skip base64)
                        $content = get_the_content();
                        if ($content) {
                            preg_match_all('/<img[^>]+src="([^"]+)"/', $content, $matches);
                            if (!empty($matches[1])) {
                                foreach ($matches[1] as $img_src) {
                                    // Skip base64 data URLs as they're too heavy
                                    if (strpos($img_src, 'data:image') !== 0 && filter_var($img_src, FILTER_VALIDATE_URL) && !in_array($img_src, $modal_images)) {
                                        $modal_images[] = $img_src;
                                    }
                                }
                            }
                        }
                        
                        // Primary image (first available) - same as modal
                        $thumbnail_url = !empty($modal_images) ? $modal_images[0] : '';
                        $image_source = !empty($modal_images) ? 'collected-images' : 'placeholder';
                        
                        // Generate final fallback only if no real images found - same as modal
                        if (empty($modal_images)) {
                            $color_codes = array(
                                'green' => '10B981',
                                'yellow' => 'F59E0B',
                                'blue' => '3B82F6',
                                'purple' => '8B5CF6',
                                'red' => 'EF4444',
                                'indigo' => '6366F1',
                                'pink' => 'EC4899'
                            );
                            $color_code = isset($color_codes[$primary_color]) ? $color_codes[$primary_color] : '3B82F6';
                            $thumbnail_url = "https://via.placeholder.com/1200x800/{$color_code}/FFFFFF?text=" . urlencode(wp_trim_words($post_title, 2, ''));
                            $image_source = 'smart-placeholder';
                        }
                    ?>
                    <div class="portfolio-item<?php echo esc_attr($category_classes); ?> group relative rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 cursor-pointer"
                         onclick="openPortfolioModal(<?php echo $post_id; ?>)"><?php ?>
                        
                        <!-- Loading States -->
                        <div class="loading-overlay absolute inset-0 flex items-center justify-center bg-gray-100 z-20">
                            <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-<?php echo $primary_color; ?>-500"></div>
                        </div>
                        
                        <!-- Shimmer Effect -->
                        <div class="shimmer-overlay absolute inset-0 bg-gradient-to-r from-gray-200 via-gray-50 to-gray-200 animate-pulse z-10"></div>
                        
                        <!-- Main Portfolio Image -->
                        <img 
                            src="<?php echo esc_url($thumbnail_url); ?>" 
                            alt="<?php echo esc_attr($post_title . ' - Portfolio Barokah Ibu Digital Printing'); ?>"
                            class="portfolio-image w-full h-80 object-cover transition-all duration-500 ease-out opacity-0 group-hover:scale-110 transform-gpu"
                            loading="lazy"
                            data-post-id="<?php echo $post_id; ?>"
                            data-image-source="<?php echo esc_attr($image_source); ?>"
                            onload="
                                console.log('✅ PORTFOLIO Card Image loaded successfully:', 'Post ID: <?php echo $post_id; ?>', 'Title: <?php echo addslashes($post_title); ?>', 'URL: ' + this.src, 'Source: <?php echo $image_source; ?>');
                                this.classList.remove('opacity-0'); 
                                this.classList.add('opacity-100');
                                const container = this.parentElement;
                                const loadingOverlay = container.querySelector('.loading-overlay');
                                const shimmerOverlay = container.querySelector('.shimmer-overlay');
                                if (loadingOverlay) loadingOverlay.remove();
                                if (shimmerOverlay) shimmerOverlay.remove();
                            "
                            onerror="
                                console.error('❌ PORTFOLIO Card Image load failed:', 'Post ID: <?php echo $post_id; ?>', 'Title: <?php echo addslashes($post_title); ?>', 'Failed URL:', this.src, 'Source: <?php echo $image_source; ?>');
                                const fallbackUrl = 'https://via.placeholder.com/800x600/<?php echo $primary_color === 'green' ? '10B981' : ($primary_color === 'yellow' ? 'F59E0B' : '3B82F6'); ?>/FFFFFF?text=<?php echo urlencode(wp_trim_words($post_title, 2, '')); ?>';
                                if (this.src !== fallbackUrl) {
                                    console.log('🔄 PORTFOLIO Card Trying fallback placeholder for:', '<?php echo addslashes($post_title); ?>');
                                    this.src = fallbackUrl;
                                } else {
                                    console.log('💡 PORTFOLIO Card Using final placeholder for:', '<?php echo addslashes($post_title); ?>');
                                    this.classList.remove('opacity-0'); 
                                    this.classList.add('opacity-100');
                                    const container = this.parentElement;
                                    const loadingOverlay = container.querySelector('.loading-overlay');
                                    const shimmerOverlay = container.querySelector('.shimmer-overlay');
                                    if (loadingOverlay) loadingOverlay.remove();
                                    if (shimmerOverlay) shimmerOverlay.remove();
                                }
                            "
                        />
                        
                        <!-- Enhanced Hover Overlay with Center Button -->
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center z-20">
                            <!-- Center Transparent Button -->
                            <button 
                                onclick="openPortfolioModal(<?php echo $post_id; ?>); event.stopPropagation();" 
                                class="bg-white bg-opacity-20 backdrop-blur-sm text-white border-2 border-white px-8 py-3 rounded-lg font-semibold hover:bg-opacity-30 transition-all duration-300 opacity-0 group-hover:opacity-100 transform scale-75 group-hover:scale-100 shadow-xl">
                                Lihat Detail
                            </button>
                        </div>
                        
                        <!-- Bottom Info Bar -->
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4 z-10">
                            <h3 class="text-white text-lg font-bold mb-1"><?php the_title(); ?></h3>
                            <?php if ($category_name) : ?>
                                <span class="inline-block bg-<?php echo $primary_color; ?>-600 text-white px-2 py-1 rounded text-xs font-medium">
                                    <?php echo esc_html($category_name); ?>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                // No portfolio posts found - show message for admin or placeholder
            ?>
                <div class="col-span-full text-center py-16">
                    <?php if (current_user_can('administrator')) : ?>
                        <!-- Message for admin users -->
                        <div class="bg-blue-50 border border-blue-200 rounded-lg p-8 max-w-2xl mx-auto">
                            <div class="text-blue-600 mb-4">
                                <svg class="w-16 h-16 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800 mb-3">Belum Ada Portfolio</h3>
                            <p class="text-gray-600 mb-6">
                                Anda belum menambahkan portfolio dengan featured image. Tambahkan portfolio pertama Anda!
                            </p>
                            <a href="<?php echo admin_url('post-new.php?post_type=portfolio'); ?>" 
                               class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">
                                + Tambah Portfolio
                            </a>
                        </div>
                    <?php else : ?>
                        <!-- Message for public visitors -->
                        <div class="max-w-xl mx-auto">
                            <div class="text-gray-400 mb-4">
                                <svg class="w-20 h-20 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-semibold text-gray-800 mb-3">Portfolio Sedang Dipersiapkan</h3>
                            <p class="text-gray-600">
                                Kami sedang mempersiapkan koleksi portfolio terbaik untuk Anda. Segera akan hadir karya-karya menakjubkan!
                            </p>
                        </div>
                    <?php endif; ?>
                </div>
            <?php
            endif;
            
            // Prepare portfolio data for JavaScript modal - GET ALL PORTFOLIOS (not just 6)
            $portfolio_data = array();
            
            // Separate query for modal that gets ALL portfolio posts
            $modal_args = array(
                'post_type' => 'portfolio',
                'posts_per_page' => -1, // -1 means get ALL posts
                'orderby' => 'date',
                'order' => 'ASC',
                'post_status' => 'publish'
            );
            
            $modal_portfolio_query = new WP_Query($modal_args);
            
            if ($modal_portfolio_query->have_posts()) {
                while ($modal_portfolio_query->have_posts()) {
                    $modal_portfolio_query->the_post();
                    $post_categories = get_the_terms(get_the_ID(), 'portfolio_category');
                    $category_name = '';
                    $primary_color = 'blue';
                    
                    if ($post_categories && !is_wp_error($post_categories)) {
                        $category_name = $post_categories[0]->name;
                        $color_classes = array(
                            'banner' => 'blue',
                            'brosur' => 'green', 
                            'packaging' => 'yellow',
                            'kartu-nama' => 'purple',
                            'stiker' => 'red',
                            'poster' => 'indigo',
                            'spanduk' => 'pink'
                        );
                        
                        $category_slug = $post_categories[0]->slug;
                        if (isset($color_classes[$category_slug])) {
                            $primary_color = $color_classes[$category_slug];
                        } else {
                            // Auto-assign colors for new categories
                            $available_colors = array('blue', 'green', 'yellow', 'purple', 'red', 'indigo', 'pink');
                            $color_index = abs(crc32($category_slug)) % count($available_colors);
                            $primary_color = $available_colors[$color_index];
                        }
                    }
                    
                    // Enhanced image collection - gather all possible image sources
                    $modal_images = array();
                    
                    // Priority 1: Featured image (multiple sizes)
                    if (has_post_thumbnail()) {
                        $sizes = array('large', 'medium_large', 'medium', 'full');
                        foreach ($sizes as $size) {
                            $img_url = get_the_post_thumbnail_url(get_the_ID(), $size);
                            if ($img_url && !in_array($img_url, $modal_images)) {
                                $modal_images[] = $img_url;
                            }
                        }
                    }
                    
                    // Priority 2: External image URL from meta
                    $external_image = get_post_meta(get_the_ID(), 'external_image_url', true);
                    if ($external_image && filter_var($external_image, FILTER_VALIDATE_URL)) {
                        $modal_images[] = $external_image;
                    }
                    
                    // Priority 3: Images from content
                    $content = get_the_content();
                    if ($content) {
                        preg_match_all('/<img[^>]+src="([^"]+)"/', $content, $matches);
                        if (!empty($matches[1])) {
                            foreach ($matches[1] as $img_src) {
                                if (filter_var($img_src, FILTER_VALIDATE_URL) && !in_array($img_src, $modal_images)) {
                                    $modal_images[] = $img_src;
                                }
                            }
                        }
                    }
                    
                    // Primary image (first available)
                    $primary_image = !empty($modal_images) ? $modal_images[0] : '';
                    
                    // Generate final fallback only if no real images found
                    if (empty($modal_images)) {
                        $color_codes = array(
                            'green' => '10B981',
                            'yellow' => 'F59E0B',
                            'blue' => '3B82F6',
                            'purple' => '8B5CF6',
                            'red' => 'EF4444',
                            'indigo' => '6366F1',
                            'pink' => 'EC4899'
                        );
                        $color_code = isset($color_codes[$primary_color]) ? $color_codes[$primary_color] : '3B82F6';
                        $primary_image = "https://via.placeholder.com/1200x800/{$color_code}/FFFFFF?text=" . urlencode(wp_trim_words(get_the_title(), 2, ''));
                        $modal_images[] = $primary_image;
                    }
                    
                    $portfolio_data[get_the_ID()] = array(
                        'id' => get_the_ID(),
                        'title' => get_the_title(),
                        'content' => get_the_content(),
                        'excerpt' => get_the_excerpt(),
                        'image' => $primary_image,
                        'images' => $modal_images,
                        'featured_image' => has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'large') : '',
                        'category' => $category_name,
                        'color' => $primary_color,
                        'date' => get_the_date('j F Y'),
                        'permalink' => get_permalink()
                    );
                }
                wp_reset_postdata();
            }
            
            // Reset the main portfolio query for any further use
            if ($portfolio_query->have_posts()) {
                $portfolio_query->rewind_posts();
            }
            ?>
            
            <!-- Portfolio Data for JavaScript -->
            <script>
                window.portfolioData = <?php echo json_encode($portfolio_data); ?>;
                console.log('📊 Portfolio Data Loaded:', Object.keys(window.portfolioData).length, 'portfolios for modal');
                
                // Initialize modal fallback if needed
                document.addEventListener('DOMContentLoaded', function() {
                    setTimeout(function() {
                        if (typeof window.openPortfolioModal !== 'function') {
                            
                            // Create fallback function if main function is not loaded
                            window.openPortfolioModal = function(portfolioId) {
                                if (!window.portfolioData || !window.portfolioData[portfolioId]) {
                                    return;
                                }
                                
                                const portfolio = window.portfolioData[portfolioId];
                                const modal = document.getElementById('portfolioModal');
                                if (!modal) return;
                                
                                // Simple modal display
                                const titleEl = document.getElementById('modalTitle');
                                const imageEl = document.getElementById('modalMainImage');
                                const contentEl = document.getElementById('modalContentText');
                                const dateEl = document.getElementById('modalDate');
                                
                                if (titleEl) titleEl.textContent = portfolio.title;
                                
                                // Update header title
                                const headerTitleEl = document.getElementById('modalHeaderTitle');
                                if (headerTitleEl) headerTitleEl.textContent = portfolio.title;
                                
                                if (imageEl) {
                                    // Use first available image from images array
                                    const imageSrc = portfolio.images && portfolio.images.length > 0 ? portfolio.images[0] : portfolio.image;
                                    imageEl.src = imageSrc;
                                    imageEl.alt = portfolio.title;
                                }
                                if (contentEl) {
                                    contentEl.innerHTML = portfolio.content || portfolio.excerpt || '<p>Detail portfolio akan segera tersedia.</p>';
                                }
                                if (dateEl) dateEl.textContent = portfolio.date;
                                
                                // Set category badge on image
                                const categoryContainer = document.getElementById('modalCategory');
                                if (categoryContainer && portfolio.category) {
                                    const colorClass = portfolio.color === 'green' ? 'bg-green-600' : (portfolio.color === 'yellow' ? 'bg-yellow-500' : (portfolio.color === 'purple' ? 'bg-purple-600' : 'bg-blue-600'));
                                    categoryContainer.innerHTML = '<span class="' + colorClass + ' text-white px-3 py-1 rounded-full text-sm font-medium shadow-lg">' + portfolio.category + '</span>';
                                }
                                
                                // Set category name in meta section
                                const categoryNameEl = document.getElementById('modalCategoryName');
                                if (categoryNameEl && portfolio.category) {
                                    categoryNameEl.textContent = portfolio.category;
                                }
                                
                                // Show modal with inline styles
                                modal.style.display = 'flex';
                                document.body.style.overflow = 'hidden';
                                
                                // Animate in with slight delay
                                setTimeout(function() {
                                    const modalContentEl = modal.querySelector('#modalContent');
                                    if (modalContentEl) {
                                        modalContentEl.style.transform = 'scale(1)';
                                        modalContentEl.style.opacity = '1';
                                    }
                                }, 10);
                            };
                            
                            window.closePortfolioModal = function() {
                                const modal = document.getElementById('portfolioModal');
                                if (modal) {
                                    const modalContentEl = modal.querySelector('#modalContent');
                                    if (modalContentEl) {
                                        modalContentEl.style.transform = 'scale(0.95)';
                                        modalContentEl.style.opacity = '0';
                                    }
                                    
                                    setTimeout(function() {
                                        modal.style.display = 'none';
                                        document.body.style.overflow = '';
                                    }, 300);
                                }
                            };
                        }
                    }, 500);
                });
            </script>

            <!-- All Portfolio Modal Functions -->
            <script>
                // Global variable for all portfolio data
                window.allPortfolioData = [];

                // Function to get all portfolio data
                function getAllPortfolioData() {
                    if (window.allPortfolioData.length === 0 && window.portfolioData) {
                        // Convert portfolioData object to array
                        window.allPortfolioData = Object.values(window.portfolioData);
                    }
                    return window.allPortfolioData;
                }

                // Function to open all portfolio modal
                function openAllPortfolioModal() {
                    const modal = document.getElementById('allPortfolioModal');
                    if (!modal) return;
                    
                    // Load portfolio data
                    const portfolioData = getAllPortfolioData();
                    
                    renderAllPortfolio(portfolioData);
                    
                    // Show modal
                    modal.style.display = 'flex';
                    document.body.style.overflow = 'hidden';
                }

                // Function to close all portfolio modal
                function closeAllPortfolioModal() {
                    const modal = document.getElementById('allPortfolioModal');
                    if (!modal) return;
                    
                    modal.style.display = 'none';
                    document.body.style.overflow = '';
                }

                // Function to filter portfolio in all portfolio modal
                function filterAllPortfolio(category) {
                    const portfolioData = getAllPortfolioData();
                    let filteredData = portfolioData;
                    
                    if (category !== 'all') {
                        filteredData = portfolioData.filter(function(item) {
                            return item.category && item.category.toLowerCase().includes(category.toLowerCase());
                        });
                    }
                    

                    
                    renderAllPortfolio(filteredData);
                    
                    // Update active filter button
                    const filterButtons = document.querySelectorAll('.all-portfolio-filter-btn');
                    filterButtons.forEach(function(btn) {
                        btn.classList.remove('active', 'bg-blue-600', 'text-white');
                        btn.classList.add('bg-gray-200', 'text-gray-700');
                        
                        if (btn.getAttribute('data-filter') === category) {
                            btn.classList.add('active', 'bg-blue-600', 'text-white');
                            btn.classList.remove('bg-gray-200', 'text-gray-700');
                        }
                    });
                }

                // Function to render portfolio items in modal
                function renderAllPortfolio(portfolioData) {
                    const gridContainer = document.getElementById('allPortfolioGrid');
                    if (!gridContainer) return;
                    
                    if (portfolioData.length === 0) {
                        gridContainer.innerHTML = '<div class="col-span-full text-center py-12">' +
                            '<div class="text-gray-400 mb-4">' +
                            '<svg class="w-16 h-16 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">' +
                            '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>' +
                            '</svg>' +
                            '</div>' +
                            '<h3 class="text-lg font-semibold text-gray-700 mb-2">Tidak ada portfolio ditemukan</h3>' +
                            '<p class="text-gray-500">Coba pilih kategori lain atau lihat semua portfolio</p>' +
                            '</div>';
                        return;
                    }
                    
                    let html = '';
                    portfolioData.forEach(function(portfolio) {
                        const colorClass = portfolio.color === 'green' ? 'bg-green-600' : 
                                         (portfolio.color === 'yellow' ? 'bg-yellow-500' : 
                                         (portfolio.color === 'purple' ? 'bg-purple-600' : 'bg-blue-600'));
                        
                        const imageSrc = portfolio.featured_image || portfolio.image || 'https://via.placeholder.com/400x300/E5E7EB/9CA3AF?text=No+Image';
                        
                        html += '<div class="bg-white rounded-lg shadow-md overflow-hidden portfolio-grid-item cursor-pointer" onclick="openPortfolioFromModal(' + portfolio.id + ')">';
                        html += '  <div class="relative h-48 overflow-hidden">';
                        html += '    <img src="' + imageSrc + '" alt="' + portfolio.title + '" class="w-full h-full object-cover">';
                        html += '    <div class="absolute top-3 right-3">';
                        html += '      <span class="' + colorClass + ' text-white px-2 py-1 rounded-full text-xs font-medium">' + portfolio.category + '</span>';
                        html += '    </div>';
                        html += '  </div>';
                        html += '  <div class="p-4">';
                        html += '    <h3 class="font-semibold text-gray-900 mb-2 line-clamp-2">' + portfolio.title + '</h3>';
                        html += '    <p class="text-gray-600 text-sm mb-3 line-clamp-3">' + (portfolio.excerpt || 'Lihat detail portfolio ini...') + '</p>';
                        html += '    <div class="flex justify-between items-center">';
                        html += '      <span class="text-xs text-gray-500">' + portfolio.date + '</span>';
                        html += '      <button class="text-blue-600 hover:text-blue-800 text-sm font-medium">Lihat Detail →</button>';
                        html += '    </div>';
                        html += '  </div>';
                        html += '</div>';
                    });
                    
                    gridContainer.innerHTML = html;
                }

                // Function to open specific portfolio modal from all portfolio modal
                function openPortfolioFromModal(portfolioId) {
                    // Close all portfolio modal first
                    closeAllPortfolioModal();
                    
                    // Small delay then open specific portfolio modal
                    setTimeout(function() {
                        if (typeof window.openPortfolioModal === 'function') {
                            window.openPortfolioModal(portfolioId);
                        }
                    }, 100);
                }

                // Close modals when clicking outside or pressing Escape
                document.addEventListener('DOMContentLoaded', function() {
                    // All portfolio modal
                    const allPortfolioModal = document.getElementById('allPortfolioModal');
                    if (allPortfolioModal) {
                        allPortfolioModal.addEventListener('click', function(e) {
                            if (e.target === this) {
                                closeAllPortfolioModal();
                            }
                        });
                    }
                    
                    // Detail portfolio modal
                    const portfolioModal = document.getElementById('portfolioModal');
                    if (portfolioModal) {
                        portfolioModal.addEventListener('click', function(e) {
                            if (e.target === this) {
                                closePortfolioModal();
                            }
                        });
                    }
                    
                    // ESC key to close modals
                    document.addEventListener('keydown', function(e) {
                        if (e.key === 'Escape') {
                            const allPortfolioModal = document.getElementById('allPortfolioModal');
                            const portfolioModal = document.getElementById('portfolioModal');
                            
                            if (allPortfolioModal && allPortfolioModal.style.display === 'flex') {
                                closeAllPortfolioModal();
                            } else if (portfolioModal && portfolioModal.style.display === 'flex') {
                                closePortfolioModal();
                            }
                        }
                    });
                });
            </script>
        </div>

        <!-- Portfolio Navigation -->
        <div class="mt-12 flex justify-center gap-4">
            <?php if ($portfolio_query->found_posts > 0) : ?>
                <button onclick="openAllPortfolioModal()" class="inline-flex items-center justify-center bg-blue-700 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-800 transition duration-300 transform hover:scale-105">
                    Lihat Semua Portfolio
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </button>
            <?php endif; ?>
        </div>
        

        </div>
    </div>
</section>

<!-- Portfolio Detail Modal -->
<div id="portfolioModal" class="fixed inset-0 bg-black bg-opacity-80 z-50 hidden items-center justify-center p-4 pt-24">
    <div id="modalContent" class="bg-white rounded-2xl max-w-4xl w-full max-h-[85vh] overflow-hidden shadow-2xl transform scale-95 opacity-0 transition-all duration-300 relative">
        <!-- Header Modal -->
        <div class="bg-gradient-to-r from-blue-600 to-purple-600 text-white p-6 flex justify-between items-center">
            <div class="flex items-center">
                <span class="text-2xl mr-3">🎯</span>
                <h2 id="modalHeaderTitle" class="text-2xl font-bold">Detail Portfolio</h2>
            </div>
            <button onclick="closePortfolioModal()" class="hover:bg-white hover:bg-opacity-20 p-2 rounded-full transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        
        <!-- Modal Body -->
        <div class="overflow-y-auto max-h-[55vh] modal-scroll">
            
            <!-- Content -->
            <div class="px-6 py-6">
                <!-- Title - Left Aligned -->
                <div class="mb-6">
                    <h3 id="modalTitle" class="text-2xl font-bold text-gray-900 mb-3"></h3>
                </div>
                
                <!-- Description -->
                <div id="modalContentText" class="text-gray-700 leading-relaxed text-base mb-6"></div>
                
                <!-- Meta Information -->
                <div class="border-t border-gray-200 pt-4 space-y-3">
                    <div id="modalCategoryMeta" class="text-sm text-gray-600 flex items-center gap-2">
                        <span class="font-semibold">Kategori:</span> 
                        <span id="modalCategoryName" class="text-gray-700"></span>
                    </div>
                    <div class="text-sm text-gray-500 flex items-center gap-2">
                        <span class="font-semibold">Tanggal:</span> 
                        <span id="modalDate"></span>
                    </div>
                </div>
                
            </div>
        </div>
        
        <!-- Footer Modal -->
        <div class="bg-gray-50 p-4 flex justify-center gap-3">
            <button onclick="closePortfolioModal()" class="bg-gray-500 hover:bg-gray-600 text-white px-6 py-2.5 rounded-lg font-semibold transition-all duration-300">
                Tutup
            </button>
            <a id="modalContactBtn" href="#kontak" onclick="closePortfolioModal()" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2.5 rounded-lg font-semibold transition-all duration-300 no-underline inline-block">
                Hubungi Kami
            </a>
        </div>
    </div>
</div>

<!-- Modal Semua Portfolio -->
<div id="allPortfolioModal" class="fixed inset-0 bg-black bg-opacity-80 z-50 hidden items-center justify-center p-4 pt-24">
    <div class="bg-white rounded-2xl shadow-2xl max-w-6xl w-full max-h-[85vh] overflow-hidden relative">
        <!-- Header Modal -->
        <div class="bg-gradient-to-r from-blue-600 to-purple-600 text-white p-6 flex justify-between items-center">
            <h2 class="text-2xl font-bold">📂 Semua Portfolio Barokah Ibu</h2>
            <button onclick="closeAllPortfolioModal()" class="hover:bg-white hover:bg-opacity-20 p-2 rounded-full transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Filter Categories (dalam modal) -->
        <div class="p-4 bg-gray-50 border-b">
            <div class="flex flex-wrap gap-2 justify-center">
                <button onclick="filterAllPortfolio('all')" class="all-portfolio-filter-btn active bg-blue-600 text-white px-4 py-2 rounded-full text-sm font-semibold hover:bg-blue-700 transition duration-300" data-filter="all">
                    Semua
                </button>
                <?php
                $modal_categories = get_terms(array(
                    'taxonomy' => 'portfolio_category',
                    'hide_empty' => false,
                ));
                if ($modal_categories && !is_wp_error($modal_categories)) :
                    foreach ($modal_categories as $modal_category) : ?>
                        <button onclick="filterAllPortfolio('<?php echo esc_js($modal_category->slug); ?>')" class="all-portfolio-filter-btn bg-gray-200 text-gray-700 px-4 py-2 rounded-full text-sm font-semibold hover:bg-gray-300 transition duration-300" data-filter="<?php echo esc_attr($modal_category->slug); ?>">
                            <?php echo esc_html($modal_category->name); ?>
                        </button>
                    <?php endforeach;
                endif; ?>
            </div>
        </div>

        <!-- Content Modal -->
        <div class="overflow-y-auto max-h-[55vh] modal-scroll">
            <div id="allPortfolioGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 p-6">
                <!-- Portfolio items akan diisi via JavaScript -->
            </div>
        </div>

        <!-- Footer Modal -->
        <div class="bg-gray-50 p-4 flex justify-center gap-3">
            <button onclick="closeAllPortfolioModal()" class="bg-gray-500 hover:bg-gray-600 text-white px-6 py-2.5 rounded-lg font-semibold transition-all duration-300">
                Tutup
            </button>
        </div>
    </div>
</div>

<!-- About Section -->
<section id="tentang" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">Tentang Barokah Printing</h2>
                <p class="text-lg text-gray-600 mb-6">
                    Didirikan sejak 2015, Barokah Printing telah menjadi partner terpercaya untuk berbagai kebutuhan percetakan. 
                    Dengan komitmen pada kualitas dan kepuasan pelanggan, kami terus berinovasi menggunakan teknologi terdepan.
                </p>
                <p class="text-lg text-gray-600 mb-8">
                    Tim profesional kami siap membantu mewujudkan ide kreatif Anda dengan hasil yang melampaui ekspektasi. 
                    Dari konsep hingga produk jadi, kami pastikan setiap detail sesuai dengan keinginan Anda.
                </p>
                
                <div class="grid grid-cols-2 gap-6 mb-8">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-blue-700 mb-2"><?php echo date('Y') - 2015; ?>+</div>
                        <div class="text-gray-600">Tahun Pengalaman</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-green-600 mb-2">2000+</div>
                        <div class="text-gray-600">Klien Puas</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-yellow-500 mb-2">11+</div>
                        <div class="text-gray-600">Jenis Layanan</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-purple-600 mb-2">99%</div>
                        <div class="text-gray-600">Tingkat Kepuasan</div>
                    </div>
                </div>
                
                <!-- <a href="#kontak" class="bg-blue-700 text-white hover:bg-blue-800 px-8 py-4 rounded-lg font-semibold text-lg transition duration-300 inline-block">
                    Hubungi Kami
                </a> -->
            </div>
            
            <div class="relative flex justify-center items-center">
                <div class="w-80 h-80 bg-gradient-to-br from-blue-100 to-yellow-100 rounded-3xl shadow-2xl shadow-yellow-200 p-8 flex items-center justify-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo bi.jpeg" alt="Logo Barokah Ibu Printing" class="w-64 h-64 object-contain rounded-2xl shadow-lg border-4 border-white">
                </div>
                
                <!-- Achievement Badges -->
                <div class="absolute top-12 right-12 bg-yellow-400 text-blue-800 p-3 rounded-lg shadow-lg text-center z-10">
                    <i class="fas fa-award text-xl mb-1"></i>
                    <div class="text-xs font-semibold">ISO Certified</div>
                </div>
                
                <div class="absolute bottom-12 left-12 bg-green-500 text-white p-3 rounded-lg shadow-lg text-center z-10">
                    <i class="fas fa-leaf text-xl mb-1"></i>
                    <div class="text-xs font-semibold">Eco Friendly</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonial Section -->
<section id="testimoni" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Apa Kata Klien Kami</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Kepuasan klien adalah prioritas utama kami. Berikut testimoni dari berbagai klien yang telah mempercayai layanan kami.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="bg-white p-8 rounded-lg shadow-lg flex flex-col h-full">
                <div class="flex items-center mb-4">
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <p class="text-gray-600 mb-6 italic flex-grow">
                    "Kualitas banner yang dicetak sangat memuaskan. Warna tajam dan hasil sesuai dengan desain yang kami berikan. Pelayanan juga sangat responsif."
                </p>
                <div class="flex items-center mt-auto">
                    <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center mr-4">
                        <i class="fas fa-user text-blue-700 text-xl"></i>
                    </div>
                    <div>
                        <div class="font-semibold">Ahmad Rizki</div>
                        <div class="text-sm text-gray-500">Owner Restaurant</div>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 2 -->
            <div class="bg-white p-8 rounded-lg shadow-lg flex flex-col h-full">
                <div class="flex items-center mb-4">
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <p class="text-gray-600 mb-6 italic flex-grow">
                    "Sudah langganan dari 2 tahun lalu. Harga terjangkau tapi kualitas tidak murahan. Recommended untuk kebutuhan printing bisnis."
                </p>
                <div class="flex items-center mt-auto">
                    <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center mr-4">
                        <i class="fas fa-user text-blue-700 text-xl"></i>
                    </div>
                    <div>
                        <div class="font-semibold">Sari Dewi</div>
                        <div class="text-sm text-gray-500">Marketing Manager</div>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 3 -->
            <div class="bg-white p-8 rounded-lg shadow-lg flex flex-col h-full">
                <div class="flex items-center mb-4">
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <p class="text-gray-600 mb-6 italic flex-grow">
                    "Pengerjaan cepat dan tepat waktu. Kemarin pesan undangan untuk acara mendadak, hasilnya bagus dan selesai tepat waktu."
                </p>
                <div class="flex items-center mt-auto">
                    <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center mr-4">
                        <i class="fas fa-user text-blue-700 text-xl"></i>
                    </div>
                    <div>
                        <div class="font-semibold">Budi Santoso</div>
                        <div class="text-sm text-gray-500">Event Organizer</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="kontak" class="py-20 bg-blue-700 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Hubungi Kami Sekarang</h2>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto">
                Siap membantu mewujudkan kebutuhan percetakan Anda. Konsultasi gratis dan penawaran terbaik menanti Anda.
            </p>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Info -->
            <div>
                <h3 class="text-2xl font-semibold mb-8">Informasi Kontak</h3>
                
                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="bg-blue-500 p-3 rounded-lg mr-4">
                            <i class="fas fa-map-marker-alt text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold mb-1">Alamat</h4>
                            <p class="text-blue-100">
                                Jln. Raya Mangaran<br>
                                Curah Jeru, Kecamatan Panji, Situbondo<br>
                                Jawa Timur 68323
                            </p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="bg-blue-500 p-3 rounded-lg mr-4">
                            <i class="fas fa-phone text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold mb-1">Telepon</h4>
                            <p class="text-blue-100">
                                +62 821-4488-8116
                            </p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="bg-blue-500 p-3 rounded-lg mr-4">
                            <i class="fas fa-envelope text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold mb-1">Email</h4>
                            <p class="text-blue-100">
                                barokahibu.percetakan@gmail.com
                            </p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="bg-blue-500 p-3 rounded-lg mr-4">
                            <i class="fas fa-clock text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold mb-1">Jam Operasional</h4>
                            <p class="text-blue-100">
                                Senin - Sabtu: 08:00 - 21:00<br>
                                Jumat: 08:00 - 11:00 & 13:00 - 21:00<br>
                                <span class="text-blue-200">Minggu: Tutup</span>
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Quick Contact Buttons -->
                <!-- <div class="mt-8 space-y-4">
                    <a href="https://wa.me/6282144888116" target="_blank" class="flex items-center bg-green-500 hover:bg-green-600 px-6 py-3 rounded-lg transition duration-300">
                        <i class="fab fa-whatsapp text-xl mr-3"></i>
                        <span>Chat via WhatsApp</span>
                    </a>
                    <a href="tel:+6282144888116" class="flex items-center bg-blue-500 hover:bg-blue-800 px-6 py-3 rounded-lg transition duration-300">
                        <i class="fas fa-phone text-xl mr-3"></i>
                        <span>Telepon Sekarang</span>
                    </a>
                </div> -->
            </div>
            
            <!-- Contact Form -->
            <div class="bg-white text-gray-800 p-8 rounded-lg shadow-2xl">
                <h3 class="text-2xl font-semibold mb-6">Kirim Pesan</h3>
                
                <form id="contactForm" class="space-y-6">
                    <input type="hidden" id="contact_nonce" value="<?php echo wp_create_nonce('contact_form_nonce'); ?>">
                    <script>console.log('BAROKAH DEBUG: Generated nonce:', '<?php echo wp_create_nonce('contact_form_nonce'); ?>');</script>
                    
                    <!-- Row 1: Nama dan Telepon -->
                    <div class="flex flex-col md:flex-row md:space-x-4 space-y-4 md:space-y-0">
                        <div class="flex-1">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap *</label>
                            <input type="text" id="contact_name" name="contact_name" required 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors">
                        </div>
                        <div class="flex-1">
                            <label class="block text-sm font-medium text-gray-700 mb-2">No. Telepon *</label>
                            <input type="tel" id="contact_phone" name="contact_phone" required 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors">
                        </div>
                    </div>
                    
                    <!-- Row 2: Email -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Email *</label>
                        <input type="email" id="contact_email" name="contact_email" required 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors">
                    </div>
                    
                    <!-- Row 3: Layanan -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Layanan yang Diinginkan</label>
                        <select id="contact_service" name="contact_service" 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors bg-white">
                            <option value="">Pilih Layanan</option>
                            <option value="yasin-cover">Buku Yasin + Cover</option>
                            <option value="yasin-kosongan">Buku Yasin Kosongan</option>
                            <option value="cetak-a3">Cetak A3+</option>
                            <option value="cetak-brosur">Cetak Brosur</option>
                            <option value="cetak-dtf">Cetak DTF</option>
                            <option value="cetak-id-card">Cetak ID Card</option>
                            <option value="cetak-kalender">Cetak Kalender</option>
                            <option value="pin-ganci-tag">PIN Ganci & Tag</option>
                            <option value="cetak-undangan">Cetak Undangan</option>
                            <option value="nota-kupon-undian">Nota & Kupon Undian</option>
                            <option value="sablon-mug">Sablon Mug</option>
                            <option value="lainnya">Lainnya</option>
                        </select>
                    </div>
                    
                    <!-- Row 4: Pesan -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Pesan *</label>
                        <textarea id="contact_message" name="contact_message" required rows="4" 
                                  placeholder="Ceritakan detail kebutuhan percetakan Anda..." 
                                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors resize-vertical"></textarea>
                    </div>
                    
                    <!-- Submit Button -->
                    <button type="submit" id="submit_contact" 
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-4 px-6 rounded-lg transition-colors duration-300 flex items-center justify-center space-x-2">
                        <i class="fas fa-paper-plane"></i>
                        <span>Kirim Pesan</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-yellow-400 text-blue-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Dapatkan Penawaran Spesial Hari Ini!</h2>
        <p class="text-xl mb-8 max-w-3xl mx-auto">
            Konsultasi gratis + diskon hingga 20% untuk pemesanan pertama. Jangan lewatkan kesempatan emas ini!
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#kontak" class="bg-blue-700 text-white hover:bg-blue-800 px-8 py-4 rounded-lg font-semibold text-lg transition duration-300">
                <i class="fas fa-gift mr-2"></i>
                Klaim Promo Sekarang
            </a>
            <a href="https://wa.me/6282144888116" target="_blank" class="bg-white text-blue-700 hover:bg-gray-100 px-8 py-4 rounded-lg font-semibold text-lg transition duration-300">
                <i class="fab fa-whatsapp mr-2"></i>
                Chat Langsung
            </a>
        </div>
    </div>
</section>

<script>
// Portfolio Filter with Live Animation
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.portfolio-filter');
    const portfolioItems = document.querySelectorAll('.portfolio-item');
    const portfolioGrid = document.querySelector('.grid');
    
    // Add initial transition styles to portfolio items
    portfolioItems.forEach(item => {
        item.style.transition = 'all 0.3s ease, opacity 0.3s ease, transform 0.3s ease';
        item.style.opacity = '1';
        item.style.transform = 'scale(1)';
    });
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Prevent multiple clicks during animation
            if (this.dataset.filtering === 'true') return;
            
            // Show loading indicator
            const loadingIndicator = document.getElementById('portfolioLoadingIndicator');
            if (loadingIndicator) {
                loadingIndicator.classList.remove('hidden');
            }
            
            // Mark as filtering
            filterButtons.forEach(btn => btn.dataset.filtering = 'true');
            
            // Update button states with animation
            filterButtons.forEach(btn => {
                btn.classList.remove('active', 'bg-blue-700', 'text-white');
                btn.classList.add('bg-gray-200', 'text-gray-700');
                btn.style.transform = 'scale(1)';
            });
            
            // Active button with bounce effect
            this.classList.add('active', 'bg-blue-700', 'text-white');
            this.classList.remove('bg-gray-200', 'text-gray-700');
            this.style.transform = 'scale(1.05)';
            
            setTimeout(() => {
                this.style.transform = 'scale(1)';
            }, 150);
            
            const filterValue = this.getAttribute('data-filter');
            
            // Phase 1: Fade out all items
            portfolioItems.forEach((item, index) => {
                setTimeout(() => {
                    item.style.opacity = '0';
                    item.style.transform = 'scale(0.9) translateY(10px)';
                }, index * 30);
            });
            
            // Phase 2: Filter and show matching items
            setTimeout(() => {
                // Hide loading indicator
                if (loadingIndicator) {
                    loadingIndicator.classList.add('hidden');
                }
                
                portfolioItems.forEach((item, index) => {
                    if (filterValue === 'semua' || item.classList.contains(filterValue)) {
                        item.style.display = 'block';
                        // Staggered entrance animation
                        setTimeout(() => {
                            item.style.opacity = '1';
                            item.style.transform = 'scale(1) translateY(0px)';
                        }, index * 80);
                    } else {
                        item.style.display = 'none';
                    }
                });
                
                // Re-enable buttons
                setTimeout(() => {
                    filterButtons.forEach(btn => btn.dataset.filtering = 'false');
                }, 500);
            }, 300);
        });
    });
    
    // Contact form AJAX submission
    console.log('BAROKAH DEBUG: Looking for contactForm...');
    const contactForm = document.querySelector('#contactForm');
    console.log('BAROKAH DEBUG: contactForm found:', contactForm);
    if (contactForm) {
        console.log('BAROKAH DEBUG: Adding submit event listener');
        contactForm.addEventListener('submit', function(e) {
            console.log('BAROKAH DEBUG: Form submitted!');
            e.preventDefault();
            
            const submitBtn = this.querySelector('#submit_contact');
            const originalText = submitBtn.innerHTML;
            
            // Show loading state
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Mengirim...';
            
            // Validate form
            const requiredFields = this.querySelectorAll('input[required], textarea[required]');
            let isValid = true;
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    field.classList.add('border-red-500');
                    isValid = false;
                } else {
                    field.classList.remove('border-red-500');
                    field.classList.add('border-green-500');
                }
            });
            
            if (!isValid) {
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalText;
                showFormMessage('❌ Mohon lengkapi semua field yang wajib diisi!', 'error');
                return;
            }
            
            // Prepare form data
            const formData = new FormData();
            formData.append('action', 'submit_contact_form');
            formData.append('nonce', document.getElementById('contact_nonce').value);
            formData.append('name', document.getElementById('contact_name').value);
            formData.append('phone', document.getElementById('contact_phone').value);
            formData.append('email', document.getElementById('contact_email').value);
            formData.append('service', document.getElementById('contact_service').value);
            formData.append('message', document.getElementById('contact_message').value);
            
            // Debug: Log form data
            console.log('BAROKAH DEBUG: Submitting form with data:');
            for (let pair of formData.entries()) {
                console.log(pair[0] + ': ' + pair[1]);
            }
            
            // Submit via AJAX
            fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                console.log('BAROKAH DEBUG: Response status:', response.status);
                return response.json();
            })
            .then(data => {
                console.log('BAROKAH DEBUG: Response data:', data);
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalText;
                
                if (data.success) {
                    showFormMessage(data.message, 'success');
                    contactForm.reset();
                    // Remove validation classes
                    requiredFields.forEach(field => {
                        field.classList.remove('border-red-500', 'border-green-500');
                    });
                } else {
                    showFormMessage(data.message, 'error');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalText;
                showFormMessage('❌ Terjadi kesalahan jaringan. Silakan coba lagi.', 'error');
            });
        });
        
        // Real-time validation
        const inputs = contactForm.querySelectorAll('input, textarea, select');
        inputs.forEach(input => {
            input.addEventListener('blur', function() {
                if (this.hasAttribute('required')) {
                    if (this.value.trim()) {
                        this.classList.remove('border-red-500');
                        this.classList.add('border-green-500');
                    } else {
                        this.classList.add('border-red-500');
                        this.classList.remove('border-green-500');
                    }
                }
            });
            
            // Remove validation styles on focus
            input.addEventListener('focus', function() {
                this.classList.remove('border-red-500', 'border-green-500');
            });
        });
    }
    
    // Show form messages
    function showFormMessage(message, type = 'success') {
        const messageDiv = document.createElement('div');
        messageDiv.className = `fixed top-24 right-4 z-50 p-4 rounded-lg shadow-lg max-w-sm ${
            type === 'success' ? 'bg-green-500 text-white' : 'bg-red-500 text-white'
        }`;
        messageDiv.innerHTML = `
            <div class="flex items-center justify-between">
                <span>${message}</span>
                <button onclick="this.parentElement.parentElement.remove()" class="ml-2 text-white hover:text-gray-200">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        `;
        
        document.body.appendChild(messageDiv);
        
        // Auto remove after 5 seconds
        setTimeout(() => {
            if (messageDiv.parentNode) {
                messageDiv.remove();
            }
        }, 5000);
        
        // Slide in animation
        setTimeout(() => {
            messageDiv.style.transform = 'translateX(0)';
        }, 100);
        messageDiv.style.transform = 'translateX(100%)';
        messageDiv.style.transition = 'transform 0.3s ease-out';
    }
});
</script>

<?php get_footer(); ?>
