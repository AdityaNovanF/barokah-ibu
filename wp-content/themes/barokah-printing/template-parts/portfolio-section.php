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
            <?php
            $portfolio = new WP_Query(array(
                'post_type' => 'portfolio',
                'posts_per_page' => 6,
                'post_status' => 'publish'
            ));
            
            if ($portfolio->have_posts()) :
                $colors = ['blue', 'green', 'yellow', 'red', 'purple', 'cyan'];
                $categories = ['banner', 'brosur', 'packaging'];
                $index = 0;
                
                while ($portfolio->have_posts()) : $portfolio->the_post();
                    $color = $colors[$index % count($colors)];
                    $category = $categories[$index % count($categories)];
                    $index++;
            ?>
                    <div class="portfolio-item <?php echo $category; ?> group relative overflow-hidden rounded-lg shadow-lg">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('medium', ['class' => 'w-full h-64 object-cover group-hover:scale-110 transition duration-500']); ?>
                        <?php else : ?>
                            <img src="https://via.placeholder.com/400x300/<?php echo $color === 'blue' ? '3B82F6' : ($color === 'green' ? '10B981' : ($color === 'yellow' ? 'F59E0B' : ($color === 'red' ? 'EF4444' : ($color === 'purple' ? '8B5CF6' : '06B6D4')))); ?>/FFFFFF?text=<?php echo urlencode(strtoupper(get_the_title())); ?>" alt="<?php the_title(); ?>" class="w-full h-64 object-cover group-hover:scale-110 transition duration-500">
                        <?php endif; ?>
                        <div class="absolute inset-0 bg-<?php echo $color; ?>-600 bg-opacity-0 group-hover:bg-opacity-80 transition duration-300 flex items-center justify-center">
                            <div class="text-white text-center opacity-0 group-hover:opacity-100 transition duration-300">
                                <h3 class="text-xl font-semibold mb-2"><?php the_title(); ?></h3>
                                <p class="mb-4"><?php echo wp_trim_words(get_the_excerpt(), 8); ?></p>
                                <button class="bg-white text-<?php echo $color; ?>-600 px-4 py-2 rounded-lg font-semibold">
                                    Lihat Detail
                                </button>
                            </div>
                        </div>
                    </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                // Default portfolio items if no custom posts
                $default_portfolio = [
                    ['title' => 'Banner Restaurant', 'desc' => 'Banner promosi untuk restaurant premium', 'bg_color' => 'bg-blue-600', 'text_color' => 'text-blue-600', 'category' => 'banner'],
                    ['title' => 'Brosur Travel', 'desc' => 'Brosur tour dan travel agency', 'bg_color' => 'bg-green-600', 'text_color' => 'text-green-600', 'category' => 'brosur'],
                    ['title' => 'Box Makanan', 'desc' => 'Packaging custom untuk food delivery', 'bg_color' => 'bg-yellow-600', 'text_color' => 'text-yellow-600', 'category' => 'packaging'],
                    ['title' => 'Spanduk Event', 'desc' => 'Spanduk untuk event dan seminar', 'bg_color' => 'bg-red-600', 'text_color' => 'text-red-600', 'category' => 'banner'],
                    ['title' => 'Katalog Produk', 'desc' => 'Katalog produk untuk company profile', 'bg_color' => 'bg-purple-600', 'text_color' => 'text-purple-600', 'category' => 'brosur'],
                    ['title' => 'Label Produk', 'desc' => 'Label custom untuk produk minuman', 'bg_color' => 'bg-cyan-600', 'text_color' => 'text-cyan-600', 'category' => 'packaging']
                ];
                
                foreach ($default_portfolio as $item) :
            ?>
                    <div class="portfolio-item <?php echo $item['category']; ?> group relative overflow-hidden rounded-lg shadow-lg">
                        <img src="https://via.placeholder.com/400x300/<?php echo $item['bg_color'] === 'bg-blue-600' ? '3B82F6' : ($item['bg_color'] === 'bg-green-600' ? '10B981' : ($item['bg_color'] === 'bg-yellow-600' ? 'F59E0B' : ($item['bg_color'] === 'bg-red-600' ? 'EF4444' : ($item['bg_color'] === 'bg-purple-600' ? '8B5CF6' : '06B6D4')))); ?>/FFFFFF?text=<?php echo urlencode(strtoupper($item['title'])); ?>" alt="<?php echo $item['title']; ?>" class="w-full h-64 object-cover group-hover:scale-110 transition duration-500">
                        <div class="absolute inset-0 <?php echo $item['bg_color']; ?> bg-opacity-0 group-hover:bg-opacity-80 transition duration-300 flex items-center justify-center">
                            <div class="text-white text-center opacity-0 group-hover:opacity-100 transition duration-300">
                                <h3 class="text-xl font-semibold mb-2"><?php echo $item['title']; ?></h3>
                                <p class="mb-4"><?php echo $item['desc']; ?></p>
                                <button class="bg-white <?php echo $item['text_color']; ?> px-4 py-2 rounded-lg font-semibold">
                                    Lihat Detail
                                </button>
                            </div>
                        </div>
                    </div>
            <?php endforeach; endif; ?>
        </div>
    </div>
</section>