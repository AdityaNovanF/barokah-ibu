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
                        // Get thumbnail URL with enhanced fallback system
                        $thumbnail_url = '';
                        $image_source = 'placeholder';
                        $post_id = get_the_ID();
                    ?>
                    <div class="portfolio-item<?php echo esc_attr($category_classes); ?> group relative rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 cursor-pointer"
                         onclick="openPortfolioModal(<?php echo $post_id; ?>)"><?php
                        $post_title = get_the_title();
                        
                        // Priority 1: WordPress Featured Image (multiple size attempts)
                        if (has_post_thumbnail($post_id)) {
                            $sizes = array('large', 'medium_large', 'medium', 'portfolio-thumbnail', 'thumbnail', 'full');
                            foreach ($sizes as $size) {
                                $url = get_the_post_thumbnail_url($post_id, $size);
                                if ($url && $url !== false && !empty($url)) {
                                    // Verify the image exists and is accessible
                                    $thumbnail_url = $url;
                                    $image_source = "featured-{$size}";
                                    break;
                                }
                            }
                        }
                        
                        // Priority 2: Try to get attachment directly if featured image fails
                        if (!$thumbnail_url) {
                            $thumbnail_id = get_post_thumbnail_id($post_id);
                            if ($thumbnail_id) {
                                $attachment_url = wp_get_attachment_url($thumbnail_id);
                                if ($attachment_url) {
                                    $thumbnail_url = $attachment_url;
                                    $image_source = 'attachment-direct';
                                }
                            }
                        }
                        
                        // Priority 3: Check for first image in post content
                        if (!$thumbnail_url) {
                            $post_content = get_post_field('post_content', $post_id);
                            preg_match('/<img[^>]+src=["\']([^"\']+)["\'][^>]*>/i', $post_content, $matches);
                            if (!empty($matches[1])) {
                                $thumbnail_url = $matches[1];
                                $image_source = 'content-image';
                            }
                        }
                        
                        // Priority 4: External Image URL from custom field
                        if (!$thumbnail_url) {
                            $external_image = get_post_meta($post_id, 'external_image_url', true);
                            if ($external_image && filter_var($external_image, FILTER_VALIDATE_URL)) {
                                $thumbnail_url = $external_image;
                                $image_source = 'external';
                            }
                        }
                        
                        // Priority 5: Check gallery attachments
                        if (!$thumbnail_url) {
                            $attachments = get_posts(array(
                                'post_type' => 'attachment',
                                'post_mime_type' => 'image',
                                'post_parent' => $post_id,
                                'posts_per_page' => 1,
                                'post_status' => 'inherit'
                            ));
                            if (!empty($attachments)) {
                                $attachment_url = wp_get_attachment_url($attachments[0]->ID);
                                if ($attachment_url) {
                                    $thumbnail_url = $attachment_url;
                                    $image_source = 'gallery-attachment';
                                }
                            }
                        }
                        
                        // Priority 6: High-quality category-based placeholder with better design
                        if (!$thumbnail_url) {
                            $color_code = '3B82F6'; // default blue
                            $text_color = 'FFFFFF';
                            $bg_pattern = '';
                            
                            if ($primary_color == 'green') {
                                $color_code = '10B981'; // emerald
                            } elseif ($primary_color == 'yellow') {
                                $color_code = 'F59E0B'; // amber
                                $text_color = '1F2937'; // darker text for yellow bg
                            } elseif ($primary_color == 'blue') {
                                $color_code = '3B82F6'; // blue
                            }
                            
                            $placeholder_text = wp_trim_words($post_title, 2, '');
                            $encoded_title = urlencode($placeholder_text ?: 'Portfolio');
                            $thumbnail_url = "https://via.placeholder.com/800x600/{$color_code}/{$text_color}?text={$encoded_title}";
                            $image_source = 'smart-placeholder';
                        }
                        

                        ?>
                        
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
                                console.log('✅ Image loaded successfully:', '<?php echo addslashes($post_title); ?>', 'Source: <?php echo $image_source; ?>');
                                this.classList.remove('opacity-0'); 
                                this.classList.add('opacity-100');
                                const container = this.parentElement;
                                const loadingOverlay = container.querySelector('.loading-overlay');
                                const shimmerOverlay = container.querySelector('.shimmer-overlay');
                                if (loadingOverlay) loadingOverlay.remove();
                                if (shimmerOverlay) shimmerOverlay.remove();
                            "
                            onerror="
                                console.error('❌ Image load failed for:', '<?php echo addslashes($post_title); ?>', 'Original source:', this.src);
                                const fallbackUrl = 'https://via.placeholder.com/800x600/<?php echo $primary_color === 'green' ? '10B981' : ($primary_color === 'yellow' ? 'F59E0B' : '3B82F6'); ?>/FFFFFF?text=<?php echo urlencode(wp_trim_words($post_title, 2, '')); ?>';
                                if (this.src !== fallbackUrl) {
                                    console.log('🔄 Trying fallback image...');
                                    this.src = fallbackUrl;
                                } else {
                                    console.log('💡 Using final placeholder');
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
            
            // Prepare portfolio data for JavaScript modal
            $portfolio_data = array();
            if ($portfolio_query->have_posts()) {
                $portfolio_query->rewind_posts();
                while ($portfolio_query->have_posts()) {
                    $portfolio_query->the_post();
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
            ?>
            
            <!-- Portfolio Data for JavaScript -->
            <script>
                window.portfolioData = <?php echo json_encode($portfolio_data); ?>;
                
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
                        gridContainer.innerHTML = '<div class="col-span-full text-center py-8 text-gray-500">Tidak ada portfolio ditemukan</div>';
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
                            <option value="Banner & Spanduk">Banner & Spanduk</option>
                            <option value="Brosur">Brosur</option>
                            <option value="Kartu Nama">Kartu Nama</option>
                            <option value="Stiker & Label">Stiker & Label</option>
                            <option value="Undangan Pernikahan">Undangan Pernikahan</option>
                            <option value="Kalender Custom">Kalender Custom</option>
                            <option value="Mug Custom">Mug Custom</option>
                            <option value="DTF Baju">DTF Baju</option>
                            <option value="Stempel">Stempel</option>
                            <option value="Packaging & Box">Packaging & Box</option>
                            <option value="Lainnya">Lainnya</option>
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
