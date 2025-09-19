<?php
/**
 * 404 Page Template
 */

get_header(); ?>

<section class="py-20 bg-gray-50 min-h-screen flex items-center">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="max-w-md mx-auto">
            <img src="https://via.placeholder.com/400x300/3B82F6/FFFFFF?text=404" alt="404" class="mx-auto mb-8">
            <h1 class="text-6xl font-bold text-gray-800 mb-4">404</h1>
            <h2 class="text-2xl font-semibold text-gray-600 mb-6">Halaman Tidak Ditemukan</h2>
            <p class="text-gray-500 mb-8">
                Maaf, halaman yang Anda cari tidak dapat ditemukan. Mungkin halaman tersebut telah dipindahkan atau dihapus.
            </p>
            <div class="space-y-4">
                <a href="<?php echo home_url(); ?>" class="bg-blue-600 text-white hover:bg-blue-700 px-8 py-3 rounded-lg font-semibold transition duration-300 inline-block">
                    Kembali ke Beranda
                </a>
                <div class="text-center">
                    <a href="#kontak" class="text-blue-600 hover:text-blue-800 transition duration-300">
                        Atau hubungi kami untuk bantuan
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>