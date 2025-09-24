    <!-- Footer -->
    <footer class="bg-gray-800 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div class="col-span-1 md:col-span-2">
                    <h3 class="text-xl font-bold mb-4">Barokah Ibu Digital Printing</h3>
                    <p class="text-gray-300 mb-4">
                        Solusi terpercaya untuk semua kebutuhan percetakan Anda. Dengan teknologi modern dan tim berpengalaman, kami siap memberikan hasil terbaik.
                    </p>
                    <div class="flex space-x-4">
                        <!-- <a href="#" class="text-gray-300 hover:text-white transition duration-300">
                            <i class="fab fa-facebook-f text-xl"></i>
                        </a> -->
                        <a href="https://www.instagram.com/barokahibu.percetakan" class="text-gray-300 hover:text-white transition duration-300">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="https://wa.me/6282144888116" target="_blank" class="text-gray-300 hover:text-white transition duration-300">
                            <i class="fab fa-whatsapp text-xl"></i>
                        </a>
                        <!-- <a href="#" class="text-gray-300 hover:text-white transition duration-300">
                            <i class="fab fa-twitter text-xl"></i>
                        </a> -->
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#home" class="text-gray-300 hover:text-white transition duration-300">Beranda</a></li>
                        <li><a href="#layanan" class="text-gray-300 hover:text-white transition duration-300">Layanan</a></li>
                        <li><a href="#portfolio" class="text-gray-300 hover:text-white transition duration-300">Portfolio</a></li>
                        <li><a href="#tentang" class="text-gray-300 hover:text-white transition duration-300">Tentang Kami</a></li>
                        <li><a href="#kontak" class="text-gray-300 hover:text-white transition duration-300">Kontak</a></li>
                    </ul>
                </div>
                
                <!-- Contact Info -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Kontak</h4>
                    <div class="space-y-2 text-gray-300">
                        <div class="flex items-center">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            <span>Jln. Raya Mangaran, Situbondo</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-phone mr-2"></i>
                            <span>+62 821-4488-8116</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-envelope mr-2"></i>
                            <span>barokahibu.percetakan@gmail.com</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-clock mr-2 mt-1"></i>
                            <div>
                                <div>Senin - Sabtu: 08:00 - 21:00</div>
                                <div>Jumat: 08:00 - 11:00 & 13:00 - 21:00</div>
                                <div class="text-sm text-gray-400 mt-1">Minggu: Tutup</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <hr class="border-gray-700 my-8">
            
            <div class="flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 text-sm">
                    &copy; <?php echo date('Y'); ?> Barokah Ibu Digital Printing. Semua hak cipta dilindungi.
                </p>
                <div class="mt-4 md:mt-0">
                    <a href="#" class="text-gray-400 hover:text-white text-sm mr-4 transition duration-300">Privacy Policy</a>
                    <a href="#" class="text-gray-400 hover:text-white text-sm transition duration-300">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Main JavaScript -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
    
    <?php wp_footer(); ?>
</body>
</html>