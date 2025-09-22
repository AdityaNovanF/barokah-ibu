<?php get_header(); ?>

<!-- Hero Section -->
<section id="home" class="bg-gradient-to-r from-blue-600 to-blue-800 text-white pt-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                    Solusi Percetakan <span class="text-yellow-400">Berkualitas</span> untuk Bisnis Anda
                </h1>
                <p class="text-xl mb-8 text-blue-100">
                    Wujudkan ide kreatif Anda dengan layanan percetakan profesional. Kualitas terbaik, harga terjangkau, dan layanan yang memuaskan.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#kontak" class="bg-yellow-400 text-blue-800 hover:bg-yellow-300 px-8 py-4 rounded-lg font-semibold text-lg transition duration-300 text-center">
                        Konsultasi Gratis
                    </a>
                    <a href="#portfolio" class="border-2 border-white text-white hover:bg-white hover:text-blue-800 px-8 py-4 rounded-lg font-semibold text-lg transition duration-300 text-center">
                        Lihat Portfolio
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
                    <i class="fas fa-print text-2xl text-blue-600"></i>
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
                    <i class="fas fa-dollar-sign text-2xl text-yellow-600"></i>
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
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Service Item 1 -->
            <div class="group bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-xl transition duration-300">
                <div class="relative overflow-hidden">
                    <img src="https://via.placeholder.com/400x250/3B82F6/FFFFFF?text=BANNER" alt="Banner & Spanduk" class="w-full h-48 object-cover group-hover:scale-105 transition duration-300">
                    <div class="absolute top-4 right-4 bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
                        Populer
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-3">Banner & Spanduk</h3>
                    <p class="text-gray-600 mb-4">Banner berkualitas tinggi untuk promosi indoor dan outdoor dengan berbagai ukuran.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-blue-600">Mulai Rp 25.000</span>
                        <a href="#kontak" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                            Pesan
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Service Item 2 -->
            <div class="group bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-xl transition duration-300">
                <div class="relative overflow-hidden">
                    <img src="https://via.placeholder.com/400x250/10B981/FFFFFF?text=BROSUR" alt="Brosur & Flyer" class="w-full h-48 object-cover group-hover:scale-105 transition duration-300">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-3">Brosur & Flyer</h3>
                    <p class="text-gray-600 mb-4">Brosur informatif dan flyer menarik untuk marketing dan promosi bisnis Anda.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-green-600">Mulai Rp 500</span>
                        <a href="#kontak" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition duration-300">
                            Pesan
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Service Item 3 -->
            <div class="group bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-xl transition duration-300">
                <div class="relative overflow-hidden">
                    <img src="https://via.placeholder.com/400x250/F59E0B/FFFFFF?text=KARTU+NAMA" alt="Kartu Nama" class="w-full h-48 object-cover group-hover:scale-105 transition duration-300">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-3">Kartu Nama</h3>
                    <p class="text-gray-600 mb-4">Kartu nama profesional dengan berbagai pilihan bahan dan finishing.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-yellow-600">Mulai Rp 15.000</span>
                        <a href="#kontak" class="bg-yellow-600 text-white px-4 py-2 rounded-lg hover:bg-yellow-700 transition duration-300">
                            Pesan
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Service Item 4 -->
            <div class="group bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-xl transition duration-300">
                <div class="relative overflow-hidden">
                    <img src="https://via.placeholder.com/400x250/EF4444/FFFFFF?text=STIKER" alt="Stiker" class="w-full h-48 object-cover group-hover:scale-105 transition duration-300">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-3">Stiker & Label</h3>
                    <p class="text-gray-600 mb-4">Stiker custom dengan berbagai bentuk, ukuran, dan bahan sesuai kebutuhan.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-red-600">Mulai Rp 2.000</span>
                        <a href="#kontak" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition duration-300">
                            Pesan
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Service Item 5 -->
            <div class="group bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-xl transition duration-300">
                <div class="relative overflow-hidden">
                    <img src="https://via.placeholder.com/400x250/8B5CF6/FFFFFF?text=UNDANGAN" alt="Undangan" class="w-full h-48 object-cover group-hover:scale-105 transition duration-300">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-3">Undangan</h3>
                    <p class="text-gray-600 mb-4">Undangan pernikahan, ulang tahun, dan acara khusus dengan desain elegan.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-purple-600">Mulai Rp 3.000</span>
                        <a href="#kontak" class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition duration-300">
                            Pesan
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Service Item 6 -->
            <div class="group bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-xl transition duration-300">
                <div class="relative overflow-hidden">
                    <img src="https://via.placeholder.com/400x250/06B6D4/FFFFFF?text=PACKAGING" alt="Packaging" class="w-full h-48 object-cover group-hover:scale-105 transition duration-300">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-3">Packaging & Box</h3>
                    <p class="text-gray-600 mb-4">Kemasan produk custom yang menarik dan melindungi barang Anda.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-cyan-600">Mulai Rp 5.000</span>
                        <a href="#kontak" class="bg-cyan-600 text-white px-4 py-2 rounded-lg hover:bg-cyan-700 transition duration-300">
                            Pesan
                        </a>
                    </div>
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
            <button class="portfolio-filter active bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold transition duration-300" data-filter="all">
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
                <div class="absolute inset-0 bg-blue-600 bg-opacity-0 group-hover:bg-opacity-80 transition duration-300 flex items-center justify-center">
                    <div class="text-white text-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-xl font-semibold mb-2">Banner Restaurant</h3>
                        <p class="mb-4">Banner promosi untuk restaurant premium</p>
                        <button class="bg-white text-blue-600 px-4 py-2 rounded-lg font-semibold">
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
                <div class="absolute inset-0 bg-yellow-600 bg-opacity-0 group-hover:bg-opacity-80 transition duration-300 flex items-center justify-center">
                    <div class="text-white text-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-xl font-semibold mb-2">Box Makanan</h3>
                        <p class="mb-4">Packaging custom untuk food delivery</p>
                        <button class="bg-white text-yellow-600 px-4 py-2 rounded-lg font-semibold">
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
                        <div class="text-3xl font-bold text-blue-600 mb-2">13+</div>
                        <div class="text-gray-600">Tahun Pengalaman</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-green-600 mb-2">5000+</div>
                        <div class="text-gray-600">Klien Puas</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-yellow-600 mb-2">50+</div>
                        <div class="text-gray-600">Jenis Layanan</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-purple-600 mb-2">99%</div>
                        <div class="text-gray-600">Tingkat Kepuasan</div>
                    </div>
                </div>
                
                <a href="#kontak" class="bg-blue-600 text-white hover:bg-blue-700 px-8 py-4 rounded-lg font-semibold text-lg transition duration-300 inline-block">
                    Hubungi Kami
                </a>
            </div>
            
            <div class="relative">
                <img src="https://via.placeholder.com/600x500/4F46E5/FFFFFF?text=TEAM+PRINTING" alt="Tim Barokah Printing" class="w-full h-auto rounded-lg shadow-2xl">
                
                <!-- Achievement Badges -->
                <div class="absolute top-6 right-6 bg-yellow-400 text-blue-800 p-4 rounded-lg shadow-lg text-center">
                    <i class="fas fa-award text-2xl mb-2"></i>
                    <div class="text-sm font-semibold">ISO Certified</div>
                </div>
                
                <div class="absolute bottom-6 left-6 bg-green-500 text-white p-4 rounded-lg shadow-lg text-center">
                    <i class="fas fa-leaf text-2xl mb-2"></i>
                    <div class="text-sm font-semibold">Eco Friendly</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonial Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Apa Kata Klien Kami</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Kepuasan klien adalah prioritas utama kami. Berikut testimoni dari berbagai klien yang telah mempercayai layanan kami.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <div class="flex items-center mb-4">
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <p class="text-gray-600 mb-6 italic">
                    "Kualitas banner yang dicetak sangat memuaskan. Warna tajam dan hasil sesuai dengan desain yang kami berikan. Pelayanan juga sangat responsif."
                </p>
                <div class="flex items-center">
                    <img src="https://via.placeholder.com/50x50/3B82F6/FFFFFF?text=A" alt="Ahmad Rizki" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <div class="font-semibold">Ahmad Rizki</div>
                        <div class="text-sm text-gray-500">Owner Restaurant Padang</div>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 2 -->
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <div class="flex items-center mb-4">
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <p class="text-gray-600 mb-6 italic">
                    "Sudah langganan dari 2 tahun lalu. Harga terjangkau tapi kualitas tidak murahan. Recommended untuk kebutuhan printing bisnis."
                </p>
                <div class="flex items-center">
                    <img src="https://via.placeholder.com/50x50/10B981/FFFFFF?text=S" alt="Sari Dewi" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <div class="font-semibold">Sari Dewi</div>
                        <div class="text-sm text-gray-500">Marketing Manager PT. ABC</div>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 3 -->
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <div class="flex items-center mb-4">
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <p class="text-gray-600 mb-6 italic">
                    "Pengerjaan cepat dan tepat waktu. Kemarin pesan undangan untuk acara mendadak, hasilnya bagus dan selesai tepat waktu."
                </p>
                <div class="flex items-center">
                    <img src="https://via.placeholder.com/50x50/F59E0B/FFFFFF?text=B" alt="Budi Santoso" class="w-12 h-12 rounded-full mr-4">
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
<section id="kontak" class="py-20 bg-blue-600 text-white">
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
                                Jl. Printing Raya No. 123<br>
                                Kelurahan Printing, Jakarta Selatan<br>
                                DKI Jakarta 12345
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
                                +62 812-3456-7890<br>
                                +62 21-1234-5678
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
                                info@barokahprinting.com<br>
                                order@barokahprinting.com
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
                                Senin - Sabtu: 08:00 - 17:00<br>
                                Minggu: 09:00 - 15:00
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Quick Contact Buttons -->
                <div class="mt-8 space-y-4">
                    <a href="https://wa.me/6281234567890" target="_blank" class="flex items-center bg-green-500 hover:bg-green-600 px-6 py-3 rounded-lg transition duration-300">
                        <i class="fab fa-whatsapp text-xl mr-3"></i>
                        <span>Chat via WhatsApp</span>
                    </a>
                    <a href="tel:+6281234567890" class="flex items-center bg-blue-500 hover:bg-blue-600 px-6 py-3 rounded-lg transition duration-300">
                        <i class="fas fa-phone text-xl mr-3"></i>
                        <span>Telepon Sekarang</span>
                    </a>
                </div>
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
                        <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="">Pilih Layanan</option>
                            <option value="banner">Banner & Spanduk</option>
                            <option value="brosur">Brosur & Flyer</option>
                            <option value="kartu-nama">Kartu Nama</option>
                            <option value="stiker">Stiker & Label</option>
                            <option value="undangan">Undangan</option>
                            <option value="packaging">Packaging & Box</option>
                            <option value="lainnya">Lainnya</option>
                        </select>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium mb-2">Pesan *</label>
                        <textarea required rows="4" placeholder="Ceritakan detail kebutuhan percetakan Anda..." class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"></textarea>
                    </div>
                    
                    <button type="submit" class="w-full bg-blue-600 text-white hover:bg-blue-700 px-6 py-4 rounded-lg font-semibold text-lg transition duration-300">
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
            <a href="#kontak" class="bg-blue-600 text-white hover:bg-blue-700 px-8 py-4 rounded-lg font-semibold text-lg transition duration-300">
                <i class="fas fa-gift mr-2"></i>
                Klaim Promo Sekarang
            </a>
            <a href="https://wa.me/6281234567890" target="_blank" class="bg-white text-blue-600 hover:bg-gray-100 px-8 py-4 rounded-lg font-semibold text-lg transition duration-300">
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
                btn.classList.remove('active', 'bg-blue-600', 'text-white');
                btn.classList.add('bg-gray-200', 'text-gray-700');
            });
            
            // Add active class to clicked button
            this.classList.add('active', 'bg-blue-600', 'text-white');
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