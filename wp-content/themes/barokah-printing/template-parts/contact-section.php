<!-- Contact Section -->
<section id="kontak" class="py-20 bg-blue-600 text                    <a href="tel:+6282144888116" class="flex items-center bg-blue-500 hover:bg-blue-600 px-6 py-3 rounded-lg transition duration-300">
                        <i class="fas fa-phone text-xl mr-3"></i>
                        <span>Telepon Langsung</span>
                    </a>te">
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
                                +62 821-4488-8116<br>
                                WhatsApp: +62 821-4488-8116
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
                                Senin - Kamis & Sabtu: 08:00 - 21:00<br>
                                Jumat: 08:00 - 11:00 & 13:00 - 21:00<br>
                                <span class="text-blue-200">Minggu: Tutup</span>
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Quick Contact Buttons -->
                <div class="mt-8 space-y-4">
                    <a href="https://wa.me/6282144888116" target="_blank" class="flex items-center bg-green-500 hover:bg-green-600 px-6 py-3 rounded-lg transition duration-300">
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
                
                <?php echo do_shortcode('[contact-form-7 id="1" title="Contact form 1"]'); ?>
                
                <!-- Fallback form if Contact Form 7 is not installed -->
                <form class="space-y-6" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post" enctype="multipart/form-data">
                    <?php wp_nonce_field('contact_form_action', 'contact_form_nonce'); ?>
                    <input type="hidden" name="action" value="handle_contact_form">
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium mb-2">Nama Lengkap *</label>
                            <input type="text" name="full_name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2">No. Telepon *</label>
                            <input type="tel" name="phone" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium mb-2">Email *</label>
                        <input type="email" name="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium mb-2">Layanan yang Diinginkan</label>
                        <select name="service" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
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
                        <textarea name="message" required rows="4" placeholder="Ceritakan detail kebutuhan percetakan Anda..." class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"></textarea>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium mb-2">Upload File Desain (Opsional)</label>
                        <input type="file" name="design_file" accept=".jpg,.jpeg,.png,.pdf,.ai,.psd,.eps,.svg" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                        <p class="text-sm text-gray-500 mt-1">Format: JPG, PNG, PDF, AI, PSD, EPS, SVG (Maksimal: 10MB)</p>
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
            <a href="https://wa.me/6282144888116" target="_blank" class="bg-white text-blue-600 hover:bg-gray-100 px-8 py-4 rounded-lg font-semibold text-lg transition duration-300">
                <i class="fab fa-whatsapp mr-2"></i>
                Chat WhatsApp
            </a>
        </div>
                <i class="fab fa-whatsapp mr-2"></i>
                Chat Langsung
            </a>
        </div>
    </div>
</section>