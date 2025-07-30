# UMY Alumni Tracer - Laravel Web Application

## Deskripsi Project

Project ini adalah hasil **slicing** dari desain UI yang terdapat pada file `ui.jpg`. Website ini merupakan implementasi sistem Alumni Tracer untuk Universitas Muhammadiyah Yogyakarta (UMY) yang dibuat menggunakan framework Laravel dengan desain yang responsive dan modern.

## Sumber Desain

- **File Desain**: `ui.jpg`
- **Konsep**: Alumni Tracer System untuk UMY
- **Implementasi**: Laravel + Tailwind CSS

## Fitur yang Diimplementasikan

### 🎨 UI Components
- **Header Navigation** dengan logo UMY CDC dan menu navigasi
- **Hero Section** dengan judul utama dan gambar profil
- **Services Section** menampilkan Data Kuesioner dan CV Builder
- **Career Development Center** section dengan deskripsi lengkap
- **Statistics Section** dengan data visual yang menarik

### 📱 Responsive Design
- Mobile-first approach menggunakan Tailwind CSS
- Grid system yang fleksibel untuk berbagai ukuran layar
- Hover effects dan transisi yang smooth

### 🛠️ Technical Features
- **Framework**: Laravel 11.x
- **Styling**: Tailwind CSS (via CDN)
- **Architecture**: MVC Pattern
- **Database**: SQLite (default)
- **Images**: Unsplash API untuk placeholder images

## Struktur Project

```
├── app/Http/Controllers/HomeController.php  # Controller utama
├── resources/views/
│   ├── layouts/app.blade.php               # Layout template
│   └── home.blade.php                      # Halaman utama
├── routes/web.php                          # Route configuration
└── ui.jpg                                  # File desain asli
```

## Instalasi dan Menjalankan Project

### Prerequisites
- PHP >= 8.2
- Composer
- Node.js (optional)

### Langkah Instalasi

1. **Clone repository**
   ```bash
   git clone https://github.com/V60Code/winnership_program.git
   cd winnership_program
   ```

2. **Install dependencies**
   ```bash
   composer install
   ```

3. **Setup environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Jalankan migrasi database**
   ```bash
   php artisan migrate
   ```

5. **Jalankan development server**
   ```bash
   php artisan serve
   ```

6. **Akses aplikasi**
   Buka browser dan kunjungi: `http://localhost:8000`

## Implementasi Desain

### Perbandingan UI Original vs Implementation

| Komponen | Status | Keterangan |
|----------|--------|-----------|
| Header Navigation | ✅ | Fully implemented dengan logo UMY CDC |
| Hero Section | ✅ | Dengan gambar bulat/persegi dan floating elements |
| Services Cards | ✅ | Data Kuesioner dan CV Builder cards |
| CDC Section | ✅ | Career Development Center dengan gambar |
| Statistics | ✅ | 5 kategori statistik dengan progress bars |
| Responsive Design | ✅ | Mobile-first approach |

### Customizations Made
- Gambar menggunakan Unsplash untuk placeholder yang berkualitas
- Warna dan gradient disesuaikan dengan tema UMY
- Hover effects dan animasi untuk UX yang lebih baik
- Typography yang konsisten dan readable

## Best Practices yang Diterapkan

- ✅ **Clean Code**: Kode yang terstruktur dan mudah dibaca
- ✅ **MVC Architecture**: Pemisahan logic, view, dan data
- ✅ **Responsive Design**: Mobile-first approach
- ✅ **SEO Friendly**: Proper HTML structure dan meta tags
- ✅ **Performance**: Optimized CSS dan minimal dependencies
- ✅ **Maintainable**: Reusable components dan layouts

## Screenshots

### Desktop View
![Desktop View](ui.jpg)
*Desain original yang dijadikan referensi*

### Features Implemented
- Modern gradient backgrounds
- Card-based layout design
- Interactive hover effects
- Responsive grid system
- Clean typography

## Technology Stack

- **Backend**: Laravel 11.x
- **Frontend**: Blade Templates + Tailwind CSS
- **Database**: SQLite
- **Images**: Unsplash API
- **Icons**: Heroicons (SVG)

## Kontribusi

Project ini dibuat sebagai bagian dari tugas slicing UI design menjadi aplikasi web yang fungsional menggunakan Laravel framework.

## License

Project ini menggunakan [MIT License](https://opensource.org/licenses/MIT).

---

**Dibuat dengan ❤️ menggunakan Laravel & Tailwind CSS**

*Slicing dari ui.jpg - UMY Alumni Tracer System*
