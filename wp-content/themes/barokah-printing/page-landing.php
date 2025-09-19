<?php
/**
 * Template Name: Landing Page Percetakan
 */

get_header(); ?>

<!-- Hero Section -->
<section id="home" class="bg-gradient-to-r from-blue-600 to-blue-800 text-white pt-20">
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
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('large', ['class' => 'w-full h-auto rounded-lg']); ?>
                    <?php else : ?>
                        <img src="https://via.placeholder.com/500x400/4F46E5/FFFFFF?text=PRINTING+MACHINE" alt="Mesin Percetakan" class="w-full h-auto rounded-lg">
                    <?php endif; ?>
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

<!-- Load the rest of the content from index.php -->
<?php 
// Include the services, portfolio, and other sections
include(get_template_directory() . '/template-parts/services-section.php');
include(get_template_directory() . '/template-parts/portfolio-section.php');
include(get_template_directory() . '/template-parts/about-section.php');
include(get_template_directory() . '/template-parts/contact-section.php');
?>

<?php get_footer(); ?>