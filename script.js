// Tasarım değiştirme fonksiyonu
function changeDesign(designNumber) {
    // Tüm tasarımları gizle
    document.querySelectorAll('.design').forEach(design => {
        design.classList.remove('active');
    });
    
    // Tüm tasarım butonlarından active class'ını kaldır
    document.querySelectorAll('.design-btn').forEach(btn => {
        btn.classList.remove('active');
    });
    
    // Seçilen tasarımı göster
    document.querySelector(`.design-${designNumber}`).classList.add('active');
    
    // Seçilen butona active class'ını ekle
    document.querySelector(`[data-design="${designNumber}"]`).classList.add('active');
    
    // Local storage'a kaydet
    localStorage.setItem('selectedDesign', designNumber);
}

// Sayfa yüklendiğinde çalışacak fonksiyonlar
document.addEventListener('DOMContentLoaded', function() {
    // Tasarım seçici butonlarına event listener ekle
    document.querySelectorAll('.design-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const designNumber = this.getAttribute('data-design');
            changeDesign(designNumber);
        });
    });
    
    // Local storage'dan kaydedilmiş tasarımı yükle
    const savedDesign = localStorage.getItem('selectedDesign');
    if (savedDesign) {
        changeDesign(savedDesign);
    }
    
    // Ürün kartlarına hover efekti ekle
    document.querySelectorAll('.product-card').forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
    
    // Smooth scroll için
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
    // Header scroll efekti
    let lastScrollTop = 0;
    const header = document.querySelector('.header');
    
    window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        if (scrollTop > lastScrollTop && scrollTop > 100) {
            // Aşağı scroll
            header.style.transform = 'translateY(-100%)';
        } else {
            // Yukarı scroll
            header.style.transform = 'translateY(0)';
        }
        
        lastScrollTop = scrollTop;
    });
    
    // Ürün kartlarına tıklama efekti
    document.querySelectorAll('.product-card').forEach(card => {
        card.addEventListener('click', function() {
            // Tıklama animasyonu
            this.style.transform = 'scale(0.98)';
            setTimeout(() => {
                this.style.transform = 'scale(1)';
            }, 150);
            
            // Burada ürün detay sayfasına yönlendirme yapılabilir
            console.log('Ürün tıklandı:', this.querySelector('.product-name').textContent);
        });
    });
    
    // Arama butonuna tıklama
    document.querySelectorAll('.search-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            // Arama modal'ı açılabilir
            alert('Arama özelliği yakında eklenecek!');
        });
    });
    
    // Sepet butonuna tıklama
    document.querySelectorAll('.cart-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            // Sepet modal'ı açılabilir
            alert('Sepet özelliği yakında eklenecek!');
        });
    });
    
    // Lazy loading için Intersection Observer
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.classList.remove('lazy');
                    imageObserver.unobserve(img);
                }
            });
        });
        
        document.querySelectorAll('img[data-src]').forEach(img => {
            imageObserver.observe(img);
        });
    }
    
    // Tasarım önizleme için hover efekti
    document.querySelectorAll('.design-btn').forEach(btn => {
        btn.addEventListener('mouseenter', function() {
            const designNumber = this.getAttribute('data-design');
            const previewDesign = document.querySelector(`.design-${designNumber}`);
            
            if (previewDesign) {
                previewDesign.style.opacity = '0.8';
                previewDesign.style.pointerEvents = 'none';
            }
        });
        
        btn.addEventListener('mouseleave', function() {
            const designNumber = this.getAttribute('data-design');
            const previewDesign = document.querySelector(`.design-${designNumber}`);
            
            if (previewDesign) {
                previewDesign.style.opacity = '1';
                previewDesign.style.pointerEvents = 'auto';
            }
        });
    });
    
    // Klavye kısayolları
    document.addEventListener('keydown', function(e) {
        // 1-5 tuşları ile tasarım değiştirme
        if (e.key >= '1' && e.key <= '5') {
            changeDesign(e.key);
        }
        
        // ESC tuşu ile tasarım seçiciyi gizleme
        if (e.key === 'Escape') {
            document.querySelector('.design-selector').style.display = 'none';
        }
        
        // H tuşu ile header'ı gizleme/gösterme
        if (e.key === 'h' || e.key === 'H') {
            const header = document.querySelector('.header');
            header.style.display = header.style.display === 'none' ? 'block' : 'none';
        }
    });
    
    // Performans optimizasyonu için debounce
    function debounce(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }
    
    // Scroll event'ini optimize et
    const optimizedScrollHandler = debounce(function() {
        // Scroll işlemleri burada yapılabilir
    }, 16);
    
    window.addEventListener('scroll', optimizedScrollHandler);
    
    // Sayfa yüklendiğinde loading animasyonu
    setTimeout(() => {
        document.body.classList.add('loaded');
    }, 500);
});

// Tasarım önizleme için geçici stil değişiklikleri
function previewDesign(designNumber) {
    const currentDesign = document.querySelector('.design.active');
    const previewDesign = document.querySelector(`.design-${designNumber}`);
    
    if (currentDesign && previewDesign) {
        currentDesign.style.opacity = '0.3';
        previewDesign.style.opacity = '0.8';
        previewDesign.style.position = 'absolute';
        previewDesign.style.top = '0';
        previewDesign.style.left = '0';
        previewDesign.style.width = '100%';
        previewDesign.style.zIndex = '999';
    }
}

function clearPreview() {
    document.querySelectorAll('.design').forEach(design => {
        design.style.opacity = '1';
        design.style.position = 'relative';
        design.style.zIndex = 'auto';
    });
}

// Tasarım seçici butonlarına preview ekle
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.design-btn').forEach(btn => {
        btn.addEventListener('mouseenter', function() {
            const designNumber = this.getAttribute('data-design');
            previewDesign(designNumber);
        });
        
        btn.addEventListener('mouseleave', function() {
            clearPreview();
        });
    });
});
