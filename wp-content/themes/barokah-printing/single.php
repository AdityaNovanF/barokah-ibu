<?php
/**
 * Single Post Template
 */

get_header(); ?>

<section class="py-20 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="w-full h-64 md:h-80">
                            <?php the_post_thumbnail('large', ['class' => 'w-full h-full object-cover']); ?>
                        </div>
                    <?php endif; ?>
                    
                    <div class="p-8">
                        <div class="mb-4">
                            <span class="text-sm text-blue-600 font-semibold">
                                <?php echo get_post_type() === 'portfolio' ? 'Portfolio' : (get_post_type() === 'services' ? 'Layanan' : 'Blog'); ?>
                            </span>
                            <span class="text-sm text-gray-500 ml-2">
                                <?php echo get_the_date(); ?>
                            </span>
                        </div>
                        
                        <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">
                            <?php the_title(); ?>
                        </h1>
                        
                        <?php if (get_post_type() === 'services') : ?>
                            <?php $price = get_post_meta(get_the_ID(), '_service_price', true); ?>
                            <?php if ($price) : ?>
                                <div class="bg-blue-100 p-4 rounded-lg mb-6">
                                    <span class="text-sm text-blue-600 font-semibold">Harga Mulai</span>
                                    <div class="text-2xl font-bold text-blue-800"><?php echo esc_html($price); ?></div>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                        
                        <div class="prose prose-lg max-w-none">
                            <?php the_content(); ?>
                        </div>
                        
                        <div class="mt-8 pt-8 border-t border-gray-200">
                            <div class="flex flex-col sm:flex-row gap-4 justify-between items-center">
                                <a href="<?php echo home_url(); ?>" class="bg-gray-200 text-gray-700 hover:bg-gray-300 px-6 py-3 rounded-lg font-semibold transition duration-300">
                                    ← Kembali ke Beranda
                                </a>
                                <a href="#kontak" class="bg-blue-600 text-white hover:bg-blue-700 px-6 py-3 rounded-lg font-semibold transition duration-300">
                                    Hubungi Kami
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>