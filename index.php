<?php
// Alt kategoriler için veriler
$categories = [
    'kadın' => [
        'Elbiseler' => ['Günlük Elbiseler', 'Gece Elbiseleri', 'Kokteyl Elbiseleri', 'Yazlık Elbiseler'],
        'Üst Giyim' => ['Bluzlar', 'Gömlekler', 'T-Shirtler', 'Kazaklar'],
        'Alt Giyim' => ['Pantolonlar', 'Etekler', 'Şortlar', 'Legginsler'],
        'Dış Giyim' => ['Ceketler', 'Montlar', 'Hırkalar', 'Blazerlar'],
        'Ayakkabı' => ['Topuklu', 'Spor Ayakkabı', 'Bot', 'Sandalet'],
        'Aksesuar' => ['Çantalar', 'Takılar', 'Şapkalar', 'Kemerler']
    ],
    'erkek' => [
        'Üst Giyim' => ['Gömlekler', 'T-Shirtler', 'Polo Yaka', 'Kazaklar'],
        'Alt Giyim' => ['Pantolonlar', 'Şortlar', 'Jean', 'Eşofman'],
        'Dış Giyim' => ['Ceketler', 'Montlar', 'Hırkalar', 'Blazerlar'],
        'Ayakkabı' => ['Spor Ayakkabı', 'Klasik', 'Bot', 'Sandalet'],
        'Aksesuar' => ['Çantalar', 'Saatler', 'Şapkalar', 'Kemerler'],
        'İç Giyim' => ['Boxer', 'Atlet', 'Çorap', 'Pijama']
    ]
];

// Ürün verileri
$products = [
    [
        'id' => 1,
        'image' => 'https://images.unsplash.com/photo-1441986300917-64674bd600d8?w=400&h=500&fit=crop',
        'brand' => 'ZARA',
        'name' => 'Çiçekli Yaz Elbisesi',
        'old_price' => 899,
        'new_price' => 674,
        'discount' => 25,
        'category' => 'kadın'
    ],
    [
        'id' => 2,
        'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=500&fit=crop',
        'brand' => 'COS',
        'name' => 'Premium Pamuk Gömlek',
        'old_price' => 650,
        'new_price' => 455,
        'discount' => 30,
        'category' => 'erkek'
    ],
    [
        'id' => 3,
        'image' => 'https://images.unsplash.com/photo-1434389677669-e08b4cac3105?w=400&h=500&fit=crop',
        'brand' => 'MASSIMO DUTTI',
        'name' => 'İpek Bluz',
        'old_price' => 750,
        'new_price' => 600,
        'discount' => 20,
        'category' => 'kadın'
    ],
    [
        'id' => 4,
        'image' => 'https://images.unsplash.com/photo-1441984904996-e0b6ba687e04?w=400&h=500&fit=crop',
        'brand' => 'UNIQLO',
        'name' => 'Slim Fit Pantolon',
        'old_price' => 450,
        'new_price' => 382,
        'discount' => 15,
        'category' => 'erkek'
    ],
    [
        'id' => 5,
        'image' => 'https://images.unsplash.com/photo-1495385794356-15371f348c31?w=400&h=500&fit=crop',
        'brand' => 'H&M',
        'name' => 'Blazer Ceket',
        'old_price' => 1200,
        'new_price' => 720,
        'discount' => 40,
        'category' => 'kadın'
    ],
    [
        'id' => 6,
        'image' => 'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=400&h=500&fit=crop',
        'brand' => 'TOMMY HILFIGER',
        'name' => 'Spor Ceket',
        'old_price' => 1800,
        'new_price' => 1170,
        'discount' => 35,
        'category' => 'erkek'
    ],
    [
        'id' => 7,
        'image' => 'https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=400&h=500&fit=crop',
        'brand' => 'MANGO',
        'name' => 'Yüksek Bel Pantolon',
        'old_price' => 550,
        'new_price' => 412,
        'discount' => 25,
        'category' => 'kadın'
    ],
    [
        'id' => 8,
        'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=500&fit=crop',
        'brand' => 'NIKE',
        'name' => 'Oversize Sweatshirt',
        'old_price' => 400,
        'new_price' => 320,
        'discount' => 20,
        'category' => 'erkek'
    ]
];

// Seçili kategori (URL parametresinden)
$selectedCategory = $_GET['category'] ?? 'all';
$selectedSubCategory = $_GET['subcategory'] ?? null;

