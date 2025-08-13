# 🛍️ Butik Moda E-Ticaret Tasarım Demo

Modern, minimal ve şık e-ticaret "En Yeniler" sayfası için 5 farklı tasarım seçeneği sunan interaktif demo projesi.

## ✨ Özellikler

### 🎨 5 Farklı Tasarım
1. **Minimal Elegance** - Beyaz/soft bej zemin, temiz çizgiler
2. **Modern Luxury** - Koyu mavi tonlar, premium hissiyat
3. **Scandinavian Minimal** - Açık renkler, minimal yaklaşım
4. **Artisan Craft** - Kahverengi tonlar, el işi hissi
5. **Urban Chic** - Şehir tarzı, modern görünüm

### 📱 Responsive Tasarım
- **Desktop**: 4 sütunlu grid
- **Tablet**: 3 sütunlu grid
- **Mobile**: 2 sütunlu grid (768px altı)
- **Küçük Mobile**: Tek sütun (480px altı)

### 🎯 Ürün Kartları
- Büyük ürün görselleri
- Marka + ürün adı
- Eski fiyat (üstü çizili)
- İndirimli fiyat
- Köşede yüzde indirim rozeti
- Hover efektleri (görsel büyüme, gölge)

### 🎭 İnteraktif Özellikler
- Tasarım değiştirme butonları
- Hover önizleme efektleri
- Smooth animasyonlar
- Klavye kısayolları (1-5 tuşları)
- Local storage ile tasarım hatırlama

## 🚀 Kurulum

1. Projeyi klonlayın:
```bash
git clone [repository-url]
cd butik-moda-demo
```

2. Dosyaları web sunucusunda çalıştırın veya doğrudan `index.html` dosyasını tarayıcıda açın.

## 📁 Dosya Yapısı

```
butik-moda-demo/
├── index.html          # Ana HTML dosyası
├── styles.css          # CSS stilleri
├── script.js           # JavaScript fonksiyonları
└── README.md           # Bu dosya
```

## 🎨 Tasarım Detayları

### Renk Paleti
- **Metin**: #333 (koyu gri)
- **İndirim Fiyatı**: #E63946 (kırmızı) / #1D3557 (koyu mavi)
- **İndirim Rozeti**: #FFB703 (altın sarısı)
- **Zemin**: Beyaz/soft bej tonları

### Fontlar
- **Başlıklar**: Montserrat (300-700 weight)
- **Metin**: Open Sans (300-600 weight)

### Layout
- **Grid**: CSS Grid ile responsive düzen
- **Spacing**: Tutarlı padding ve margin değerleri
- **Shadows**: Subtle gölge efektleri
- **Transitions**: Smooth hover animasyonları

## 🎮 Kullanım

### Tasarım Değiştirme
- Sağ üst köşedeki tasarım seçici butonlarını kullanın
- 1-5 tuşları ile hızlı geçiş yapın
- Hover ile tasarım önizlemesi görün

### Klavye Kısayolları
- **1-5**: Tasarım değiştirme
- **ESC**: Tasarım seçiciyi gizleme
- **H**: Header'ı gizleme/gösterme

### Responsive Test
- Tarayıcı geliştirici araçlarını kullanarak farklı ekran boyutlarını test edin
- Mobile-first yaklaşım ile optimize edilmiştir

## 🔧 Özelleştirme

### Yeni Tasarım Ekleme
1. HTML'de yeni tasarım div'i oluşturun
2. CSS'de `.design-X` class'ı ekleyin
3. JavaScript'te tasarım değiştirme fonksiyonunu güncelleyin

### Renk Değişiklikleri
CSS'deki CSS variables'ları güncelleyerek tüm tasarımlarda renk değişikliği yapabilirsiniz.

### Ürün Ekleme
HTML'deki `products-grid` içine yeni `product-card` elementleri ekleyin.

## 📱 Browser Desteği

- ✅ Chrome (90+)
- ✅ Firefox (88+)
- ✅ Safari (14+)
- ✅ Edge (90+)
- ✅ Mobile browsers

## 🎯 Gelecek Özellikler

- [ ] Ürün filtreleme
- [ ] Arama fonksiyonu
- [ ] Sepet işlevselliği
- [ ] Ürün detay sayfaları
- [ ] Kullanıcı hesapları
- [ ] Ödeme entegrasyonu

## 🤝 Katkıda Bulunma

1. Fork yapın
2. Feature branch oluşturun (`git checkout -b feature/amazing-feature`)
3. Commit yapın (`git commit -m 'Add amazing feature'`)
4. Push yapın (`git push origin feature/amazing-feature`)
5. Pull Request oluşturun

## 📄 Lisans

Bu proje MIT lisansı altında lisanslanmıştır.

## 📞 İletişim

Proje hakkında sorularınız için issue açabilir veya pull request gönderebilirsiniz.

---

**Not**: Bu proje demo amaçlı oluşturulmuştur. Gerçek e-ticaret uygulaması için ek güvenlik, performans ve işlevsellik özellikleri eklenmelidir.
