// Main JavaScript for Barokah Printing Theme

// Portfolio Modal Functions - Global Scope
window.openPortfolioModal = function(portfolioId) {
    const modal = document.getElementById('portfolioModal');
    if (!modal) return;
    
    const modalContentEl = modal.querySelector('#modalContent');
    if (!modalContentEl) return;
    
    // Check if portfolio data exists
    if (!window.portfolioData || !window.portfolioData[portfolioId]) return;
    
    const portfolio = window.portfolioData[portfolioId];
    // Populate modal content
    const titleEl = document.getElementById('modalTitle');
    const imageEl = document.getElementById('modalMainImage');
    const contentEl = document.getElementById('modalContentText');
    const dateEl = document.getElementById('modalDate');
    
    if (titleEl) titleEl.textContent = portfolio.title;
    if (imageEl) {
        // Enhanced image loading with fallback
        const imageContainer = document.getElementById('modalImageContainer');
        
        // Function to handle image loading
        const loadImage = (src) => {
            return new Promise((resolve, reject) => {
                const img = new Image();
                img.onload = () => resolve(src);
                img.onerror = () => reject();
                img.src = src;
            });
        };
        
        // Try multiple image sources
        const imageSources = [
            portfolio.image,
            // Fallback to any featured image from the post
            portfolio.featured_image,
            // Generate a colored placeholder as last resort
            (() => {
                const colorCodes = {
                    'green': '10B981',
                    'yellow': 'F59E0B', 
                    'blue': '3B82F6',
                    'purple': '8B5CF6',
                    'red': 'EF4444',
                    'indigo': '6366F1',
                    'pink': 'EC4899'
                };
                const colorCode = colorCodes[portfolio.color] || '3B82F6';
                return `https://via.placeholder.com/1200x800/${colorCode}/FFFFFF?text=${encodeURIComponent(portfolio.title.substring(0, 20))}`;
            })()
        ].filter(Boolean);
        
        // Try each image source until one works
        let imageLoaded = false;
        const tryNextImage = async (index = 0) => {
            if (index >= imageSources.length || imageLoaded) return;
            
            try {
                await loadImage(imageSources[index]);
                imageEl.src = imageSources[index];
                imageEl.alt = portfolio.title;
                imageLoaded = true;
            } catch {
                tryNextImage(index + 1);
            }
        };
        
        tryNextImage();
    }
    if (contentEl) {
        contentEl.innerHTML = portfolio.content || portfolio.excerpt || '<p>Detail portfolio akan segera tersedia.</p>';
    }
    if (dateEl) dateEl.textContent = portfolio.date;
    
    // Set category badge
    const categoryContainer = document.getElementById('modalCategory');
    if (categoryContainer && portfolio.category) {
        const colorMap = {
            'green': 'bg-green-600',
            'yellow': 'bg-yellow-500', 
            'blue': 'bg-blue-600',
            'purple': 'bg-purple-600',
            'red': 'bg-red-600',
            'indigo': 'bg-indigo-600',
            'pink': 'bg-pink-600'
        };
        const colorClass = colorMap[portfolio.color] || 'bg-blue-600';
        categoryContainer.innerHTML = `<span class="${colorClass} text-white px-3 py-1 rounded-full text-sm font-medium shadow-lg">${portfolio.category}</span>`;
    }
    
    // Set category name in meta section
    const categoryNameEl = document.getElementById('modalCategoryName');
    if (categoryNameEl && portfolio.category) {
        categoryNameEl.textContent = portfolio.category;
    }
    
    // Show modal with animation
    modal.style.display = 'flex';
    
    // Animate in
    setTimeout(() => {
        modalContentEl.style.transform = 'scale(1)';
        modalContentEl.style.opacity = '1';
    }, 10);
    
    // Prevent body scroll
    document.body.style.overflow = 'hidden';
};

window.closePortfolioModal = function() {
    const modal = document.getElementById('portfolioModal');
    if (!modal) return;
    
    const modalContentEl = modal.querySelector('#modalContent');
    if (!modalContentEl) return;
    
    // Animate out
    modalContentEl.style.transform = 'scale(0.95)';
    modalContentEl.style.opacity = '0';
    
    setTimeout(() => {
        modal.style.display = 'none';
        
        // Restore body scroll
        document.body.style.overflow = '';
    }, 300);
};

