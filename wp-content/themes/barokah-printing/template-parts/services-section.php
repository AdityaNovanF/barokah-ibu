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
            <?php
            $services = new WP_Query(array(
                'post_type' => 'services',
                'posts_per_page' => 6,
                'post_status' => 'publish'
            ));
            
            if ($services->have_posts()) :
                $colors = ['blue', 'green', 'yellow', 'red', 'purple', 'cyan'];
                $index = 0;
                
                while ($services->have_posts()) : $services->the_post();
                    $price = get_post_meta(get_the_ID(), '_service_price', true);
                    $color = $colors[$index % count($colors)];
                    $index++;
            ?>
                    <div class="group bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-xl transition duration-300">
                        <div class="relative overflow-hidden">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('medium', ['class' => 'w-full h-48 object-cover group-hover:scale-105 transition duration-300']); ?>
                            <?php else : ?>
                                <img src="https://via.placeholder.com/400x250/<?php echo $color === 'blue' ? '3B82F6' : ($color === 'green' ? '10B981' : ($color === 'yellow' ? 'F59E0B' : ($color === 'red' ? 'EF4444' : ($color === 'purple' ? '8B5CF6' : '06B6D4')))); ?>/FFFFFF?text=<?php echo urlencode(strtoupper(get_the_title())); ?>" alt="<?php the_title(); ?>" class="w-full h-48 object-cover group-hover:scale-105 transition duration-300">
                            <?php endif; ?>
                            <?php if ($index <= 2) : ?>
                                <div class="absolute top-4 right-4 bg-<?php echo $color; ?>-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
                                    Populer
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-3"><?php the_title(); ?></h3>
                            <p class="text-gray-600 mb-4"><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-<?php echo $color; ?>-600">
                                    <?php echo $price ? $price : 'Mulai Rp 10.000'; ?>
                                </span>
                                <a href="#kontak" class="<?php echo 'bg-' . $color . '-600 hover:bg-' . $color . '-700'; ?> text-white px-4 py-2 rounded-lg transition duration-300">
                                    Pesan
                                </a>
                            </div>
                        </div>
                    </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                // Default services if no custom posts
                $default_services = [
                    ['title' => 'Banner & Spanduk', 'desc' => 'Banner berkualitas tinggi untuk promosi indoor dan outdoor dengan berbagai ukuran.', 'price' => 'Mulai Rp 25.000', 'bg_color' => 'bg-blue-600', 'hover_color' => 'hover:bg-blue-700', 'text_color' => 'text-blue-600'],
                    ['title' => 'Brosur & Flyer', 'desc' => 'Brosur informatif dan flyer menarik untuk marketing dan promosi bisnis Anda.', 'price' => 'Mulai Rp 500', 'bg_color' => 'bg-green-600', 'hover_color' => 'hover:bg-green-700', 'text_color' => 'text-green-600'],
                    ['title' => 'Kartu Nama', 'desc' => 'Kartu nama profesional dengan berbagai pilihan bahan dan finishing.', 'price' => 'Mulai Rp 15.000', 'bg_color' => 'bg-yellow-600', 'hover_color' => 'hover:bg-yellow-700', 'text_color' => 'text-yellow-600'],
                    ['title' => 'Stiker & Label', 'desc' => 'Stiker custom dengan berbagai bentuk, ukuran, dan bahan sesuai kebutuhan.', 'price' => 'Mulai Rp 2.000', 'bg_color' => 'bg-red-600', 'hover_color' => 'hover:bg-red-700', 'text_color' => 'text-red-600'],
                    ['title' => 'Undangan', 'desc' => 'Undangan pernikahan, ulang tahun, dan acara khusus dengan desain elegan.', 'price' => 'Mulai Rp 3.000', 'bg_color' => 'bg-purple-600', 'hover_color' => 'hover:bg-purple-700', 'text_color' => 'text-purple-600'],
                    ['title' => 'Packaging & Box', 'desc' => 'Kemasan produk custom yang menarik dan melindungi barang Anda.', 'price' => 'Mulai Rp 5.000', 'bg_color' => 'bg-cyan-600', 'hover_color' => 'hover:bg-cyan-700', 'text_color' => 'text-cyan-600']
                ];
                
                foreach ($default_services as $index => $service) :
            ?>
                    <div class="group bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-xl transition duration-300">
                        <div class="relative overflow-hidden">
                            <img src="https://via.placeholder.com/400x250/<?php echo $service['bg_color'] === 'bg-blue-600' ? '3B82F6' : ($service['bg_color'] === 'bg-green-600' ? '10B981' : ($service['bg_color'] === 'bg-yellow-600' ? 'F59E0B' : ($service['bg_color'] === 'bg-red-600' ? 'EF4444' : ($service['bg_color'] === 'bg-purple-600' ? '8B5CF6' : '06B6D4')))); ?>/FFFFFF?text=<?php echo urlencode(strtoupper($service['title'])); ?>" alt="<?php echo $service['title']; ?>" class="w-full h-48 object-cover group-hover:scale-105 transition duration-300">
                            <?php if ($index < 2) : ?>
                                <div class="absolute top-4 right-4 <?php echo $service['bg_color']; ?> text-white px-3 py-1 rounded-full text-sm font-semibold">
                                    Populer
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-3"><?php echo $service['title']; ?></h3>
                            <p class="text-gray-600 mb-4"><?php echo $service['desc']; ?></p>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold <?php echo $service['text_color']; ?>"><?php echo $service['price']; ?></span>
                                <a href="#kontak" class="<?php echo $service['bg_color'] . ' ' . $service['hover_color']; ?> text-white px-4 py-2 rounded-lg transition duration-300">
                                    Pesan
                                </a>
                            </div>
                        </div>
                    </div>
            <?php endforeach; endif; ?>
        </div>
    </div>
</section>