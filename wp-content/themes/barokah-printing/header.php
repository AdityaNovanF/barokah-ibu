<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* Minimal custom CSS */
        html { scroll-behavior: smooth; }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes fadeInUp {
            from { opacity: 0; transform: translate3d(0, 40px, 0); }
            to { opacity: 1; transform: translate3d(0, 0, 0); }
        }
        
        .animate-fade-in { animation: fadeIn 0.5s ease-in-out; }
        .animate-fade-in-up { animation: fadeInUp 0.8s ease-out; }
        
        /* Ensure header stays at top */
        header {
            position: fixed !important;
            top: 0 !important;
            z-index: 999 !important; /* Below admin bar but above content */
        }
        
        /* Adjust header position when admin bar is present */
        body.admin-bar header {
            top: 32px !important; /* Desktop admin bar height */
        }
        
        /* Mobile admin bar adjustment */
        @media screen and (max-width: 782px) {
            body.admin-bar header {
                top: 46px !important; /* Mobile admin bar height */
            }
        }
        
        /* Ensure admin bar has higher z-index */
        #wpadminbar {
            z-index: 99999 !important;
        }
        
        /* Prevent any WordPress interference */
        html, body {
            margin-top: 0 !important;
            padding-top: 0 !important;
        }
    </style>
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!-- Navigation -->
    <header class="fixed top-0 left-0 right-0 z-50 bg-white shadow-lg">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                
                <!-- Logo Section -->
                <div class="flex-shrink-0">
                    <?php if (has_custom_logo()) : ?>
                        <div class="flex items-center">
                            <?php the_custom_logo(); ?>
                        </div>
                    <?php else : ?>
                        <a href="<?php echo home_url(); ?>" class="flex items-center text-2xl font-bold text-blue-600 hover:text-blue-700 transition-colors duration-200">
                            <?php bloginfo('name'); ?>
                        </a>
                    <?php endif; ?>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="text-gray-700 hover:text-blue-600 font-medium transition-colors duration-200">Beranda</a>
                    <a href="#layanan" class="text-gray-700 hover:text-blue-600 font-medium transition-colors duration-200">Layanan</a>
                    <a href="#portfolio" class="text-gray-700 hover:text-blue-600 font-medium transition-colors duration-200">Portfolio</a>
                    <a href="#tentang" class="text-gray-700 hover:text-blue-600 font-medium transition-colors duration-200">Tentang</a>
                    <a href="#kontak" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg font-medium transition-all duration-200 shadow-md hover:shadow-lg">Kontak</a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="mobile-menu-btn" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-600 hover:text-blue-600 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-colors duration-200">
                        <span class="sr-only">Open main menu</span>
                        <!-- Hamburger Icon -->
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden">
                <div class="px-2 pt-2 pb-3 space-y-1 bg-white border-t border-gray-200">
                    <a href="#home" class="block px-3 py-2 text-gray-700 hover:text-blue-600 hover:bg-gray-50 rounded-md font-medium transition-colors duration-200">Beranda</a>
                    <a href="#layanan" class="block px-3 py-2 text-gray-700 hover:text-blue-600 hover:bg-gray-50 rounded-md font-medium transition-colors duration-200">Layanan</a>
                    <a href="#portfolio" class="block px-3 py-2 text-gray-700 hover:text-blue-600 hover:bg-gray-50 rounded-md font-medium transition-colors duration-200">Portfolio</a>
                    <a href="#tentang" class="block px-3 py-2 text-gray-700 hover:text-blue-600 hover:bg-gray-50 rounded-md font-medium transition-colors duration-200">Tentang</a>
                    <a href="#kontak" class="block mx-3 my-2 px-3 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-md font-medium text-center transition-colors duration-200">Kontak</a>
                </div>
            </div>
        </nav>
    </header>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile menu functionality
            const mobileMenuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            
            // Function to adjust content offset based on admin bar and header
            function adjustContentOffset() {
                const heroSection = document.querySelector('#home');
                const isAdminBarVisible = document.body.classList.contains('admin-bar');
                const isDesktop = window.innerWidth > 782;
                
                if (heroSection) {
                    // Remove all possible padding classes
                    heroSection.classList.remove('pt-16', 'pt-20', 'pt-24', 'pt-28', 'pt-32');
                    
                    if (isAdminBarVisible) {
                        if (isDesktop) {
                            // Admin bar (32px) + Header (64px) = 96px = pt-24
                            heroSection.classList.add('pt-24');
                        } else {
                            // Mobile admin bar (46px) + Header (64px) = 110px ≈ pt-28
                            heroSection.classList.add('pt-28');
                        }
                    } else {
                        // Only header (64px) = pt-16
                        heroSection.classList.add('pt-16');
                    }
                }
            }
            
            // Run on load
            adjustContentOffset();
            
            // Run on resize for responsive adjustments
            window.addEventListener('resize', adjustContentOffset);
            
            if (mobileMenuBtn && mobileMenu) {
                mobileMenuBtn.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                    
                    // Toggle hamburger icon
                    const icon = mobileMenuBtn.querySelector('svg');
                    if (mobileMenu.classList.contains('hidden')) {
                        icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />';
                    } else {
                        icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />';
                    }
                });
            }
            
            // Smooth scrolling for all anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    
                    if (target) {
                        // Calculate dynamic offset based on admin bar presence
                        const isAdminBarVisible = document.body.classList.contains('admin-bar');
                        const isDesktop = window.innerWidth > 782;
                        
                        let headerOffset = 80; // Base header + some padding
                        if (isAdminBarVisible) {
                            headerOffset += isDesktop ? 32 : 46; // Add admin bar height
                        }
                        
                        const elementPosition = target.getBoundingClientRect().top;
                        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                        window.scrollTo({
                            top: offsetPosition,
                            behavior: 'smooth'
                        });
                        
                        // Close mobile menu after clicking
                        if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                            mobileMenu.classList.add('hidden');
                            // Reset hamburger icon
                            const icon = mobileMenuBtn.querySelector('svg');
                            icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />';
                        }
                    }
                });
            });
            
            // Close mobile menu when clicking outside
            document.addEventListener('click', function(event) {
                if (mobileMenu && mobileMenuBtn) {
                    const isClickInsideMenu = mobileMenu.contains(event.target);
                    const isClickOnButton = mobileMenuBtn.contains(event.target);
                    
                    if (!isClickInsideMenu && !isClickOnButton && !mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                        // Reset hamburger icon
                        const icon = mobileMenuBtn.querySelector('svg');
                        icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />';
                    }
                }
            });
        });
    </script>