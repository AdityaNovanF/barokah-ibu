<?php get_header(); ?>

<!-- Portfolio Archive Page -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Semua Portfolio</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Koleksi lengkap hasil karya terbaik kami
            </p>
        </div>
        
        <!-- Portfolio Filter -->
        <div class="flex flex-wrap justify-center mb-12 gap-4">
            <button class="portfolio-filter active bg-blue-700 text-white px-6 py-3 rounded-lg font-semibold transition duration-300" data-filter="semua">
                Semua
            </button>
            <?php
            $categories = get_terms(array(
                'taxonomy' => 'portfolio_category',
                'hide_empty' => true
            ));
            
            if (!empty($categories) && !is_wp_error($categories)) {
                foreach ($categories as $category) {
                    printf(
                        '<button class="portfolio-filter bg-gray-200 text-gray-700 hover:bg-gray-300 px-6 py-3 rounded-lg font-semibold transition duration-300" data-filter="%s">%s</button>',
                        esc_attr($category->slug),
                        esc_html($category->name)
                    );
                }
            }
            ?>
        </div>
        
        <!-- Portfolio Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
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
                    
                    // Get primary category color class
                    $color_classes = array(
                        'banner' => 'blue',
                        'brosur' => 'green',
                        'packaging' => 'yellow'
                    );
                    $primary_color = 'blue'; // default color
                    if ($categories && isset($color_classes[$categories[0]->slug])) {
                        $primary_color = $color_classes[$categories[0]->slug];
                    }
            ?>
                    <div class="portfolio-item<?php echo esc_attr($category_classes); ?> group relative overflow-hidden rounded-lg shadow-lg">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('large', array('class' => 'w-full h-64 object-cover group-hover:scale-110 transition duration-500')); ?>
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder.jpg" alt="<?php the_title_attribute(); ?>" class="w-full h-64 object-cover group-hover:scale-110 transition duration-500">
                        <?php endif; ?>
                        
                        <div class="absolute inset-0 bg-<?php echo $primary_color; ?>-600 bg-opacity-0 group-hover:bg-opacity-80 transition duration-300 flex items-center justify-center">
                            <div class="text-white text-center opacity-0 group-hover:opacity-100 transition duration-300 p-6">
                                <h3 class="text-xl font-semibold mb-2"><?php the_title(); ?></h3>
                                <p class="mb-4"><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
                                <?php if ($category_name) : ?>
                                    <span class="inline-block bg-white text-<?php echo $primary_color; ?>-600 px-3 py-1 rounded-full text-sm font-semibold mb-4">
                                        <?php echo esc_html($category_name); ?>
                                    </span>
                                <?php endif; ?>
                                <a href="<?php the_permalink(); ?>" class="inline-block bg-white text-<?php echo $primary_color; ?>-600 px-4 py-2 rounded-lg font-semibold hover:bg-opacity-90 transition duration-300">
                                    Lihat Detail
                                </a>
                            </div>
                        </div>
                    </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>

        <!-- Pagination -->
        <?php if ($wp_query->max_num_pages > 1) : ?>
        <div class="mt-12 flex justify-center gap-4">
            <?php
            echo paginate_links(array(
                'prev_text' => '
                    <button class="inline-flex items-center justify-center bg-gray-200 text-gray-700 px-4 py-2 rounded-lg font-semibold hover:bg-gray-300 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        Sebelumnya
                    </button>
                ',
                'next_text' => '
                    <button class="inline-flex items-center justify-center bg-gray-200 text-gray-700 px-4 py-2 rounded-lg font-semibold hover:bg-gray-300 transition duration-300">
                        Selanjutnya
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </button>
                ',
                'before_page_number' => '<button class="inline-flex items-center justify-center bg-gray-200 text-gray-700 px-4 py-2 rounded-lg font-semibold hover:bg-gray-300 transition duration-300">',
                'after_page_number' => '</button>'
            ));
            ?>
        </div>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>