document.addEventListener('DOMContentLoaded', function() {
    // Initialize Modal Event Listeners
    function initModalEvents() {
        // Close modal when clicking outside
        document.addEventListener('click', function(e) {
            const modal = document.getElementById('portfolioModal');
            if (modal && e.target === modal && modal.style.display === 'flex') {
                closePortfolioModal();
            }
        });
        
        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                const modal = document.getElementById('portfolioModal');
                if (modal && modal.style.display === 'flex') {
                    closePortfolioModal();
                }
            }
        });
    }
    
    // Initialize all features
    initModalEvents();
    
    // Enhanced Portfolio Image Loading
    function initPortfolioImageLoading() {
        const images = document.querySelectorAll('.portfolio-image');
        
        images.forEach((img, index) => {
            const container = img.parentElement;
            
            // Function to remove loading elements
            function removeLoadingElements() {
                const spinner = container.querySelector('.animate-spin');
                const shimmer = container.querySelector('.animate-pulse');
                
                if (spinner && spinner.parentElement) {
                    spinner.parentElement.remove();
                }
                if (shimmer) {
                    shimmer.remove();  
                }
            }
            
            // Check if image is already loaded
            if (img.complete && img.naturalWidth > 0) {
                img.classList.remove('opacity-0');
                img.classList.add('opacity-100');
                removeLoadingElements();
            } else {
                // Set up load event
                img.addEventListener('load', function() {
                    this.classList.remove('opacity-0');
                    this.classList.add('opacity-100');
                    removeLoadingElements();
                });
                
                // Set up error event
                img.addEventListener('error', function() {
                    
                    // Create fallback URL
                    const title = this.alt || 'Portfolio Item';
                    this.src = `https://via.placeholder.com/800x600/6B7280/FFFFFF?text=${encodeURIComponent(title)}`;
                    
                    // Still show the image even if it's a fallback
                    this.classList.remove('opacity-0');
                    this.classList.add('opacity-100');
                    removeLoadingElements();
                });
                
                // Timeout fallback (in case image takes too long)
                setTimeout(() => {
                    if (img.classList.contains('opacity-0')) {
                        
                        img.classList.remove('opacity-0');
                        img.classList.add('opacity-100');
                        removeLoadingElements();
                    }
                }, 10000); // 10 second timeout
            }
        });
    }
    
    // Initialize portfolio image loading
    initPortfolioImageLoading();
    
    // Mobile menu toggle
    const mobileMenuButton = document.querySelector('.mobile-menu-button');
    const mobileMenu = document.querySelector('.mobile-menu');
    
    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });
    }
    
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
                
                // Close mobile menu if open
                if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.add('hidden');
                }
            }
        });
    });
    
    // Portfolio Filter
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
                    item.classList.add('animate-fadeIn');
                } else {
                    item.style.display = 'none';
                    item.classList.remove('animate-fadeIn');
                }
            });
        });
    });
    
    // Contact form submission
    const contactForm = document.querySelector('#kontak form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            const formData = new FormData(this);
            
            // Basic validation
            const requiredFields = this.querySelectorAll('[required]');
            let isValid = true;
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.classList.add('border-red-500');
                    
                    // Remove error styling after user starts typing
                    field.addEventListener('input', function() {
                        this.classList.remove('border-red-500');
                    });
                }
            });
            
            if (!isValid) {
                e.preventDefault();
                alert('Mohon lengkapi semua field yang wajib diisi.');
                return;
            }
            
            // If using AJAX, you can add it here
            // For now, we'll show a success message
            setTimeout(() => {
                alert('Terima kasih! Pesan Anda telah dikirim. Kami akan segera menghubungi Anda.');
            }, 100);
        });
    }
    
    // Scroll-triggered animations
    function animateOnScroll() {
        const elements = document.querySelectorAll('.animate-on-scroll');
        
        elements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
            const elementVisible = 150;
            
            if (elementTop < window.innerHeight - elementVisible) {
                element.classList.add('animate-fadeInUp');
            }
        });
    }
    
    // Add animation classes to sections
    const sections = document.querySelectorAll('section');
    sections.forEach(section => {
        section.classList.add('animate-on-scroll');
    });
    
    window.addEventListener('scroll', animateOnScroll);
    animateOnScroll(); // Run on load
    
    // Navbar background change on scroll - DISABLED to keep navbar stable
    // const navbar = document.querySelector('nav');
    // window.addEventListener('scroll', function() {
    //     if (window.scrollY > 50) {
    //         navbar.classList.add('bg-white', 'shadow-lg');
    //         navbar.classList.remove('bg-transparent');
    //     } else {
    //         navbar.classList.remove('bg-white', 'shadow-lg');
    //         navbar.classList.add('bg-transparent');
    //     }
    // });
    
    // Number counter animation
    function animateCounters() {
        const counters = document.querySelectorAll('[data-count]');
        
        counters.forEach(counter => {
            const target = parseInt(counter.getAttribute('data-count'));
            const duration = 2000; // 2 seconds
            const increment = target / (duration / 16); // 60fps
            let current = 0;
            
            const timer = setInterval(() => {
                current += increment;
                
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                
                counter.textContent = Math.floor(current) + (counter.textContent.includes('+') ? '+' : '') + (counter.textContent.includes('%') ? '%' : '');
            }, 16);
        });
    }
    
    // Trigger counter animation when about section is visible
    const aboutSection = document.querySelector('#tentang');
    if (aboutSection) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    observer.unobserve(entry.target);
                }
            });
        });
        
        observer.observe(aboutSection);
    }
    
    // Lazy loading for images
    const images = document.querySelectorAll('img[data-src]');
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.remove('opacity-0');
                img.classList.add('opacity-100');
                imageObserver.unobserve(img);
            }
        });
    });
    
    images.forEach(img => imageObserver.observe(img));
    
    // Testimonial carousel
    function initTestimonialCarousel() {
        const testimonialContainer = document.querySelector('.testimonial-container');
        const testimonials = document.querySelectorAll('.testimonial-item');
        
        if (testimonials.length > 0) {
            let currentIndex = 0;
            
            // Create dots indicator
            const dotsContainer = document.createElement('div');
            dotsContainer.className = 'flex justify-center mt-8 space-x-2';
            
            testimonials.forEach((_, index) => {
                const dot = document.createElement('button');
                dot.className = `w-3 h-3 rounded-full transition-colors duration-300 ${index === 0 ? 'bg-blue-600' : 'bg-gray-300'}`;
                dot.addEventListener('click', () => goToSlide(index));
                dotsContainer.appendChild(dot);
            });
            
            if (testimonialContainer) {
                testimonialContainer.appendChild(dotsContainer);
            }
            
            function goToSlide(index) {
                // Hide current testimonial
                testimonials[currentIndex].style.display = 'none';
                document.querySelectorAll('.testimonial-container button')[currentIndex].className = 'w-3 h-3 rounded-full transition-colors duration-300 bg-gray-300';
                
                // Show new testimonial
                currentIndex = index;
                testimonials[currentIndex].style.display = 'block';
                document.querySelectorAll('.testimonial-container button')[currentIndex].className = 'w-3 h-3 rounded-full transition-colors duration-300 bg-blue-600';
            }
            
            // Hide all testimonials except first
            testimonials.forEach((testimonial, index) => {
                if (index !== 0) {
                    testimonial.style.display = 'none';
                }
            });
            
            // Auto-play carousel
            setInterval(() => {
                const nextIndex = (currentIndex + 1) % testimonials.length;
                goToSlide(nextIndex);
            }, 5000);
        }
    }
    
    initTestimonialCarousel();
    
    // Services Carousel - Simple and Robust Version
    function initServicesCarousel() {
        // Wait for DOM to be ready
        setTimeout(() => {
            const track = document.getElementById('servicesCarouselTrack');
            const prevButton = document.getElementById('servicesCarouselPrev');
            const nextButton = document.getElementById('servicesCarouselNext');
            const indicators = document.querySelectorAll('.carousel-indicator');
            
            if (!track || !prevButton || !nextButton || indicators.length === 0) {
                
                return;
            }
            
            let currentSlide = 0;
            const totalSlides = 6;
            let autoPlayInterval;
            
            function updateCarousel() {
                if (!track) return;
                
                const translateX = -currentSlide * 100;
                track.style.transform = `translateX(${translateX}%)`;
                
                // Update indicators
                indicators.forEach((indicator, index) => {
                    if (index === currentSlide) {
                        indicator.classList.remove('bg-gray-300');
                        indicator.classList.add('bg-blue-600');
                    } else {
                        indicator.classList.remove('bg-blue-600');
                        indicator.classList.add('bg-gray-300');
                    }
                });
            }
            
            function nextSlide() {
                currentSlide = (currentSlide + 1) % totalSlides;
                updateCarousel();
            }
            
            function prevSlide() {
                currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
                updateCarousel();
            }
            
            function goToSlide(slideIndex) {
                currentSlide = slideIndex;
                updateCarousel();
            }
            
            function startAutoPlay() {
                if (autoPlayInterval) {
                    clearInterval(autoPlayInterval);
                }
                autoPlayInterval = setInterval(nextSlide, 4000);
            }
            
            function stopAutoPlay() {
                if (autoPlayInterval) {
                    clearInterval(autoPlayInterval);
                }
            }
            
            // Event listeners
            if (nextButton) {
                nextButton.addEventListener('click', (e) => {
                    e.preventDefault();
                    nextSlide();
                    stopAutoPlay();
                    startAutoPlay();
                });
            }
            
            if (prevButton) {
                prevButton.addEventListener('click', (e) => {
                    e.preventDefault();
                    prevSlide();
                    stopAutoPlay();
                    startAutoPlay();
                });
            }
            
            // Indicator click events
            indicators.forEach((indicator, index) => {
                indicator.addEventListener('click', (e) => {
                    e.preventDefault();
                    goToSlide(index);
                    stopAutoPlay();
                    startAutoPlay();
                });
            });
            
            // Hover pause/resume
            const carouselContainer = track.closest('.relative');
            if (carouselContainer) {
                carouselContainer.addEventListener('mouseenter', stopAutoPlay);
                carouselContainer.addEventListener('mouseleave', startAutoPlay);
            }
            
            // Touch/swipe support
            let startX = 0;
            let isDragging = false;
            
            if (track) {
                track.addEventListener('touchstart', (e) => {
                    startX = e.touches[0].clientX;
                    isDragging = true;
                    stopAutoPlay();
                });
                
                track.addEventListener('touchmove', (e) => {
                    if (!isDragging) return;
                    e.preventDefault();
                });
                
                track.addEventListener('touchend', (e) => {
                    if (!isDragging) return;
                    isDragging = false;
                    
                    const endX = e.changedTouches[0].clientX;
                    const diff = startX - endX;
                    
                    if (Math.abs(diff) > 50) {
                        if (diff > 0) {
                            nextSlide();
                        } else {
                            prevSlide();
                        }
                    }
                    startAutoPlay();
                });
            }
            
            // Initialize
            updateCarousel();
            startAutoPlay();
            
        }, 100); // Small delay to ensure DOM is ready
    }
    
    // Initialize carousel
    initServicesCarousel();
    
    // WhatsApp floating button
    function createWhatsAppButton() {
        const whatsappButton = document.createElement('a');
        whatsappButton.href = 'https://wa.me/6282144888116';
        whatsappButton.target = '_blank';
        whatsappButton.className = 'fixed bottom-6 right-6 bg-green-500 text-white p-4 rounded-full shadow-lg hover:bg-green-600 transition duration-300 z-50';
        whatsappButton.innerHTML = '<i class="fab fa-whatsapp text-2xl"></i>';
        whatsappButton.title = 'Chat via WhatsApp';
        
        document.body.appendChild(whatsappButton);
    }
    
    // Add floating WhatsApp button
    createWhatsAppButton();
    
    // Back to top button
    function createBackToTopButton() {
        const backToTopButton = document.createElement('button');
        backToTopButton.innerHTML = '<i class="fas fa-arrow-up"></i>';
        backToTopButton.className = 'fixed bottom-6 left-6 bg-blue-600 text-white p-3 rounded-full shadow-lg hover:bg-blue-700 transition duration-300 z-50 opacity-0 pointer-events-none';
        backToTopButton.title = 'Kembali ke atas';
        
        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                backToTopButton.classList.remove('opacity-0', 'pointer-events-none');
                backToTopButton.classList.add('opacity-100');
            } else {
                backToTopButton.classList.add('opacity-0', 'pointer-events-none');
                backToTopButton.classList.remove('opacity-100');
            }
        });
        
        backToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        
        document.body.appendChild(backToTopButton);
    }
    
    createBackToTopButton();
});

// Service worker for offline functionality (progressive web app)
if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
        navigator.serviceWorker.register('/sw.js')
            .then((registration) => {
                
            })
            .catch((registrationError) => {
                
            });
    });
}
