# Kuya Lito's Barbershop

> Classic barbershop craftsmanship meets modern, premium grooming lounge.

A boutique barbershop digital experience built with **Laravel 13**, **Blade Components**, **Tailwind CSS v4**, **Alpine.js**, **AOS**, and **GSAP**.

---

## Brand Identity & Personality
- **Primary Color:** Deep Maroon/Burgundy `#7A1F2B`
- **Secondary Color:** Charcoal/Near-Black `#1C1917`
- **Accent Color:** Warm Gold/Brass `#C9A227`
- **Surface Light:** Cream/Off-White `#F5F0E8`
- **Typography:** Playfair Display (Headings), Bebas Neue (Display tags), Inter (Body)
- **Motifs:** Animated barber pole stripes, wood/leather textures, precision line-art icons

---

## Tech Stack & Architecture
- **Pure Blade Components:** Located in `resources/views/components/`
- **Master Layout:** `resources/views/layouts/app.blade.php`
- **Landing Page:** `resources/views/pages/home.blade.php`
- **Interactivity:** Alpine.js (sticky shrink navbar, mobile drawer, interactive booking preview, testimonial carousel)
- **Scroll Animations:** AOS (Animate On Scroll)
- **Hero Reveal:** GSAP word-by-word stagger timeline
- **Accessibility:** Tested for WCAG AA compliance

---

## Getting Started

### 1. Requirements
- PHP 8.3+
- Composer 2.x
- Node.js 20+ and npm

### 2. Installation
```bash
# Clone the repository and navigate into the folder
cd basta_barber

# Install PHP dependencies
composer install

# Install NPM dependencies
npm install

# Build frontend assets
npm run build
```

### 3. Running the Development Server
Run the Laravel application and Vite development server:
```bash
# Terminal 1: Laravel Backend
php artisan serve

# Terminal 2: Vite Hot Reload
npm run dev
```
Open your browser and navigate to `http://127.0.0.1:8000`.

---

## Documentation
- [Architecture & Components Reference](documentation/ARCHITECTURE.md)
- [Asset Placeholders & Replacement Guide](documentation/PLACEHOLDERS.md)
- [Business Verification Checklist](documentation/BUSINESS_VERIFICATION.md)
