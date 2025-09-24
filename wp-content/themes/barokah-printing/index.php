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
        
        <!-- Services Carousel -->
        <div class="relative">
            <!-- Carousel Navigation Buttons -->
            <button id="servicesCarouselPrev" class="absolute left-0 top-1/2 transform -translate-y-1/2 z-10 bg-white hover:bg-gray-50 shadow-lg rounded-full p-3 text-gray-600 hover:text-blue-700 transition duration-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
            <button id="servicesCarouselNext" class="absolute right-0 top-1/2 transform -translate-y-1/2 z-10 bg-white hover:bg-gray-50 shadow-lg rounded-full p-3 text-gray-600 hover:text-blue-700 transition duration-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>
            
            <!-- Carousel Container -->
            <div class="overflow-hidden mx-8">
                <div id="servicesCarouselTrack" class="flex transition-transform duration-500 ease-in-out">
                    <!-- Slide 1 -->
                    <div class="flex-none w-full grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Service Item 1 - Kalender A3+ -->
                        <div class="group bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-xl transition duration-300 flex flex-col h-full">
                            <div class="relative overflow-hidden bg-blue-700 from-blue-50 to-blue-100 flex items-center justify-center h-48">
                                <div class="w-28 h-28 bg-white rounded-full flex items-center justify-center group-hover:scale-125 group-hover:rotate-12 transition-all duration-500 shadow-xl group-hover:shadow-2xl border-4 border-blue-100 group-hover:border-blue-300">
                                    <i class="fas fa-calendar-alt text-5xl text-blue-700 group-hover:text-blue-800 transition-colors duration-300"></i>
                                </div>
                                <!-- <div class="absolute top-4 right-4 bg-blue-700 text-white px-3 py-1 rounded-full text-sm font-semibold">
                                    Populer
                                </div> -->
                            </div>
                            <div class="p-6 flex flex-col flex-grow">
                                <h3 class="text-xl font-semibold mb-3">Kalender A3+</h3>
                                <p class="text-gray-600 mb-4 flex-grow">Kalender custom ukuran A3+ dengan desain menarik dan kualitas cetak terbaik.</p>
                                <div class="flex justify-between items-center mt-auto">
                                    <span class="text-2xl font-bold text-blue-700">Rp 6.000</span>
                                    <button onclick="goToContactForm('kalender-a3')" class="bg-blue-700 text-white px-4 py-2 rounded-lg hover:bg-blue-800 transition duration-300">
                                        Pesan
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Service Item 2 - Ganci -->
                        <div class="group bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-xl transition duration-300 flex flex-col h-full">
                            <div class="relative overflow-hidden bg-yellow-400 from-yellow-50 to-yellow-100 flex items-center justify-center h-48">
                                <div class="w-28 h-28 bg-white rounded-full flex items-center justify-center group-hover:scale-125 group-hover:-rotate-12 transition-all duration-500 shadow-xl group-hover:shadow-2xl border-4 border-yellow-100 group-hover:border-yellow-300">
                                    <i class="fas fa-key text-5xl text-yellow-500 group-hover:text-yellow-600 transition-colors duration-300"></i>
                                </div>
                            </div>
                            <div class="p-6 flex flex-col flex-grow">
                                <h3 class="text-xl font-semibold mb-3">Ganci Custom</h3>
                                <p class="text-gray-600 mb-4 flex-grow">Ganci kunci custom dengan desain sesuai kebutuhan, bahan berkualitas dan tahan lama.</p>
                                <div class="flex justify-between items-center mt-auto">
                                    <span class="text-2xl font-bold text-yellow-500">Rp 10.000</span>
                                    <button onclick="goToContactForm('ganci')" class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600 transition duration-300">
                                        Pesan
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Service Item 3 - Kipas Custom -->
                        <div class="group bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-xl transition duration-300 flex flex-col h-full">
                            <div class="relative overflow-hidden bg-blue-700 from-blue-50 to-blue-100 flex items-center justify-center h-48">
                                <div class="w-28 h-28 bg-white rounded-full flex items-center justify-center group-hover:scale-125 group-hover:rotate-12 transition-all duration-500 shadow-xl group-hover:shadow-2xl border-4 border-blue-100 group-hover:border-blue-300">
                                    <i class="fas fa-wind text-5xl text-blue-700 group-hover:text-blue-800 transition-colors duration-300"></i>
                                </div>
                            </div>
                            <div class="p-6 flex flex-col flex-grow">
                                <h3 class="text-xl font-semibold mb-3">Kipas Custom</h3>
                                <p class="text-gray-600 mb-4 flex-grow">Kipas custom dengan desain unik, cocok untuk souvenir atau promosi.</p>
                                <div class="flex justify-between items-center mt-auto">
                                    <span class="text-2xl font-bold text-blue-700">Rp 7.000</span>
                                    <button onclick="goToContactForm('kipas')" class="bg-blue-700 text-white px-4 py-2 rounded-lg hover:bg-blue-800 transition duration-300">
                                        Pesan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="flex-none w-full grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Service Item 4 - Nametag -->
                        <div class="group bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-xl transition duration-300 flex flex-col h-full">
                            <div class="relative overflow-hidden bg-yellow-400 from-yellow-50 to-yellow-100 flex items-center justify-center h-48">
                                <div class="w-28 h-28 bg-white rounded-full flex items-center justify-center group-hover:scale-125 group-hover:-rotate-12 transition-all duration-500 shadow-xl group-hover:shadow-2xl border-4 border-yellow-100 group-hover:border-yellow-300">
                                    <i class="fas fa-id-badge text-5xl text-yellow-500 group-hover:text-yellow-600 transition-colors duration-300"></i>
                                </div>
                            </div>
                            <div class="p-6 flex flex-col flex-grow">
                                <h3 class="text-xl font-semibold mb-3">Nametag / Namadada</h3>
                                <p class="text-gray-600 mb-4 flex-grow">Nametag profesional untuk kantor, event, atau identitas personal.</p>
                                <div class="flex justify-between items-center mt-auto">
                                    <span class="text-2xl font-bold text-yellow-500">Rp 25.000</span>
                                    <button onclick="goToContactForm('nametag')" class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600 transition duration-300">
                                        Pesan
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Service Item 5 - Mug Custom -->
                        <div class="group bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-xl transition duration-300 flex flex-col h-full">
                            <div class="relative overflow-hidden bg-blue-700 from-blue-50 to-blue-100 flex items-center justify-center h-48">
                                <div class="w-28 h-28 bg-white rounded-full flex items-center justify-center group-hover:scale-125 group-hover:rotate-12 transition-all duration-500 shadow-xl group-hover:shadow-2xl border-4 border-blue-100 group-hover:border-blue-300">
                                    <i class="fas fa-mug-hot text-5xl text-blue-700 group-hover:text-blue-800 transition-colors duration-300"></i>
                                </div>
                            </div>
                            <div class="p-6 flex flex-col flex-grow">
                                <h3 class="text-xl font-semibold mb-3">Mug Custom</h3>
                                <p class="text-gray-600 mb-4 flex-grow">Mug custom dengan desain personal, cocok untuk hadiah atau merchandise.</p>
                                <div class="flex justify-between items-center mt-auto">
                                    <span class="text-2xl font-bold text-blue-700">Rp 25.000</span>
                                    <button onclick="goToContactForm('mug-custom')" class="bg-blue-700 text-white px-4 py-2 rounded-lg hover:bg-blue-800 transition duration-300">
                                        Pesan
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Service Item 6 - Nota dan Kupon -->
                        <div class="group bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-xl transition duration-300 flex flex-col h-full">
                            <div class="relative overflow-hidden bg-yellow-400 from-yellow-50 to-yellow-100 flex items-center justify-center h-48">
                                <div class="w-28 h-28 bg-white rounded-full flex items-center justify-center group-hover:scale-125 group-hover:-rotate-12 transition-all duration-500 shadow-xl group-hover:shadow-2xl border-4 border-yellow-100 group-hover:border-yellow-300">
                                    <i class="fas fa-receipt text-5xl text-yellow-500 group-hover:text-yellow-600 transition-colors duration-300"></i>
                                </div>
                            </div>
                            <div class="p-6 flex flex-col flex-grow">
                                <h3 class="text-xl font-semibold mb-3">Nota & Kupon</h3>
                                <p class="text-gray-600 mb-4 flex-grow">Nota dan kupon berkualitas untuk kebutuhan bisnis Anda.</p>
                                <div class="flex justify-between items-center mt-auto">
                                    <span class="text-2xl font-bold text-yellow-500">Rp 150.000</span>
                                    <button onclick="goToContactForm('nota-kupon')" class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600 transition duration-300">
                                        Pesan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="flex-none w-full grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Service Item 7 - Stempel Wisuda -->
                        <div class="group bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-xl transition duration-300 flex flex-col h-full">
                            <div class="relative overflow-hidden bg-blue-700 from-blue-50 to-blue-100 flex items-center justify-center h-48">
                                <div class="w-28 h-28 bg-white rounded-full flex items-center justify-center group-hover:scale-125 group-hover:rotate-12 transition-all duration-500 shadow-xl group-hover:shadow-2xl border-4 border-blue-100 group-hover:border-blue-300">
                                    <i class="fas fa-graduation-cap text-5xl text-blue-700 group-hover:text-blue-700 transition-colors duration-300"></i>
                                </div>
                            </div>
                            <div class="p-6 flex flex-col flex-grow">
                                <h3 class="text-xl font-semibold mb-3">Stempel Wisuda</h3>
                                <p class="text-gray-600 mb-4 flex-grow">Stempel untuk wisuda dengan nama lengkap sesuai kebutuhan.</p>
                                <div class="flex justify-between items-center mt-auto">
                                    <span class="text-2xl font-bold text-blue-700">Rp 35.000</span>
                                    <button onclick="goToContactForm('stempel-wisuda')" class="bg-blue-700 text-white px-4 py-2 rounded-lg hover:bg-blue-800 transition duration-300">
                                        Pesan
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Service Item 8 - Kupon -->
                        <div class="group bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-xl transition duration-300">
                            <div class="relative overflow-hidden bg-yellow-400 from-yellow-50 to-yellow-100 flex items-center justify-center h-48">
                                <div class="w-28 h-28 bg-white rounded-full flex items-center justify-center group-hover:scale-125 group-hover:-rotate-12 transition-all duration-500 shadow-xl group-hover:shadow-2xl border-4 border-yellow-100 group-hover:border-yellow-300">
                                    <i class="fas fa-ticket-alt text-5xl text-yellow-500 group-hover:text-yellow-600 transition-colors duration-300"></i>
                                </div>
                            </div>
                            <div class="p-6 flex flex-col flex-grow">
                                <h3 class="text-xl font-semibold mb-3">Kupon</h3>
                                <p class="text-gray-600 mb-4 flex-grow">Kupon bisa warna bisa putih sesuai kebutuhan bisnis Anda.</p>
                                <div class="flex justify-between items-center mt-auto">
                                    <span class="text-2xl font-bold text-yellow-500">Rp 150.000</span>
                                    <button onclick="goToContactForm('kupon')" class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600 transition duration-300">
                                        Pesan
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Service Item 9 - Cetak A3 -->
                        <div class="group bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-xl transition duration-300 flex flex-col h-full">
                            <div class="relative overflow-hidden bg-blue-700 from-blue-50 to-blue-100 flex items-center justify-center h-48">
                                <div class="w-28 h-28 bg-white rounded-full flex items-center justify-center group-hover:scale-125 group-hover:rotate-12 transition-all duration-500 shadow-xl group-hover:shadow-2xl border-4 border-blue-100 group-hover:border-blue-300">
                                    <i class="fas fa-print text-5xl text-blue-700 group-hover:text-blue-700 transition-colors duration-300"></i>
                                </div>
                            </div>
                            <div class="p-6 flex flex-col flex-grow">
                                <h3 class="text-xl font-semibold mb-3">Cetak A3</h3>
                                <p class="text-gray-600 mb-4 flex-grow">Cetak A3, stiker, AP230 A3 dan berbagai keperluan cetak lainnya.</p>
                                <div class="flex justify-between items-center mt-auto">
                                    <span class="text-2xl font-bold text-blue-700">Rp 5.000</span>
                                    <button onclick="goToContactForm('cetak-a3')" class="bg-blue-700 text-white px-4 py-2 rounded-lg hover:bg-blue-800 transition duration-300">
                                        Pesan
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 4 -->
                    <div class="flex-none w-full grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Service Item 10 - Brosur -->
                        <div class="group bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-xl transition duration-300">
                            <div class="relative overflow-hidden bg-yellow-400 from-yellow-50 to-yellow-100 flex items-center justify-center h-48">
                                <div class="w-28 h-28 bg-white rounded-full flex items-center justify-center group-hover:scale-125 group-hover:-rotate-12 transition-all duration-500 shadow-xl group-hover:shadow-2xl border-4 border-yellow-100 group-hover:border-yellow-300">
                                    <i class="fas fa-clipboard text-5xl text-yellow-500 group-hover:text-yellow-600 transition-colors duration-300"></i>
                                </div>
                            </div>
                            <div class="p-6 flex flex-col flex-grow">
                                <h3 class="text-xl font-semibold mb-3">Brosur</h3>
                                <p class="text-gray-600 mb-4 flex-grow">Per A3 harganya 3.500 klok A4 harganya lebih murah lagi.</p>
                                <div class="flex justify-between items-center mt-auto">
                                    <span class="text-2xl font-bold text-yellow-500">Rp 3.500</span>
                                    <button onclick="goToContactForm('brosur')" class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600 transition duration-300">
                                        Pesan
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Service Item 11 - DTF Baju -->
                        <div class="group bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-xl transition duration-300 flex flex-col h-full">
                            <div class="relative overflow-hidden bg-blue-700 from-blue-50 to-blue-100 flex items-center justify-center h-48">
                                <div class="w-28 h-28 bg-white rounded-full flex items-center justify-center group-hover:scale-125 group-hover:rotate-12 transition-all duration-500 shadow-xl group-hover:shadow-2xl border-4 border-blue-100 group-hover:border-blue-300">
                                    <i class="fas fa-tshirt text-5xl text-blue-700 group-hover:text-blue-700 transition-colors duration-300"></i>
                                </div>
                            </div>
                            <div class="p-6 flex flex-col flex-grow">
                                <h3 class="text-xl font-semibold mb-3">DTF Baju</h3>
                                <p class="text-gray-600 mb-4 flex-grow">Cetak DTF per meter 50.000 untuk sablon baju custom.</p>
                                <div class="flex justify-between items-center mt-auto">
                                    <span class="text-2xl font-bold text-blue-700">Rp 50.000</span>
                                    <button onclick="goToContactForm('dtf-baju')" class="bg-blue-700 text-white px-4 py-2 rounded-lg hover:bg-blue-800 transition duration-300">
                                        Pesan
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Service Item 12 - Kalender Custom -->
                        <div class="group bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-xl transition duration-300 flex flex-col h-full">
                            <div class="relative overflow-hidden bg-yellow-400 from-yellow-50 to-yellow-100 flex items-center justify-center h-48">
                                <div class="w-28 h-28 bg-white rounded-full flex items-center justify-center group-hover:scale-125 group-hover:-rotate-12 transition-all duration-500 shadow-xl group-hover:shadow-2xl border-4 border-yellow-100 group-hover:border-yellow-300">
                                    <i class="fas fa-calendar-week text-5xl text-yellow-500 group-hover:text-yellow-600 transition-colors duration-300"></i>
                                </div>
                            </div>
                            <div class="p-6 flex flex-col flex-grow">
                                <h3 class="text-xl font-semibold mb-3">Kalender Custom</h3>
                                <p class="text-gray-600 mb-4 flex-grow">Kalender bisa request sesuai kebutuhan dan desain Anda.</p>
                                <div class="flex justify-between items-center mt-auto">
                                    <span class="text-2xl font-bold text-yellow-500">Rp 6.000</span>
                                    <button onclick="goToContactForm('kalender-custom')" class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600 transition duration-300">
                                        Pesan
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 5 -->
                    <div class="flex-none w-full grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Service Item 13 - Mug Costum -->
                        <div class="group bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-xl transition duration-300 flex flex-col h-full">
                            <div class="relative overflow-hidden bg-blue-700 from-blue-50 to-blue-100 flex items-center justify-center h-48">
                                <div class="w-28 h-28 bg-white rounded-full flex items-center justify-center group-hover:scale-125 group-hover:rotate-12 transition-all duration-500 shadow-xl group-hover:shadow-2xl border-4 border-blue-100 group-hover:border-blue-300">
                                    <i class="fas fa-coffee text-5xl text-blue-700 group-hover:text-blue-700 transition-colors duration-300"></i>
                                </div>
                                <!-- <div class="absolute top-4 right-4 bg-yellow-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                                    Hot
                                </div> -->
                            </div>
                            <div class="p-6 flex flex-col flex-grow">
                                <h3 class="text-xl font-semibold mb-3">Mug Costum</h3>
                                <p class="text-gray-600 mb-4 flex-grow">Mug costum bisa diksik foto, nama, dan desain sesuai keinginan.</p>
                                <div class="flex justify-between items-center mt-auto">
                                    <span class="text-2xl font-bold text-blue-700">Rp 25.000</span>
                                    <button onclick="goToContactForm('mug-costum')" class="bg-blue-700 text-white px-4 py-2 rounded-lg hover:bg-blue-800 transition duration-300">
                                        Pesan
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Service Item 14 - Nota dan Kupon -->
                        <div class="group bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-xl transition duration-300 flex flex-col h-full">
                            <div class="relative overflow-hidden bg-yellow-400 from-yellow-50 to-yellow-100 flex items-center justify-center h-48">
                                <div class="w-28 h-28 bg-white rounded-full flex items-center justify-center group-hover:scale-125 group-hover:-rotate-12 transition-all duration-500 shadow-xl group-hover:shadow-2xl border-4 border-yellow-100 group-hover:border-yellow-300">
                                    <i class="fas fa-tags text-5xl text-yellow-500 group-hover:text-yellow-600 transition-colors duration-300"></i>
                                </div>
                            </div>
                            <div class="p-6 flex flex-col flex-grow">
                                <h3 class="text-xl font-semibold mb-3">Nota dan Kupon</h3>
                                <p class="text-gray-600 mb-4 flex-grow">Nota dan kupon undian untuk berbagai keperluan bisnis Anda.</p>
                                <div class="flex justify-between items-center mt-auto">
                                    <span class="text-2xl font-bold text-yellow-500">Rp 150.000</span>
                                    <button onclick="goToContactForm('nota-kupon-undian')" class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600 transition duration-300">
                                        Pesan
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Service Item 15 - Stempel Biasa -->
                        <div class="group bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-xl transition duration-300 flex flex-col h-full">
                            <div class="relative overflow-hidden bg-blue-700 from-blue-50 to-blue-100 flex items-center justify-center h-48">
                                <div class="w-28 h-28 bg-white rounded-full flex items-center justify-center group-hover:scale-125 group-hover:rotate-12 transition-all duration-500 shadow-xl group-hover:shadow-2xl border-4 border-blue-100 group-hover:border-blue-300">
                                    <i class="fas fa-stamp text-5xl text-blue-700 group-hover:text-blue-700 transition-colors duration-300"></i>
                                </div>
                            </div>
                            <div class="p-6 flex flex-col flex-grow">
                                <h3 class="text-xl font-semibold mb-3">Stempel Biasa dan Flash</h3>
                                <p class="text-gray-600 mb-4 flex-grow">Stempel biasa yang dari kayu dan stempel flash otomatis.</p>
                                <div class="flex justify-between items-center mt-auto">
                                    <span class="text-2xl font-bold text-blue-700">Rp 35.000</span>
                                    <button onclick="goToContactForm('stempel-biasa')" class="bg-blue-700 text-white px-4 py-2 rounded-lg hover:bg-blue-800 transition duration-300">
                                        Pesan
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 6 -->
                    <div class="flex-none w-full grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Service Item 16 - Yasin + Cover -->
                        <div class="group bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-xl transition duration-300 flex flex-col h-full">
                            <div class="relative overflow-hidden bg-yellow-400 from-yellow-50 to-yellow-100 flex items-center justify-center h-48">
                                <div class="w-28 h-28 bg-white rounded-full flex items-center justify-center group-hover:scale-125 group-hover:-rotate-12 transition-all duration-500 shadow-xl group-hover:shadow-2xl border-4 border-yellow-100 group-hover:border-yellow-300">
                                    <i class="fas fa-book text-5xl text-yellow-500 group-hover:text-yellow-600 transition-colors duration-300"></i>
                                </div>
                            </div>
                            <div class="p-6 flex flex-col flex-grow">
                                <h3 class="text-xl font-semibold mb-3">Yasin + Cover</h3>
                                <p class="text-gray-600 mb-4 flex-grow">Yasin + cover bisa request sesuai kebutuhan acara.</p>
                                <div class="flex justify-between items-center mt-auto">
                                    <span class="text-2xl font-bold text-yellow-500">Rp 7.000</span>
                                    <button onclick="goToContactForm('yasin-cover')" class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600 transition duration-300">
                                        Pesan
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Service Item 17 - Yasin Kosongan -->
                        <div class="group bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-xl transition duration-300 flex flex-col h-full">
                            <div class="relative overflow-hidden bg-blue-700 from-blue-50 to-blue-100 flex items-center justify-center h-48">
                                <div class="w-28 h-28 bg-white rounded-full flex items-center justify-center group-hover:scale-125 group-hover:rotate-12 transition-all duration-500 shadow-xl group-hover:shadow-2xl border-4 border-blue-100 group-hover:border-blue-300">
                                    <i class="fas fa-scroll text-5xl text-blue-700 group-hover:text-blue-700 transition-colors duration-300"></i>
                                </div>
                            </div>
                            <div class="p-6 flex flex-col flex-grow">
                                <h3 class="text-xl font-semibold mb-3">Yasin Kosongan</h3>
                                <p class="text-gray-600 mb-4 flex-grow">Yasin kosongan bisa juga diisi dengan doa-doa lainnya.</p>
                                <div class="flex justify-between items-center mt-auto">
                                    <span class="text-xl font-bold text-blue-700">
                                        
                                        <span class="text-2xl text-blue-700 ml-2">Rp 2.700</span>
                                    </span>
                                    <button onclick="goToContactForm('yasin-kosongan')" class="bg-blue-700 text-white px-4 py-2 rounded-lg hover:bg-blue-800 transition duration-300">
                                        Pesan
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Service Item 18 - Undangan Pernikahan -->
                        <div class="group bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-xl transition duration-300 flex flex-col h-full">
                            <div class="relative overflow-hidden bg-yellow-400 from-yellow-50 to-yellow-100 flex items-center justify-center h-48">
                                <div class="w-28 h-28 bg-white rounded-full flex items-center justify-center group-hover:scale-125 group-hover:-rotate-12 transition-all duration-500 shadow-xl group-hover:shadow-2xl border-4 border-yellow-100 group-hover:border-yellow-300">
                                    <i class="fas fa-heart text-5xl text-yellow-500 group-hover:text-yellow-600 transition-colors duration-300"></i>
                                </div>
                                <!-- <div class="absolute top-4 right-4 bg-blue-700 text-white px-3 py-1 rounded-full text-sm font-semibold">
                                    Spesial
                                </div> -->
                            </div>
                            <div class="p-6 flex flex-col flex-grow">
                                <h3 class="text-xl font-semibold mb-3">Undangan Pernikahan</h3>
                                <p class="text-gray-600 mb-4 flex-grow">Untuk harga undangan mulai dari Rp 2.500 tergantung model.</p>
                                <div class="flex justify-between items-center mt-auto">
                                    <span class="text-2xl font-bold text-yellow-500">Rp 2.500</span>
                                    <button onclick="goToContactForm('undangan-nikah')" class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600 transition duration-300">
                                        Pesan
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carousel Indicators -->
            <div class="flex justify-center mt-8 space-x-2">
                <button class="carousel-indicator w-3 h-3 bg-blue-700 rounded-full transition duration-300" data-slide="0"></button>
                <button class="carousel-indicator w-3 h-3 bg-gray-300 rounded-full transition duration-300 hover:bg-gray-400" data-slide="1"></button>
                <button class="carousel-indicator w-3 h-3 bg-gray-300 rounded-full transition duration-300 hover:bg-gray-400" data-slide="2"></button>
                <button class="carousel-indicator w-3 h-3 bg-gray-300 rounded-full transition duration-300 hover:bg-gray-400" data-slide="3"></button>
                <button class="carousel-indicator w-3 h-3 bg-gray-300 rounded-full transition duration-300 hover:bg-gray-400" data-slide="4"></button>
                <button class="carousel-indicator w-3 h-3 bg-gray-300 rounded-full transition duration-300 hover:bg-gray-400" data-slide="5"></button>
            </div>
        </div>

        <script>
        // Inline Services Carousel Script
        document.addEventListener('DOMContentLoaded', function() {
            const track = document.getElementById('servicesCarouselTrack');
            const prevButton = document.getElementById('servicesCarouselPrev');
            const nextButton = document.getElementById('servicesCarouselNext');
            const indicators = document.querySelectorAll('.carousel-indicator');
            
            if (!track || !prevButton || !nextButton || indicators.length === 0) {
                console.log('Carousel elements not found');
                return;
            }
            
            let currentSlide = 0;
            const totalSlides = 6;
            let autoPlayInterval;
            
            function updateCarousel() {
                const translateX = -currentSlide * 100;
                track.style.transform = `translateX(${translateX}%)`;
                
                indicators.forEach((indicator, index) => {
                    if (index === currentSlide) {
                        indicator.classList.remove('bg-gray-300');
                        indicator.classList.add('bg-blue-700');
                    } else {
                        indicator.classList.remove('bg-blue-700');
                        indicator.classList.add('bg-gray-300');
                    }
                });
            }
            
            function nextSlide() {
                currentSlide = (currentSlide + 1) % totalSlides;
                updateCarousel();
            }
            
            function prevSlide() {
                currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
                updateCarousel();
            }
            
            function goToSlide(slideIndex) {
                currentSlide = slideIndex;
                updateCarousel();
            }
            
            function startAutoPlay() {
                if (autoPlayInterval) clearInterval(autoPlayInterval);
                autoPlayInterval = setInterval(nextSlide, 4000);
            }
            
            function stopAutoPlay() {
                if (autoPlayInterval) clearInterval(autoPlayInterval);
            }
            
            // Navigation buttons
            nextButton.addEventListener('click', function(e) {
                e.preventDefault();
                nextSlide();
                stopAutoPlay();
                startAutoPlay();
            });
            
            prevButton.addEventListener('click', function(e) {
                e.preventDefault();
                prevSlide();
                stopAutoPlay();
                startAutoPlay();
            });
            
            // Indicator clicks
            indicators.forEach((indicator, index) => {
                indicator.addEventListener('click', function(e) {
                    e.preventDefault();
                    goToSlide(index);
                    stopAutoPlay();
                    startAutoPlay();
                });
            });
            
            // Hover pause/resume
            const carouselContainer = document.querySelector('.relative');
            if (carouselContainer) {
                carouselContainer.addEventListener('mouseenter', stopAutoPlay);
                carouselContainer.addEventListener('mouseleave', startAutoPlay);
            }
            
            // Touch support
            let startX = 0;
            let isDragging = false;
            
            track.addEventListener('touchstart', function(e) {
                startX = e.touches[0].clientX;
                isDragging = true;
                stopAutoPlay();
            });
            
            track.addEventListener('touchmove', function(e) {
                if (!isDragging) return;
                e.preventDefault();
            });
            
            track.addEventListener('touchend', function(e) {
                if (!isDragging) return;
                isDragging = false;
                
                const endX = e.changedTouches[0].clientX;
                const diff = startX - endX;
                
                if (Math.abs(diff) > 50) {
                    if (diff > 0) {
                        nextSlide();
                    } else {
                        prevSlide();
                    }
                }
                startAutoPlay();
            });
            
            // Initialize
            updateCarousel();
            startAutoPlay();
        });
        
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
        
        // Function to go to contact form with pre-selected service
        function goToContactForm(serviceValue) {
            // Scroll to contact section
            const contactSection = document.getElementById('kontak');
            if (contactSection) {
                contactSection.scrollIntoView({ 
                    behavior: 'smooth',
                    block: 'start'
                });
                
                // Wait for scroll to complete, then set the service selection
                setTimeout(() => {
                    const serviceSelect = document.getElementById('serviceSelect');
                    if (serviceSelect) {
                        // Set the selected value
                        serviceSelect.value = serviceValue;
                        
                        // Trigger change event to update display
                        serviceSelect.dispatchEvent(new Event('change'));
                        
                        // Add visual feedback
                        serviceSelect.style.border = '2px solid #3B82F6';
                        setTimeout(() => {
                            serviceSelect.style.border = '';
                        }, 2000);
                        
                        // Focus on the name field to encourage form completion
                        const nameField = document.querySelector('input[type="text"]');
                        if (nameField) {
                            nameField.focus();
                        }
                    }
                }, 800); // Wait for scroll animation to complete
            }
        }
        
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
            <button class="portfolio-filter active bg-blue-700 text-white px-6 py-3 rounded-lg font-semibold transition duration-300" data-filter="all">
                Semua
            </button>
            <button class="portfolio-filter bg-gray-200 text-gray-700 hover:bg-gray-300 px-6 py-3 rounded-lg font-semibold transition duration-300" data-filter="banner">
                Banner
            </button>
            <button class="portfolio-filter bg-gray-200 text-gray-700 hover:bg-gray-300 px-6 py-3 rounded-lg font-semibold transition duration-300" data-filter="brosur">
                Brosur
            </button>
            <button class="portfolio-filter bg-gray-200 text-gray-700 hover:bg-gray-300 px-6 py-3 rounded-lg font-semibold transition duration-300" data-filter="packaging">
                Packaging
            </button>
        </div>
        
        <!-- Portfolio Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Portfolio Item 1 -->
            <div class="portfolio-item banner group relative overflow-hidden rounded-lg shadow-lg">
                <img src="https://via.placeholder.com/400x300/3B82F6/FFFFFF?text=BANNER+RESTO" alt="Banner Restaurant" class="w-full h-64 object-cover group-hover:scale-110 transition duration-500">
                <div class="absolute inset-0 bg-blue-700 bg-opacity-0 group-hover:bg-opacity-80 transition duration-300 flex items-center justify-center">
                    <div class="text-white text-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-xl font-semibold mb-2">Banner Restaurant</h3>
                        <p class="mb-4">Banner promosi untuk restaurant premium</p>
                        <button class="bg-white text-blue-700 px-4 py-2 rounded-lg font-semibold">
                            Lihat Detail
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Portfolio Item 2 -->
            <div class="portfolio-item brosur group relative overflow-hidden rounded-lg shadow-lg">
                <img src="https://via.placeholder.com/400x300/10B981/FFFFFF?text=BROSUR+TRAVEL" alt="Brosur Travel" class="w-full h-64 object-cover group-hover:scale-110 transition duration-500">
                <div class="absolute inset-0 bg-green-600 bg-opacity-0 group-hover:bg-opacity-80 transition duration-300 flex items-center justify-center">
                    <div class="text-white text-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-xl font-semibold mb-2">Brosur Travel</h3>
                        <p class="mb-4">Brosur tour dan travel agency</p>
                        <button class="bg-white text-green-600 px-4 py-2 rounded-lg font-semibold">
                            Lihat Detail
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Portfolio Item 3 -->
            <div class="portfolio-item packaging group relative overflow-hidden rounded-lg shadow-lg">
                <img src="https://via.placeholder.com/400x300/F59E0B/FFFFFF?text=BOX+MAKANAN" alt="Box Makanan" class="w-full h-64 object-cover group-hover:scale-110 transition duration-500">
                <div class="absolute inset-0 bg-yellow-500 bg-opacity-0 group-hover:bg-opacity-80 transition duration-300 flex items-center justify-center">
                    <div class="text-white text-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-xl font-semibold mb-2">Box Makanan</h3>
                        <p class="mb-4">Packaging custom untuk food delivery</p>
                        <button class="bg-white text-yellow-500 px-4 py-2 rounded-lg font-semibold">
                            Lihat Detail
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Portfolio Item 4 -->
            <div class="portfolio-item banner group relative overflow-hidden rounded-lg shadow-lg">
                <img src="https://via.placeholder.com/400x300/EF4444/FFFFFF?text=SPANDUK+EVENT" alt="Spanduk Event" class="w-full h-64 object-cover group-hover:scale-110 transition duration-500">
                <div class="absolute inset-0 bg-red-600 bg-opacity-0 group-hover:bg-opacity-80 transition duration-300 flex items-center justify-center">
                    <div class="text-white text-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-xl font-semibold mb-2">Spanduk Event</h3>
                        <p class="mb-4">Spanduk untuk event dan seminar</p>
                        <button class="bg-white text-red-600 px-4 py-2 rounded-lg font-semibold">
                            Lihat Detail
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Portfolio Item 5 -->
            <div class="portfolio-item brosur group relative overflow-hidden rounded-lg shadow-lg">
                <img src="https://via.placeholder.com/400x300/8B5CF6/FFFFFF?text=KATALOG+PRODUK" alt="Katalog Produk" class="w-full h-64 object-cover group-hover:scale-110 transition duration-500">
                <div class="absolute inset-0 bg-purple-600 bg-opacity-0 group-hover:bg-opacity-80 transition duration-300 flex items-center justify-center">
                    <div class="text-white text-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-xl font-semibold mb-2">Katalog Produk</h3>
                        <p class="mb-4">Katalog produk untuk company profile</p>
                        <button class="bg-white text-purple-600 px-4 py-2 rounded-lg font-semibold">
                            Lihat Detail
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Portfolio Item 6 -->
            <div class="portfolio-item packaging group relative overflow-hidden rounded-lg shadow-lg">
                <img src="https://via.placeholder.com/400x300/06B6D4/FFFFFF?text=LABEL+PRODUK" alt="Label Produk" class="w-full h-64 object-cover group-hover:scale-110 transition duration-500">
                <div class="absolute inset-0 bg-cyan-600 bg-opacity-0 group-hover:bg-opacity-80 transition duration-300 flex items-center justify-center">
                    <div class="text-white text-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-xl font-semibold mb-2">Label Produk</h3>
                        <p class="mb-4">Label custom untuk produk minuman</p>
                        <button class="bg-white text-cyan-600 px-4 py-2 rounded-lg font-semibold">
                            Lihat Detail
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="tentang" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">Tentang Barokah Printing</h2>
                <p class="text-lg text-gray-600 mb-6">
                    Didirikan sejak 2010, Barokah Printing telah menjadi partner terpercaya untuk berbagai kebutuhan percetakan. 
                    Dengan komitmen pada kualitas dan kepuasan pelanggan, kami terus berinovasi menggunakan teknologi terdepan.
                </p>
                <p class="text-lg text-gray-600 mb-8">
                    Tim profesional kami siap membantu mewujudkan ide kreatif Anda dengan hasil yang melampaui ekspektasi. 
                    Dari konsep hingga produk jadi, kami pastikan setiap detail sesuai dengan keinginan Anda.
                </p>
                
                <div class="grid grid-cols-2 gap-6 mb-8">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-blue-700 mb-2">13+</div>
                        <div class="text-gray-600">Tahun Pengalaman</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-green-600 mb-2">5000+</div>
                        <div class="text-gray-600">Klien Puas</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-yellow-500 mb-2">50+</div>
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
                
                <form class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium mb-2">Nama Lengkap *</label>
                            <input type="text" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2">No. Telepon *</label>
                            <input type="tel" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium mb-2">Email *</label>
                        <input type="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium mb-2">Layanan yang Diinginkan</label>
                        <select id="serviceSelect" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="" disabled selected>Pilih Layanan</option>
                            <option value="kalender-a3">Kalender A3+</option>
                            <option value="ganci">Ganci Custom</option>
                            <option value="kipas">Kipas Custom</option>
                            <option value="nametag">Nametag / Namadada</option>
                            <option value="mug-custom">Mug Custom</option>
                            <option value="nota-kupon">Nota & Kupon</option>
                            <option value="stempel-wisuda">Stempel Wisuda</option>
                            <option value="kupon">Kupon</option>
                            <option value="cetak-a3">Cetak A3</option>
                            <option value="brosur">Brosur</option>
                            <option value="dtf-baju">DTF Baju</option>
                            <option value="kalender-custom">Kalender Custom</option>
                            <option value="mug-costum">Mug Costum</option>
                            <option value="nota-kupon-undian">Nota dan Kupon Undian</option>
                            <option value="stempel-biasa">Stempel Biasa dan Flash</option>
                            <option value="yasin-cover">Yasin + Cover</option>
                            <option value="yasin-kosongan">Yasin Kosongan</option>
                            <option value="undangan-nikah">Undangan Pernikahan</option>
                            <option value="banner">Banner & Spanduk</option>
                            <option value="kartu-nama">Kartu Nama</option>
                            <option value="stiker">Stiker & Label</option>
                            <option value="packaging">Packaging & Box</option>
                            <option value="lainnya">Lainnya</option>
                        </select>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium mb-2">Pesan *</label>
                        <textarea required rows="4" placeholder="Ceritakan detail kebutuhan percetakan Anda..." class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"></textarea>
                    </div>
                    
                    <button type="submit" class="w-full bg-blue-700 text-white hover:bg-blue-800 px-6 py-4 rounded-lg font-semibold text-lg transition duration-300">
                        <i class="fas fa-paper-plane mr-2"></i>
                        Kirim Pesan
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
// Portfolio Filter
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.portfolio-filter');
    const portfolioItems = document.querySelectorAll('.portfolio-item');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons
            filterButtons.forEach(btn => {
                btn.classList.remove('active', 'bg-blue-700', 'text-white');
                btn.classList.add('bg-gray-200', 'text-gray-700');
            });
            
            // Add active class to clicked button
            this.classList.add('active', 'bg-blue-700', 'text-white');
            this.classList.remove('bg-gray-200', 'text-gray-700');
            
            const filterValue = this.getAttribute('data-filter');
            
            portfolioItems.forEach(item => {
                if (filterValue === 'all' || item.classList.contains(filterValue)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
    
    // Contact form submission
    const contactForm = document.querySelector('#kontak form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Terima kasih! Pesan Anda telah dikirim. Kami akan segera menghubungi Anda.');
        });
    }
});
</script>

<?php get_footer(); ?>
