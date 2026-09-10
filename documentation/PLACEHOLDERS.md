# Asset Placeholders & Replacement Guide

This document lists all placeholder assets currently wired into the Kuya Lito's Barbershop project and instructions for replacing them before final production submission.

---

## 1. Hero Background Video

- **Current Path:** `public/assets/video/hero-loop.mp4`
- **Fallback Poster:** `public/assets/images/hero-poster.svg`
- **Code Reference:** `resources/views/components/hero.blade.php`
- **Specification:**
  - Length: 10–15 seconds seamless loop
  - Encoding: H.264 / MP4 (web-optimized)
  - Audio: Muted track
  - Visual: Ambient barbershop footage — barber stropping a straight razor, clipping a clean fade, or steaming a hot towel with soft lighting.
  - Recommended AI generation prompts (via Runway Gen-3, Pika 2.0, or Sora):
    > *"Cinematic slow motion footage of a master barber lining up a classic gentleman haircut in a moody vintage barbershop, warm brass and dark mahogany tones, shallow depth of field, seamless looping video."*

---

## 2. Haircut Showcase Gallery (8 Images)

- **Current Paths:** `public/assets/images/gallery-1.svg` through `public/assets/images/gallery-8.svg`
- **Code Reference:** `resources/views/components/gallery-showcase.blade.php`
- **Recommended Asset Specifications:**
  - Dimensions: 800 x 600 px (4:3 aspect ratio), WebP or high-res JPG
  - Subject Matter:
    1. `gallery-1.jpg`: Low Taper Fade (crisp neckline)
    2. `gallery-2.jpg`: Classic Pompadour (styled with shine)
    3. `gallery-3.jpg`: Modern Textured Crop (blunt fringe)
    4. `gallery-4.jpg`: Straight Razor Hot Towel Shave
    5. `gallery-5.jpg`: Executive Side Part
    6. `gallery-6.jpg`: Buzz Cut with Razor Lineup
    7. `gallery-7.jpg`: Artisan Scissor-Over-Comb Quiff
    8. `gallery-8.jpg`: Beard Sculpting & Mustache Detailing

---

## 3. Customer Testimonial Avatars (4 Images)

- **Current Paths:** `public/assets/images/avatar-1.svg` through `public/assets/images/avatar-4.svg`
- **Code Reference:** `resources/views/components/testimonial-card.blade.php`
- **Recommended Asset Specifications:**
  - Dimensions: 400 x 400 px square, high-contrast portrait
  - Subject Matter: Real regular clients or clean portrait shots of gentlemen in casual or business-casual attire.

---

## 4. Google Maps Embed

- **Code Reference:** `resources/views/components/footer.blade.php`
- **Action:**
  - Obtain an embed iframe from Google Maps for the actual shop address in Santo Angel Norte, Santa Cruz, Laguna.
  - Paste the iframe inside the designated container in `resources/views/components/footer.blade.php`.
