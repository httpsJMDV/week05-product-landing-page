# Architecture & Design System — Kuya Lito's Barbershop

This document details the architectural decisions, design tokens, and component structure for the "Kuya Lito's Barbershop" web application.

---

## 1. Technical Stack

- **Framework:** Laravel 13 (PHP 8.5)
- **Templating:** Pure Laravel Blade Components (`x-component-name` syntax)
- **Styling:** Tailwind CSS v4 with custom theme tokens and CSS variables
- **Reactivity & Interactivity:** Alpine.js v3
- **Scroll Triggered Motion:** AOS (Animate On Scroll)
- **Timeline & Load Motion:** GSAP (GreenSock Animation Platform)
- **Bundler:** Vite 8 via `laravel-vite-plugin`

---

## 2. Brand Color Palette & Contrast Tokens

| Token | Hex | Role | Contrast Ratio |
|---|---|---|---|
| `--color-maroon` | `#7A1F2B` | Primary brand color, primary CTA, badges | 7.6:1 against `#F5F0E8` (WCAG AAA) |
| `--color-charcoal` | `#1C1917` | Secondary dark background, hero surface | 15.2:1 against `#F5F0E8` (WCAG AAA) |
| `--color-gold` | `#C9A227` | Warm brass accent, icons, borders, highlights | 6.8:1 against `#1C1917` (WCAG AA) |
| `--color-cream` | `#F5F0E8` | Light canvas background, surface cards | Base light surface |

### Barber Pole Motif
The signature animated barber-pole stripe is implemented via pure CSS repeating linear gradients with keyframe scroll animation (`.barber-pole-stripe` and `.barber-pole-stripe-gold`). It automatically obeys `prefers-reduced-motion: reduce`.

---

## 3. Blade Component Registry

| Component | Path | Function & Responsibility |
|---|---|---|
| `app` | `layouts/app.blade.php` | HTML5 shell, Google Fonts, Vite assets, top barber stripe, navigation slot, footer slot |
| `button` | `components/button.blade.php` | Reusable button / anchor with `primary`, `secondary`, `gold`, `ghost`, `ghost-light` variants |
| `badge` | `components/badge.blade.php` | Pill badges for tags like "Most Booked", "Manila", "Verified" |
| `section-heading` | `components/section-heading.blade.php` | Eyebrow line, Playfair Display heading, body subtext, and barber accent mark |
| `navbar` | `components/navbar.blade.php` | Sticky shrink-on-scroll header, Alpine.js mobile drawer, member login & book CTA |
| `hero` | `components/hero.blade.php` | Looping muted video background with poster fallback, GSAP staggered headline reveal |
| `feature-card` | `components/feature-card.blade.php` | 6 service cards with gold border glow on hover, lift transforms, and AOS scroll reveals |
| `gallery-showcase` | `components/gallery-showcase.blade.php` | Haircut grid, interactive Alpine booking concierge mock, smartphone frame mockup, stat counters |
| `pricing-card` | `components/pricing-card.blade.php` | 3 service packages, elevated middle card with gold border and "Most Booked" badge |
| `testimonial-card` | `components/testimonial-card.blade.php` | Alpine.js auto-rotating carousel, avatar badges, star ratings, dot indicators, prev/next buttons |
| `cta-section` | `components/cta-section.blade.php` | Full-width maroon/charcoal band, animated gold barber pole border, Facebook and phone links |
| `footer` | `components/footer.blade.php` | Shop history, quick links, social channels, barangay address, operating hours, map placeholder |