// Ürünleri filtrele
if ($selectedCategory !== 'all') {
    $products = array_filter($products, function($product) use ($selectedCategory) {
        return $product['category'] === $selectedCategory;
    });
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELEGANCE - Butik Moda</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Open+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Dropdown Menu Styles */
        .nav {
            position: relative;
        }
        
        .dropdown {
            position: relative;
            display: inline-block;
        }
        
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            min-width: 280px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
            z-index: 1000;
            border-radius: 8px;
            padding: 20px;
            top: 100%;
            left: 50%;
            transform: translateX(-50%);
            margin-top: 10px;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }
        
        .dropdown-content.show {
            display: block;
            opacity: 1;
            visibility: visible;
            transform: translateX(-50%) translateY(0);
        }
        
        .dropdown:hover .dropdown-content {
            display: block;
            opacity: 1;
            visibility: visible;
            transform: translateX(-50%) translateY(0);
        }
        
        .dropdown-content::before {
            content: '';
            position: absolute;
            top: -8px;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 0;
            border-left: 8px solid transparent;
            border-right: 8px solid transparent;
            border-bottom: 8px solid white;
        }
        
        .dropdown-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }
        
        .dropdown-category {
            margin-bottom: 15px;
        }
        
        .dropdown-category h4 {
            font-family: 'Montserrat', sans-serif;
            font-size: 14px;
            font-weight: 600;
            color: #333;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .dropdown-category ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .dropdown-category li {
            margin-bottom: 8px;
        }
        
        .dropdown-category a {
            text-decoration: none;
            color: #666;
            font-size: 13px;
            font-weight: 400;
            transition: all 0.3s ease;
            display: block;
            padding: 4px 0;
        }
        
        .dropdown-category a:hover {
            color: #333;
            padding-left: 8px;
        }
        
        .nav-link.has-dropdown {
            position: relative;
        }
        
        .nav-link.has-dropdown::after {
            content: '\f078';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            margin-left: 8px;
            font-size: 12px;
            transition: transform 0.3s ease;
        }
        
        .dropdown:hover .nav-link.has-dropdown::after {
            transform: rotate(180deg);
        }
        
        /* Mobile Responsive */
        @media (max-width: 768px) {
            .dropdown-content {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100vh;
                background: white;
                padding: 80px 20px 20px;
                border-radius: 0;
                transform: translateX(0);
                overflow-y: auto;
            }
            
            .dropdown-grid {
                grid-template-columns: 1fr;
                gap: 25px;
            }
            
            .mobile-close {
                position: absolute;
                top: 20px;
                right: 20px;
                background: none;
                border: none;
                font-size: 24px;
                color: #333;
                cursor: pointer;
            }
        }
        
        /* Loading Animation */
        .loading {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid #f3f3f3;
            border-top: 3px solid #333;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        /* Category Filter Pills */
        .category-filter {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin: 30px 0;
            flex-wrap: wrap;
        }
        
        .filter-pill {
            padding: 8px 20px;
            background: #f0f0f0;
            border: none;
            border-radius: 25px;
            font-family: 'Montserrat', sans-serif;
            font-size: 14px;
            font-weight: 500;
            color: #666;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        
        .filter-pill.active,
        .filter-pill:hover {
            background: #333;
            color: white;
        }
    </style>
</head>
<body>
    <div class="design design-1 active">
        <header class="header">
            <div class="container">
                <div class="logo">
                    <h1>ELEGANCE</h1>
                    <span>Butik Moda</span>
                </div>
                <nav class="nav">
                    <a href="?category=all" class="nav-link <?= $selectedCategory === 'all' ? 'active' : '' ?>">En Yeniler</a>
                    
                    <div class="dropdown">
                        <a href="?category=kadın" class="nav-link has-dropdown <?= $selectedCategory === 'kadın' ? 'active' : '' ?>">Kadın</a>
                        <div class="dropdown-content">
                            <button class="mobile-close" onclick="closeDropdown(this)">&times;</button>
                            <div class="dropdown-grid">
                                <?php foreach ($categories['kadın'] as $categoryName => $subcategories): ?>
                                <div class="dropdown-category">
                                    <h4><?= $categoryName ?></h4>
                                    <ul>
                                        <?php foreach ($subcategories as $subcategory): ?>
                                        <li><a href="?category=kadın&subcategory=<?= urlencode($subcategory) ?>"><?= $subcategory ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="dropdown">
                        <a href="?category=erkek" class="nav-link has-dropdown <?= $selectedCategory === 'erkek' ? 'active' : '' ?>">Erkek</a>
                        <div class="dropdown-content">
                            <button class="mobile-close" onclick="closeDropdown(this)">&times;</button>
                            <div class="dropdown-grid">
                                <?php foreach ($categories['erkek'] as $categoryName => $subcategories): ?>
                                <div class="dropdown-category">
                                    <h4><?= $categoryName ?></h4>
                                    <ul>
                                        <?php foreach ($subcategories as $subcategory): ?>
                                        <li><a href="?category=erkek&subcategory=<?= urlencode($subcategory) ?>"><?= $subcategory ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    
                    <a href="#" class="nav-link">Koleksiyon</a>
                </nav>
                <div class="header-actions">
                    <button class="search-btn"><i class="fas fa-search"></i></button>
                    <button class="cart-btn"><i class="fas fa-shopping-bag"></i></button>
                </div>
            </div>
        </header>

        <main class="main">
            <div class="container">
                <div class="page-header">
                    <h2><?= $selectedCategory === 'all' ? 'En Yeniler' : ucfirst($selectedCategory) . ' Koleksiyonu' ?></h2>
                    <p><?= $selectedSubCategory ? $selectedSubCategory . ' - ' : '' ?>Bu sezonun en trend parçaları</p>
                </div>

                <!-- Category Filter Pills -->
                <div class="category-filter">
                    <a href="?category=all" class="filter-pill <?= $selectedCategory === 'all' ? 'active' : '' ?>">Tümü</a>
                    <a href="?category=kadın" class="filter-pill <?= $selectedCategory === 'kadın' ? 'active' : '' ?>">Kadın</a>
                    <a href="?category=erkek" class="filter-pill <?= $selectedCategory === 'erkek' ? 'active' : '' ?>">Erkek</a>
                </div>

                <div class="products-grid" id="products-grid">
                    <?php if (empty($products)): ?>
                    <div style="grid-column: 1 / -1; text-align: center; padding: 60px 20px;">
                        <h3>Bu kategoride henüz ürün bulunmuyor.</h3>
                        <p>Yakında yeni ürünler eklenecek!</p>
                    </div>
                    <?php else: ?>
                    <?php foreach ($products as $product): ?>
                    <div class="product-card" data-category="<?= $product['category'] ?>">
                        <div class="product-image">
                            <img src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>" loading="lazy">
                            <div class="discount-badge">%<?= $product['discount'] ?></div>
                        </div>
                        <div class="product-info">
                            <div class="brand"><?= $product['brand'] ?></div>
                            <h3 class="product-name"><?= $product['name'] ?></h3>
                            <div class="price">
                                <span class="old-price">₺<?= number_format($product['old_price'], 0, ',', '.') ?></span>
                                <span class="new-price">₺<?= number_format($product['new_price'], 0, ',', '.') ?></span>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </main>

        <footer class="footer">
            <div class="container">
                <div class="footer-content">
                    <div class="footer-section">
                        <div class="footer-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4>Güvenli Alışveriş</h4>
                        <p>SSL sertifikası ile korunan ödeme</p>
                    </div>
                    <div class="footer-section">
                        <div class="footer-icon">
                            <i class="fas fa-truck"></i>
                        </div>
                        <h4>Hızlı Teslimat</h4>
                        <p>24 saat içinde kargoda</p>
                    </div>
                    <div class="footer-section">
                        <div class="footer-icon">
                            <i class="fas fa-undo"></i>
                        </div>
                        <h4>Kolay İade</h4>
                        <p>30 gün içinde ücretsiz iade</p>
                    </div>
                    <div class="footer-section">
                        <div class="footer-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h4>Müşteri Memnuniyeti</h4>
                        <p>%99 memnuniyet oranı</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script>
        // Dropdown menu functionality
        function closeDropdown(button) {
            const dropdown = button.closest('.dropdown-content');
            dropdown.classList.remove('show');
        }

        // Mobile dropdown handling
        document.addEventListener('DOMContentLoaded', function() {
            const dropdowns = document.querySelectorAll('.dropdown');
            
            dropdowns.forEach(dropdown => {
                const link = dropdown.querySelector('.nav-link');
                const content = dropdown.querySelector('.dropdown-content');
                
                // Mobile click handling
                if (window.innerWidth <= 768) {
                    link.addEventListener('click', function(e) {
                        e.preventDefault();
                        content.classList.toggle('show');
                    });
                }
                
                // Close dropdown when clicking outside
                document.addEventListener('click', function(e) {
                    if (!dropdown.contains(e.target)) {
                        content.classList.remove('show');
                    }
                });
            });
            
            // Product card click handling
            document.querySelectorAll('.product-card').forEach(card => {
                card.addEventListener('click', function() {
                    const productName = this.querySelector('.product-name').textContent;
                    console.log('Ürün tıklandı:', productName);
                    
                    // Add click animation
                    this.style.transform = 'scale(0.98)';
                    setTimeout(() => {
                        this.style.transform = 'scale(1)';
                    }, 150);
                });
            });
            
            // Search functionality
            document.querySelector('.search-btn').addEventListener('click', function() {
                const searchTerm = prompt('Arama yapmak istediğiniz ürünü yazın:');
                if (searchTerm) {
                    window.location.href = `?search=${encodeURIComponent(searchTerm)}`;
                }
            });
            
            // Cart functionality
            document.querySelector('.cart-btn').addEventListener('click', function() {
                alert('Sepet özelliği yakında eklenecek!');
            });
            
            // Smooth scroll
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
            
            // Loading animation for page transitions
            document.body.classList.add('loaded');
            
            // Add lazy loading for images
            if ('IntersectionObserver' in window) {
                const imageObserver = new IntersectionObserver((entries, observer) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const img = entry.target;
                            if (img.dataset.src) {
                                img.src = img.dataset.src;
                                img.classList.remove('lazy');
                                imageObserver.unobserve(img);
                            }
                        }
                    });
                });
                
                document.querySelectorAll('img[data-src]').forEach(img => {
                    imageObserver.observe(img);
                });
            }
        });
        
        // Responsive menu handling
        window.addEventListener('resize', function() {
            const dropdowns = document.querySelectorAll('.dropdown-content');
            dropdowns.forEach(dropdown => {
                dropdown.classList.remove('show');
            });
        });
    </script>
</body>
</html>
